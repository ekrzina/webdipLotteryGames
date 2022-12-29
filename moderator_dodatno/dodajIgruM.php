<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Dodaj igruM";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$veza = new Baza();
$veza->spojiDB();

//dohvati id
$nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
$result = $veza->selectDB($nup);
$rezz = mysqli_fetch_row($result);

if (isset($_POST['submit'])) {

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    $greska = false;

    if (!isset($_POST['lutrija'])) {
        $greska = true;
    }

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
        $upit = "";
        if ($_SESSION['uloga'] < 4) {
            $upit = "INSERT INTO IgraNaSrecu (nazivIgre, cijenaListicaIgre, datumVrijemePocetka, datumVrijemeZavrsetka, brojIzvlacenja, fondPoPogodenomBroju) VALUES ('" . $_POST['ime'] . "', '" . $_POST['cijena'] . "', '" . $_POST['dVPocetak'] . "', '" . $_POST['dVKraj'] . "', null, null)";
        } else {
            $upit = "INSERT INTO IgraNaSrecu (nazivIgre, cijenaListicaIgre, datumVrijemePocetka, datumVrijemeZavrsetka, brojIzvlacenja, fondPoPogodenomBroju) VALUES ('" . $_POST['ime'] . "', '" . $_POST['cijena'] . "', '" . $_POST['dVPocetak'] . "', '" . $_POST['dVKraj'] . "', '" . $_POST['brojIzvlacenja'] . "', '" . $_POST['fond'] . "')";
            echo $upit;
        }
        $veza->updateDB($upit);

        //dohavti novu igru, dodaj lutriji
        $upt = "SELECT idIgraNaSrecu FROM IgraNaSrecu ORDER BY idIgraNaSrecu DESC LIMIT 1";
        $igra = $veza->selectDB($upt);
        $rezultat = mysqli_fetch_row($igra);
        $idIgra = $rezultat[0];

        //dodaj lutriji
        $up = "INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES ('" . $idIgra . "', '" . $_POST['lutrija'] . "')";
        $veza->updateDB($up);

        //zapis u dnevnik

        $trenutnoVrijeme = date('Y-m-d H:i:s');
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

        $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " kreira igru na sreću. /Upit: " . $upit . "/Tip radnje: 2";
        $text = $vri . "/Korisnik " . $_SESSION['korisnik'] . "igru " . $_POST['ime'] . " pridružuje lutriji " . $_POST['lutrija'] . "./Upit: " . $up . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);
        $dnevnik->spremiDnevnik($text);

        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

        $veza->updateDB($dnUpit);

        $dneve = explode("/", $text);

        $dnuUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dneve[1] . '", "' . $up . '", "' . $rezz[0] . '", "2")';

        $veza->updateDB($dnuUpit);

        $veza->zatvoriDB();

        header("Location: popisIgara.php");
        exit();
    }
}
$veza->zatvoriDB();

$smarty->assign("id", $rezz[0]);
$smarty->display("dodajIgruM.tpl");
$smarty->display("podnozje.tpl");

