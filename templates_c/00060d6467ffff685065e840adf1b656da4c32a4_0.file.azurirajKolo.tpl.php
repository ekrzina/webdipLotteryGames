<?php
/* Smarty version 4.0.0, created on 2022-06-13 17:31:12
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/azurirajKolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a75840a8c6d2_67039107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00060d6467ffff685065e840adf1b656da4c32a4' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/azurirajKolo.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a75840a8c6d2_67039107 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Dodaj kolo</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p><label for="imeLabela">Igra na sreću: </label>
                        <select id="ime" name="ime">
                        </select><br><br>
                        <label id="datumIsplateLabela" for="datumIsplate">Datum i vrijeme isplate dobitka: </label>
                        <input id="datumIsplate" name="datumIsplate" type="text" size="15" required="required" value="<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
" /><br>
                        <br>            
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Dodaj kolo">
        </form>
      
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
