<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:41
  from '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApBlockLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca5121775_31054585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a6c0de1e8c53fa9e99eaabde21909aeeb7a0cf1' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/appagebuilder/views/templates/hook/ApBlockLink.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16ca5121775_31054585 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'full') {?>        <div class="block ApLink <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
                <h4 class="title_block">
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                </h4>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['links'])) && count($_smarty_tpl->tpl_vars['formAtts']->value['links']) > 0) {?>
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formAtts']->value['links'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['title'] && $_smarty_tpl->tpl_vars['item']->value['link']) {?>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['target_type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) && ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion' || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen')) {?>        <div class="block block-toggler ApLink <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen') {?> accordion_small_screen<?php }?>">
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
                <div class="title clearfix" data-target="#footer-link-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
                    <h4 class="title_block">
	                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                    </h4>
                    <span class="float-xs-right">
                      <span class="navbar-toggler collapse-icons">
                        <i class="material-icons add">&#xE313;</i>
                        <i class="material-icons remove">&#xE316;</i>
                      </span>
                    </span>
                </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['links'])) && count($_smarty_tpl->tpl_vars['formAtts']->value['links']) > 0) {?>
                <ul class="collapse" id="footer-link-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formAtts']->value['links'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['title'] && $_smarty_tpl->tpl_vars['item']->value['link']) {?>
                            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['target_type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        </div>
    <?php }
}
}
}
