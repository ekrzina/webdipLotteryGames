<?php
/* Smarty version 4.0.0, created on 2022-06-07 11:33:18
  from '/var/www/html/ekrzina/templates/popisIgara.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629f1b5e69fd94_45419347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0eab989072002d0263c5e3b8321e94ae7fb7c18' => 
    array (
      0 => '/var/www/html/ekrzina/templates/popisIgara.tpl',
      1 => 1654594396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f1b5e69fd94_45419347 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Igre na sreću</h1>
<table>
    <caption>Prikaz igara</caption>
    <thead>
        <tr>
            <th>ID igre</th>
            <th>Naziv</th>
            <th>Broj izvlačenja</th>
            <th>Fond po pogođenom broju</th>
            <th>Cijena listića</th>
            <th>Datum i vrijeme početka</th>
            <th>Datum i vrijeme završetka</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="7" style="font-weight:bold; font-variant-caps: all-small-caps; font-size: 16px; "><p>Kliknite na ID igre za njezino ažuriranje</p></td>
    </tr>
    </tfoot>
</table>

<form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <<option value="idListic" selected>ID-ju</option>
                <option value="StatusListica_idStatusListica">Statusu</option>
            </select>
        <br><br>
        
        <input id="sortButton" type="submit" name='submit' value=" Sortiraj! ">
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
