<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:40
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca4ada8c4_57832124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7416bac822f560fb742e1a0da6aa816fe094cbc8' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/templates/catalog/product.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 2,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:sub/product_info/accordions.tpl' => 1,
    'file:sub/product_info/default.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_61f16ca4ada8c4_57832124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152043430061f16ca4abaac0_34900885', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30244600261f16ca4abe797_53730806', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29618045861f16ca4ac0746_80891000', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_152043430061f16ca4abaac0_34900885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_152043430061f16ca4abaac0_34900885',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_30244600261f16ca4abe797_53730806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_30244600261f16ca4abe797_53730806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_135468735961f16ca4ac29d2_95346920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_209085999861f16ca4ac2418_94772011 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135468735961f16ca4ac29d2_95346920', 'product_cover_thumbnails', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'product_images_modal'} */
class Block_175789504661f16ca4ac33c0_53670202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_content_container'} */
class Block_116592805561f16ca4ac2137_37563752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="page-content" id="content">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209085999861f16ca4ac2418_94772011', 'page_content', $this->tplIndex);
?>

            </section>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175789504661f16ca4ac33c0_53670202', 'product_images_modal', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_75836172861f16ca4ac4427_34845363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_154022967361f16ca4ac4165_20338617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="h1 product-detail-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75836172861f16ca4ac4427_34845363', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_170317499861f16ca4ac3e87_80792344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154022967361f16ca4ac4165_20338617', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_57401441761f16ca4ac57a0_90628726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_48781630961f16ca4ac5f66_26125919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_36472028261f16ca4ac7667_37078866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_124964144261f16ca4aca295_69768457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_124048564761f16ca4acd600_10322989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_106019688261f16ca4acaa88_79023730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124048564761f16ca4acd600_10322989', 'product_miniature', $this->tplIndex);
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_108981529361f16ca4acea57_47161589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_48552813361f16ca4acf267_47129433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_27566110261f16ca4acfa26_77794417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_199496148961f16ca4ad0242_20667274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_125270439561f16ca4ac9202_42122876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124964144261f16ca4aca295_69768457', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106019688261f16ca4acaa88_79023730', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108981529361f16ca4acea57_47161589', 'product_discounts', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48552813361f16ca4acf267_47129433', 'product_add_to_cart', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27566110261f16ca4acfa26_77794417', 'product_additional_info', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199496148961f16ca4ad0242_20667274', 'product_refresh', $this->tplIndex);
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_48882067461f16ca4ad0989_04463286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_info'} */
class Block_40854505461f16ca4ad1112_12591705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'tab') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/accordions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>  
      <?php
}
}
/* {/block 'product_info'} */
/* {block 'product_miniature'} */
class Block_92873967961f16ca4ad5e86_03862568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ((isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
                  <?php }?>
                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_46933387861f16ca4ad3265_78995561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
    <section class="product-accessories clearfix">
      <h3 class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
      <div class="products">
        <div class="owl-row <?php if ((isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8');
}?>">
          <div id="category-products2" class="owl-carousel owl-theme owl-loading">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92873967961f16ca4ad5e86_03862568', 'product_miniature', $this->tplIndex);
?>

              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
    </section>
  <?php }
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_190914783161f16ca4ad87a7_63065117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_58123269561f16ca4ad9198_44495293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_71572109561f16ca4ad9c20_57510154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- Footer content -->
          <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_149794639361f16ca4ad9955_90926168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71572109561f16ca4ad9c20_57510154', 'page_footer', $this->tplIndex);
