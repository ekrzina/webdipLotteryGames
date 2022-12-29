<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "PridruziM";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}
$veza = new Baza();
$veza->spojiDB();

//dohvati id
$nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
$result = $veza->selectDB($nup);
$rezz = mysqli_fetch_row($result);

if (isset($_POST['submit'])) {

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    //dodaj lutriji
    $up = "INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES ('" . $_POST['igra'] . "', '" . $_POST['lutrija'] . "')";
    $veza->updateDB($up);

    $trenutnoVrijeme = date('Y-m-d H:i:s');
    $virtualka = new Virtualno();
    $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
    $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

    $text = $vri . "/Korisnik " . Sesija::dajKorisnika() . " igru " . $_POST['igra'] . " pridružuje lutriji " . $_POST['lutrija'] . "./Upit: " . $up . "/Tip radnje: 2";
    $dnevnik->spremiDnevnik($text);

    $dnev = explode("/", $text);

    $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $up . '", "' . $rezz[0] . '", "2")';

    $veza->updateDB($dnUpit);

    $veza->zatvoriDB();
    header("Location:popisIgara.php");
    exit();
}
$veza->zatvoriDB();

$smarty->assign("idKor", $rezz[0]);
$smarty->display("pridruziIgruM.tpl");
$smarty->display("podnozje.tpl");

