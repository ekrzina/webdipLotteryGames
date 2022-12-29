<?php
/* Smarty version 4.0.0, created on 2022-06-07 10:57:16
  from '/var/www/html/ekrzina/templates/statistikaDobitkaGubitka.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629f12ecdc4d71_64440846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '842636c0ce79bd19dc02561c543f8db89bfb1d15' => 
    array (
      0 => '/var/www/html/ekrzina/templates/statistikaDobitkaGubitka.tpl',
      1 => 1654556911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f12ecdc4d71_64440846 (Smarty_Internal_Template $_smarty_tpl) {
?><section id='vstatistika'>
<h1>Vaša statistika</h1>
<br><br>
<canvas id="vlastitaStatistika" width="800" height="600" style="padding: 16px; border: solid 1px; border-color: #282A35; margin-left:auto; margin-right:auto; display:block;"></canvas>
</section>
<br><br>
<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
><?php }
}
