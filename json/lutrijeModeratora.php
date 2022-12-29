<?php

//dohvati imena svih lutrija koje pripadaju određenom moderatoru

include '../baza.class.php';
include '../sesija.class.php';

$veza = new Baza();
$veza->spojiDB();

$datoteke = array();
$polje = array();

$idK = $_GET['idKor'];

//dohvaćanje uloge za određivanje punjenja tablica
$upt = "SELECT uloga_idUloga FROM Korisnik WHERE idKorisnik = '" . $idK . "';";
$result = $veza->selectDB($upt);
$rez = mysqli_fetch_row($result);
$uloga = $rez[0];

if ($uloga == 3) {
    //upit moderator
    $upat = "SELECT l.idLutrija, l.nazivLutrije FROM Lutrija l JOIN DodijeljenModerator dm ON l.idLutrija = dm.Lutrija_idLutrija "
            . "JOIN Korisnik k ON k.idKorisnik = dm.Korisnik_idKorisnik WHERE k.idKorisnik = '" . $idK . "'";
}
if ($uloga == 4) {
    //sve dohvati admin
    $upat = "SELECT l.idLutrija, l.nazivLutrije FROM Lutrija l";
}

$rezu = $veza->selectDB($upat);

while ($getter = mysqli_fetch_array($rezu)) {
    array_push($polje, $getter[0] . "%" . $getter[1]);
}

for ($i = 0; $i < count($polje); $i++) {
    $naziv = "lutrija" . $i;
    $rezultat = $polje[$i];
    $datoteke += array($naziv => $rezultat);
}

$veza->zatvoriDB();
echo json_encode($datoteke);

