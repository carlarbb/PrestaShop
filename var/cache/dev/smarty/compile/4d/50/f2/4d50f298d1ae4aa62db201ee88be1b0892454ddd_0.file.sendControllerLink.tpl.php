<?php
/* Smarty version 3.1.32, created on 2018-09-20 05:47:25
  from 'C:\xampp\htdocs\prestashop\modules\out_of_stock\views\templates\front\sendControllerLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba36cadd9ef60_21279476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d50f298d1ae4aa62db201ee88be1b0892454ddd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\out_of_stock\\views\\templates\\front\\sendControllerLink.tpl',
      1 => 1537256236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba36cadd9ef60_21279476 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript'>
   var linkToController = "<?php echo Context::getContext()->link->getModuleLink('out_of_stock','check');?>
"; 
<?php echo '</script'; ?>
>  <?php }
}
