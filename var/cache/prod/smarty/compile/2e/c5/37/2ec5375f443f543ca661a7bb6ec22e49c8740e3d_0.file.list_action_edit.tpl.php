<?php
/* Smarty version 3.1.32, created on 2018-09-11 04:23:20
  from 'C:\xampp\htdocs\prestashop\admin123\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b977b78d541d8_27631267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ec5375f443f543ca661a7bb6ec22e49c8740e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1536575230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b977b78d541d8_27631267 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
