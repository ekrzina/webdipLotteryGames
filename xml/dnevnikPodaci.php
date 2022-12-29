<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

//dohvaca sve iz dnevnika u bazi
$upit = "SELECT d.idDnevnik, d.datumVrijemeRadnje, d.radnja, d.upit, d.Korisnik_idKorisnik, t.nazivTipaRadnje FROM Dnevnik d JOIN TipRadnje t ON t.idTipRadnje = d.TipRadnje_idTipRadnje;";
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

$root = $dom->createElement('dnevnici');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $dnevo = $dom->createElement('dnevnik');
    $root->appendChild($dnevo);
    $dnevo->appendChild($dom->createElement('id', $polje[$i][0]));
    $dnevo->appendChild($dom->createElement('datumVrijeme', $polje[$i][1]));
    $dnevo->appendChild($dom->createElement('radnja', $polje[$i][2]));
    $dnevo->appendChild($dom->createElement('upit', $polje[$i][3]));
    $dnevo->appendChild($dom->createElement('idKorisnik', $polje[$i][4]));
    $dnevo->appendChild($dom->createElement('tipRadnje', $polje[$i][5]));
}

echo $dom->saveXML();