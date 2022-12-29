
<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Dnevnik";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 4) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$smarty->display("pregledDnevnika.tpl");
$smarty->display("podnozje.tpl");

