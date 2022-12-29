<?php

$direktorij = dirname(getcwd());
//kad smo jednom u obrascima; za folder u obrasci bude dvostruki izlazak -> $putanja = dirname($_SERVER['REQUEST_URI'],2) - 2 otisli iza
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$naslov = "Zaigraj";
include '../zaglavlje.php';

$greska = false;

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 2) {
    header("Location: prijava.php");
    exit();
}

if (isset($_POST['submit'])) {

    $dnevnik = new Dnevnik();
    $dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

    $tel = $_POST['telefon'];
    $uzorak = "/^(\+385) (\d{2})-(\d{3})-(\d{4})$/";

    if (!preg_match($uzorak, $tel)) {
        $greska = true;
    }

    //mora biti oznacena igra
    $igra = $_POST['igraSrece'];
    if (!isset($igra)) {
        $greska = true;
    }

    //uploader

    $userfile = $_FILES['naziv']['tmp_name'];
    $userfile_name = $_FILES['naziv']['name'];
    $userfile_size = $_FILES['naziv']['size'];
    $userfile_type = $_FILES['naziv']['type'];
    $userfile_error = $_FILES['naziv']['error'];
    if ($userfile_error > 0) {
        echo 'Problem: ';
        switch ($userfile_error) {
            case 1: echo 'Veličina veća od ' . ini_get('upload_max_filesize');
                $greska = true;
                break;
            case 2: echo 'Veličina veća od ' . $_POST["MAX_FILE_SIZE"] . 'B';
                $greska = true;
                break;
            case 3: echo 'Datoteka djelomično prenesena';
                $greska = true;
                break;
            case 4: echo 'Datoteka nije prenesena';
                $greska = true;
                break;
        }
        exit;
    }

    $upfile = '../listici/' . $userfile_name; //odrediste za prijenos relativno u odnosu na trenutnu skriptu uploader ili kopirani kod

    if (is_uploaded_file($userfile)) {
        if (!move_uploaded_file($userfile, $upfile)) {
            echo 'Problem: nije moguće prenijeti datoteku na odredište';
            $greska = true;
            exit;
        }
    } else {
        echo 'Problem: mogući napad prijenosom. Datoteka: ' . $userfile_name;
        $greska = true;
        exit;
    }

    if ($greska == false) {

        $veza = new Baza();
        $veza->spojiDB();
        //provjeri je li kolo otvoreno za tu igru
        $up = "SELECT COUNT(idKolo) FROM Kolo WHERE IgraNaSrecu_idIgraNaSrecu = '" . $igra . "' AND statusKola = 1;";

        $rezultat = $veza->selectDB($up);
        $rezul = mysqli_fetch_row($rezultat);
        $otvoreno = $rezul[0];

        if (intval($otvoreno) == 1) {
            
            //virtualno vrijeme
            $trenutniDatum = date("Y-m-d H:i:s");
            $virtualka = new Virtualno();
            $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
            $vri = $virtualka->postaviVrijeme($trenutniDatum);

            $korisnikUpit = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme='" . $_SESSION['korisnik'] . "'";
            $rez = $veza->selectDB($korisnikUpit);
            $ikor = mysqli_fetch_row($rez);
            $idKorisnika = $ikor[0];

            $putanja = "listici/" . $_FILES['naziv']['name'];

            $up = "SELECT idKolo FROM Kolo WHERE statusKola = 1 AND IgraNaSrecu_idIgraNaSrecu = '" . $igra . "'";
            $rezu = $veza->selectDB($up);
            $ikolo = mysqli_fetch_row($rezu);
            $otvorenoKolo = $ikolo[0];

            $upit = "INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, "
                    . "Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES "
                    . "('" . $_POST['telefon'] . "', '" . $_POST['email'] . "', '" . $_POST['adresa'] . "', '" . $_POST['odabraniBrojevi'] . "', null, null, '4', '" . $idKorisnika . "', '" . $otvorenoKolo . "', '" . $igra . "', '" . $putanja . "', '" . $vri . "')";

            $veza->updateDB($upit);

            $stringDnevnik = $vri . "/Korisnik " . $_SESSION['korisnik'] . " postavlja listić./Upit: " . $upit . "/Tip radnje: 2";
            $dnevnik->spremiDnevnik($stringDnevnik);
            $dnev = explode("/", $stringDnevnik);
            $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                    . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $idKorisnika . '", "2")';
            $veza->updateDB($dnUpit);

            $veza->zatvoriDB();

            header("Location:../korisnik_dodatno/mojiListici.php");
            exit();
        } else {
            echo "Nema otvorenog kola za ovu igru. <br>";
        }
    }
}

$smarty->display("zaigraj.tpl");
$smarty->display("podnozje.tpl");
