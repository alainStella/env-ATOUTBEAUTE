<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:41
  from '/homepages/15/d837691496/htdocs/env-test/modules/leofeature/views/templates/hook/leo_compare_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca504edd9_06583750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38856733b6ad9b2ebdfed8867fcc43a22b745b4f' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/leofeature/views/templates/hook/leo_compare_button.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16ca504edd9_06583750 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="compare">
	<a class="leo-compare-button btn-primary btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="javascript:void(0)" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Compare','mod'=>'leofeature'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl ) );
}?>">
		<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-compare-bt-content">
			<i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
			<span class="name-btn-product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
		</span>
	</a>
</div><?php }
}
