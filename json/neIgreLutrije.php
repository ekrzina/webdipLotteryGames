<?php

//dohvati imena svih listića za dinamičan prikaz

include '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$datoteke = array();
$polje = array();

$upat = "SELECT idIgraNaSrecu, nazivIgre FROM IgraNaSrecu";
$rez = $veza->selectDB($upat);

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

