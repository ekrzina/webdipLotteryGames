<?php

//relativna putanja do source filea
//cwd bi vratio obrazac (gdje nema klase)
//dirname parent directory child
$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Aktivacija";
include '../zaglavlje.php';

//poslati na mail korisnika

if (isset($_POST['submit'])) {

    $aktivacijskiKod = $_POST['aktivacijskiKod'];

    $veza = new Baza();
    $veza->spojiDB();

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    //ako je razlika veća od 7 sati

    $upat = "SELECT vrijemeIstekaKoda, uloga_idUloga, idKorisnik FROM Korisnik WHERE aktivacijskiKod = '" . $aktivacijskiKod . "'";
    $rezultat = $veza->selectDB($upat);
    $rez = mysqli_fetch_array($rezultat);

    $istek = $rez[0];
    $uloga = $rez[1];
    $idKor = $rez[2];

    //ako ne postoji aktivacijski kod, formular se neće poslati
    //u protivnome, provjerava je li prošao datum

    if ($uloga < 2) {
        
        $trenutniDatum = date("Y-m-d H:i:s");
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutniDatum);
        
        //ako korisnik nije aktiviran, provedi kontrolu
        if ($vri < $istek) {
            //korisnik je uspjesno registriran
            $upit = "UPDATE Korisnik SET uloga_idUloga = 2 WHERE aktivacijskiKod = " . "'" . $aktivacijskiKod . "'";
            $veza->updateDB($upit);

            //zapisi u dnevnik

            $stringDnevnik = $vri . "/Korisnik " . $idKor . " aktivira račun./Upit: " . $upit . "/Tip radnje: 3";
            $dnevnik->spremiDnevnik($stringDnevnik);

            $dnev = explode("/", $stringDnevnik);

            $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                    . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $idKor . '", "2")';
            $veza->updateDB($dnUpit);
        } else {
            //brisi registriranu osobu
            $upit = "DELETE FROM Korisnik WHERE aktivacijskiKod = " . "'" . $aktivacijskiKod . "'";
            $veza->updateDB($upit);
            //zapisi u dnevnik

            $stringDnevnik = $vri . "/Korisnik " . $idKor . " briše se iz baze radi zakašnjele aktivacije računa./Upit: " . $upit . "/Tip radnje: 3";
            $dnevnik->spremiDnevnik($stringDnevnik);

            //$dnev = explode("/", $stringDnevnik);
            //$dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
            //        . 'VALUES ("' . date("Y-m-d H:i:s") . '", "' . $dnev[1] . '", "' . $upit . '", "null", "2")';
            
            //$veza->updateDB($dnUpit);
        }
    }
    $veza->zatvoriDB();
}

$smarty->display("aktivacija.tpl");
$smarty->display("podnozje.tpl");
