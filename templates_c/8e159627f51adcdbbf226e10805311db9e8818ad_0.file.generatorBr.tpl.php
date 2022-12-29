<?php
/* Smarty version 4.0.0, created on 2022-06-07 16:37:02
  from '/var/www/html/ekrzina/templates/generatorBr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629f628ece8323_14289337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e159627f51adcdbbf226e10805311db9e8818ad' => 
    array (
      0 => '/var/www/html/ekrzina/templates/generatorBr.tpl',
      1 => 1654612621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f628ece8323_14289337 (Smarty_Internal_Template $_smarty_tpl) {
?> <h3>Generator slučajnih brojeva</h3>

        <form id="randomBroj" style="background-color: #282A35; color: white; padding: 24px;" method="get" name="randomBroj" action="">
                    <br><br><p><label for="brojOd">Početni broj: </label>
                        <input type="number" id="brojOd" name="brojOd"><br>
                        <br>
                        <label for="brojDo">Završni broj: </label>
                        <input type="number" id="brojDo" name="brojDo"><br>                 
                        <br>
                        <label for="brojBrojeva">Broj brojeva: </label>
                        <input type="number" id="brojBrojeva" name="brojBrojeva"><br>
                        <br>
                        <input type="submit" name="generiraj" class="buttons" form="randomBroj" value="Generiraj"><br>
        </form>
    
    <br><br>
    <?php if ((isset($_COOKIE['genBroj']))) {?>
    <h4>Rezultat: <?php echo $_COOKIE['genBroj'];?>
<h4>
    <?php }?>
    <br><br>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
>
<?php }
}
