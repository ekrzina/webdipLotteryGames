<?php
/* Smarty version 4.0.0, created on 2022-06-07 20:00:04
  from '/var/www/html/ekrzina/templates/zaigraj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_629f922440ca87_26341525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f87675cd60f00c6ea14f2a63e61b1673547d6379' => 
    array (
      0 => '/var/www/html/ekrzina/templates/zaigraj.tpl',
      1 => 1654624803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f922440ca87_26341525 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Zaigraj</h1>
    
    
        <form id="zaigraj" class="formPriReg" enctype="multipart/form-data" method="post" name="zaigraj" action="">
                    <p><label id="lutrijaLabela" for="lutrija">Lutrija: </label>
                        <select id="lutrija" name="lutrija"><br>
                           
                        </select>
                        <p><label id="igraSreceLabela" for="igraSrece">Igra sreće: </label>
                        <select id="igraSrece" name="igraSrece">
                            
                        </select><br><br>
                        
                        <label id="telefonLabela" for="telefon">Kontakt telefon: </label>
                        <input id="telefon" name="telefon" type="text" size="25" required="required" placeholder="385+xx-xxx-xxxx" /><br>
                        <br>
                        <label id="emailLabela" for="email">Email adresa: </label>
                        <input id="email" name="email" type="text" size="25" required="required" placeholder="xxxx@xxx.xx" /><br>
                        <br>
                        <label id="adresaLabela" for="adresa">Adresa stanovanja: </label>
                        <input id="adresa" name="adresa" type="text" size="25" required="required" /><br>
                        <br>
                        <label id="brojeviLabela" for="odabraniBrojevi">Odabrani brojevi: </label>
                        
                        <input id="odabraniBrojevi" name="odabraniBrojevi" type="text" size="25" required="required" placeholder="X X X X X X X X X X" /><br>
                        
                        <br>
                        <label id="nazivLabela" for="naziv">Slika ispunjenog listića: </label>
                        <input type="file" id="naziv" name="naziv"><br>
                        <br>
                        <input type="submit" name="submit" class="buttons" form="zaigraj" value="Zaigraj">
        </form>
                        <h4>Generirajte slučajne brojeve <a href="../generatorBr.php" target="_blank">ovdje</a>.</h4>     
       
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
