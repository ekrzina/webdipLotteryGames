<?php
/* Smarty version 4.0.0, created on 2022-06-11 21:57:19
  from '/var/www/html/ekrzina/templates/blokiraniKorisnici.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a4f39f24b4f3_48490236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50a6e2fefde2d6bc2b7f73cea0f2fa6d9f693611' => 
    array (
      0 => '/var/www/html/ekrzina/templates/blokiraniKorisnici.tpl',
      1 => 1654977437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a4f39f24b4f3_48490236 (Smarty_Internal_Template $_smarty_tpl) {
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
