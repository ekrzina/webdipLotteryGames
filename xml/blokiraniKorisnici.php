<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT * FROM Korisnik WHERE StatusKorisnika = 1";
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
    $korisnik->appendChild($dom->createElement('id', $polje[$i][0]));
    $korisnik->appendChild($dom->createElement('imePrezime', $polje[$i][1]));
    $korisnik->appendChild($dom->createElement('korisnickoIme', $polje[$i][2]));
    //sha lozinka
    $korisnik->appendChild($dom->createElement('lozinka', $polje[$i][4]));
    $korisnik->appendChild($dom->createElement('datumRegistracije', $polje[$i][5]));
    $korisnik->appendChild($dom->createElement('email', $polje[$i][6]));
    $korisnik->appendChild($dom->createElement('uvjetiKoristenja', $polje[$i][7]));
    $korisnik->appendChild($dom->createElement('brojNeuspjesnihPrijava', $polje[$i][8]));
    $korisnik->appendChild($dom->createElement('statusKorisnika', $polje[$i][9]));
    $korisnik->appendChild($dom->createElement('uloga_idUloga', $polje[$i][10]));
    $korisnik->appendChild($dom->createElement('aktivacijskiKod', $polje[$i][11]));
    $korisnik->appendChild($dom->createElement('vrijemeIstekaKoda', $polje[$i][12]));
    
}

echo $dom->saveXML();