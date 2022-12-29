<?php

include '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$datoteke = array();

$stringPutanja = "listici/" . $_POST["naziv"];

$upat = "SELECT * FROM Listic WHERE slikaIspunjenogListica = '" . $stringPutanja . "'";

$rez = $veza->selectDB($upat);
$rezultat = mysqli_fetch_array($rez);

if(isset($rezultat)){
    $datoteke = array("nazivDatoteke" => $stringPutanja);
}
else{
    $datoteke = array("nazivDatoteke" => null);
}
$veza->zatvoriDB();
echo json_encode($datoteke);

