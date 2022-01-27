<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:50:40
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16dd0d82339_55436792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c93f0767e67184a2b5deaba098f88e7acbe8146' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/errors/not-found.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16dd0d82339_55436792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123846469661f16dd0d80b25_39536573', 'page_content');
?>

</section>
<?php }
/* {block 'page_content'} */
class Block_123846469661f16dd0d80b25_39536573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_123846469661f16dd0d80b25_39536573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="image-404">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
404-image.png">
    </div>
    <h1>4 0 4</h1>
    <div class="content">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oops, it looks like you are lost ...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p> 
    
    </div>

    <a class="btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>


  <?php
}
}
/* {/block 'page_content'} */
}
