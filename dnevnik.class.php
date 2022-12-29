<?php


class Dnevnik {
    
    private $nazivDatoteke = "izvorne_datoteke/dnevnik.log";
    
    public function setNazivDatoteke($nazivDatoteke) {
        $this->nazivDatoteke = $nazivDatoteke;
    }

    public function spremiDnevnik($tekst,$baza=false) {
        if($baza){
            
        } else {
            $f = fopen($this->nazivDatoteke,"a+");
            fwrite($f, $tekst."\n");
            fclose($f);
        }
    }
    
    public function citajDnevnik($baza=false){
        if($baza){
            //TODO spremi u bazu
        } else {
            return file($this->nazivDatoteke);
        }
    }
}
