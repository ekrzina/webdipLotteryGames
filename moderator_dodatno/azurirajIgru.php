<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "AzurirajM";
include '../zaglavlje.php';

$idIgra = $_GET['id'];
$cijena = $_GET['cijenaListica'];
$pocetak = $_GET['datumVrijemePocetka'];
$zavrsetak = $_GET['datumVrijemeZavrsetka'];
$naziv = $_GET['naziv'];
$fond = $_GET['fond'];
$brojIzvlacenja = $_GET['brojIzvlacenja'];

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

//promijeni datum upload sliku, adresu, email, tel

$smarty->assign("id", $idIgra);
$smarty->assign("cijena", $cijena);
$smarty->assign("dVPocetak", $pocetak);
$smarty->assign("dVKraj", $zavrsetak);
$smarty->assign("fond", $fond);
$smarty->assign("naziv", $naziv);
$smarty->assign("brojIzvlacenja", $brojIzvlacenja);

if (isset($_POST['submit'])) {
    $veza = new Baza();
    $veza->spojiDB();

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    $greska = false;

    $dat = $_POST['dVPocetak'];
    $uzorak = "/^(\d{4})-([0-1][0-9])-([0-3][0-9]) ([0|1][0-9]:[0-5][0-9]:[0-5][0-9])$/";

    if (!preg_match($uzorak, $dat)) {
        $greska = true;
    }

    $datK = $_POST['dVPocetak'];

    if (!preg_match($uzorak, $datK)) {
        $greska = true;
    }

    if ($greska == false) {

        //dohvati id uloge korisnika

        $upt = "SELECT uloga_idUloga FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "';";
        $result = $veza->selectDB($upt);
        $rez = mysqli_fetch_row($result);
        $uloga = $rez[0];
        $upit = "";
        
        if ($uloga == 3) {
            $upit = "UPDATE IgraNaSrecu SET cijenaListicaIgre = '" . $_POST['cijena'] . "', DatumVrijemePocetka = '" . $_POST['dVPocetak'] . "', DatumVrijemeZavrsetka = '" . $_POST['dVKraj'] . "' WHERE idIgraNaSrecu = '" . $idIgra . "'";
        }
        if ($uloga == 4) {
            $upit = "UPDATE IgraNaSrecu SET cijenaListicaIgre = '" . $_POST['cijena'] . "', DatumVrijemePocetka = '" . $_POST['dVPocetak'] . "', nazivIgre = '" . $_POST['naziv']
                    . "', brojIzvlacenja = '" . $_POST['brojIzvlacenja'] . "', fondPoPogodenomBroju = '" . $_POST['fondPoBroju'] . "', DatumVrijemeZavrsetka = '" . $_POST['dVKraj'] . "' WHERE idIgraNaSrecu = '" . $idIgra . "'";
        }

        $veza->updateDB($upit);

        //upis u dnevnik
        
        $trenutnoVrijeme = date('Y-m-d H:i:s');
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);
        
        $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " ažurira igru na sreću " . $idIgra . "./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);

        $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
        $resulta = $veza->selectDB($nup);
        $rezz = mysqli_fetch_row($resulta);

        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

        $veza->updateDB($dnUpit);

        $veza->zatvoriDB();

        header("Location:popisIgara.php");
        exit();
    }
    $veza->zatvoriDB();
}

$smarty->display("azurirajIgru.tpl");
$smarty->display("podnozje.tpl");

