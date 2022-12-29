<?php

//korisitit klasu
require "$direktorij/baza.class.php";
require "$direktorij/dnevnik.class.php";
require "$direktorij/sesija.class.php";
require "$direktorij/virtualno.class.php";
require "$direktorij/vanjske_biblioteke/smarty-4.0.0/libs/Smarty.class.php";

//prikazuje sve greske
//error_reporting(E_ALL);
//pokretanje sesije
//na svakoj stranici koja poziva zaglavlje
Sesija::kreirajSesiju();

//novi objekt smarty
$smarty = new Smarty();
$smarty->setTemplateDir("$direktorij/templates")
        ->setCompileDir("$direktorij/templates_c")
        ->setConfigDir("$direktorij/configs");

//ucitavanje konfiguracije, ucitat cemo pomak
$smarty->configLoad("primjer.conf");

//ispis sadrzaja sesije
//da nije pokrenuta sesija, dobili bismo null
//var_dump($_SESSION);
//vrijeme
$vrijeme_servera = time();
$vrijeme_sustava = time(); //virtu

$smarty->assign("vrijeme_sustava", $vrijeme_sustava);
$smarty->assign("putanja", $putanja);
$smarty->assign("title", $naslov);

//ovjde se mora zaglavlje staviti, ali problem bude navigacija
//pozvati predlozak tek nakon sto se sve varijable postave
//dva # je konfigiracija ucitana, inace php
$smarty->display("zaglavlje.tpl");
