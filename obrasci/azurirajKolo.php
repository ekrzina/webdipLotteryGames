<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Azur kolo";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$idKolo = $_GET['idKolo'];
$idIgra = $_GET['idIgra'];
$datumIsplate = $_GET['datumIsplate'];

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

//promijeni datum upload sliku, adresu, email, tel

$smarty->assign("datum", $datumIsplate);

if (isset($_POST['submit'])) {
    $veza = new Baza();
    $veza->spojiDB();

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    $greska = false;
   
    $dat = $_POST['datumIsplate'];
    $uzorak = "/^(\d{4})-([0-1][0-9])-([0-3][0-9]) ([0|1][0-9]:[0-5][0-9]:[0-5][0-9])$/";

    if (!preg_match($uzorak, $dat)) {
        $greska = true;
    }

    if ($greska == false) {
        
        //dohvati naziv igre pod id-jem iz $_POST['ime']
        
        $upat = "SELECT nazivIgre FROM IgraNaSrecu WHERE idIgraNaSrecu = '" . $_POST['ime'] . "'";
        $igra = $veza->selectDB($upat);
        $rez = mysqli_fetch_row($igra);
        $naziv = $rez[0];
     
        //kreiraj ime kola
        $imeKola = "Kolo " . $idKolo . " " . $naziv; 
        
        $upit = "UPDATE Kolo SET nazivKolo='" . $imeKola . "', datumIsplate = '" . $_POST['datumIsplate'] . "', IgraNaSrecu_idIgraNaSrecu = '" . $_POST['ime'] . "' WHERE idKolo = '" . $idKolo . "'";
        $veza->updateDB($upit);
        
        //vrijeme
        
        $trenutniDatum = date("Y-m-d H:i:s");
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutniDatum); 
       
        $stringDnevnik = $vri . "/Korisnik " . Sesija::dajKorisnika() . " ažurira kolo./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);
        
        //dohvati id
        $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
        $result = $veza->selectDB($nup);
        $rezz = mysqli_fetch_row($result);
        
        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';  
        
        $veza->updateDB($dnUpit);
        $veza->zatvoriDB();
        header("Location:popisKola.php");
        exit();
    }
    $veza->zatvoriDB();
}

$smarty->display("azurirajKolo.tpl");
$smarty->display("podnozje.tpl");

