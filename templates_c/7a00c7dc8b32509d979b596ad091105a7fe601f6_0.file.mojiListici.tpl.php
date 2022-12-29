<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:32:27
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/mojiListici.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5eaeb5df261_59246626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a00c7dc8b32509d979b596ad091105a7fe601f6' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/mojiListici.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5eaeb5df261_59246626 (Smarty_Internal_Template $_smarty_tpl) {
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
