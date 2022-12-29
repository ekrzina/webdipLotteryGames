<?php

//dohvati imena svih listića za dinamičan prikaz

include '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$datoteke = array();
$polje = array();

$upat = "SELECT nazivKolo FROM Kolo";
$rez = $veza->selectDB($upat);

//uz sortiranje
//

while ($getter = mysqli_fetch_array($rez)) {
    array_push($polje, $getter[0]);
}

for ($i = 0; $i < count($polje); $i++) {
    $naziv = "kolo" . $i;
    $rezultat = $polje[$i];
    $datoteke += array($naziv => $rezultat);
}

$veza->zatvoriDB();
echo json_encode($datoteke);

