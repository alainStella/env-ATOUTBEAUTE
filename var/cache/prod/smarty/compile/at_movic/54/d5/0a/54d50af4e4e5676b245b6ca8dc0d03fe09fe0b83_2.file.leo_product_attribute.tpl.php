<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:46:31
  from '/homepages/15/d837691496/htdocs/env-test/modules/leofeature/views/templates/hook/leo_product_attribute.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16cd75a8a60_69930438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54d50af4e4e5676b245b6ca8dc0d03fe09fe0b83' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/modules/leofeature/views/templates/hook/leo_product_attribute.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16cd75a8a60_69930438 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addToCartFormWrapper" data-product-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productID']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkCartController']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="addToCartForm">
            <div class="variantsProductWrapper">
                <div class="variants-product">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productVariants']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <?php if (count($_smarty_tpl->tpl_vars['group']->value['attributes']) > 0) {?>
                            <div class="clearfix product-variants-item">
                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['show_label'])) && $_smarty_tpl->tpl_vars['configs']->value['show_label']) {?>
                                <span class="control-label"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
                                  <select
                                    class="form-control form-control-select"
                                    id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                                      <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </select>
                                <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
                                          <ul id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="groupUl">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                                              <li class="float-xs-left input-container">
                                                <label>
                                                  <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                                                  <span
                                                    <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>class="color" style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>class="color texture" style="background-image: url(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['texture'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
                                                  ><span class="sr-only"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
                                                </label>
                                              </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                          </ul>	
                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
                                <ul id="group_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="groupUl">
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                                    <li class="input-container float-xs-left groupLi">
                                      <label>
                                        <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute_group']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                                        <span class="radio-label"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_attribute']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                      </label>
                                    </li>
                                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                              <?php }?>
                              
                              
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            
	</form>
</div>
        
        
        <?php }
}
