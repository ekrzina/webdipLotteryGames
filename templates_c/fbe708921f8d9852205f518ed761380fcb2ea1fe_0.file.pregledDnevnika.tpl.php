<?php
/* Smarty version 4.0.0, created on 2022-06-12 01:59:20
  from '/var/www/html/ekrzina/templates/pregledDnevnika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a52c5894cf72_08829729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe708921f8d9852205f518ed761380fcb2ea1fe' => 
    array (
      0 => '/var/www/html/ekrzina/templates/pregledDnevnika.tpl',
      1 => 1654991959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a52c5894cf72_08829729 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Dnevnik</h1>
<br><br>
<form id='forma' name='forma' method='get' action=''>

</form>
<br><br>
<table>
    <caption>Pregled dnevnika</caption>
    <thead>
        <tr>
            <th>ID Dnevnik</th>
            <th>Datum i vrijeme radnje</th>
            <th>Radnja</th>
            <th>Upit</th>
            <th>ID Korisnik</th>
            <th>Tip radnje</th>
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
