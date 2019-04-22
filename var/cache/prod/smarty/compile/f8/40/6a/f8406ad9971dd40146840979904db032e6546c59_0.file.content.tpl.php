<?php
/* Smarty version 3.1.33, created on 2019-04-16 13:15:59
  from 'C:\OSPanel\domains\prestaTest\admin800cpaaea\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb5ab5f58e069_61464972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8406ad9971dd40146840979904db032e6546c59' => 
    array (
      0 => 'C:\\OSPanel\\domains\\prestaTest\\admin800cpaaea\\themes\\default\\template\\content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb5ab5f58e069_61464972 (Smarty_Internal_Template $_smarty_tpl) {
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
