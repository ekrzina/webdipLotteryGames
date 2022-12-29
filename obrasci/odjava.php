<?php

//relativna putanja do source filea
//cwd bi vratio obrazac (gdje nema klase)
//dirname parent directory child
$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Odjava";
include '../zaglavlje.php';

$trenutniDatum = date("Y-m-d H:i:s");
$virtualka = new Virtualno();
$virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
$vri = $virtualka->postaviVrijeme($trenutniDatum);

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");
$stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " se odjavljuje./Tip radnje: 1";
$dnevnik->spremiDnevnik($stringDnevnik);

//Dohvati ID korisnika
$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
$rezultat = $veza->selectDB($upit);
$rez = mysqli_fetch_row($rezultat);
$idKor = $rez[0];

//zapis u bazu
$dno = explode("/", $stringDnevnik);
$dnUpit = "INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, Korisnik_idKorisnik, TipRadnje_idTipRadnje) "
        . "VALUES ('" . $vri . "', '" . $dno[1] . "', '" . $idKor . "', '1')";

$veza->updateDB($dnUpit);
$veza->zatvoriDB();

Sesija::obrisiSesiju();

$smarty->display("odjava.tpl");
$smarty->display("podnozje.tpl");
