<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Zaboravljena lozinka";
include '../zaglavlje.php';

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

$kod = "";

$znakovi = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",
    "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

for ($i = 0; $i < 12; $i++) {
    $generirano = rand(0, count($znakovi));
    $kod .= $znakovi[$generirano];
}

//dohvacanje maila

$veza = new Baza();
$veza->spojiDB();
$upit = "SELECT email FROM Korisnik WHERE korisnickoIme = '" . $_GET['korisnickoIme'] . "'";
$rezultat = $veza->selectDB($upit);
$podatak = mysqli_fetch_array($rezultat);
$email = $podatak[0];

if (isset($upit)) {

//mijenjanje lozinke
    $kodHash = $kod . substr($_GET['korisnickoIme'], 0, 3);
    ;
    $up = "UPDATE Korisnik SET lozinkaSha256= '" . hash('sha256', $kodHash) . "', lozinka = '" . $kod . "' WHERE korisnickoIme = '" . $_GET['korisnickoIme'] . "'";
    $veza->updateDB($up);
//dnevnik

    $trenutniDatum = date("Y-m-d H:i:s");
    $virtualka = new Virtualno();
    $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
    $vri = $virtualka->postaviVrijeme($trenutniDatum);

    $stringDnevnik = $vri . "/Korisnik " . $_GET['korisnickoIme'] . " mijenja lozinku./Upit: " . $up . "/Tip radnje: 2";
    $dnevnik->spremiDnevnik($stringDnevnik);

    $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_GET['korisnickoIme'] . "'";
    $result = $veza->selectDB($nup);
    $rezz = mysqli_fetch_row($result);

    $dnev = explode("/", $stringDnevnik);

    $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $up . '", "' . $rezz[0] . '", "2")';

    $veza->updateDB($dnUpit);
}

$veza->zatvoriDB();
mail($email, "Nova lozinka", $kod);

$smarty->display("zaboravljenaLozinka.tpl");
$smarty->display("podnozje.tpl");

