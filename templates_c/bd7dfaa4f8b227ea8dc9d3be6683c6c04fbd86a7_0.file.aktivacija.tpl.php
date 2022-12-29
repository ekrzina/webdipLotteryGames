<?php
/* Smarty version 4.0.0, created on 2022-06-04 17:05:26
  from '/var/www/html/ekrzina/templates/aktivacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629b74b6665847_10432109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd7dfaa4f8b227ea8dc9d3be6683c6c04fbd86a7' => 
    array (
      0 => '/var/www/html/ekrzina/templates/aktivacija.tpl',
      1 => 1654355071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b74b6665847_10432109 (Smarty_Internal_Template $_smarty_tpl) {
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
