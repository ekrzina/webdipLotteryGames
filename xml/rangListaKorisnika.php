<?php

//dohvati korisničko ime, dobitak u kn, kad osvojio

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

if (($_POST['datumOd'] != "") && ($_POST['datumDo'] != "")) {

    $datumOd = $_POST['datumOd'] . " 00:00:00";
    $datumDo = $_POST['datumDo'] . " 00:00:00";

    $upit = "SELECT Korisnik_idKorisnik, SUM(osvojeniIznos), korisnickoIme FROM Listic JOIN Korisnik ON Korisnik_idKorisnik=idKorisnik WHERE DATE(datumUpload) > '" . $datumOd . "' AND DATE(datumUpload) < '" . $datumDo . "' AND osvojeniIznos > 0 GROUP BY Korisnik_idKorisnik ORDER BY SUM(osvojeniIznos) DESC";
} else {
    $upit = "SELECT Korisnik_idKorisnik, SUM(osvojeniIznos), korisnickoIme FROM Listic JOIN Korisnik ON Korisnik_idKorisnik=idKorisnik WHERE osvojeniIznos > 0 GROUP BY Korisnik_idKorisnik ORDER BY SUM(osvojeniIznos) DESC";
}
$rezultat = $veza->selectDB($upit);
//sva korimena svih korisnika

$polje = array();

header("Content-Type:text/xml");
$dom = new DOMDocument('1.0', 'UTF-8');
//ljepse formatiranje
$dom->formatOutput = true;

while ($getter = mysqli_fetch_array($rezultat)) {
    array_push($polje, $getter);
}

$veza->zatvoriDB();

$root = $dom->createElement('korisnici');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $korisnik = $dom->createElement('korisnik');
    $root->appendChild($korisnik);
    $korisnik->appendChild($dom->createElement('korisnickoIme', $polje[$i][2]));
    $korisnik->appendChild($dom->createElement('osvojeniIznos', $polje[$i][1]));
}

echo $dom->saveXML();
