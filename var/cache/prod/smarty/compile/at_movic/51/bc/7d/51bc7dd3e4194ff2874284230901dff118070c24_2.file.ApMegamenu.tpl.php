<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:40
  from '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApMegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca4d57343_80996995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bc7dd3e4194ff2874284230901dff118070c24' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApMegamenu.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16ca4d57343_80996995 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
<div id="memgamenu-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ApMegamenu">
	<?php if ((isset($_smarty_tpl->tpl_vars['content_megamenu']->value))) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_megamenu']->value;?>
	<?php }?>
</div>
<?php }
}
}
