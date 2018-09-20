<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "module:ps_newproducts/views/templates/hook/ps_newproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10336481805ba29d0a260c06-35865653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproducts/views/templates/hook/ps_newproducts.tpl',
      1 => 1526563862,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '10336481805ba29d0a260c06-35865653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'allNewProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a266589_39575732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a266589_39575732')) {function content_5ba29d0a266589_39575732($_smarty_tpl) {?>

<section class="featured-products clearfix block">
  	<h1 class="h1 products-section-title title_block">
  		<?php echo smartyTranslate(array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

  	</h1>
  	<div class="block_content">
	  	<div class="products">
	    	<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

	  	</div>
	  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
" class="all-product-link btn">
	  		<?php echo smartyTranslate(array('s'=>'View All','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

	  	</a>
  	</div>
</section>

<?php }} ?>
