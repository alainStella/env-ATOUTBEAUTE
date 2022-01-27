<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:48:34
  from '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16d521b6ca1_56883767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce809516c73ceadab1632c83b3616a707a2bc0a7' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1643123617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16d521b6ca1_56883767 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
