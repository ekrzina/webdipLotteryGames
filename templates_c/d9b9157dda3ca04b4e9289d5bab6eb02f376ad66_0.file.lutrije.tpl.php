<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:40:33
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/lutrije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5ecd189b917_91708763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b9157dda3ca04b4e9289d5bab6eb02f376ad66' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/lutrije.tpl',
      1 => 1655039809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5ecd189b917_91708763 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Popis lutrija</h1>
<br><br>

<br><br>
<table>
    <caption>Prikaz lutriji</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Info Telefon</th>
            <th>E-mail</th>
            <th>Web adresa</th>
            <th>Dodijeli moderatora</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="6" style="font-weight:bold; font-variant-caps: all-small-caps; font-size: 16px; "><p>Kliknite na ID lutrije za njezino ažuriranje</p></td>
    </tr>
    </tfoot>

</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div>
<h4>Za dodavanje lutrije kliknite <a href="dodajLutriju.php">ovdje.</a><h4>

<br><br>

        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="nazivLutrije" selected>Nazivu</option>
                <option value="infoTelefon">Telefonu</option>
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
