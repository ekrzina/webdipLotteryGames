<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Isplata zahtjeva M";
include '../zaglavlje.php';

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

if (isset($_GET['idZahtjev'])) {

    $id = $_GET['idZahtjev'];
    $idList = $_GET['idListic'];

    $veza = new Baza();
    $veza->spojiDB();

    $up = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
    $rez = $veza->selectDB($up);
    $rezultat = mysqli_fetch_row($rez);
    $idKor = $rezultat[0];

    $trenutniDatum = date("Y-m-d H:i:s");
    $virtualka = new Virtualno();
    $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
    $vri = $virtualka->postaviVrijeme($trenutniDatum);

    //update zahtjev
    $upit = "UPDATE ZahtjevZaIsplatom SET potvrdeno = '" . $vri . "', Korisnik_idKorisnik = " . $idKor . " WHERE idZahtjevZaIsplatom = " . $id;
    $veza->updateDB($upit);

    //rad s dnevnikom
    $tekst = $vri . "/Korisnik " . Sesija::dajKorisnika() . " potvrđuje zahtjev za isplatom./Upit: " . $upit . "/Tip radnje: 2";
    $dnevnik->spremiDnevnik($tekst);

    $dnev = explode("/", $tekst);
    $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $idKor . '", "2")';
    $veza->updateDB($dnUpit);

    //update listic

    $upo = "UPDATE Listic SET StatusListica_idStatusListica = 3 WHERE idListic = " . $idList;
    $veza->updateDB($upo);

    $veza->zatvoriDB();
    header("Location:zahtjeviZaIsplatu.php");
    exit();
}