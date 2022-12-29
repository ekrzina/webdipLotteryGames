<?php
/* Smarty version 4.0.0, created on 2022-06-12 01:58:25
  from '/var/www/html/ekrzina/templates/zaglavlje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62a52c21561c56_28194088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '276ce390201d2d6dc7533c2250c8aef3377d67be' => 
    array (
      0 => '/var/www/html/ekrzina/templates/zaglavlje.tpl',
      1 => 1654991904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a52c21561c56_28194088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "primjer.conf", null, 0);
?>

<!DOCTYPE html>

<html>

    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'autor');?>
">
        <meta name="description" content="Početna stranica o DIY umjetnosti, kreirana 18.03.2022.">

        <link href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/css/ekrzina.css" rel="stylesheet" type="text/css">
        
    </head>

    <body id="vrh">
        <header>

            <a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/index.php">
                <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/materijali/home.png" alt="logo" height= "65" width="140"/>
            </a>

            <a href="#navnav">
                <img class= "navigacijaIkona" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/materijali/arrow.png" height="60" width="60" alt="NAV"/>
            </a>

            <h1 class="titl"> <a class="naslovLink" href="#vrh">Igre na sreću</a> </h1>
        </header>
        <br><br>
        <!--isset($_SESSION['uloga']) je ista stvar
        lijeva strana varijabilna, desna strana je hardkodirana; svugdje mozemo biti-->
        <nav id="navnav">
            <ul class="izbornikLista">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/index.php">Početna stranica</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/registracija.php">Registracija</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/galerija.php">Galerija</a></li>
                <?php if ($_SESSION['uloga'] > 1) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/zaigraj.php">Zaigraj</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/korisnik_dodatno/mojiListici.php">Moji listići</a></li>
                <?php }?>
                <?php if ($_SESSION['uloga'] > 2) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/moderator_dodatno/popisIgara.php">Igre na sreću</a></li>  
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/zahtjeviZaIsplatu.php">Zahtjevi za isplatu</a></li>  
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/popisKola.php">Kolo</a></li>  
                <?php }?>
                <?php if ($_SESSION['uloga'] > 3) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/admin_dodatno/popisKorisnika.php">Korisnici</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/admin_dodatno/lutrije.php">Lutrija</a></li>  
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/admin_dodatno/pregledDnevnika.php">Dnevnik</a></li>  
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/admin_dodatno/konfiguracija.php">Konfiguracija</a></li>  
                <?php }?>
                <?php if (!(isset($_SESSION['uloga']))) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/prijava.php">Prijava</a></li>
                <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/odjava.php">Odjava</a></li>
                <?php }?>
            </ul>
        </nav>
<?php }
}
