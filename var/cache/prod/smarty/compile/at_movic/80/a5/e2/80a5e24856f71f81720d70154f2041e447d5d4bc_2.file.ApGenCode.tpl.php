<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:40
  from '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApGenCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca4bd2153_25567840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a5e24856f71f81720d70154f2041e447d5d4bc' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApGenCode.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16ca4bd2153_25567840 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];
}
}
}
