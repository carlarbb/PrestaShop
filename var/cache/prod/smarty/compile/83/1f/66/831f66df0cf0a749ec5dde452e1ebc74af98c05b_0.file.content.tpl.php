<?php
/* Smarty version 3.1.32, created on 2018-09-11 03:17:09
  from 'C:\xampp\htdocs\prestashop\admin123\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b976bf51a19b7_86836179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831f66df0cf0a749ec5dde452e1ebc74af98c05b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123\\themes\\new-theme\\template\\content.tpl',
      1 => 1536575232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b976bf51a19b7_86836179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
