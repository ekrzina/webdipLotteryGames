<?php
$direktorij = getcwd();
$putanja = dirname($_SERVER['REQUEST_URI']);
$naslov = "Galerija";
include './zaglavlje.php';

//provjera prava pristupa za reg korisnika i vece uloge
//neprijavljeni ima 4, preusmjeri na prijavu ako nismo ta uloga


$smarty->display("galerija.tpl");
$smarty->display("podnozje.tpl");