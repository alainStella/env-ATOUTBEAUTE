<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:48:34
  from '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16d521c40d1_30946032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9307629b064a098ec0d0c5ad912e0ca366aae6a5' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/admin84624xcik/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1643123617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16d521c40d1_30946032 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
