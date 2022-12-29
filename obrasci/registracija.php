<?php

$direktorij = dirname(getcwd());
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$naslov = "Registracija";
include '../zaglavlje.php';

$greska = "";

$dnevnik = new Dnevnik();
$dnevnik->setNazivDatoteke("../izvorne_datoteke/dnevnik.log");

$smarty->display("registracija.tpl");
$smarty->display("podnozje.tpl");

if (isset($_GET['idKorisnik'])) {
    echo $_GET['idKorisnik'];
}

if (isset($_GET['submit'])) {

    //ovo su name i value atributi u obrascu
    foreach ($_GET as $name => $value) {
        if (empty($value)) {
            $greska .= "Polje {$name} nije popunjeno! <br>";
        }
    }

    //provjere!
    //email

    $email = $_GET['email'];
    $uzorak = "/^([\w.-]+)@(\w+)\.(\w{2,3})$/";

    if (!preg_match($uzorak, $email)) {
        $greska .= "Email nije u ispravnom formatu. <br>";
    }

    //datum rođenja u formatu 
    $datumRod = $_GET['datumRod'];

    $dateUzorak = "/^(\d{4})-([0-1][0-9])-([0-3][0-9])$/";

    if (!preg_match($dateUzorak, $datumRod)) {
        $greska .= "Godina rođenja nije u ispravnom formatu. <br>";
    }

    //sadrzi li korime spec znakove
    $korime = $_GET['korime'];
    $specijalniZnakovi = array("!", "#", "$", "%", "&", "(", ")", "*", "-", ";", ":", "<", ">", "=", "@");

    for ($i = 0; $i < strlen($korime); $i++) {
        if (in_array($korime[$i], $specijalniZnakovi)) {
            $greska .= "Korisničko ime sadrži znakove koje ne bi smjelo.<br>";
        }
    }

    //provjera 18 goddina

    $datumRodPolje = explode("-", $datumRod);
    $godRod = $datumRodPolje[0];

    if ((date("Y") - $godRod) < 18) {
        $greska .= "Nemate 18 godina. Nije moguće pristupiti stranici. <br>";
    }

    $imeKorisnika = $_GET['ime'];
    $prezimeKorisnika = $_GET['prezime'];

    //ime min 3 znaka

    if (strlen($imeKorisnika) < 3) {
        $greska .= "Ime treba imati minimalno 3 znaka. <br>";
    }

    //ime 20 znakova
    if (strlen($imeKorisnika) > 20) {
        $greska .= "Ime može imati maksimalno 20 znakova. <br>";
    }

    //prezime max 20 znakova
    if (strlen($prezimeKorisnika) > 15) {
        $greska .= "Prezime može imati maksimalno 15 znakova. <br>";
    }

    //lozinka1 == lozinka2
    
    $loz1 = $_GET['lozinka1'] . substr($_GET['korime'], 0, 3);;
    $loz2 = $_GET['lozinka2'] . substr($_GET['korime'], 0, 3);;
    
    if (hash('sha256', $loz1) != hash('sha256', $loz2)) {
        $greska .= "Lozinke se ne podudaraju! <br>";
    }
    /*
     * nije potrebno radi jqueryja   
      if (isset($greska)) {
      echo "{$greska}";

      //echo hash('sha256', $primjer);
      }
     */
    if ($greska == "") {

        $loz = $_GET['lozinka1'];
        $loz .=  substr($_GET['korime'], 0, 3);
        $imePrezime = $_GET['ime'] . " " . $_GET['prezime'];

        //kreiraj aktivacijski kod
        $aktivacija = generirajAktivacijskiKod();
        $veza = new Baza();
        $veza->spojiDB();

        //virtualno vrijeme
        $trenutnoVrijeme = date('Y-m-d H:i:s');
        $virtualka = new Virtualno();
        $virtualka->postaviPutanju("../izvorne_datoteke/virtualno_vrijeme.txt");
        $vri = $virtualka->postaviVrijeme($trenutnoVrijeme);
        //+ sedam sati za aktivaciju
        $resetVrijeme = date('Y-m-d H:i:s', time() + 7 * 60 * 60);
        $resetVri = $virtualka->postaviVrijeme($resetVrijeme);
        
        $uvjetiKoristenja = $_COOKIE['uvjetiKoristenja'];
        $uv = $virtualka->postaviVrijeme($uvjetiKoristenja);
        
        $upit = "INSERT INTO Korisnik (korisnickoIme, imePrezime, lozinka, lozinkaSha256, datumRegistracije, email, uvjetiKoristenja, brojNeuspjesnihPrijava, "
                . "statusKorisnika, uloga_idUloga, aktivacijskiKod, vrijemeIstekaKoda) VALUES ('" . $_GET['korime'] . "', '" . $imePrezime . "', '" . $_GET['lozinka1'] . "' , '" . hash('sha256', $loz) . "', '" . $vri . "', '" . $_GET['email'] . "', '" . $uv . "', 0, 0, 1, '" . $aktivacija . "', '" . $resetVri . "')";

        $veza->updateDB($upit);

        //dnevnik
        $stringDnevnik = $vri . "/Registriran je novi korisnik " . $_GET['korime'] . "./Upit: " . $upit . "/Tip radnje: 2";
        $dnevnik->spremiDnevnik($stringDnevnik);

        //dohvati id novog korisnika


        $veza->zatvoriDB();
        
        //posalji mail s aktivacijskim kodom i linkom
        //promijenit na projekt
        ///var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057
        $putanjaSkripte = "barka.foi.hr/WebDiP/2021_projekti/WebDiP2021x057/obrasci/aktivacija.php";
        $poruka = "Link za aktivaciju: " . $putanjaSkripte . "\nAktivacijski kod: " . $aktivacija;
        mail($_GET['email'], "Aktivacijski kod: ", $poruka);
        
        echo '<a href="aktivacija.php">Kliknite ovdje za prelazak na aktivaciju računa.</a>';
        
    }
}

function generirajAktivacijskiKod() {

    $kod = "";

    $znakovi = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",
        "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

    for ($i = 0; $i < 10; $i++) {
        $generirano = rand(0, count($znakovi));
        $kod .= $znakovi[$generirano];
    }

    return $kod;
}
