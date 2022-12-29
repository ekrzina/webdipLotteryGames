<?php
/* Smarty version 4.0.0, created on 2022-06-09 00:52:59
  from '/var/www/html/ekrzina/templates/dodjelaModeratora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a1284b4552f8_10416531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b9cd246a3e4452312a4716427c594d85af03ec' => 
    array (
      0 => '/var/www/html/ekrzina/templates/dodjelaModeratora.tpl',
      1 => 1654728755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1284b4552f8_10416531 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Modijeli moderatora</h1>
    
    
        <form id="formLut" class="formPriReg" enctype="multipart/form-data" method="post" name="formLut" action="">
                    <p>
                       <label for="moderator">Korisnik: </label>
                        <select id="moderator" name="moderator">
                        </select>
                        <input type="submit" name="submit" class="buttons" style="margin-left: 16px" form="formLut" value="Dodijeli moderatora">
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
