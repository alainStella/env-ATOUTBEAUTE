<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:45:40
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/modules/appagebuilder/views/templates/front/details/detail1521743059.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16ca4eab391_91895961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c871919a396d396db7bf1adc94e46c79d8a73777' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/modules/appagebuilder/views/templates/front/details/detail1521743059.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_61f16ca4eab391_91895961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<section id="main" class="product-detail product-image-thumbs-bottom product-image-thumbs product-thumbs-bottom" itemscope itemtype="https://schema.org/Product">
  <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><div class="row"><div class="col-form_id-form_9367402777406408 col-md-6 col-lg-6 col-xl-6">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141238637561f16ca4e73ff7_73479102', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128213791861f16ca4e8cfa6_70859165', 'product_images_modal');
?>

                            </div><div class="col-form_id-form_15874367062488778 col-md-6 col-lg-6 col-xl-6">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147164018261f16ca4e8dcc1_71945780', 'page_header_container');
?>
<div class="p-reference">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39550108561f16ca4e8f904_26730223', 'product_reference');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116020363061f16ca4e918b8_25109352', 'product_quantities');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72802489761f16ca4e93b57_97439547', 'product_prices');
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79831745861f16ca4e94e67_07337991', 'product_description_short');
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14795865361f16ca4e972b6_02150843', 'product_customization');
?>

<?php }?><div class="leo-more-cdown" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
<div class="product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154657145461f16ca4e98e08_98645442', 'product_buy');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80380359761f16ca4ea0ad8_03075026', 'product_additional_info');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75143142961f16ca4ea1772_61003433', 'hook_display_reassurance');
?>

                            </div><div class="col-form_id-form_4666379129988496 col-md-12 col-lg-12 col-xl-12">
<?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204568482561f16ca4ea2a19_25977394', 'product_accessories');
?>


<?php echo '<script'; ?>
 type="text/javascript">

  products_list_functions.push(
    function(){
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
        itemsMobile : [480, 2],
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

      });
    }
  ); 
  
<?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180734001061f16ca4ea9262_22470403', 'product_footer');
?>

                            </div></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59202956161f16ca4eaa272_11854491', 'page_footer_container');
?>

</section>

<?php }
/* {block 'product_flags'} */
class Block_122928198761f16ca4e7a002_31620936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_30749229661f16ca4e79b52_48548070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122928198761f16ca4e7a002_31620936', 'product_flags', $this->tplIndex);
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                  <i class="material-icons zoom-in">&#xE8FF;</i>
                </div>
              <?php } else { ?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
              <?php }?>
            </div>
          <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_147630411561f16ca4e7ff09_91137879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="thumb-gallery" class="product-thumb-images">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <div class="thumb-container <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> active <?php }?>">
                    <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                      <img
                        class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected <?php }?>"
                        data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        itemprop="image"
                      >
                    </a>
                  </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
                <div class="thumb-container">
                  <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                    <img 
                      class="thumb js-thumb img-fluid" 
                      data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      itemprop="image"
                    >
                  </a>
                </div>
              <?php }?>
            </div>
            
            <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
              <div class="arrows-product-fake slick-arrows">
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
              </div>
            <?php }?>
          <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_cover_thumbnails'} */
class Block_188153152461f16ca4e749c7_09424258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['isMobile']->value && $_smarty_tpl->tpl_vars['dmobile_swipe']->value) {?>
          <div class="list-images-mobile">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
              <div>
                <img
                  class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected <?php }?>"
                  data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  itemprop="image"
                >
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        <?php } else { ?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30749229661f16ca4e79b52_48548070', 'product_cover', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147630411561f16ca4e7ff09_91137879', 'product_images', $this->tplIndex);
?>

        <?php }?>
        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_150754714061f16ca4e74522_90268655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="images-container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188153152461f16ca4e749c7_09424258', 'product_cover_thumbnails', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_141238637561f16ca4e73ff7_73479102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_141238637561f16ca4e73ff7_73479102',
  ),
  'page_content' => 
  array (
    0 => 'Block_150754714061f16ca4e74522_90268655',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_188153152461f16ca4e749c7_09424258',
  ),
  'product_cover' => 
  array (
    0 => 'Block_30749229661f16ca4e79b52_48548070',
  ),
  'product_flags' => 
  array (
    0 => 'Block_122928198761f16ca4e7a002_31620936',
  ),
  'product_images' => 
  array (
    0 => 'Block_147630411561f16ca4e7ff09_91137879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="page-content" id="content" data-templateview="bottom" data-numberimage="5" data-numberimage1200="4" data-numberimage992="4" data-numberimage768="4" data-numberimage576="4" data-numberimage480="3" data-numberimage360="3" data-templatemodal="0" data-templatezoomtype="in" data-zoomposition="right" data-zoomwindowwidth="400" data-zoomwindowheight="400">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150754714061f16ca4e74522_90268655', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_images_modal'} */
class Block_128213791861f16ca4e8cfa6_70859165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_128213791861f16ca4e8cfa6_70859165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_6768910761f16ca4e8e5f8_44324409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_49319534361f16ca4e8e161_88099253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="h1 product-detail-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6768910761f16ca4e8e5f8_44324409', 'page_title', $this->tplIndex);
?>
</h1>
	<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_147164018261f16ca4e8dcc1_71945780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_147164018261f16ca4e8dcc1_71945780',
  ),
  'page_header' => 
  array (
    0 => 'Block_49319534361f16ca4e8e161_88099253',
  ),
  'page_title' => 
  array (
    0 => 'Block_6768910761f16ca4e8e5f8_44324409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49319534361f16ca4e8e161_88099253', 'page_header', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_reference'} */
class Block_39550108561f16ca4e8f904_26730223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_39550108561f16ca4e8f904_26730223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']))) {?>
                  <div class="product-reference">
                    <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
                    <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
              <?php }?>
            <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_116020363061f16ca4e918b8_25109352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantities' => 
  array (
    0 => 'Block_116020363061f16ca4e918b8_25109352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
                  <div class="product-quantities">
                      <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                <?php }?>
            <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_prices'} */
