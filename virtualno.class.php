<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of virtualno
 *
 * @author WebDiP_09
 */
class Virtualno {

    private $naziv = "izvorne_datoteke/virtualno_vrijeme.txt";

    public function postaviPutanju($naziv) {
        $this->naziv = $naziv;
    }

    public function spremiVrijeme($sat) {
        //prebrise svako novo vrijeme
        $f = fopen($this->naziv, "w+");
        fwrite($f, $sat);
        fclose($f);
    }

    public function preuzmiSaServisa() {

        $url = "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=xml";

        if (!($fp = fopen($url, 'r'))) {
            echo "Problem: nije moguće otvoriti url: " . $url;
            exit;
        }

        //citaj preuzetu datoteku
        $xml_string = fread($fp, 10000);
        fclose($fp);

        // DOM
        $domdoc = new DOMDocument;
        $domdoc->loadXML($xml_string);

        $params = $domdoc->getElementsByTagName('brojSati');
        $sati = 0;

        //postavi sati na trazenu vrijefdnost
        if ($params != NULL) {
            $sati = $params->item(0)->nodeValue;
        }

        return $sati;
    }

    private function citajSate() {
        //potrebno isprva putanju postaviti kako bi ju mogao pročitati
        $file = fopen($this->naziv, "r");
        $brojSati = fread($file, filesize($this->naziv));
        fclose($file);
        return $brojSati;
    }

    public function postaviVrijeme($vrijeme) {

        //vrijeme je u formatu string YYYY-mm-dd HH:ii:ss

        $brojSati = $this->citajSate();
        $novoVrijeme = '';

        if (($brojSati > 0) || ($brojSati == 0)) {
            $novoVrijeme = date('Y-m-d H:i:s', strtotime($vrijeme . ' + ' . $brojSati . ' hours'));
        } else {
            $novoVrijeme = date('Y-m-d H:i:s', strtotime($vrijeme . ' ' . $brojSati . ' hours'));
        }
        return $novoVrijeme;
    }

}
