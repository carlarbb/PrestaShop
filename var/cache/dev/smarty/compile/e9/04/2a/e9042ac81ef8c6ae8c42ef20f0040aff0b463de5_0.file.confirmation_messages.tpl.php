<?php
/* Smarty version 3.1.32, created on 2018-09-14 03:28:07
  from 'C:\xampp\htdocs\prestashop\admin123\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9b63075a82a8_20532283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9042ac81ef8c6ae8c42ef20f0040aff0b463de5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1536575232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9b63075a82a8_20532283 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
