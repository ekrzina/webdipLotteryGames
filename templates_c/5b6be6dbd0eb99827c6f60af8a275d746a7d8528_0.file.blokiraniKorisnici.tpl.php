<?php
/* Smarty version 4.0.0, created on 2022-06-12 17:44:47
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/blokiraniKorisnici.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a609ef701539_10570423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6be6dbd0eb99827c6f60af8a275d746a7d8528' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/blokiraniKorisnici.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a609ef701539_10570423 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Popis blokiranih korisnika</h1>
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
</div><br>
<br><br>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>


<?php }
}
