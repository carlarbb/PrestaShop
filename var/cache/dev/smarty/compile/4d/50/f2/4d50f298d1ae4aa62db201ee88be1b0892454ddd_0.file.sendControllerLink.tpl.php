<?php
/* Smarty version 3.1.32, created on 2018-09-13 05:32:36
  from 'C:\xampp\htdocs\prestashop\modules\out_of_stock\views\templates\front\sendControllerLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a2eb40adb91_81475974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d50f298d1ae4aa62db201ee88be1b0892454ddd' => 
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
function content_5b9a2eb40adb91_81475974 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript'>
   var linkToController = "<?php echo Context::getContext()->link->getModuleLink('out_of_stock','check');?>
"; 
<?php echo '</script'; ?>
><?php }
}
