<?php
/* Smarty version 4.0.0, created on 2022-06-12 16:23:34
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/zaigrajAzuriraj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5f6e6c6e6c3_74876853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de0283c677bce1c893d6bb589511507195e6f03' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/zaigrajAzuriraj.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5f6e6c6e6c3_74876853 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Ažuriraj listić</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <label id="telefonLabela" for="telefon">Kontakt telefon: </label>
                        <input id="telefon" name="telefon" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
"" /><br>
                        <br>
                        <label id="emailLabela" for="email">Email adresa: </label>
                        <input id="email" name="email" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
"" /><br>
                        <br>
                        <label id="adresaLabela" for="adresa">Adresa stanovanja: </label>
                        <input id="adresa" name="adresa" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['adresa']->value;?>
" /><br>
                        <br>
                        <label id="brojeviLabela" for="odabraniBrojevi">Odabrani brojevi: </label>
                        <input id="odabraniBrojevi" name="odabraniBrojevi" type="text" size="25" required="required" value="<?php echo $_smarty_tpl->tpl_vars['brojevi']->value;?>
" /><br>
                        <br>
                        <label id="nazivLabela" for="naziv">Slika ispunjenog listića: </label>
                        <input type="file" id="naziv" name="naziv"><br>
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
