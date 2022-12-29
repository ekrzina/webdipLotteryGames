
{config_load file="primjer.conf"}
<!DOCTYPE html>

<html>

    <head>
        <title>{$title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="{#autor#}">
        <meta name="description" content="Početna stranica o DIY umjetnosti, kreirana 18.03.2022.">

        <link href="{$putanja}/css/ekrzina.css" rel="stylesheet" type="text/css">
        
    </head>

    <body id="vrh">
        <header>

            <a href="{$putanja}/index.php">
                <img class="logo" src="{$putanja}/materijali/home.png" alt="logo" height= "65" width="140"/>
            </a>

            <a href="#navnav">
                <img class= "navigacijaIkona" src="{$putanja}/materijali/arrow.png" height="60" width="60" alt="NAV"/>
            </a>

            <h1 class="titl"> <a class="naslovLink" href="#vrh">Igre na sreću</a> </h1>
        </header>
        <br><br>
        <!--isset($_SESSION['uloga']) je ista stvar
        lijeva strana varijabilna, desna strana je hardkodirana; svugdje mozemo biti-->
        <nav id="navnav">
            <ul class="izbornikLista">
                <li><a href="{$putanja}/index.php">Početna stranica</a></li>
                <li><a href="{$putanja}/obrasci/registracija.php">Registracija</a></li>
                <li><a href="{$putanja}/galerija.php">Galerija</a></li>
                {if isset($smarty.session.uloga)}
                {if $smarty.session.uloga > 1}
                <li><a href="{$putanja}/obrasci/zaigraj.php">Zaigraj</a></li>
                <li><a href="{$putanja}/korisnik_dodatno/mojiListici.php">Moji listići</a></li>
                {/if}
                {/if}
                {if isset($smarty.session.uloga)}
                {if $smarty.session.uloga > 2}
                <li><a href="{$putanja}/moderator_dodatno/popisIgara.php">Igre na sreću</a></li>  
                <li><a href="{$putanja}/obrasci/zahtjeviZaIsplatu.php">Zahtjevi za isplatu</a></li>  
                <li><a href="{$putanja}/obrasci/popisKola.php">Kolo</a></li>  
                {/if}
                {/if}
                {if isset($smarty.session.uloga)}
                {if $smarty.session.uloga > 3}
                <li><a href="{$putanja}/admin_dodatno/popisKorisnika.php">Korisnici</a></li>
                <li><a href="{$putanja}/admin_dodatno/lutrije.php">Lutrija</a></li>  
                <li><a href="{$putanja}/admin_dodatno/pregledDnevnika.php">Dnevnik</a></li>  
                <li><a href="{$putanja}/admin_dodatno/konfiguracija.php">Konfiguracija</a></li>  
                {/if}
                {/if}
                {if !isset($smarty.session.uloga)}
                <li><a href="{$putanja}/obrasci/prijava.php">Prijava</a></li>
                {else}
                <li><a href="{$putanja}/obrasci/odjava.php">Odjava</a></li>
                {/if}
            </ul>
        </nav>
