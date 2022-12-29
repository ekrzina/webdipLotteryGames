<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT korisnickoIme FROM Korisnik";
$rezultat = $veza->selectDB($upit);
//sva korimena svih korisnika

$polje = array();

while ($getter = mysqli_fetch_array($rezultat)) {
    array_push($polje, $getter[0]);
}

$veza->zatvoriDB();

header("Content-Type:text/xml");
$dom = new DOMDocument('1.0', 'UTF-8');
//ljepse formatiranje
$dom->formatOutput = true;

$root = $dom->createElement('korisnici');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $korisnik = $dom->createElement('korisnik');
    $root->appendChild($korisnik);
    $korisnik->appendChild($dom->createElement('korisnickoIme', $polje[$i]));
}

echo $dom->saveXML();
