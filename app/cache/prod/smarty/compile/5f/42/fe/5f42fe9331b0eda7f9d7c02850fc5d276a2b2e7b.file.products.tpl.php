<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:48:31
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3578802615ba2a80fea8004-22597154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f42fe9331b0eda7f9d7c02850fc5d276a2b2e7b' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/products.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    '440094686a50727f455942ead59ce23d5284493e' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/pagination.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3578802615ba2a80fea8004-22597154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba2a80fec25d7_85848562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba2a80fec25d7_85848562')) {function content_5ba2a80fec25d7_85848562($_smarty_tpl) {?>
<div id="js-product-list">
  <div class="products">  
    <?php $_smarty_tpl->tpl_vars["leo_page"] = new Smarty_variable('category', null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products']), 0);?>
   
  </div>

  
    <?php /*  Call merged included template "_partials/pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, '3578802615ba2a80fea8004-22597154');
content_5ba2a80feaba52_94409806($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/pagination.tpl" */?>
  

  <div class="hidden-xs-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      <?php echo smartyTranslate(array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:48:31
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba2a80feaba52_94409806')) {function content_5ba2a80feaba52_94409806($_smarty_tpl) {?>
<nav class="pagination">
  <div class="col-xs-12 col-md-6 col-lg-5 text-md-left text-xs-center">
    
    <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl);?>

    
  </div>
  <div class="col-xs-12 col-md-6 col-lg-7">
    
     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
      <ul class="page-list clearfix text-md-right text-xs-center">
        <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='spacer') {?>
              <span class="spacer">&hellip;</span>
            <?php } else { ?>
              <a
                rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next<?php } else { ?>nofollow<?php }?>"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next <?php }?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>
                <i class="fa fa-angle-left"></i><span><?php echo smartyTranslate(array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>
                <span><?php echo smartyTranslate(array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span><i class="fa fa-angle-right"></i>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </a>
            <?php }?>
          </li>
        <?php } ?>
      </ul>
      <?php }?>
    
  </div>
</nav>
<?php }} ?>
