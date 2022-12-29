<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Azur list";
include '../zaglavlje.php';

$idListic = $_GET['idListic'];
$telefon = $_GET['telefon'];
$email = $_GET['email'];
$adresa = $_GET['adresa'];
$brojevi = $_GET['odabraniBrojevi'];

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 2) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

//promijeni datum upload sliku, adresu, email, tel

$smarty->assign("tel", $telefon);
$smarty->assign("mail", $email);
$smarty->assign("adresa", $adresa);
$smarty->assign("brojevi", $brojevi);

if (isset($_POST['submit'])) {

    $veza = new Baza();
    $veza->spojiDB();

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    $greska = "";

    $userfile = $_FILES['naziv']['tmp_name'];
    $userfile_name = $_FILES['naziv']['name'];
    $userfile_size = $_FILES['naziv']['size'];
    $userfile_type = $_FILES['naziv']['type'];
    $userfile_error = $_FILES['naziv']['error'];
    if ($userfile_error > 0) {
        echo 'Problem: ';
        switch ($userfile_error) {
            case 1: echo 'Veličina veća od ' . ini_get('upload_max_filesize');
                $greska .= "Datoteka greska.";
                break;
            case 2: echo 'Veličina veća od ' . $_POST["MAX_FILE_SIZE"] . 'B';
                $greska .= "Datoteka greska.";
                break;
            case 3: echo 'Datoteka djelomično prenesena';
                $greska .= "Datoteka greska.";
                break;
            case 4: echo 'Datoteka nije prenesena';
                $greska .= "Datoteka greska.";
                break;
        }
        exit;
    }

    $upfile = '../listici/' . $userfile_name; //odrediste za prijenos relativno u odnosu na trenutnu skriptu uploader ili kopirani kod

    if (is_uploaded_file($userfile)) {
        if (!move_uploaded_file($userfile, $upfile)) {
            echo 'Problem: nije moguće prenijeti datoteku na odredište';
            $greska .= "Problem: nije moguće prenijeti datoteku na odredište";
            exit;
        }
    } else {
        echo 'Problem: mogući napad prijenosom. Datoteka: ' . $userfile_name;
        $greska .= "Problem: mogući napad prijenosom.";
        exit;
    }

    if ($greska == "") {
        $putanja = "listici/" . $_FILES['naziv']['name'];

        $trenutnoVrijeme = date('Y-m-d H:i:s');
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

        $upit = "UPDATE Listic SET odabraniBrojevi='" . $_POST['odabraniBrojevi'] . "', telefon = '" . $_POST['telefon'] . "', email = '" . $_POST['email'] . "', adresa = '" . $_POST['adresa'] . "', slikaIspunjenogListica = '" . $putanja . "', datumUpload = '" . $vri . "' WHERE idListic = '" . $idListic . "'";
        $veza->updateDB($upit);

        //dohvati id
        $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
        $result = $veza->selectDB($nup);
        $rezz = mysqli_fetch_row($result);

        $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " ažurira svoj listić./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);
        
        $dnev = explode("/", $stringDnevnik);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

        $veza->updateDB($dnUpit);

        $veza->zatvoriDB();
        header("Location:mojiListici.php");
        exit();
    }
    $veza->zatvoriDB();
}


$smarty->display("zaigrajAzuriraj.tpl");
$smarty->display("podnozje.tpl");

