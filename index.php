<?php

$direktorij = getcwd();

//kad smo jednom u obrascima; za folder u obrasci bude dvostruki izlazak -> $putanja = dirname($_SERVER['REQUEST_URI'],2) - 2 otisli iza
$putanja = dirname($_SERVER['REQUEST_URI']);
$naslov = "Početna stranica";
include './zaglavlje.php';

//if uvjetiKoristenja nema-> prebaci na stranicu za uvjete koristenja

if (!isset($_SESSION['korisnik'])) {
    if (!isset($_COOKIE['uvjetiKoristenja'])) {
        header("Location: uvjetiKoristenja.php");
        exit();
    }
}

$smarty->display("index.tpl");
$smarty->display("podnozje.tpl");
