<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Konfiguracija";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 4) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$smarty->display("konfiguracija.tpl");

$smarty->display("podnozje.tpl");

$vrijeme = date("Y-m-d H:i:s");

$virtualka = new Virtualno();
$virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
$varm = $virtualka->postaviVrijeme($vrijeme);

echo "Trenutno virtualno vrijeme: " . $varm;