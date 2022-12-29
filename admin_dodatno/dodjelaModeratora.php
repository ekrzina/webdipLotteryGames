<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "DodjelaM";
include '../zaglavlje.php';

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 4) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$veza = new Baza();
$veza->spojiDB();

$id = $_GET['idLutrije'];

//pronadi korisnika koji je moderator lutrije
$upit = "SELECT k.idKorisnik FROM Korisnik k JOIN DodijeljenModerator dm ON k.idKorisnik = dm.Korisnik_idKorisnik JOIN Lutrija l ON dm.Lutrija_idLutrija = l.idLutrija WHERE l.idLutrija = '" . $id . "'";
$result = $veza->selectDB($upit);
$rez = mysqli_fetch_row($result);
$korisnikModerator = $rez[0];

$smarty->display("dodjelaModeratora.tpl");

if (isset($_POST['submit'])) {

    //ako id korisnika razlicita od korisnika koji je vec moderator, upit se moze izvrsiti    echo ($_POST['moderator']);

    if ($_POST['moderator'] != $korisnikModerator) {
        $dnevnik = new Dnevnik();
        $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

        $up = "INSERT INTO DodijeljenModerator (Lutrija_idLutrija, Korisnik_idKorisnik) VALUES ('" . $id . "', '" . $_POST['moderator'] . "')";
        $veza->updateDB($up);

        $trenutnoVrijeme = date('Y-m-d H:i:s');
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);
        
        //promjena statusa korisnika!
        
        $upot = "UPDATE Korisnik SET uloga_idUloga = 3 WHERE idKorisnik = '" . $_POST['moderator'] . "'";
        $veza->updateDB($upot);

        $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " lutriji " . $id . " dodijeljuje novog moderatora " . $_POST['moderator'] . "/Upit: " . $upot . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);

        $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
        $result = $veza->selectDB($nup);
        $rezz = mysqli_fetch_row($result);

        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upot . '", "' . $rezz[0] . '", "2")';

        $veza->updateDB($dnUpit);

        $veza->zatvoriDB();
        header("Location: lutrije.php");
        exit();
    }

    //u protivnom, ispis greske
    else {
        echo 'Ovaj korisnik već je moderator ove lutrije.<br><br><br>';
    }
}
$veza->zatvoriDB();

//podnozje kasnije zbog ispisa ako je moderator vec moderator lutrije
$smarty->display("podnozje.tpl");

