<?php

require '../virtualno.class.php';

$virtualka = new Virtualno();

$naziv = "../izvorne_datoteke/virtualno_vrijeme.txt";
$virtualka->postaviPutanju($naziv);
$sat = $virtualka->preuzmiSaServisa();
$virtualka->spremiVrijeme($sat);

header("Location:konfiguracija.php");
exit();