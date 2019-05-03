<?php
/* Smarty version 3.1.33, created on 2019-05-03 17:19:19
  from 'C:\OSPanel\domains\prestaTest\themes\Perfect_Theme_Test\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccc4de768c217_69861125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23795e3b14bed74454a320e959b7c2e93ae10c2c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\prestaTest\\themes\\Perfect_Theme_Test\\templates\\errors\\not-found.tpl',
      1 => 1555937643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccc4de768c217_69861125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12857181945ccc4de767eed7_77356296', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_11552182105ccc4de7686252_05278574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_9505975585ccc4de768a1c4_29690613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_12857181945ccc4de767eed7_77356296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_12857181945ccc4de767eed7_77356296',
  ),
  'search' => 
  array (
    0 => 'Block_11552182105ccc4de7686252_05278574',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_9505975585ccc4de768a1c4_29690613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11552182105ccc4de7686252_05278574', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9505975585ccc4de768a1c4_29690613', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
