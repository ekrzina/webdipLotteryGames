<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Blokiran korisnik";
include '../zaglavlje.php';

$smarty->display("blokiran.tpl");
$smarty->display("podnozje.tpl");