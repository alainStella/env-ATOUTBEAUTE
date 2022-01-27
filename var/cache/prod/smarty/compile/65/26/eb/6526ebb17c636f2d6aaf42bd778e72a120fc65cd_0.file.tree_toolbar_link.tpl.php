<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:48:34
  from '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_toolbar_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16d521bd516_29119023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6526ebb17c636f2d6aaf42bd778e72a120fc65cd' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1643123617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16d521bd516_29119023 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['action']->value))) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
"<?php }?> class="btn btn-default">
	<?php if ((isset($_smarty_tpl->tpl_vars['icon_class']->value))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl ) );?>

</a>
<?php }
}
