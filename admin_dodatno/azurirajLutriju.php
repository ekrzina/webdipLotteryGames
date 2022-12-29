<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Nova lutrija";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 4) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$id = $_GET['idLutrija'];

if (isset($_POST['submit'])) {
    $veza = new Baza();
    $veza->spojiDB();

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    //definiranje nove lutrije

    $up = "UPDATE Lutrija SET nazivLutrije = '" . $_POST['naziv'] . "', infoTelefon = '" . $_POST['telefon'] . "', email = '" . $_POST['email'] . "', webAdresa = '" . $_POST['web'] . "' WHERE idLutrija = '" . $id . "'";
    $veza->updateDB($up);

    $trenutnoVrijeme = date('Y-m-d H:i:s');
    $virtualka = new Virtualno();
    $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
    $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

    $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " mijenja podatke lutrije " . $_POST['naziv'] . "./Upit: " . $up . "/Tip radnje: 2";
    $dnevnik->spremiDnevnik($stringDnevnik);

    $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
    $result = $veza->selectDB($nup);
    $rezz = mysqli_fetch_row($result);

    $dnev = explode("/", $stringDnevnik);

    $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $up . '", "' . $rezz[0] . '", "2")';

    $veza->updateDB($dnUpit);

    $veza->zatvoriDB();
    header("Location: lutrije.php");
    exit();
}

$smarty->display("azurirajLutriju.tpl");
$smarty->display("podnozje.tpl");