class Block_72802489761f16ca4e93b57_97439547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_72802489761f16ca4e93b57_97439547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_79831745861f16ca4e94e67_07337991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_79831745861f16ca4e94e67_07337991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_14795865361f16ca4e972b6_02150843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_14795865361f16ca4e972b6_02150843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
	<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_118241601461f16ca4e9a776_25718846 extends Smarty_Internal_Block
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
class Block_25863637061f16ca4e9caa5_40414909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_113622967761f16ca4e9b3c3_35324029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
          <section class="product-pack">
            <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25863637061f16ca4e9caa5_40414909', 'product_miniature', $this->tplIndex);
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
class Block_70821206861f16ca4e9e089_23814226 extends Smarty_Internal_Block
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
class Block_180136763761f16ca4e9ecb7_20805032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_183418140661f16ca4e9f8c9_12124625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_154657145461f16ca4e98e08_98645442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_154657145461f16ca4e98e08_98645442',
  ),
  'product_variants' => 
  array (
    0 => 'Block_118241601461f16ca4e9a776_25718846',
  ),
  'product_pack' => 
  array (
    0 => 'Block_113622967761f16ca4e9b3c3_35324029',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_25863637061f16ca4e9caa5_40414909',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_70821206861f16ca4e9e089_23814226',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_180136763761f16ca4e9ecb7_20805032',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_183418140661f16ca4e9f8c9_12124625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118241601461f16ca4e9a776_25718846', 'product_variants', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113622967761f16ca4e9b3c3_35324029', 'product_pack', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70821206861f16ca4e9e089_23814226', 'product_discounts', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180136763761f16ca4e9ecb7_20805032', 'product_add_to_cart', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183418140661f16ca4e9f8c9_12124625', 'product_refresh', $this->tplIndex);
?>

    </form>
  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_additional_info'} */
class Block_80380359761f16ca4ea0ad8_03075026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_80380359761f16ca4ea0ad8_03075026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'hook_display_reassurance'} */
class Block_75143142961f16ca4ea1772_61003433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_75143142961f16ca4ea1772_61003433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_172653792261f16ca4ea57c2_94196621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ((isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                      
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                  <?php }?>
                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_204568482561f16ca4ea2a19_25977394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_204568482561f16ca4ea2a19_25977394',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_172653792261f16ca4ea57c2_94196621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
    <section class="product-accessories clearfix">
      <h3 class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
      <div class="products">
        <div class="owl-row <?php if ((isset($_smarty_tpl->tpl_vars['productClassWidget']->value))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8');
}?>">
          <div id="category-products2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172653792261f16ca4ea57c2_94196621', 'product_miniature', $this->tplIndex);
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
class Block_180734001061f16ca4ea9262_22470403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_180734001061f16ca4ea9262_22470403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_footer'} */
/* {block 'page_footer'} */
class Block_114524747361f16ca4eaa710_49457038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    	<!-- Footer content -->
	    <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_59202956161f16ca4eaa272_11854491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_59202956161f16ca4eaa272_11854491',
  ),
  'page_footer' => 
  array (
    0 => 'Block_114524747361f16ca4eaa710_49457038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <footer class="page-footer">
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114524747361f16ca4eaa710_49457038', 'page_footer', $this->tplIndex);
?>

	  </footer>
	<?php
}
}
/* {/block 'page_footer_container'} */
}
