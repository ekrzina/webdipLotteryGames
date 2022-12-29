<?php
/* Smarty version 4.0.0, created on 2022-06-11 21:49:34
  from '/var/www/html/ekrzina/templates/popisKola.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a4f1ce7f0138_14697645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9527361d54e8e54561a46b301e2854c2183ea939' => 
    array (
      0 => '/var/www/html/ekrzina/templates/popisKola.tpl',
      1 => 1654976973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a4f1ce7f0138_14697645 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Kola</h1>
<table>
    <caption>Prikaz kola</caption>
    <thead>
        <tr>
            <th>ID kolo</th>
            <th>Naziv kola</th>
            <th>Status kola</th>
            <th>Generirani brojevi</th>
            <th>Datum isplate</th>
            <th>Otvori / zatvori</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="6" style="font-weight:bold; font-variant-caps: all-small-caps; font-size: 16px; "><p>Kliknite na ID kola za njegovo ažuriranje</p></td>
    </tr>
    </tfoot>
</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br>
<h4>Za dodavanje kola kliknite<a href="dodajKolo.php"> ovdje.</a><h4>

        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="k.statusKola" selected>Statusu kola</option>
                <option value="k.datumIsplate">Roku isplate</option>
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
