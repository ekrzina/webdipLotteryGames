<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:33:09
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/generatorBr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5eb15027423_11302482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ea5048142112f63b4e35c5c62771e2b9b54d3f6' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/generatorBr.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5eb15027423_11302482 (Smarty_Internal_Template $_smarty_tpl) {
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
