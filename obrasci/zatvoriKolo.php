<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);

$naslov = "Zatvori kolo";
include '../zaglavlje.php';

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

if (!isset($_SESSION['uloga']) || $_SESSION['uloga'] < 3) {
    header("Location: ../obrasci/prijava.php");
    exit();
}

$smarty->display("zatvoriKolo.tpl");
$smarty->display("podnozje.tpl");

$veza = new Baza();
$veza->spojiDB();

if (isset($_POST['generiraj'])) {

    $greska = false;

    $idKolo = $_GET['idKolo'];
    //generiraj brojeve

    $brojOd = $_POST['brojOd'];
    $brojDo = $_POST['brojDo'];
    $brojBrojeva = $_GET['brojBrojeva'];

    $generiraniBroj = array();
    $brojevi = "";

    $i = 0;
    if ($brojOd < $brojDo) {

        while ($i < $brojBrojeva) {

            $rezultat = rand($brojOd, $brojDo);
            if (!in_array($rezultat, $generiraniBroj)) {
                array_push($generiraniBroj, $rezultat);
                $i++;
            }
        }

        $brojevi = implode(" ", $generiraniBroj);
    } else {
        $greska = true;
    }

    if ($greska == false) {

        //makni status
        $upit = "UPDATE Kolo SET statusKola = 0, generiraniBrojevi = '" . $brojevi . "' WHERE idKolo = '" . $idKolo . "'";
        $veza->updateDB($upit);

        $trenutnoVrijeme = date('Y-m-d H:i:s');
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);

        $string = $vri . "/Korisnik " . $_SESSION['korisnik'] . " zatvara kolo " . $idKolo . "/Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($string);

        //dnevnik
        //dohvati id
        $nup = "SELECT idKorisnik FROM Korisnik WHERE korisnickoIme = '" . $_SESSION['korisnik'] . "'";
        $result = $veza->selectDB($nup);
        $rezz = mysqli_fetch_row($result);

        $dnev = explode("/", $string);

        $dnUpit = 'INSERT INTO Dnevnik(datumVrijemeRadnje, radnja, upit, Korisnik_idKorisnik, TipRadnje_idTipRadnje) '
                . 'VALUES ("' . $vri . '", "' . $dnev[1] . '", "' . $upit . '", "' . $rezz[0] . '", "2")';

        $veza->updateDB($dnUpit);

        //dohvatiti sve listiće kola sa statusom StatusListica_idStatusListica = 4

        $up = "SELECT li.idListic, li.odabraniBrojevi, li.brojPogodenihBrojeva, li.osvojeniIznos, li.Kolo_idKolo FROM Listic li WHERE li.Kolo_idKolo = '" . $idKolo . "' AND li.StatusListica_idStatusListica = 4";
        $rezultat = $veza->selectDB($up);

        $polje = array();

        while ($getter = mysqli_fetch_array($rezultat)) {
            array_push($polje, $getter);
        }

        for ($i = 0; $i < sizeof($polje); $i++) {

            $pogodeniBrojevi = DohvatiBrojPogodenihBrojeva($polje[$i][1], $brojevi);
            if ($pogodeniBrojevi > 0) {
                $dobit = IzracunajDobit($pogodeniBrojevi, $idKolo);
            }

            //svaki listić koji nema pogodene brojeve postaviti brojPogodenihBrojeva i osvojeniIznos = 0 

            if ($pogodeniBrojevi == 0) {
                $query = "UPDATE Listic SET brojPogodenihBrojeva = '0', osvojeniIznos = '0', StatusListica_idStatusListica = '2' WHERE idListic = '" . $polje[$i][0] . "'";

                $veza->updateDB($query);
            }
            //svaki koji ima izracunati dobit i postaviti broj pogodenih brojeva i iznos
            else {
                $query = "UPDATE Listic SET brojPogodenihBrojeva = '" . $pogodeniBrojevi . "', osvojeniIznos = '" . $dobit . "', StatusListica_idStatusListica = '1' WHERE idListic = '" . $polje[$i][0] . "'";
                $veza->updateDB($query);
            }
        }
    } else {
        echo "<p>Nisu dobro postavljeni brojevi.</p>";
    }

    $veza->zatvoriDB();
}

$veza->zatvoriDB();

//broj brojeva izvlacenja za kolo, string nasih brojeva, string novo generiranih brojeva
function DohvatiBrojPogodenihBrojeva($nasiBrojevi, $generiraniBrojevi) {

    $generiranoPolje = explode(" ", $generiraniBrojevi);
    $nasiBrojeviPolje = explode(" ", $nasiBrojevi);

    //vraca broj preklapajućih brojeva unutar dva polja
    $dobriBrojevi = count(array_intersect($generiranoPolje, $nasiBrojeviPolje));

    return $dobriBrojevi;
}

function IzracunajDobit($pogodeniBrojevi, $kolo) {
    //dohvati iz baze cijenu po pogodenom broju
    $veza = new Baza();
    $veza->spojiDB();

    //dohvati generirane brojeve aktivnog kola iz baze -> id kola je kolo
    $upit = "SELECT fondPoPogodenomBroju From IgraNaSrecu ig JOIN Kolo k ON ig.idIgraNaSrecu = k.IgraNaSrecu_idIgraNaSrecu WHERE idKolo = '" . $kolo . "'";
    $rez = $veza->selectDB($upit);
    $ci = mysqli_fetch_row($rez);
    $cijenaPoBroju = $ci[0];

    $dobit = floatval($cijenaPoBroju) * $pogodeniBrojevi;
    $veza->zatvoriDB();
    return $dobit;
}
