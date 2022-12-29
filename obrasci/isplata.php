<?php

//relativna putanja do source filea
//cwd bi vratio obrazac (gdje nema klase)
//dirname parent directory child
$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Isplata";
include '../zaglavlje.php';

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

$isplata = $_GET['iznosIsplate'];

$smarty->assign("iznos", $isplata);

if (isset($_POST['submit'])) {
    //upisi u zahtjev za isplatu
    $veza = new Baza();
    $veza->spojiDB();

    //mozda buduca provjera dal vec poszoji zahtjev u bazi
    //upit za INSERT
    $upit = "INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES ('" . $isplata . "', null, '" . $_GET['idListic'] . "', null)";
    $veza->updateDB($upit);

    $trenutniDatum = date("Y-m-d H:i:s");
    $virtualka = new Virtualno();
    $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
    $vri = $virtualka->postaviVrijeme($trenutniDatum);

    $tekst = $vri . "/Korisnik " . $_SESSION['korisnik'] . " šalje zahtjev za isplatom./Upit: " . $upit . "/Tip radnje: 2";
    $dnevnik->spremiDnevnik($tekst);

    $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
    $result = $veza->selectDB($nup);
    $rezz = mysqli_fetch_row($result);

    $dnev = explode("/", $tekst);

    $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

    $veza->updateDB($dnUpit);

    header("Location:../korisnik_dodatno/mojiListici.php");
    exit();
    $veza->zatvoriDB();
}

$smarty->display("isplata.tpl");
$smarty->display("podnozje.tpl");
