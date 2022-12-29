<?php

//tablica listića i mogućnost ažuriranja istih 
//kod ažuriranja prebacuje se na stranicu zaigrajAzuriraj, sve uz $_GET
//preko smartyja varijable poprimaju get vrijednosti 
//nakon ažuriranja (na pritisak tipke ažuriraj, kod se ažurira i prebacimo se natrag na mojiListici)

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Kolo";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$smarty->display("popisKola.tpl");
$smarty->display("podnozje.tpl");
