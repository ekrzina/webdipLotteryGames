<?php

$direktorij = getcwd();
$putanja = dirname($_SERVER['REQUEST_URI']);
$naslov = "GeneratorBr";
include './zaglavlje.php';


if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 2) {
    header("Location: prijava.php");
    exit();
}


$smarty->display("generatorBr.tpl");
$smarty->display("podnozje.tpl");