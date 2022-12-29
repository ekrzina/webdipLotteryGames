<?php
/* Smarty version 4.0.0, created on 2022-06-11 20:11:15
  from '/var/www/html/ekrzina/templates/popisKorisnika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a4dac3b31b66_14272252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51080d2ebffae12c4f741829366041b2b6f0f6bb' => 
    array (
      0 => '/var/www/html/ekrzina/templates/popisKorisnika.tpl',
      1 => 1654971026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a4dac3b31b66_14272252 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Popis korisnika</h1>
<br><br>
<form id='forma' name='forma' method='get' action=''>

</form>
<br><br>
<table>
    <caption>Prikaz korisnika</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ime i prezime</th>
            <th>Korisničko ime</th>
            <th>Datum registracije</th>
            <th>E-mail</th>
            <th>Status korisnika</th>
            <th>Uloga</th>
            <th>Blokiraj / odblokiraj</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>

</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div>
<h4>Za prikaz blokiranih korisnika kliknite <a href='blokiraniKorisnici.php'>ovdje.</a></h4>
<br><br>

        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="imePrezime" selected>Imenu i prezimenu</option>
                <option value="uloga_idUloga">Ulozi</option>
            </select>
        <br><br>
        
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>

<br><br>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>


<?php }
}
