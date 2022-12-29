<?php
/* Smarty version 4.0.0, created on 2022-06-12 17:41:23
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/dodjelaModeratora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a609230526d6_00580736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c97422d1109318a9bd1ce6b42cc99c3d2f0ef95' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/dodjelaModeratora.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a609230526d6_00580736 (Smarty_Internal_Template $_smarty_tpl) {
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
