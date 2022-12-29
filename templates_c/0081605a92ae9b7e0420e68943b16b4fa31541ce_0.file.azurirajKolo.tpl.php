<?php
/* Smarty version 4.0.0, created on 2022-06-08 17:14:21
  from '/var/www/html/ekrzina/templates/azurirajKolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a0bccdeb14b7_20333768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0081605a92ae9b7e0420e68943b16b4fa31541ce' => 
    array (
      0 => '/var/www/html/ekrzina/templates/azurirajKolo.tpl',
      1 => 1654701251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0bccdeb14b7_20333768 (Smarty_Internal_Template $_smarty_tpl) {
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
