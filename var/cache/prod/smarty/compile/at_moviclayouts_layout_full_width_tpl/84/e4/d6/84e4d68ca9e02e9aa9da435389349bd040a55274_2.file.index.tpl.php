<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:46:31
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16cd78153d0_33893564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84e4d68ca9e02e9aa9da435389349bd040a55274' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/index.tpl',
      1 => 1643184592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16cd78153d0_33893564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204010608161f16cd7813270_12604878', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_91576866961f16cd7813776_17244047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_51328392761f16cd7814256_62786950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          
            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            
          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_89834005961f16cd7813ea3_37959366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51328392761f16cd7814256_62786950', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_204010608161f16cd7813270_12604878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_204010608161f16cd7813270_12604878',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_91576866961f16cd7813776_17244047',
  ),
  'page_content' => 
  array (
    0 => 'Block_89834005961f16cd7813ea3_37959366',
  ),
  'hook_home' => 
  array (
    0 => 'Block_51328392761f16cd7814256_62786950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91576866961f16cd7813776_17244047', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89834005961f16cd7813ea3_37959366', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
