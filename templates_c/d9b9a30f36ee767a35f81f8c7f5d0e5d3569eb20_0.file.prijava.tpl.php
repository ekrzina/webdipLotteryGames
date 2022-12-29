<?php
/* Smarty version 4.0.0, created on 2022-06-12 22:32:33
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/prijava.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a64d61edf818_05161381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b9a30f36ee767a35f81f8c7f5d0e5d3569eb20' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/prijava.tpl',
      1 => 1655065926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a64d61edf818_05161381 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <h1>Prijavi se</h1>
    <form id="formPrijava" class="formPriReg" method="post" name="formPrijava" action="">
                    <p><label for="korime" id="korimeLabela">Korisničko ime: </label>
                        <?php if ((isset($_COOKIE['korisnikPrijava']))) {?>
                            <input type="text" id="korime" name="korime" size="30" maxlength="30" autofocus="autofocus" value="<?php echo $_COOKIE['korisnikPrijava'];?>
"><br>
                        <?php }?>
                        <?php if (!(isset($_COOKIE['korisnikPrijava']))) {?>
                            <input type="text" id="korime" name="korime" size="30" maxlength="30" autofocus="autofocus" value=""><br>
                        <?php }?>
                        <br>
                        <label for="lozinka" id="lozinkaLabela">Lozinka: </label>
                        <input type="password" id="lozinka" name="lozinka" size="30" maxlength="30"><br>
                        <br>
                        <a id="zaboravih">Zaboravljena lozinka</a>
                        <br><br>
                        <label>Zapamti me:</label>
                        <br>
                        <input id="da" name="zapamti" type="radio" value="DA"/>
                        <label for="da">DA</label><br>
                        <input id="ne" name="zapamti" type="radio" value="NE" checked/>
                        <label for="ne">NE</label><br>
                        <br>
                        <input type="submit" name="submit" class="buttons" form="formPrijava" value="Prijavi se">
        </form>

<br><br>

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
