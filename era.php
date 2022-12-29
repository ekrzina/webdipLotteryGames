<?php
$direktorij = getcwd();
$putanja = dirname($_SERVER['REQUEST_URI']);
$naslov = "ERA dijagram";
include './zaglavlje.php';

//provjera prava pristupa za reg korisnika i vece uloge
//neprijavljeni ima 4, preusmjeri na prijavu ako nismo ta uloga
if(!isset($_SESSION['uloga']) || $_SESSION['uloga'] > 1 ){
    //do prijave od popisa 
    //za hardkodirano
    header("Location: obrasci/prijava.php");
    exit();
}      

$smarty->display("era.tpl");
$smarty->display("podnozje.tpl");