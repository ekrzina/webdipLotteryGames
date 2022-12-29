<?php
/* Smarty version 4.0.0, created on 2022-06-12 00:43:41
  from '/var/www/html/ekrzina/templates/mojiListici.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a51a9d145831_70930324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e15da7b13cb6dd82a8f49d8d0a399ad3e65f776' => 
    array (
      0 => '/var/www/html/ekrzina/templates/mojiListici.tpl',
      1 => 1654987419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a51a9d145831_70930324 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Moji listići</h1>

<br>
<table>
    <caption>Podaci o mojim listićima</caption>
    <thead>
        <tr>
            <th>ID listića</th>
            <th>Kontakt telefon</th>
            <th>Email adresa</th>
            <th>Adresa stanovanja</th>
            <th>Odabrani brojevi</th>
            <th>Broj pogođenih brojeva</th>
            <th>Status listića</th>
            <th>Ukupna dobit</th>
            <th>Pošalji zahtjev</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="10" style="font-weight:bold; font-variant-caps: all-small-caps; font-size: 16px; "><p>Kliknite na ID listića za njegovo ažuriranje</p></td>
    </tr>
    </tfoot>
</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br>
<form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="s.status">Statusu listića</option>
                <option value="lis.brojPogodenihBrojeva">Broju pogođenih brojeva</option>
            </select>
        <br><br>
        
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>
<br><br>
<a href="statistikaDobitkaGubitka.php">Prikaži moju statistiku</a>
<br><br>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>
<?php }
}
