<?php
/* Smarty version 3.1.32, created on 2018-09-12 05:39:54
  from 'C:\xampp\htdocs\prestashop\admin123\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98deea785541_95408798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9146b9c6c321928d5e783d36b18cd5f77bc0a2c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123\\themes\\default\\template\\content.tpl',
      1 => 1536575228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98deea785541_95408798 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
