<?php
/* Smarty version 4.0.0, created on 2022-06-12 20:41:58
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/pridruziIgruM.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a63376267d36_26384790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9dc68c49e6cc5cdcf72400fbefed59a05ee707e' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/pridruziIgruM.tpl',
      1 => 1655059313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a63376267d36_26384790 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Pridruži igru lutriji</h1>
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idKor']->value;?>
" id="sakriven">
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
