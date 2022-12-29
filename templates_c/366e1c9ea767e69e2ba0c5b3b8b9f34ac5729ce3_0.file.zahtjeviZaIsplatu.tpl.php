<?php
/* Smarty version 4.0.0, created on 2022-06-12 16:51:20
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/zahtjeviZaIsplatu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5fd68e78f34_17892955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366e1c9ea767e69e2ba0c5b3b8b9f34ac5729ce3' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/zahtjeviZaIsplatu.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5fd68e78f34_17892955 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Zahtjevi za isplatu</h1>
<table>
    <caption>Popis svih zahtjeva</caption>
    <thead>
        <tr>
            <th>ID zahtjev</th>
            <th>Iznos isplate</th>
            <th>Rok isplate</th>
            <th>Isplata potvrđena</th>
            <th>Isplati</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="5"></td>
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
                <option value="k.datumIsplate" selected>Roku isplate</option>
                <option value="z.iznosIsplate">Iznosu isplate</option>
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
