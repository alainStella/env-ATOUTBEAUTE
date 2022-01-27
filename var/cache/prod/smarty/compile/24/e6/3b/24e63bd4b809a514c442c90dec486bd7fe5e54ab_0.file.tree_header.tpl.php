<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:48:34
  from '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16d521c0573_36071197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e63bd4b809a514c442c90dec486bd7fe5e54ab' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1643123616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16d521c0573_36071197 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
