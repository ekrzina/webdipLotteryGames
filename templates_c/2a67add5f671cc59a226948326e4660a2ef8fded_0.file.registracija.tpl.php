<?php
/* Smarty version 4.0.0, created on 2022-06-12 21:45:24
  from '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a642542106e4_23574102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a67add5f671cc59a226948326e4660a2ef8fded' => 
    array (
      0 => '/var/www/webdip.barka.foi.hr/2021_projekti/WebDiP2021x057/templates/registracija.tpl',
      1 => 1655063121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a642542106e4_23574102 (Smarty_Internal_Template $_smarty_tpl) {
?> <section>

            <h1>Registriraj se</h1>
            <form id="form1" class="formPriReg" enctype="multipart/form-data" method="get" name="form1" action="">
                <p><label for="ime" id="imeLabela">Ime: </label>
                    <input type="text" id="ime" name="ime" size="25" autofocus="autofocus"><br>
                    <br>
                    <label for="prezime" id="prezimeLabela">Prezime: </label>
                    <input type="text" id="prezime" name="prezime" size="25"><br>
                    <br>
                    <label for="email" id="emailLabela">E-mail adresa: </label>
                    <input type="text" id="email" name="email" size="35" placeholder="ldap@foi.hr"><br>
                    <br>
                    
                    <label for="datumRod" id="datumLabela">Datum rođenja: </label>
                    <input type="text" id="datumRod" name="datumRod" size="25" maxlength="25" placeholder="YYYY-mm-dd"><br>
                    <br>
                    <label for="korime" id="korimeLabela">Korisničko ime: </label>
                    <input type="text" id="korime" name="korime" size="25" maxlength="25"><br>
                    <br>
                    <label for="lozinka1" id="lozinka1Labela">Lozinka: </label>
                    <input type="password" id="lozinka1" name="lozinka1"><br>
                    <br>
                    <label for="lozinka2" id="lozinka2Labela">Ponovi lozinku: </label>
                    <input type="password" id="lozinka2" name="lozinka2" size="50" maxlength="50"><br> 
                    <br>
                    
                    <button style="padding:12px; color:#1a82f0;" class="g-recaptcha" 
                    data-sitekey="6LfY52MgAAAAAPQds0GeW4WFHu8kDXZtnk5hINCd" 
                    data-callback='onSubmit' 
                    data-action='submit'>Nisam robot</button>

                    
            </form>
            <input type="submit" name="submit" class="buttonReg" form="form1" value="Registriraj se">

        </section>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="../javascript/ekrzina_jquery.js"><?php echo '</script'; ?>
><?php }
}