?>

        </footer>
      <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_29618045861f16ca4ac0746_80891000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_29618045861f16ca4ac0746_80891000',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_116592805561f16ca4ac2137_37563752',
  ),
  'page_content' => 
  array (
    0 => 'Block_209085999861f16ca4ac2418_94772011',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_135468735961f16ca4ac29d2_95346920',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_175789504661f16ca4ac33c0_53670202',
    1 => 'Block_58123269561f16ca4ad9198_44495293',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_170317499861f16ca4ac3e87_80792344',
  ),
  'page_header' => 
  array (
    0 => 'Block_154022967361f16ca4ac4165_20338617',
  ),
  'page_title' => 
  array (
    0 => 'Block_75836172861f16ca4ac4427_34845363',
  ),
  'product_prices' => 
  array (
    0 => 'Block_57401441761f16ca4ac57a0_90628726',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_48781630961f16ca4ac5f66_26125919',
  ),
  'product_customization' => 
  array (
    0 => 'Block_36472028261f16ca4ac7667_37078866',
  ),
  'product_buy' => 
  array (
    0 => 'Block_125270439561f16ca4ac9202_42122876',
  ),
  'product_variants' => 
  array (
    0 => 'Block_124964144261f16ca4aca295_69768457',
  ),
  'product_pack' => 
  array (
    0 => 'Block_106019688261f16ca4acaa88_79023730',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_124048564761f16ca4acd600_10322989',
    1 => 'Block_92873967961f16ca4ad5e86_03862568',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_108981529361f16ca4acea57_47161589',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_48552813361f16ca4acf267_47129433',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_27566110261f16ca4acfa26_77794417',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_199496148961f16ca4ad0242_20667274',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_48882067461f16ca4ad0989_04463286',
  ),
  'product_info' => 
  array (
    0 => 'Block_40854505461f16ca4ad1112_12591705',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_46933387861f16ca4ad3265_78995561',
  ),
  'product_footer' => 
  array (
    0 => 'Block_190914783161f16ca4ad87a7_63065117',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_149794639361f16ca4ad9955_90926168',
  ),
  'page_footer' => 
  array (
    0 => 'Block_71572109561f16ca4ad9c20_57510154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productLayout'])) && $_smarty_tpl->tpl_vars['product']->value['productLayout'] != '') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'typeProduct'=>'detail'),$_smarty_tpl ) );?>

  <?php } else { ?>

    <section id="main">
    <meta content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

      <div class="row product-container  js-product-container">
        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116592805561f16ca4ac2137_37563752', 'page_content_container', $this->tplIndex);
?>

        </div>

        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170317499861f16ca4ac3e87_80792344', 'page_header_container', $this->tplIndex);
?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57401441761f16ca4ac57a0_90628726', 'product_prices', $this->tplIndex);
?>


          <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48781630961f16ca4ac5f66_26125919', 'product_description_short', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36472028261f16ca4ac7667_37078866', 'product_customization', $this->tplIndex);
?>

            <?php }?>

            <div class="product-actions js-product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125270439561f16ca4ac9202_42122876', 'product_buy', $this->tplIndex);
?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48882067461f16ca4ad0989_04463286', 'hook_display_reassurance', $this->tplIndex);
?>


          </div>
        </div>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40854505461f16ca4ad1112_12591705', 'product_info', $this->tplIndex);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46933387861f16ca4ad3265_78995561', 'product_accessories', $this->tplIndex);
?>


<?php echo '<script'; ?>
 type="text/javascript">
  products_list_functions.push(
    function(){
      if($('#category-products2').parents('.tab-pane').length)
      {   
          if(!$('#category-products2').parents('.tab-pane').hasClass('active'))
          {
              var width_owl_active_tab = $('#category-products2').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();   
              $('#category-products2').width(width_owl_active_tab);
          }
      }
      $('#category-products2').owlCarousel({
        <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
          direction:'rtl',
        <?php } else { ?>
          direction:'ltr',
        <?php }?>
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1200, 4],
        itemsDesktopSmall : [992, 3],
        itemsTablet : [768, 2],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,         // true : show only 1 item
        itemsScaleUp : false,
        slideSpeed : 200,  //  change speed when drag and drop a item
        paginationSpeed :800, // change speed when go next page

        autoPlay : false,   // time to show each item
        stopOnHover : false,
        navigation : true,
        navigationText : ["&lsaquo;", "&rsaquo;"],

        scrollPerPage :true,
        responsive :true,
        
        pagination : false,
        paginationNumbers : false,
        
        addClassActive : true,
        
        mouseDrag : true,
        touchDrag : true,

        addClassActive :    true,
        afterInit: OwlLoaded,
        afterAction : SetOwlCarouselFirstLast,

      });
    }
  );
  function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
    if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
        el.width('100%');
  };
<?php echo '</script'; ?>
>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190914783161f16ca4ad87a7_63065117', 'product_footer', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58123269561f16ca4ad9198_44495293', 'product_images_modal', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149794639361f16ca4ad9955_90926168', 'page_footer_container', $this->tplIndex);
?>


    </section>
  <?php }
}
}
/* {/block 'content'} */
}
