<?php
/* Smarty version 4.0.0, created on 2022-06-07 20:24:11
  from '/var/www/html/ekrzina/templates/dodajKolo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629f97cbcd1308_27118762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737ab6612d83359dfb17d2aef900065234e1f40e' => 
    array (
      0 => '/var/www/html/ekrzina/templates/dodajKolo.tpl',
      1 => 1654626185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f97cbcd1308_27118762 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Dodaj kolo</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p><label for="imeLabela">Igra na sreću: </label>
                        <select id="ime" name="ime">
                        </select><br><br>
                        <label id="datumIsplateLabela" for="datumIsplate">Datum i vrijeme isplate dobitka: </label>
                        <input id="datumIsplate" name="datumIsplate" type="text" size="15" required="required" placeholder="YYYY-mm-dd HH:ii:ss" /><br>
                        <br>            
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Dodaj kolo">
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
