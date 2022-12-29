<?php
/* Smarty version 4.0.0, created on 2022-06-12 15:28:00
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/aktivacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a5e9e042f0a2_04042830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32af5e8ce1df237d04f9bcca94a01faad4432474' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/aktivacija.tpl',
      1 => 1655039808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5e9e042f0a2_04042830 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    
    <h1>Aktivacija korisničkog računa</h1>
        <form id="aktivacijaRacuna" class="formPriReg" method="post" name="aktivacijaRacuna" action="">
                    <p><label for="aktivacijskiKod">Aktivacijski kod: </label>
                        <input type="text" id="aktivacijskiKod" name="aktivacijskiKod" size="30" maxlength="30"><br>
                        <br>
                        
                        <input type="submit" name="submit" class="buttons" form="aktivacijaRacuna" value=" Aktiviraj račun ">
        </form>

<br><br>

</section>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
><?php }
}
