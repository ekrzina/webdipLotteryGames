<?php
/* Smarty version 4.0.0, created on 2022-06-12 16:21:18
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/galerija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5f65ead43f6_73160473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf972f8272fadd802545c5da5ca9583c13f16b1b' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/galerija.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5f65ead43f6_73160473 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="prazno" class="nemaPodataka"></div>
        <section style="display:grid">

            <!--klasa pod elementom... za sad-->

            <div class="formaGrid">
                <h1>Galerija listića</h1>
                <form id="multiForm" class="formPriReg" method="get" name="multiForm" action="">
                    <p><label for="pretrazivac">Filtriraj po kolu: </label><br><br>
                        <select id="pretrazivac" name="pretrazivac">
                        <input type="button" id="gumbPretraga" class= "buttonMulti" form="multiForm" value=" Pretraži ">  
                </form>
            </div>
            
            <div id="insertGalerije"></div>
        </section>
        <br><br>
        
        <div id='gumb'>
                 
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br><br>
        
<section>
        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="l.Kolo_idKolo" selected>Po kolu</option>
                <option value="l.osvojeniIznos">Po ukupnom fondu uplaćenih listića</option>
            </select>
        
        <br><br>
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>
    </section>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>
<?php }
}
