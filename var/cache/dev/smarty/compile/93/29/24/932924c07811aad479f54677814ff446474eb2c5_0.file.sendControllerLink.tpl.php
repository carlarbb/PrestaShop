<?php
/* Smarty version 3.1.32, created on 2018-09-12 05:41:46
  from 'C:\xampp\htdocs\prestashop\modules\out_of_stock\views\templates\front\sendControllerLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98df5ae02d30_14629691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932924c07811aad479f54677814ff446474eb2c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\out_of_stock\\views\\templates\\front\\sendControllerLink.tpl',
      1 => 1536745302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98df5ae02d30_14629691 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript'>
   var linkToController = "<?php echo Context::getContext()->link->getModuleLink('out_of_stock','check');?>
"; 
<?php echo '</script'; ?>
><?php }
}