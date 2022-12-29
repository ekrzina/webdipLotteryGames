<?php
/* Smarty version 4.0.0, created on 2022-06-05 21:41:44
  from '/var/www/html/ekrzina/templates/isplata.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629d06f8f34962_58292229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366bb7edb87a1b1b61c4c747ce14d36a064a658b' => 
    array (
      0 => '/var/www/html/ekrzina/templates/isplata.tpl',
      1 => 1654458035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d06f8f34962_58292229 (Smarty_Internal_Template $_smarty_tpl) {
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
