<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:41
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca50337b8_11716333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '961cbc1f5315cdc9bb378e9f93c4b9e9bb1f990a' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16ca50337b8_11716333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart js-product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8813706661f16ca5028e10_24661164', 'product_quantity');
?>


  <?php }?>
</div>
<?php }
/* {block 'product_minimal_quantity'} */
class Block_158912664461f16ca502d5d9_01807486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="product-minimal-quantity">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

            <?php }?>
          </div>
        <?php
}
}
/* {/block 'product_minimal_quantity'} */
/* {block 'product_availability'} */
class Block_201130817461f16ca502f618_24885498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <span id="product-availability">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
      				<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
      					<span class="product-available">
      						<i class="material-icons rtl-no-flip">&#xE5CA;</i>
      						<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
      					</span>
      				<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
      					<span class="product-last-items">
      						<i class="material-icons">&#xE002;</i>
      						<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
      					</span>
      				<?php } else { ?>
      					<span class="product-unavailable">
      						<i class="material-icons">&#xE14B;</i>
      						<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
      					</span>
      				<?php }?>
      			<?php }?>
          </span>
        <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_8813706661f16ca5028e10_24661164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_8813706661f16ca5028e10_24661164',
  ),
  'product_minimal_quantity' => 
  array (
    0 => 'Block_158912664461f16ca502d5d9_01807486',
  ),
  'product_availability' => 
  array (
    0 => 'Block_201130817461f16ca502f618_24885498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity clearfix">
        <div class="p-cartwapper">
          <div class="qty clearfix">
            <span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            inputmode="numeric"
            pattern="[0-9]*"
            <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_wanted']) {?>
              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
              min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
              value="1"
              min="1"
            <?php }?>
            class="input-group"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
              <i class="icon-bag"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
          </div> 
          <div class="leo-compare-wishlist-button">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          </div>
	  
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158912664461f16ca502d5d9_01807486', 'product_minimal_quantity', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201130817461f16ca502f618_24885498', 'product_availability', $this->tplIndex);
?>


      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
}
