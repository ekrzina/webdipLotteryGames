<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

//za igre na srecu i kolo kojim pripada

if(isset($_GET['value'])){
    if($_GET['value']=='z.iznosIsplate'){
        $upit = "SELECT z.idZahtjevZaIsplatom, z.iznosIsplate, k.datumIsplate, z.potvrdeno, z.Korisnik_idKorisnik, "
        . "l.datumUpload, i.idIgraNaSrecu, i.nazivIgre, l.Kolo_idKolo, k.nazivKolo, l.StatusListica_idStatusListica, l.idListic FROM ZahtjevZaIsplatom z "
        . "JOIN Listic l ON z.Listic_idListic = l.idListic JOIN IgraNaSrecu i ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu "
        . "JOIN Kolo k ON k.idKolo = l.Kolo_idKolo ORDER BY " . $_GET['value'] . " DESC";
    }
    else{
         $upit = "SELECT z.idZahtjevZaIsplatom, z.iznosIsplate, k.datumIsplate, z.potvrdeno, z.Korisnik_idKorisnik, "
        . "l.datumUpload, i.idIgraNaSrecu, i.nazivIgre, l.Kolo_idKolo, k.nazivKolo, l.StatusListica_idStatusListica, l.idListic FROM ZahtjevZaIsplatom z "
        . "JOIN Listic l ON z.Listic_idListic = l.idListic JOIN IgraNaSrecu i ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu "
        . "JOIN Kolo k ON k.idKolo = l.Kolo_idKolo ORDER BY " . $_GET['value'];
    }
}
else{
    $upit = "SELECT z.idZahtjevZaIsplatom, z.iznosIsplate, k.datumIsplate, z.potvrdeno, z.Korisnik_idKorisnik, "
        . "l.datumUpload, i.idIgraNaSrecu, i.nazivIgre, l.Kolo_idKolo, k.nazivKolo, l.StatusListica_idStatusListica, l.idListic FROM ZahtjevZaIsplatom z "
        . "JOIN Listic l ON z.Listic_idListic = l.idListic JOIN IgraNaSrecu i ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu "
        . "JOIN Kolo k ON k.idKolo = l.Kolo_idKolo;";
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

$root = $dom->createElement('zahtjevi');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $zahtjev = $dom->createElement('zahtjev');
    $root->appendChild($zahtjev);
    $zahtjev->appendChild($dom->createElement('idZahtjevZaIsplatom', $polje[$i][0]));
    $zahtjev->appendChild($dom->createElement('iznosIsplate', $polje[$i][1]));
    $zahtjev->appendChild($dom->createElement('datumIsplate', $polje[$i][2]));
    $zahtjev->appendChild($dom->createElement('potvrdeno', $polje[$i][3]));
    $zahtjev->appendChild($dom->createElement('idKorisnik', $polje[$i][4]));
    $zahtjev->appendChild($dom->createElement('datumUpload', $polje[$i][5]));  
    $zahtjev->appendChild($dom->createElement('idIgraNaSrecu', $polje[$i][6]));  
    $zahtjev->appendChild($dom->createElement('nazivIgre', $polje[$i][7]));  
    $zahtjev->appendChild($dom->createElement('idKolo', $polje[$i][8]));  
    $zahtjev->appendChild($dom->createElement('nazivKolo', $polje[$i][9]));  
    $zahtjev->appendChild($dom->createElement('status', $polje[$i][10]));  
    $zahtjev->appendChild($dom->createElement('idListic', $polje[$i][11])); 
}

echo $dom->saveXML();