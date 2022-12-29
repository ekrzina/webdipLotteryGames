<?php
/* Smarty version 4.0.0, created on 2022-06-08 23:35:32
  from '/var/www/html/ekrzina/templates/dodajLutriju.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a11624a7d913_52278273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2aa5fb8336512d56cab9133521ff79252c7b2fa' => 
    array (
      0 => '/var/www/html/ekrzina/templates/dodajLutriju.tpl',
      1 => 1654724124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a11624a7d913_52278273 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Dodaj lutriju</h1>
    
    
        <form id="formLut" class="formPriReg" enctype="multipart/form-data" method="post" name="formLut" action="">
                    <p>
                       <label id="nazivLabela" for="naziv">Naziv lutrije: </label>
                        <input id="naziv" name="naziv" type="text" size="25" required="required" /><br>
                        <br>
                        <label for="telefon">Info telefon: </label>
                        <input id="telefon" name="telefon" type="tel" size="25" required="required" /><br>
                        <br>
                        <label for="email">E-mail: </label>
                        <input id="email" name="email" type="email" size="25" required="required" /><br>
                        <br>
                        <label for="web">Web adresa: </label>
                        <input id="web" name="web" type="url" size="25" required="required"/><br>
                        <br>
                        <input type="submit" name="submit" class="buttons" form="formLut" value="Dodaj lutriju">
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
