<?php
/* Smarty version 4.0.0, created on 2022-06-10 20:36:19
  from '/var/www/html/ekrzina/templates/pridruziIgruM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a38f23af4bb6_32724739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d5dc35260b454b0c296621659e5ac3ccd35dbb' => 
    array (
      0 => '/var/www/html/ekrzina/templates/pridruziIgruM.tpl',
      1 => 1654625002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a38f23af4bb6_32724739 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Pridruži igru lutriji</h1>
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                       <label id="lutrijaLabela" for="lutrija">Lutrija: </label>
                       <select id="lutrija" name="lutrija" required="">
                        </select><br><br>
                        <label id="igraLabela" for="lutrija">Igra: </label>
                        <select id="igra" name="igra" required="">
                        </select>
                        <br><br><br>           
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Ažuriraj">
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
