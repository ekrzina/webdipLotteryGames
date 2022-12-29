<?php
/* Smarty version 4.0.0, created on 2022-06-12 16:49:50
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/isplata.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5fd0e00c968_16029539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2d40087665f56dfd4738942d0b6ffd7207843e' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/isplata.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5fd0e00c968_16029539 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    
    <form id="isplataForm" class="formPriReg" method="post" name="isplataForm" action="">
                    <p>Želite li isplatiti Vaš listić?</p>
                    <h1>Iznos isplate: <?php echo $_smarty_tpl->tpl_vars['iznos']->value;?>
</h1>
                        <p><input type="submit" name="submit" class="buttons" form="isplataForm" value="       DA       ">
                        <input type="button" class="buttons" id="izlazi" value="       NE       "> </p>
        </form>

<br><br>

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
