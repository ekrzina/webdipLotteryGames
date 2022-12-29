<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Dodaj kolo";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

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
        
        //dohavti ID zadnjeg kola za naziv kola
        $upt = "SELECT idKolo FROM Kolo ORDER BY idKolo DESC LIMIT 1";
        $igra = $veza->selectDB($upt);
        $rezultat = mysqli_fetch_row($igra);
        $idK = $rezultat[0];
        
        $idKolaNovo = $idK + 1;
        //dohvati naziv igre pod id-jem iz $_POST['ime']
        
        $upat = "SELECT nazivIgre FROM IgraNaSrecu WHERE idIgraNaSrecu = '" . $_POST['ime'] . "'";
        $igra = $veza->selectDB($upat);
        $rez = mysqli_fetch_row($igra);
        $naziv = $rez[0];
        
        //kreiraj ime kola
        $imeKola = "Kolo " . $idKolaNovo . " " . $naziv; 
        
        $upit = "INSERT INTO Kolo (nazivKolo, statusKola, generiraniBrojevi, datumIsplate, IgraNaSrecu_idIgraNaSrecu) VALUES ('" . $imeKola . "', 0, null, '" . $dat . "', '" . $_POST['ime'] . "')";
        $veza->updateDB($upit);
       
        //dohvati id kor
        
        $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
        $result = $veza->selectDB($nup);
        $rezz = mysqli_fetch_row($result);
        
        //dnevnicki podaci
        
        $trenutniDatum = date("Y-m-d H:i:s");
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutniDatum); 
       
        $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " kreira novo kolo./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);
        
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

$smarty->display("dodajKolo.tpl");
$smarty->display("podnozje.tpl");

