<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Zahtjevi";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$smarty->display("zahtjeviZaIsplatu.tpl");
$smarty->display("podnozje.tpl");
