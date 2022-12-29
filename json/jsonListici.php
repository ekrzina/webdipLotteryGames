<?php

//dohvati imena svih listića za dinamičan prikaz

include '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$datoteke = array();
$polje = array();

if(isset($_POST['value'])){
    
    if($_POST['value']=="l.Kolo_idKolo"){
         $upat = "SELECT DISTINCT l.slikaIspunjenogListica, i.datumVrijemeZavrsetka, l.Kolo_idKolo, l.idListic, k.nazivKolo FROM Listic l JOIN IgraNaSrecu i 
        ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN IgreLutrije ig ON ig.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Kolo k ON k.idKolo = l.Kolo_idKolo WHERE DATE(datumVrijemeZavrsetka) > '" . date("Y-m-d H:m:i") . "' ORDER BY " . $_POST['value'] . "";
    }
     if($_POST['value']=="l.osvojeniIznos"){
         $upat = "SELECT DISTINCT l.slikaIspunjenogListica, i.datumVrijemeZavrsetka, l.Kolo_idKolo, l.idListic, k.nazivKolo, l.osvojeniIznos FROM Listic l JOIN IgraNaSrecu i "
        . "ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN IgreLutrije ig ON ig.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Kolo k ON k.idKolo = l.Kolo_idKolo WHERE DATE(datumVrijemeZavrsetka) > '" . date("Y-m-d H:m:i") . "' ORDER BY " . $_POST['value'] . " DESC";
    }
}
else{
    $upat = "SELECT DISTINCT l.slikaIspunjenogListica, i.datumVrijemeZavrsetka, l.Kolo_idKolo, l.idListic, k.nazivKolo FROM Listic l JOIN IgraNaSrecu i 
        ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN IgreLutrije ig ON ig.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Kolo k ON k.idKolo = l.Kolo_idKolo
        WHERE DATE(datumVrijemeZavrsetka) > '" . date("Y-m-d H:i:s") ."' ORDER BY l.idListic DESC";
}

$rez = $veza->selectDB($upat);

while ($getter = mysqli_fetch_array($rez)) {
    array_push($polje, ($getter[0] . "%" . $getter[2] . "%" . $getter[3] . "%" . $getter[4]));
}

for ($i = 0; $i < count($polje); $i++) {
    $naziv = "listic" . $i;
    $rezultat = $polje[$i];
    $datoteke += array($naziv => $rezultat);
}

$veza->zatvoriDB();
echo json_encode($datoteke);

