<?php

//dohvati imena svih listića za dinamičan prikaz

include '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$datoteke = array();
$polje = array();

$upat = "SELECT idIgraNaSrecu, nazivIgre, nazivLutrije FROM IgraNaSrecu i JOIN IgreLutrije il "
        . "ON il.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Lutrija lu ON il.Lutrija_idLutrija = lu.idLutrija WHERE nazivLutrije = '" . $_GET['lutrija'] . "';";

$rez = $veza->selectDB($upat);

//uz sortiranje
//

while ($getter = mysqli_fetch_array($rez)) {
    array_push($polje, $getter[0] . "%" . $getter[1]);
}

for ($i = 0; $i < count($polje); $i++) {
    $naziv = "listic" . $i;
    $rezultat = $polje[$i];
    $datoteke += array($naziv => $rezultat);
}

$veza->zatvoriDB();
echo json_encode($datoteke);

