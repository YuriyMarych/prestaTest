<?php
/* Smarty version 3.1.33, created on 2019-04-17 17:10:03
  from 'C:\OSPanel\domains\prestaTest\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb733bb2b81c2_23703310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cad570f12a780f7c2a48c8d008380616364dfff' => 
    array (
      0 => 'C:\\OSPanel\\domains\\prestaTest\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb733bb2b81c2_23703310 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
