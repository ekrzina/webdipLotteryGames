<?php

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

if(isset($_GET['value'])){

    if($_GET['value']=="s.status"){
        $upit = "SELECT DISTINCT lis.idListic, lis.telefon, lis.email, lis.adresa, lis.odabraniBrojevi, lis.brojPogodenihBrojeva, 
        s.status, lis.osvojeniIznos, k.idKorisnik, ko.nazivKolo FROM Listic lis JOIN IgraNaSrecu i ON lis.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN StatusListica s 
        ON lis.StatusListica_idStatusListica = s.idStatusListica JOIN IgreLutrije 
        il ON lis.IgraNaSrecu_idIgraNaSrecu = il.IgraNaSrecu_idIgraNaSrecu JOIN Lutrija l ON il.Lutrija_idLutrija = l.idLutrija 
        JOIN Korisnik k ON lis.Korisnik_idKorisnik = k.idKorisnik JOIN Kolo ko ON lis.Kolo_idKolo = ko.idKolo WHERE k.korisnickoIme = '" . Sesija::dajKorisnika() . "' ORDER BY s.status";

    }
    if($_GET['value']=="lis.brojPogodenihBrojeva"){
        $upit = "SELECT DISTINCT lis.idListic, lis.telefon, lis.email, lis.adresa, lis.odabraniBrojevi, lis.brojPogodenihBrojeva, 
        s.status, lis.osvojeniIznos, k.idKorisnik, ko.nazivKolo FROM Listic lis JOIN IgraNaSrecu i ON lis.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN StatusListica s 
        ON lis.StatusListica_idStatusListica = s.idStatusListica JOIN IgreLutrije 
        il ON lis.IgraNaSrecu_idIgraNaSrecu = il.IgraNaSrecu_idIgraNaSrecu JOIN Lutrija l ON il.Lutrija_idLutrija = l.idLutrija 
        JOIN Korisnik k ON lis.Korisnik_idKorisnik = k.idKorisnik JOIN Kolo ko ON lis.Kolo_idKolo = ko.idKolo WHERE k.korisnickoIme = '" . Sesija::dajKorisnika() . "' ORDER BY lis.brojPogodenihBrojeva DESC";
    }
    
}
else{
    $upit = "SELECT DISTINCT lis.idListic, lis.telefon, lis.email, lis.adresa, lis.odabraniBrojevi, lis.brojPogodenihBrojeva, 
        s.status, lis.osvojeniIznos, k.idKorisnik, ko.nazivKolo FROM Listic lis JOIN IgraNaSrecu i ON lis.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN StatusListica s 
        ON lis.StatusListica_idStatusListica = s.idStatusListica JOIN IgreLutrije 
        il ON lis.IgraNaSrecu_idIgraNaSrecu = il.IgraNaSrecu_idIgraNaSrecu JOIN Lutrija l ON il.Lutrija_idLutrija = l.idLutrija 
        JOIN Korisnik k ON lis.Korisnik_idKorisnik = k.idKorisnik JOIN Kolo ko ON lis.Kolo_idKolo = ko.idKolo WHERE k.korisnickoIme = '" . Sesija::dajKorisnika() . "'";
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

$root = $dom->createElement('listici');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $korisnik = $dom->createElement('list');
    $root->appendChild($korisnik);
    $korisnik->appendChild($dom->createElement('idListic', $polje[$i][0]));
    $korisnik->appendChild($dom->createElement('nazivKolo', $polje[$i][9]));
    $korisnik->appendChild($dom->createElement('nazivIgre', $polje[$i][2]));
    //sha lozinka
    $korisnik->appendChild($dom->createElement('telefon', $polje[$i][1]));
    $korisnik->appendChild($dom->createElement('email', $polje[$i][2]));
    $korisnik->appendChild($dom->createElement('adresa', $polje[$i][3]));
    $korisnik->appendChild($dom->createElement('odabraniBrojevi', $polje[$i][4]));
    $korisnik->appendChild($dom->createElement('brojPogodenihBrojeva', $polje[$i][5]));
    $korisnik->appendChild($dom->createElement('status', $polje[$i][6]));
    $korisnik->appendChild($dom->createElement('osvojeniIznos', $polje[$i][7]));
    $korisnik->appendChild($dom->createElement('idKorisnik', $polje[$i][8]));
}

echo $dom->saveXML();