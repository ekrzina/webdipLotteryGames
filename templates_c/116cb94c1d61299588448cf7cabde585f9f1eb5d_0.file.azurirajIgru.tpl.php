<?php
/* Smarty version 4.0.0, created on 2022-06-09 01:49:55
  from '/var/www/html/ekrzina/templates/azurirajIgru.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a135a381b0b6_97651853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '116cb94c1d61299588448cf7cabde585f9f1eb5d' => 
    array (
      0 => '/var/www/html/ekrzina/templates/azurirajIgru.tpl',
      1 => 1654732189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a135a381b0b6_97651853 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Ažuriraj igru</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <label for="idIgra">ID igre: </label>
                        <input id="idIgra" name="idIgra" type="text" size="25" required="required" disabled="" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /><br>
                        <br>
                        <?php if ($_SESSION['uloga'] > 3) {?>
                            <label for="naziv">Naziv igre: </label>
                            <input id="naziv" name="naziv" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" /><br>
                            <br>
                        <?php } else { ?>
                            <label for="naziv">Naziv igre: </label>
                            <input id="naziv" name="naziv" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" disabled="" /><br>
                            <br>
                        <?php }?>
                        <?php if ($_SESSION['uloga'] > 3) {?>
                            <label for="brojIzvlacenja">Broj izvlačenja: </label>
                            <input id="brojIzvlacenja" name="brojIzvlacenja" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['brojIzvlacenja']->value;?>
" /><br>
                            <br>
                        <?php } else { ?>
                            <label for="brojIzvlacenja">Broj izvlačenja: </label>
                            <input id="brojIzvlacenja" name="brojIzvlacenja" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['brojIzvlacenja']->value;?>
" disabled="" /><br>
                        <br>
                        <?php }?>
                        <?php if ($_SESSION['uloga'] > 3) {?>
                            <label for="fondPoBroju">Fond po pogođenom broju: </label>
                            <input id="fondPoBroju" name="fondPoBroju" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['fond']->value;?>
" /><br>
                            <br>
                        <?php } else { ?>
                            <label for="fondPoBroju">Fond po pogođenom broju: </label>
                            <input id="fondPoBroju" name="fondPoBroju" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['fond']->value;?>
" disabled="" /><br>
                            <br>
                        <?php }?>
                        <label for="cijena">Cijena listića: </label>
                        <input id="cijena" name="cijena" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['cijena']->value;?>
" /><br>
                        <br>
                        <label id="labelaPocetak" for="dVPocetak">Datum i vrijeme početka igre: </label>
                        <input id="dVPocetak" name="dVPocetak" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" value="<?php echo $_smarty_tpl->tpl_vars['dVPocetak']->value;?>
" /><br>
                        <br>
                        <label id="labelaKraj" for="dVKraj">Datum i vrijeme kraja igre: </label>
                        <input id="dVKraj" name="dVKraj" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" value="<?php echo $_smarty_tpl->tpl_vars['dVKraj']->value;?>
" /><br>
                        <br>                  
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Ažuriraj">
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
