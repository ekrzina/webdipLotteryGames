<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:40:03
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/konfiguracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5ecb330d182_05346806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54e02edac2a88c3cc57ea4680a09df2bda61eb4d' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/konfiguracija.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5ecb330d182_05346806 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Konfiguracija sustava</h1>
    <div class="formPriReg">
        
        <input type="button" class="buttons" id="resetUvjeta" value="Resetiraj uvjete korištenja">
        <p style="display: inline;font-size: 12px; margin-left:10%">Klikom na gumb resetirat će se uvjeti korištenja kolačića i svi korisnici ponovno moraju prihvatiti uvjete.</p>
        <br><br><br>
        
        <input type="button" class="buttons" id="preuzmiVV" value="Preuzmi virtualno vrijeme">
        <p style="display: inline;font-size: 12px; margin-left:10%">Klikom na gumb preuzima se virtualno vrijeme sa servisa. <a href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html" target="_blank">Ovdje možete pristupiti servisu za promijenu virtualnog vremena.</a></p><br><br>
        <br><br><br>
        
    </div>
    
<br><br>

</section>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>



<?php }
}
