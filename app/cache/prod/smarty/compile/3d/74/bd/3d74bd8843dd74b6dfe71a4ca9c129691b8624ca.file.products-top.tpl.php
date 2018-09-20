<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:48:31
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/products-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7510290945ba2a80fe5a4f4-67427340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d74bd8843dd74b6dfe71a4ca9c129691b8624ca' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/products-top.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    '279d7442d06fa5faacca1676c9335a31b68eb5e1' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/layouts/setting.tpl',
      1 => 1533986218,
      2 => 'file',
    ),
    '2d3271eb3b3fbb741ab1f1c2edbf5e002927e1c8' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/sort-orders.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7510290945ba2a80fe5a4f4-67427340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTING_GRID_MODE' => 0,
    'LISTING_PRODUCT_COLUMN' => 0,
    'LISTING_PRODUCT_COLUMN_MODULE' => 0,
    'LISTING_PRODUCT_TABLET' => 0,
    'LISTING_PRODUCT_SMALLDEVICE' => 0,
    'LISTING_PRODUCT_EXTRASMALLDEVICE' => 0,
    'LISTING_PRODUCT_MOBILE' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba2a80fea3779_82667182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba2a80fea3779_82667182')) {function content_5ba2a80fea3779_82667182($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value)) {?>
    
      <?php /*  Call merged included template "layouts/setting.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layouts/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '7510290945ba2a80fe5a4f4-67427340');
content_5ba2a80fe69ec8_41041347($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "layouts/setting.tpl" */?>
    
<?php }?>

<div id="js-product-list-top" class="products-selection">
  <div class="row">
    <div class="col-lg-6 col-md-3 hidden-sm-down total-products">     
      
        <div class="display">
          <div id="grid" class="leo_grid <?php if (isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value)&&$_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value=='grid') {?>selected<?php }?>"><a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'Grid','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"><i class="icon-grid" aria-hidden="true"></i></a></div>
          <div id="list" class="leo_list <?php if (isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value)&&$_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value=='list') {?>selected<?php }?>"><a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'List','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"><i class="icon-list" aria-hidden="true"></i></a></div>
        </div>
      
      <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items']>1) {?>
        <p class="products-counter hidden-md-down"><?php echo smartyTranslate(array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>
</p>
      <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items']>0) {?>
        <p class="products-counter hidden-md-down"><?php echo smartyTranslate(array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
      <?php }?>
    </div>
    <div class="col-lg-6 col-md-9">
      <div class="row sort-by-row">
        
          <?php /*  Call merged included template "catalog/_partials/sort-orders.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, '7510290945ba2a80fe5a4f4-67427340');
content_5ba2a80fe911e7_47788088($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/sort-orders.tpl" */?>
        

        <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
          <div class="col-sm-4 col-xs-4 col-sp-12 hidden-md-up filter-button">
            <button id="search_filter_toggler" class="btn btn-outline">
              <?php echo smartyTranslate(array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

            </button>
          </div>
        <?php }?>
      </div>
    </div>
    <div class="col-sm-12 hidden-lg-up text-xs-center showing">
      <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>

    </div>
  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:48:31
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/layouts/setting.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba2a80fe69ec8_41041347')) {function content_5ba2a80fe69ec8_41041347($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"] = new Smarty_variable("grid", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_GRID_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_GRID_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"];?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:48:31
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/sort-orders.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba2a80fe911e7_47788088')) {function content_5ba2a80fe911e7_47788088($_smarty_tpl) {?>
<span class="col-sm-4 col-md-4 col-lg-4 hidden-sm-down sort-by"><?php echo smartyTranslate(array('s'=>'Sort by:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>col-sm-8 col-xs-8 col-sp-12<?php } else { ?>col-sm-12 col-xs-12<?php }?> col-md-8 col-lg-8 products-sort-order dropdown">
  <button
    class="btn-unstyle select-title"
    rel="nofollow"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false">
    <?php if (isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
<?php }?>
    <i class="material-icons float-xs-right">&#xE5C5;</i>
  </button>
  <div class="dropdown-menu">
    <?php  $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sort_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['sort_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->key => $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->_loop = true;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php } ?>
  </div>
</div>
<?php }} ?>
