<?php
/* Smarty version 3.1.39, created on 2022-01-26 16:46:31
  from '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/modules/appagebuilder/views/templates/front/profiles/plist1510937024.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f16cd75114a2_94155819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d83991cd13f89b0b1d986635fa7738d114e4525' => 
    array (
      0 => '/homepages/15/d837691496/htdocs/env-test/themes/at_movic/modules/appagebuilder/views/templates/front/profiles/plist1510937024.tpl',
      1 => 1643128996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f16cd75114a2_94155819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169426669461f16cd74f2943_52399682', 'product_flags');
?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11076960261f16cd74f4b97_80917518', 'product_thumbnail');
?>


<div class="pro3-btn">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<div class="quickview<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
<a
  href="#"
  class="quick-view"
  data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
>
	<span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-quickview-bt-content">
		<i class="material-icons search">&#xE8B6;</i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
	</span>
</a>
</div>

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div></div>
    <div class="product-meta">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144184153861f16cd7505ab8_87885547', 'product_name');
?>

<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['category_name'])) && (isset($_smarty_tpl->tpl_vars['product']->value['id_category_default']))) {?><div class="category-default">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Product::getProductCategoriesFull($_smarty_tpl->tpl_vars['product']->value['id_product']), 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <?php if ((($_smarty_tpl->tpl_vars['cat']->value['id_category']) == ($_smarty_tpl->tpl_vars['product']->value['id_category_default']))) {?>
        <a href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['id_category'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }?>
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161239557661f16cd750a401_63969585', 'product_price_and_shipping');
?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartAttribute','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97642960261f16cd750fdd9_35416762', 'product_description_short');
?>
</div>
  </div>
</article>
<?php }
/* {block 'product_flags'} */
class Block_169426669461f16cd74f2943_52399682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_169426669461f16cd74f2943_52399682',
  ),
);
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
/* {block 'product_thumbnail'} */
class Block_11076960261f16cd74f4b97_80917518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_11076960261f16cd74f4b97_80917518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_list_image']->value)) && $_smarty_tpl->tpl_vars['cfg_product_list_image']->value) {?>
	<div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
        

	    <?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
		    <div class="product-list-images-mobile">
		    	<div>
		<?php }?>
			    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					  <img
						class="img-fluid lazyOwl"
						src = ""
						data-src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
						alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
						data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					  >
					  <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
						<span class="product-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>"></span>
					  <?php }?>
					</a>
		<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>			
				</div>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			    	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'] != $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']) {?>
			            <div>
					    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			                    <img
			                      class="img-fluid thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }
if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>"
			                      data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			                      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      itemprop="image"
			                    >
			                </a>
						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div>
		<?php }?>
    <?php } else { ?>
    	<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
		    <div class="product-list-images-mobile">
		    	<div>
		<?php }?>
		    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
				  <img
					class="img-fluid"
					src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
					alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
					data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
				  >
				  <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
					<span class="product-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>"></span>
				  <?php }?>
				</a>

		<?php if ($_smarty_tpl->tpl_vars['lmobile_swipe']->value == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
				</div>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			    	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'] != $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']) {?>
			            <div>
					    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			                    <img
			                      class="thumb js-thumb img-fluid <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
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
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
    <?php }
} else { ?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail leo-noimage">
 <img class="img-fluid" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>class="lazy" data-src<?php } else { ?>src<?php }?> = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
 >
  </a>
<?php }?>
  
<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_144184153861f16cd7505ab8_87885547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_144184153861f16cd7505ab8_87885547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_161239557661f16cd750a401_63969585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_161239557661f16cd750a401_63969585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-price-and-shipping <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has_discount<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
        <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
          <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
          <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

      
      <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
      </span>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

    </div>
  <?php }
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_97642960261f16cd750fdd9_35416762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_97642960261f16cd750fdd9_35416762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="product-description-short" itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),150,'...' ));?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
}
