<?php
/* Smarty version 3.1.39, created on 2022-01-27 01:39:54
  from 'module:leoproductsearchviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f1e9da28d1d7_78778489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612e196e63244979c46da282a9cc599282f8a3b2' => 
    array (
      0 => 'module:leoproductsearchviewstemp',
      1 => 1643128996,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_61f1e9da28d1d7_78778489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'lps_categories' => 
  array (
    'compiled_filepath' => '/homepages/15/d837691496/htdocs/env-test/var/cache/prod/smarty/compile/at_movic/61/2e/19/612e196e63244979c46da282a9cc599282f8a3b2_2.module.leoproductsearchviewstemp.cache.php',
    'uid' => '612e196e63244979c46da282a9cc599282f8a3b2',
    'call_name' => 'smarty_template_function_lps_categories_43711283461f16ca4d86608_94957145',
  ),
));
?>


<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive">
	<h4 class="title_block">Search here...</h4>
		<form method="get" action="http://pro-coiffure.fr/index.php?controller=productsearch" id="leosearchtopbox" data-label-suggestion="Suggestion" data-search-for="Search for" data-in-category="in category" data-products-for="Products For" data-label-products="Products" data-view-all="View all">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="leoproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		<input type="hidden" name="txt_not_found" value="Aucun produit trouvé">
                <input type="hidden" name="leoproductsearch_static_token" value="14b196bebe9c607f67c92f2c244e59db"/>
		    	<label>Recherche de produits:</label>
		<div class="block_content clearfix leoproductsearch-content">
						<div class="leoproductsearch-result">
				<div class="leoproductsearch-loading cssload-speeding-wheel"></div>
				<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" data-content='' value="" placeholder="Chercher"/>
				<div class="ac_results lps_results"></div>
			</div>
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<script type="text/javascript">
	var blocksearch_type = 'top';
</script>
<!-- /Block search module -->
<?php }
}
