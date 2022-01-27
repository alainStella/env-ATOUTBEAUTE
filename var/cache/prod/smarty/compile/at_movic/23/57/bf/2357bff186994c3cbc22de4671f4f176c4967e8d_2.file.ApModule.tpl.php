<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:40
  from '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca4d9d8a5_83305893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2357bff186994c3cbc22de4671f4f176c4967e8d' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16ca4d9d8a5_83305893 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
