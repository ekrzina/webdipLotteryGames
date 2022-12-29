<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$brojOd = $_GET['brojOd'];
$brojDo = $_GET['brojDo'];
$brojBrojeva = $_GET['brojBrojeva'];

$generiraniBroj = array();
$i = 0;
if (($brojOd < $brojDo) && ($brojBrojeva > 0)) {

    while ($i < $brojBrojeva) {

        $naziv = "rezultat" . $i;
        $rezultat = rand($brojOd, $brojDo);

        if (!in_array($rezultat, $generiraniBroj)) {
            $generiraniBroj += array($naziv => $rezultat);
            $i++;
        }
    }
} else {
    $generiraniBroj = array("rezultat" => "Nisu točno upisani podaci.");
}

echo json_encode($generiraniBroj);
