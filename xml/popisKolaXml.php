<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

if(isset($_GET['value'])){
    $upit = "SELECT k.idKolo, k.nazivKolo, k.statusKola, k.generiraniBrojevi, k.IgraNaSrecu_idIgraNaSrecu, k.datumIsplate, i.brojIzvlacenja FROM Kolo k JOIN IgraNaSrecu i ON k.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu ORDER BY " . $_GET['value'];
}
else{
    $upit = "SELECT k.idKolo, k.nazivKolo, k.statusKola, k.generiraniBrojevi, k.IgraNaSrecu_idIgraNaSrecu, k.datumIsplate, i.brojIzvlacenja FROM Kolo k JOIN IgraNaSrecu i ON k.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu";
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

$root = $dom->createElement('kola');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $kolo = $dom->createElement('kolo');
    $root->appendChild($kolo);
    $kolo->appendChild($dom->createElement('id', $polje[$i][0]));
    $kolo->appendChild($dom->createElement('naziv', $polje[$i][1]));
    $kolo->appendChild($dom->createElement('status', $polje[$i][2]));
    //sha lozinka
    $kolo->appendChild($dom->createElement('generiraniBrojevi', $polje[$i][3]));
    $kolo->appendChild($dom->createElement('idIgreNaSrecu', $polje[$i][4]));
    $kolo->appendChild($dom->createElement('datumIsplate', $polje[$i][5]));
    $kolo->appendChild($dom->createElement('brojIzvlacenja', $polje[$i][6]));
}

echo $dom->saveXML();