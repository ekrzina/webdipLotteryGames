<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//SELECT COUNT(l.idListic), i.nazivIgre, k.korisnickoIme FROM Listic l JOIN IgraNaSrecu i ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Korisnik k ON l.Korisnik_idKorisnik = k.idKorisnik WHERE brojPogodenihBrojeva > 0 AND k.korisnickoIme = 'Edmund F.' GROUP BY i.nazivIgre; 
//if rezultat = null; pisi 0
//SELECT COUNT(l.idListic), i.nazivIgre, k.korisnickoIme FROM Listic l JOIN IgraNaSrecu i ON l.IgraNaSrecu_idIgraNaSrecu = i.idIgraNaSrecu JOIN Korisnik k ON l.Korisnik_idKorisnik = k.idKorisnik WHERE brojPogodenihBrojeva > 0 AND k.korisnickoIme = 'Edmund F.' GROUP BY i.nazivIgre; 
//if rezultat = null; piis 0
//trebat cemo: naziv igre, count(pobjeda), count(gubitak)
//za svaku igru dodatan canvas

//prvo tablica though