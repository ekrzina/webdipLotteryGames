<?php
/* Smarty version 4.0.0, created on 2022-06-09 22:38:59
  from '/var/www/html/ekrzina/templates/dodajIgruM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a25a63c60628_54157256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19f804c8cdc211000904a49e1a9a32afa72014cb' => 
    array (
      0 => '/var/www/html/ekrzina/templates/dodajIgruM.tpl',
      1 => 1654807094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a25a63c60628_54157256 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Dodaj igru</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                       <label id="lutrijaLabela" for="lutrija">Lutrija: </label>
                        <select id="lutrija" name="lutrija">
                        </select><br><br>
                        <label for="imeLabela">Naziv igre na sreću: </label>
                        <input id="ime" name="ime" type="text" size="25" required="required" /><br>
                        <br>
                        <label for="cijena">Cijena listića: </label>
                        <input id="cijena" name="cijena" type="text" size="25" required="required" /><br>
                        <br>
                        <label id="labelaPocetak" for="dVPocetak">Datum i vrijeme početka igre: </label>
                        <input id="dVPocetak" name="dVPocetak" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" /><br>
                        <br>
                        <label id="labelaKraj" for="dVKraj">Datum i vrijeme kraja igre: </label>
                        <input id="dVKraj" name="dVKraj" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" /><br>
                        <br>
                        <?php if ($_SESSION['uloga'] > 3) {?>
                        <label id="labelaBr" for="brojIzvlacenja">Broj izvlačenja: </label>
                        <input id="brojIzvlacenja" name="brojIzvlacenja" type="number" size="25" required="required"/><br>
                        <br>
                        <label id="labelaFond" for="fond">Fond po pogođenom broju: </label>
                        <input id="fond" name="fond" type="text" size="25" required="required"/><br>
                        <br> 
                        <?php }?>
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Dodaj igru">
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
