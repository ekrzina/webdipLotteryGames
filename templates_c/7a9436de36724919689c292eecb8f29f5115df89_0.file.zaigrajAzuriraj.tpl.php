<?php
/* Smarty version 4.0.0, created on 2022-06-08 16:47:37
  from '/var/www/html/ekrzina/templates/zaigrajAzuriraj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a0b6895dff11_79558632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a9436de36724919689c292eecb8f29f5115df89' => 
    array (
      0 => '/var/www/html/ekrzina/templates/zaigrajAzuriraj.tpl',
      1 => 1654699566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0b6895dff11_79558632 (Smarty_Internal_Template $_smarty_tpl) {
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
