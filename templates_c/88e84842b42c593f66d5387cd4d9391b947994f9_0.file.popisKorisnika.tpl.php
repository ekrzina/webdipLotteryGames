<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:40:37
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/popisKorisnika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5ecd5e1a513_81322934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88e84842b42c593f66d5387cd4d9391b947994f9' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/popisKorisnika.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5ecd5e1a513_81322934 (Smarty_Internal_Template $_smarty_tpl) {
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
