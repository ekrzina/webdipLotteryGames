<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

if(isset($_GET['value'])){
    $upit = "SELECT * FROM Lutrija ORDER BY " . $_GET['value'];
}
else{
    $upit = "SELECT * FROM Lutrija";
}

$rezultat = $veza->selectDB($upit);

$polje = array();

header("Content-Type:text/xml");
$dom = new DOMDocument('1.0', 'UTF-8');
//ljepse formatiranje
$dom->formatOutput = true;

while ($getter = mysqli_fetch_array($rezultat)) {
    array_push($polje, $getter);
}

$veza->zatvoriDB();

$root = $dom->createElement('lutrije');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $lut = $dom->createElement('lutrija');
    $root->appendChild($lut);
    $lut->appendChild($dom->createElement('id', $polje[$i][0]));
    $lut->appendChild($dom->createElement('naziv', $polje[$i][1]));
    $lut->appendChild($dom->createElement('telefon', $polje[$i][2]));
    $lut->appendChild($dom->createElement('mail', $polje[$i][3]));
    $lut->appendChild($dom->createElement('web', $polje[$i][4]));  
}

echo $dom->saveXML();