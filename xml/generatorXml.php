<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

$upat = "SELECT korisnickoIme, lozinka, brojNeuspjesnihPrijava, uloga_idUloga, statusKorisnika FROM Korisnik WHERE korisnickoIme = " . "'" . $_POST['korime'] . "'";
$rez = $veza->selectDB($upat);
$lozin = mysqli_fetch_array($rez);
$ime = $lozin[0];
$loz = $lozin[1];
$brojNeuspjeha = $lozin[2];
$uloga = $lozin[3];
$status = $lozin[4];

$veza->zatvoriDB();

header("Content-Type:text/xml");
//slozi xml file
$dom = new DOMDocument('1.0', 'UTF-8');
//ljepse formatiranje
$dom->formatOutput = true;

$root = $dom->createElement('korisnik');
$dom->appendChild($root);

$root->appendChild($dom->createElement('korisnickoIme', $ime));
$root->appendChild($dom->createElement('lozinka', $loz));
$root->appendChild($dom->createElement('brojNeuspjesnihPrijava', $brojNeuspjeha));

echo $dom->saveXML();
