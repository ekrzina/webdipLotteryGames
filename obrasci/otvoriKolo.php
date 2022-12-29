<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Otvori kolo";
include '../zaglavlje.php';

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$veza = new Baza();
$veza->spojiDB();

$greska = false;

$idKolo = $_GET['idKolo'];
$idIgra = $_GET['idIgra'];

//dohvati broj kola koja su otvorena za tu igru
$up = "SELECT COUNT(idKolo) FROM Kolo WHERE IgraNaSrecu_idIgraNaSrecu = '" . $idIgra . "' AND statusKola = 1;";

$rezultat = $veza->selectDB($up);
$rez = mysqli_fetch_row($rezultat);
$otvoreno = $rez[0];

//ako ni jedno drugo kolo ove igre nije otvoreno
if ($otvoreno == "0") {
    //otvori kolo

    $upit = "UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = '" . $idKolo . "'";
    $veza->updateDB($upit);

    //dnevnik

    $trenutniDatum = date("Y-m-d H:i:s");
    $virtualka = new Virtualno();
    $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
    $vri = $virtualka->postaviVrijeme($trenutniDatum);

    $string = $vri . "/Korisnik " . $_SESSION['korisnik'] . " otvara kolo " . $idKolo . "./Upit: " . $upit . "Tip radnje: 2";
    $dnevnik->spremiDnevnik($string);

    $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
    $result = $veza->selectDB($nup);
    $rezz = mysqli_fetch_row($result);

    $dnev = explode("/", $string);

    $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

    $veza->updateDB($dnUpit);

    $veza->zatvoriDB();
    header("Location: popisKola.php");
    exit();
} else {
    //inače prikaži prozor
    $veza->zatvoriDB();
    $smarty->display("otvoriKolo.tpl");
    $smarty->display("podnozje.tpl");
}

