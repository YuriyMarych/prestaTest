<?php
/* Smarty version 3.1.33, created on 2019-05-03 17:17:27
  from 'C:\OSPanel\domains\prestaTest\themes\Perfect_Theme_Test\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccc4d7747bdb6_56874974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9521e3c725281515ed9d2ab4494600e0fe18b970' => 
    array (
      0 => 'C:\\OSPanel\\domains\\prestaTest\\themes\\Perfect_Theme_Test\\templates\\page.tpl',
      1 => 1555937643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccc4d7747bdb6_56874974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8653816355ccc4d774759b7_66627387', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15032554865ccc4d77477338_68727186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_18501409895ccc4d77476b95_47901299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15032554865ccc4d77477338_68727186', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_10191927695ccc4d774763d2_41188943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18501409895ccc4d77476b95_47901299', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_2511865845ccc4d77479136_65379039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13436588885ccc4d77478969_84769434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2511865845ccc4d77479136_65379039', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7491489825ccc4d7747a942_37198725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2819390595ccc4d7747a199_53079694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7491489825ccc4d7747a942_37198725', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8653816355ccc4d774759b7_66627387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8653816355ccc4d774759b7_66627387',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10191927695ccc4d774763d2_41188943',
  ),
  'page_header' => 
  array (
    0 => 'Block_18501409895ccc4d77476b95_47901299',
  ),
  'page_title' => 
  array (
    0 => 'Block_15032554865ccc4d77477338_68727186',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13436588885ccc4d77478969_84769434',
  ),
  'page_content' => 
  array (
    0 => 'Block_2511865845ccc4d77479136_65379039',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2819390595ccc4d7747a199_53079694',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7491489825ccc4d7747a942_37198725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10191927695ccc4d774763d2_41188943', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13436588885ccc4d77478969_84769434', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2819390595ccc4d7747a199_53079694', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
