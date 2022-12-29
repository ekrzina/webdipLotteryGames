<?php
/* Smarty version 4.0.0, created on 2022-05-31 21:12:30
  from '/var/www/html/ekrzina/templates/popis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6296689e5ae3a2_39454897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '819250b5cd5ff1f3f2c558af746d8f99a32dc44c' => 
    array (
      0 => '/var/www/html/ekrzina/templates/popis.tpl',
      1 => 1654024347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6296689e5ae3a2_39454897 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="silazno" selected>Silazno</option>
                <option value="uzlazno">Uzlazno</option>
            </select>
        <br>
        <label for="prema">Prema: </label>
            <select name="prema" id="prema">
                <option value="id" selected>ID</option>
                <option value="uloga">Uloga</option>
                <option value="status">Status</option>
            </select>
        <br><br>
        <input id="sortButton" type="submit" name='submit' value=" Sortiraj! ">
        </form>
<br><br><?php }
}
