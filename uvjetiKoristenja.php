<?php

$direktorij = getcwd();
$putanja = dirname($_SERVER['REQUEST_URI']);
$naslov = "Uvjeti korištenja";
include './zaglavlje.php';

$trenutnoVrijeme = date('Y-m-d H:i:s');

$virtualka = new Virtualno();
$virtualka->postaviPutanju("izvorne_datoteke/virtualno_vrijeme.txt");
$vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

setcookie("uvjetiKoristenja", strval($vri), time() + (172800 * 30), "/"); // 2 * 24 * 24 * 60
$smarty->display("uvjetiKoristenja.tpl");
$smarty->display("podnozje.tpl");