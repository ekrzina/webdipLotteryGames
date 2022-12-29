<?php

//tablica listića i mogućnost ažuriranja istih 
//kod ažuriranja prebacuje se na stranicu zaigrajAzuriraj, sve uz $_GET
//preko smartyja varijable poprimaju get vrijednosti 
//nakon ažuriranja (na pritisak tipke ažuriraj, kod se ažurira i prebacimo se natrag na mojiListici)

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Igre moderator";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}


$veza=new Baza();
$veza->spojiDB();
$upit = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
$rezultat = $veza->selectDB($upit);
$rez = mysqli_fetch_row($rezultat);
$idKor = $rez[0];

$veza->zatvoriDB();

$smarty->assign("moderator", $idKor);
$smarty->display("popisIgaraM.tpl");
$smarty->display("podnozje.tpl");
