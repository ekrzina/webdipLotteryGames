<?php
/* Smarty version 4.0.0, created on 2022-06-11 21:35:10
  from '/var/www/html/ekrzina/templates/popisIgaraM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a4ee6e2b87c3_49613105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36a73d89e202d2095ad1b346bedb7730cd0495f' => 
    array (
      0 => '/var/www/html/ekrzina/templates/popisIgaraM.tpl',
      1 => 1654976108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a4ee6e2b87c3_49613105 (Smarty_Internal_Template $_smarty_tpl) {
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
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br>
<h4>Za dodavanje igre kliknite<a href="dodajIgruM.php"> ovdje.</a><h4>
<h4>Za pridruživanje igre Vašoj lutriji kliknite<a href="pridruziIgruM.php"> ovdje.</a><h4>

        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <<option value="i.nazivIgre" selected>Nazivu igre</option>
                <option value="i.fondPoPogodenomBroju">Fondu po broju</option>
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
