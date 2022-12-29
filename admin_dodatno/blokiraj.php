<?php

//tablica listića i mogućnost ažuriranja istih 
//kod ažuriranja prebacuje se na stranicu zaigrajAzuriraj, sve uz $_GET
//preko smartyja varijable poprimaju get vrijednosti 
//nakon ažuriranja (na pritisak tipke ažuriraj, kod se ažurira i prebacimo se natrag na mojiListici)

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Blokiraj";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 4) {
    header("Location: ../obrasci/prijava.php");
    exit();
}
$id = $_GET['idKorisnik'];

$veza = new Baza();
$veza->spojiDB();

$upit = "UPDATE Korisnik SET StatusKorisnika = 1 WHERE idKorisnik = " . $id;
$veza->updateDB($upit);

//dnevnik
$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

$trenutnoVrijeme = date('Y-m-d H:i:s');
$virtualka = new Virtualno();
$virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
$vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

$stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " blokira korisnika " . $id . "./Upit: " . $upit . "/Tip radnje: 2";
$dnevnik->spremiDnevnik($stringDnevnik);

$nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
$result = $veza->selectDB($nup);
$rezz = mysqli_fetch_row($result);

$dnev = explode("/", $stringDnevnik);

$dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
        . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

$veza->updateDB($dnUpit);

$veza->zatvoriDB();

header("Location: popisKorisnika.php");
exit();
