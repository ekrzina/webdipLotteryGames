<?php
/* Smarty version 4.0.0, created on 2022-06-08 18:02:47
  from '/var/www/html/ekrzina/templates/zatvoriKolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a0c827698841_10295416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ccde001a155d208c1ef085cc2fec413ef6ed58f' => 
    array (
      0 => '/var/www/html/ekrzina/templates/zatvoriKolo.tpl',
      1 => 1654704166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0c827698841_10295416 (Smarty_Internal_Template $_smarty_tpl) {
?> <h3>Generator slučajnih brojeva</h3>

        <form id="randomBroj" style="background-color: #282A35; color: white; padding: 24px;" method="post" name="randomBroj" action="">
                    <br><br><p><label for="brojOd">Početni broj: </label>
                        <input type="number" id="brojOd" name="brojOd"><br>
                        <br>
                        <label for="brojDo">Završni broj: </label>
                        <input type="number" id="brojDo" name="brojDo"><br>                 
                        
                        <br>
                        <input type="submit" name="generiraj" class="buttons" form="randomBroj" value="Generiraj"><br>
        </form>
    
    <br><br>
    
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>
<?php }
}
