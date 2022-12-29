<?php

include '../baza.class.php';
include '../sesija.class.php';
//SUTRA
$veza = new Baza();
$veza->spojiDB();

//dohvaćanje uloge za određivanje punjenja tablica
$upt = "SELECT uloga_idUloga FROM Korisnik WHERE idKorisnik = '" . $_GET['idKor'] . "';";
$result = $veza->selectDB($upt);
$rez = mysqli_fetch_row($result);
$uloga = $rez[0];

if (isset($_GET['value'])) {
    if ($uloga == 3) {
        //upit moderator
        //sort - ako je prema fondu neka se sortira silazno
        if (($_GET['value']) == "i.fondPoPogodenomBroju") {
            $upit = "SELECT DISTINCT i.idIgraNaSrecu, i.nazivIgre, i.brojIzvlacenja, i.fondPoPogodenomBroju, "
                    . "i.cijenaListicaIgre, i.datumVrijemePocetka, i.datumVrijemeZavrsetka FROM IgraNaSrecu i "
                    . "JOIN IgreLutrije il ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija l "
                    . "ON l.idLutrija = il.Lutrija_idLutrija JOIN DodijeljenModerator dm ON dm.Lutrija_idLutrija = l.idLutrija JOIN Korisnik m "
                    . "ON m.idKorisnik = dm.Korisnik_idKorisnik WHERE m.idKorisnik = '" . $_GET['idKor'] . "' ORDER BY " . $_GET['value'] . " DESC";
        } else {
            $upit = "SELECT DISTINCT i.idIgraNaSrecu, i.nazivIgre, i.brojIzvlacenja, i.fondPoPogodenomBroju, "
                    . "i.cijenaListicaIgre, i.datumVrijemePocetka, i.datumVrijemeZavrsetka FROM IgraNaSrecu i "
                    . "JOIN IgreLutrije il ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija l "
                    . "ON l.idLutrija = il.Lutrija_idLutrija JOIN DodijeljenModerator dm ON dm.Lutrija_idLutrija = l.idLutrija JOIN Korisnik m "
                    . "ON m.idKorisnik = dm.Korisnik_idKorisnik WHERE m.idKorisnik = '" . $_GET['idKor'] . "' ORDER BY " . $_GET['value'];
        }
    }
    if ($uloga == 4) {
        if (($_GET['value']) == "i.fondPoPogodenomBroju") {
            //sve dohvati admin
            $upit = "SELECT DISTINCT i.idIgraNaSrecu, i.nazivIgre, i.brojIzvlacenja, i.fondPoPogodenomBroju, "
                    . "i.cijenaListicaIgre, i.datumVrijemePocetka, i.datumVrijemeZavrsetka FROM IgraNaSrecu i "
                    . "JOIN IgreLutrije il ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija l "
                    . "ON l.idLutrija = il.Lutrija_idLutrija JOIN DodijeljenModerator dm ON dm.Lutrija_idLutrija = l.idLutrija JOIN Korisnik m "
                    . "ON m.idKorisnik = dm.Korisnik_idKorisnik ORDER BY " . $_GET['value'] . " DESC";
        }else{
           $upit = "SELECT DISTINCT i.idIgraNaSrecu, i.nazivIgre, i.brojIzvlacenja, i.fondPoPogodenomBroju, "
                    . "i.cijenaListicaIgre, i.datumVrijemePocetka, i.datumVrijemeZavrsetka FROM IgraNaSrecu i "
                    . "JOIN IgreLutrije il ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija l "
                    . "ON l.idLutrija = il.Lutrija_idLutrija JOIN DodijeljenModerator dm ON dm.Lutrija_idLutrija = l.idLutrija JOIN Korisnik m "
                    . "ON m.idKorisnik = dm.Korisnik_idKorisnik ORDER BY " . $_GET['value']; 
        }
    }
} else {
    if ($uloga == 3) {
        //upit moderator
        $upit = "SELECT DISTINCT i.idIgraNaSrecu, i.nazivIgre, i.brojIzvlacenja, i.fondPoPogodenomBroju, "
                . "i.cijenaListicaIgre, i.datumVrijemePocetka, i.datumVrijemeZavrsetka FROM IgraNaSrecu i "
                . "JOIN IgreLutrije il ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija l "
                . "ON l.idLutrija = il.Lutrija_idLutrija JOIN DodijeljenModerator dm ON dm.Lutrija_idLutrija = l.idLutrija JOIN Korisnik m "
                . "ON m.idKorisnik = dm.Korisnik_idKorisnik WHERE m.idKorisnik = '" . $_GET['idKor'] . "' ORDER BY i.idIgraNaSrecu";
    }
    if ($uloga == 4) {
        //sve dohvati admin
        $upit = "SELECT DISTINCT i.idIgraNaSrecu, i.nazivIgre, i.brojIzvlacenja, i.fondPoPogodenomBroju, "
                . "i.cijenaListicaIgre, i.datumVrijemePocetka, i.datumVrijemeZavrsetka FROM IgraNaSrecu i "
                . "JOIN IgreLutrije il ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija l "
                . "ON l.idLutrija = il.Lutrija_idLutrija JOIN DodijeljenModerator dm ON dm.Lutrija_idLutrija = l.idLutrija JOIN Korisnik m "
                . "ON m.idKorisnik = dm.Korisnik_idKorisnik";
    }
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

$root = $dom->createElement('igre');
$dom->appendChild($root);

for ($i = 0; $i < sizeof($polje); $i++) {
    $ig = $dom->createElement('igra');
    $root->appendChild($ig);
    $ig->appendChild($dom->createElement('id', $polje[$i][0]));
    $ig->appendChild($dom->createElement('naziv', $polje[$i][1]));
    $ig->appendChild($dom->createElement('brojIzvlacenja', $polje[$i][2]));
    $ig->appendChild($dom->createElement('fondPoPogodenomBroju', $polje[$i][3]));
    $ig->appendChild($dom->createElement('cijenaListica', $polje[$i][4]));
    $ig->appendChild($dom->createElement('datumVrijemePocetka', $polje[$i][5]));
    $ig->appendChild($dom->createElement('datumVrijemeZavrsetka', $polje[$i][6]));
}

echo $dom->saveXML();
