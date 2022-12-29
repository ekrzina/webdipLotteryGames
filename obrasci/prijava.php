<?php

//relativna putanja do source filea
//cwd bi vratio obrazac (gdje nema klase)
//dirname parent directory child
$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Prijava";
include '../zaglavlje.php';

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

$trenutnoVrijeme = date('Y-m-d H:i:s');
$virtualka = new Virtualno();
$virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
$vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

if (isset($_POST['submit'])) {

    if ($_POST['zapamti'] == "DA") {
        setcookie("korisnikPrijava", $_POST['korime']);
    }

    $veza = new Baza();
    $veza->spojiDB();

    //dobivamo korime, lozinku, brojNuespjesnihPrijava
    $upat = "SELECT korisnickoIme, lozinkaSha256, brojNeuspjesnihPrijava, uloga_idUloga, idKorisnik, statusKorisnika, vrijemeIstekaKoda FROM Korisnik WHERE korisnickoIme = " . "'" . $_POST['korime'] . "'";
    $rez = $veza->selectDB($upat);
    $lozin = mysqli_fetch_array($rez);
    $ime = $lozin[0];
    $loz = $lozin[1];
    $brojNeuspjeha = $lozin[2];
    $uloga = $lozin[3];
    $idKorisnik = $lozin[4];
    $stat = $lozin[5];
    $istek = $lozin[6];

    $lozSub = $_POST['lozinka'] . substr($ime, 0, 3);

    $hashLozinke = hash('sha256', $lozSub);

    if ($loz != $hashLozinke) {

        $brojNeuspjeha = $brojNeuspjeha + 1;
        $upit = "UPDATE Korisnik SET brojNeuspjesnihPrijava = " . $brojNeuspjeha . " WHERE korisnickoIme = " . "'" . $_POST['korime'] . "'";
        $veza->updateDB($upit);

        $stringDnevnik = $vri . "/Korisnik " . $ime . " upisuje krivu lozinku./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);

        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $idKorisnik . '", 2)';

        $veza->updateDB($dnUpit);
    }

    if (($vri > $istek) && ($uloga < 2)) {


        $upit = "DELETE FROM Korisnik WHERE idKorisnik = " . "'" . $idKorisnik . "'";
        $veza->updateDB($upit);

        $stringDnevnik = $vri . "/Korisnik " . $ime . " briše se iz baze radi zakašnjele aktivacije računa./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);
    }

    //ako je blokiran, automatski se prebacuje na stranicu blokiran.php
    if ($stat != 0) {
        header("Location:blokiran.php");
    }

    if (($stat == 0) && ($uloga > 1)) {
        if (($_POST['korime'] == $ime) && ($hashLozinke == $loz)) {
            //postavi broj neuspjeha na 0
            $upit = "UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = " . "'" . $_POST['korime'] . "'";
            $veza->updateDB($upit);

            //kreiraj sesiju
            Sesija::kreirajSesiju();
            Sesija::kreirajKorisnika($ime, $uloga);

            //dnevnik promjena broja neuspjesnih prijava
            $stringDnevnik = $vri . "/Za korisnika " . $ime . " broj neuspješnih prijava se resetira./Upit: " . $upit . "/Tip radnje: 1";
            $dnevnik->spremiDnevnik($stringDnevnik);

            $dnev = explode("/", $stringDnevnik);

            $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                    . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $idKorisnik . '", "2")';

            $veza->updateDB($dnUpit);

            //dnevnik prijava
            $stringDnevnik = $vri . "/Korisnik " . $ime . " prijavljuje se./Tip radnje: 1";
            $dnevnik->spremiDnevnik($stringDnevnik);

            $dno = explode("/", $stringDnevnik);
            $dnUpit = "INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, Korisnik_idKorisnik, TipRadnje_idTipRadnje) "
                    . "VALUES ('" . $vri . "', '" . $dno[1] . "', '" . $idKorisnik . "', '1')";
            $veza->updateDB($dnUpit);

            $veza->zatvoriDB();
            header("Location: ../index.php");
            exit();
        }
    }

    if (($brojNeuspjeha >= 3) && ($stat == 0)) {
        $upit = "UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = " . "'" . $_POST['korime'] . "'";
        $veza->updateDB($upit);

        $stringDnevnik = $vri . "/Korisnik " . $ime . " je blokiran./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);

        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $idKorisnik . '", "2")';
        $veza->updateDB($dnUpit);

        $veza->zatvoriDB();
        header("Location: blokiran.php");
        exit();
    }

    //zapamti me

    $veza->zatvoriDB();
}

$smarty->display("prijava.tpl");
$smarty->display("podnozje.tpl");
