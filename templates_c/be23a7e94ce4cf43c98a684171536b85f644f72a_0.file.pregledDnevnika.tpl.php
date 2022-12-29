<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:36:50
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/pregledDnevnika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5ebf25b51b3_93959515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be23a7e94ce4cf43c98a684171536b85f644f72a' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/pregledDnevnika.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5ebf25b51b3_93959515 (Smarty_Internal_Template $_smarty_tpl) {
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
