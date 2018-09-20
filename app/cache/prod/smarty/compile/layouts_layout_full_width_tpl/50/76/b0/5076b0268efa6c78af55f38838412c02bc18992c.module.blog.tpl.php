<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "module:leoblog/views/templates/front/default/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8780851905ba30126848fa5-30584002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5076b0268efa6c78af55f38838412c02bc18992c' => 
    array (
      0 => 'module:leoblog/views/templates/front/default/blog.tpl',
      1 => 1526563858,
      2 => 'module',
    ),
    '2b303412174336d27c9f191100154d06189d2d52' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/layouts/layout-full-width.tpl',
      1 => 1526563864,
      2 => 'file',
    ),
    '72d48df94b1a0d5cf0090f6ce4ab797d68b89350' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/layouts/layout-both-columns.tpl',
      1 => 1526563864,
      2 => 'file',
    ),
    '279d7442d06fa5faacca1676c9335a31b68eb5e1' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/layouts/setting.tpl',
      1 => 1533986218,
      2 => 'file',
    ),
    '70be140340c9e91d628bb32eed64dd5e574abcf5' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/stylesheets.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    'b1dbb179d3f7c024fb6657da2c3242ad64b1f0d8' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/javascript.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    '2618e226189015a34a497aea4e48e2d07df214b7' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/head.tpl',
      1 => 1530644678,
      2 => 'file',
    ),
    'ade00c7022ff4ab2fd8866ab276c1c42059e3584' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/product-activation.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    '5d3d8b34f6451f065d2ff84bc8d86eadf7fb3c33' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/header.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    '273afd80122be36da76fdfb4d4972cc724bcceda' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/notifications.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    'fd36e33d8d340aeffa071c4bcc6109b4648bef52' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/breadcrumb.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
    'f03b54284db7ace45d01028133b478de5d880ae7' => 
    array (
      0 => 'module:leoblog/views/templates/front/default/_social.tpl',
      1 => 1526563858,
      2 => 'module',
    ),
    'a98c5085fd1fd49131b205c4d8a822390c03c967' => 
    array (
      0 => 'module:leoblog/views/templates/front/default/_facebook_comment.tpl',
      1 => 1526563874,
      2 => 'module',
    ),
    '56bfe651dc3bcb1d449f927a9983c1f0043e69da' => 
    array (
      0 => 'module:leoblog/views/templates/front/default/_diquis_comment.tpl',
      1 => 1526563874,
      2 => 'module',
    ),
    '77d9a338f3526fa0c712d9297dd15f874dbf047f' => 
    array (
      0 => 'module:leoblog/views/templates/front/default/_pagination.tpl',
      1 => 1526563874,
      2 => 'module',
    ),
    '37f07b8334356aedb84f943d2e1abb18571b2d09' => 
    array (
      0 => 'module:leoblog/views/templates/front/default/_local_comment.tpl',
      1 => 1526563874,
      2 => 'module',
    ),
    '0eef749a8b35c5860c67ffc7a6ad1445c0bdee81' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/footer.tpl',
      1 => 1526563862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8780851905ba30126848fa5-30584002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'IS_RTL' => 0,
    'LEO_RTL' => 0,
    'LEO_DEFAULT_SKIN' => 0,
    'page' => 0,
    'LEO_LAYOUT_MODE' => 0,
    'USE_FHEADER' => 0,
    'fullwidth_hook' => 0,
    'LEO_PANELTOOL' => 0,
    'LEO_BACKTOP' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba30126a3bd23_40870466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba30126a3bd23_40870466')) {function content_5ba30126a3bd23_40870466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/regalonatural/prestashop/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value)&&$_smarty_tpl->tpl_vars['IS_RTL']->value) {?> dir="rtl"<?php if (isset($_smarty_tpl->tpl_vars['LEO_RTL']->value)&&$_smarty_tpl->tpl_vars['LEO_RTL']->value) {?> class="rtl<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>"<?php }?>
<?php } else { ?> class="<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php }?>>

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba3012685cc44_30282471($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['USE_FHEADER']->value)&&$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?> keep-header<?php }?>">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main id="page">
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba301268a3c28_59270701($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        <div class="header-container">
          
            <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba301268a8cd2_20408746($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
          
        </div>
      </header>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba301268bf8f6_03264184($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
      <section id="wrapper">
       
        <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba301268d1f78_09504844($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
      
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome']==0) {?>
        <div class="container">
      <?php }?>
          
          <div class="row">
            

            
  <div id="content-wrapper" class="col-lg-12 col-xs-12">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
			<div id="blogpage">
				<div class="blog-detail">
					<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, We are updating data, please come back later!!!!','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
				</div>
			</div>
		<?php } else { ?>	
		<div id="blogpage">
			<article class="blog-detail">
				<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
					<h1 class="blog-title"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->meta_title,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h1>
					<div class="blog-meta">
						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_author','1')) {?>
						<span class="blog-author">
							<i class="material-icons">person</i> <span><?php echo smartyTranslate(array('s'=>'Posted By','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
: </span>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->author_link,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->author,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->author,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
						</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_category','1')) {?>
						<span class="blog-cat"> 
							<i class="material-icons">list</i> <span><?php echo smartyTranslate(array('s'=>'In','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
: </span> 
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->category_link,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->category_title,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->category_title,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
						</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_created','1')) {?>
						<span class="blog-created">
							<i class="material-icons">&#xE192;</i> <span><?php echo smartyTranslate(array('s'=>'On','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
: </span> 
							<time class="date" datetime="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo smartyTranslate(array('s'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%A"),'html','UTF-8'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
,	<!-- day of week -->
								<?php echo smartyTranslate(array('s'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%B"),'html','UTF-8'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
		<!-- month-->
								<?php echo smartyTranslate(array('s'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%e"),'html','UTF-8'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
,	<!-- day of month -->
								<?php echo smartyTranslate(array('s'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"),'html','UTF-8'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
		<!-- year -->
							</time>
						</span>
						<?php }?>
						
						<?php if (isset($_smarty_tpl->tpl_vars['blog_count_comment']->value)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_counter','1')) {?>
						<span class="blog-ctncomment">
							<i class="material-icons">comment</i> <span><?php echo smartyTranslate(array('s'=>'Comment','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
:</span> 
							<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog_count_comment']->value), ENT_QUOTES, 'UTF-8');?>

						</span>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['blog']->value->hits)&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_hit','1')) {?>
						<span class="blog-hit">
							<i class="material-icons">favorite</i> <span><?php echo smartyTranslate(array('s'=>'Hit','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
:</span>
							<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value->hits), ENT_QUOTES, 'UTF-8');?>

						</span>
						<?php }?>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['blog']->value->preview_url&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_image','1')) {?>
						<div class="blog-image">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->preview_url,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->meta_title,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" />
						</div>
					<?php }?>

					<div class="blog-description">
						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_description',1)) {?>
							<?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>

						<?php }?>
						<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>

					</div>
					
					

					<?php if (trim($_smarty_tpl->tpl_vars['blog']->value->video_code)) {?>
					<div class="blog-video-code">
						<div class="inner ">
							<?php echo $_smarty_tpl->tpl_vars['blog']->value->video_code;?>

						</div>
					</div>
					<?php }?>

					<div class="social-share">
						 <?php /*  Call merged included template "module:leoblog/views/templates/front/default/_social.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:leoblog/views/templates/front/default/_social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba30126919ed3_80938082($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:leoblog/views/templates/front/default/_social.tpl" */?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
					<div class="blog-tags">
						<span><?php echo smartyTranslate(array('s'=>'Tags:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
					 
						<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
							 <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag']->value['tag'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag']->value['tag'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span></a>
						<?php } ?>
						 
					</div>
					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)||!empty($_smarty_tpl->tpl_vars['tagrelated']->value)) {?>
					<div class="extra-blogs row">
					<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)) {?>
						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4><?php echo smartyTranslate(array('s'=>'In Same Category','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samecats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cblog']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cblog']->value['meta_title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
							<?php } ?>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4><?php echo smartyTranslate(array('s'=>'Related by Tags','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['cblog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cblog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagrelated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->key => $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->_loop = true;
?>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cblog']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cblog']->value['meta_title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
							<?php } ?>
							</ul>
						</div>
					<?php }?>
					</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['productrelated']->value) {?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_listcomment','1')==1) {?>
						<div class="blog-comment-block clearfix">
							<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='facebook') {?>
								<?php /*  Call merged included template "module:leoblog/views/templates/front/default/_facebook_comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:leoblog/views/templates/front/default/_facebook_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba301269364f4_31250059($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:leoblog/views/templates/front/default/_facebook_comment.tpl" */?>
							<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local')=='diquis') {?>
								<?php /*  Call merged included template "module:leoblog/views/templates/front/default/_diquis_comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:leoblog/views/templates/front/default/_diquis_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba3012693f4c9_76911225($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:leoblog/views/templates/front/default/_diquis_comment.tpl" */?>
							
							<?php } else { ?>
								<?php /*  Call merged included template "module:leoblog/views/templates/front/default/_local_comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:leoblog/views/templates/front/default/_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba30126944f86_79654859($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:leoblog/views/templates/front/default/_local_comment.tpl" */?>
							<?php }?>
						
					<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_show_listcomment','1')==0&&$_smarty_tpl->tpl_vars['config']->value->get('item_show_formcomment','1')==1) {?>
						<div class="blog-comment-block clearfix">
							<?php /*  Call merged included template "module:leoblog/views/templates/front/default/_local_comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:leoblog/views/templates/front/default/_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba30126944f86_79654859($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:leoblog/views/templates/front/default/_local_comment.tpl" */?>
						</div>
					<?php }?>
				<?php } else { ?>
					<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Sorry, This blog is not avariable. May be this was unpublished or deleted.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
				<?php }?>

			</article>
		</div>
		<?php }?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


            
          </div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome']==0) {?>
          </div>
        <?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </section>

      <footer id="footer" class="footer-container">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba30126a23819_79541733($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['LEO_BACKTOP']->value)&&$_smarty_tpl->tpl_vars['LEO_BACKTOP']->value) {?>
            <div id="back-top"><a href="#" class="fa fa-angle-double-up"></a></div>
        <?php }?>
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '8780851905ba30126848fa5-30584002');
content_5ba3012688d8c1_03319658($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba3012685cc44_30282471')) {function content_5ba3012685cc44_30282471($_smarty_tpl) {?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114366117-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114366117-1');
</script>



<!-- Global site tag (gtag.js) - Google AdWords: 972358540 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-972358540"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-972358540');
</script>

<!-- Hotjar Tracking Code for www.regalonatural.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:936635,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>





  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">


  <?php /*  Call merged included template "layouts/setting.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layouts/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba3012686e501_36456044($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "layouts/setting.tpl" */?>


  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '8780851905ba30126848fa5-30584002');
content_5ba3012687aec1_54515853($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



<?php if (isset($_smarty_tpl->tpl_vars['LOAD_CSS_TYPE']->value)&&!$_smarty_tpl->tpl_vars['LOAD_CSS_TYPE']->value) {?>
   
    <?php if (isset($_smarty_tpl->tpl_vars['LEO_CSS']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEO_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
          <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php } ?>
    <?php }?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['LEO_SKIN_CSS']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['linkCss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkCss']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LEO_SKIN_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkCss']->key => $_smarty_tpl->tpl_vars['linkCss']->value) {
$_smarty_tpl->tpl_vars['linkCss']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['linkCss']->value;?>

        <?php } ?>
    <?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value;?>

<?php }?>


  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '8780851905ba30126848fa5-30584002');
content_5ba3012688d8c1_03319658($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/layouts/setting.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba3012686e501_36456044')) {function content_5ba3012686e501_36456044($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"] = new Smarty_variable("1", null, 3);
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba3012687aec1_54515853')) {function content_5ba3012687aec1_54515853($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba3012688d8c1_03319658')) {function content_5ba3012688d8c1_03319658($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<script type="text/javascript">
	var choosefile_text = "<?php echo smartyTranslate(array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
";
	var turnoff_popup_text = "<?php echo smartyTranslate(array('s'=>'Do not show this popup again','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
";

	var size_item_quickview = 158;
	var style_scroll_quickview = 'horizontal';
	
	var size_item_page = 124;
	var style_scroll_page = 'horizontal';
	
	var size_item_quickview_attr = 158;	
	var style_scroll_quickview_attr = 'horizontal';
	
	var size_item_popup = 130;
	var style_scroll_popup = 'vertical';
</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba301268a3c28_59270701')) {function content_5ba301268a3c28_59270701($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba301268a8cd2_20408746')) {function content_5ba301268a8cd2_20408746($_smarty_tpl) {?>

  <div class="header-banner">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']==0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']==0) {?>
      </div>
      <?php }?>
  </div>



  <nav class="header-nav">
    <div class="topnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']==0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']==0) {?>
      </div>
      <?php }?>
    </div>
    <div class="bottomnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']==0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']==0) {?>
        </div>
      <?php }?>
    </div>
  </nav>



  <div class="header-top">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']==0) {?>
          <div class="container">
        <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']==0) {?>
          </div>
        <?php }?>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba301268bf8f6_03264184')) {function content_5ba301268bf8f6_03264184($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba301268d1f78_09504844')) {function content_5ba301268d1f78_09504844($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='category'&&$_smarty_tpl->tpl_vars['category']->value['image']['large']['url']!='') {?>
      <h1 class="h1 category-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='product') {?>
      
        <h1 class="h1 product-detail-name hidden-sm-down" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
      
    <?php }?>
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
      <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
      <?php } ?>
    </ol>
  </div>
</nav><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "module:leoblog/views/templates/front/default/_social.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba30126919ed3_80938082')) {function content_5ba30126919ed3_80938082($_smarty_tpl) {?>

		<div class="social-wrap">
			<div class="social-heading"> <b><?php echo smartyTranslate(array('s'=>'Like This','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</b> </div>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('social_code','')) {?>
				<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['config']->value->get('social_code',''),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			<!-- Twitter Button -->
			<div class="itemTwitterButton">
				<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" >
					<?php echo smartyTranslate(array('s'=>'Twitter','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

				</a>
				<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
			</div>

			 
			 	<!-- Google +1 Button -->
			<div class="itemGooglePlusOneButton">
				<g:plusone annotation="inline" width="120"></g:plusone>
				<script type="text/javascript">
				  (function() {
				  	window.___gcfg = { lang: 'en' }; // Define button default language here
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>

			<!-- Facebook Button -->
			<div class="itemFacebookButton">
				<div id="fb-root"></div>
				<script type="text/javascript">
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
			</div>
			<?php }?>
		</div>	 




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "module:leoblog/views/templates/front/default/_facebook_comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba301269364f4_31250059')) {function content_5ba301269364f4_31250059($_smarty_tpl) {?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {   
  	return;
  }
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['config']->value->get('item_facebook_appid'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
		data-num-posts="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['config']->value->get("item_limit_comments",10),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['config']->value->get('facebook_width',600),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "module:leoblog/views/templates/front/default/_diquis_comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba3012693f4c9_76911225')) {function content_5ba3012693f4c9_76911225($_smarty_tpl) {?>

<div id="disqus_thread"></div>
<script type="text/javascript">
var disqus_shortname = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['config']->value->get('item_diquis_account','demo4leotheme'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
var disqus_url = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
(function() {
	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>
<noscript><?php echo smartyTranslate(array('s'=>'Please enable JavaScript to view the.','mod'=>'leoblog'),$_smarty_tpl);?>
 <a href="http://disqus.com/?ref_noscript"><?php echo smartyTranslate(array('s'=>'Comments powered by Disqus.','mod'=>'leoblog'),$_smarty_tpl);?>
.</a></noscript><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "module:leoblog/views/templates/front/default/_local_comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba30126944f86_79654859')) {function content_5ba30126944f86_79654859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/regalonatural/prestashop/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>

<div id="blog-localengine">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_listcomment','1')==1) {?>
			<h3><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'leoblog'),$_smarty_tpl);?>
</h3>
			
			<div class="comments clearfix">
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?> <?php $_smarty_tpl->tpl_vars['default'] = new Smarty_variable('', null, 0);?>
				<div class="comment-item" id="comment<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['id_comment'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
					<img src="http://www.gravatar.com/avatar/<?php echo htmlspecialchars(md5(strtolower(trim($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['email'],'html','UTF-8')))), ENT_QUOTES, 'UTF-8');?>
?d=<?php echo htmlspecialchars(urlencode($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default']->value,'html','UTF-8')), ENT_QUOTES, 'UTF-8');?>
&s=60" align="left"/>
					<div class="comment-wrap">
						<div class="comment-meta">
							<span class="comment-infor">
								<span class="comment-created"><?php echo smartyTranslate(array('s'=>'Created On','mod'=>'leoblog'),$_smarty_tpl);?>
<span> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['comment']->value['date_add']),"%A, %B %e, %Y"),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span></span>
								<span class="comment-postedby"><?php echo smartyTranslate(array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl);?>
<span> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['user'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span></span>
							</span>
							
							<span class="comment-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
#comment<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['comment']->value['id_comment']), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Comment Link','mod'=>'leoblog'),$_smarty_tpl);?>
</a></span>
						</div>

						<div class="comment-content">
							<?php echo nl2br($_smarty_tpl->tpl_vars['comment']->value['comment']);?>

						</div>
					</div>
				</div>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['blog_count_comment']->value) {?>
				<div class="top-pagination-content clearfix bottom-line">
					<?php /*  Call merged included template "module:leoblog/views/templates/front/default/_pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:leoblog/views/templates/front/default/_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8780851905ba30126848fa5-30584002');
content_5ba30126957116_51788441($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:leoblog/views/templates/front/default/_pagination.tpl" */?>
				</div>
				<?php }?>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_formcomment','1')==1) {?>
			<h3><?php echo smartyTranslate(array('s'=>'Leave your comment','mod'=>'leoblog'),$_smarty_tpl);?>
</h3>
			<form class="form-horizontal clearfix" method="post" id="comment-form" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" onsubmit="return false;">
				<div class="form-group row">
					<div  class="col-lg-3">
						<label class="control-label" for="inputFullName"><?php echo smartyTranslate(array('s'=>'Full Name','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
					</div>
					<div class="col-lg-9">
						<input type="text" name="user" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your full name','mod'=>'leoblog'),$_smarty_tpl);?>
" id="inputFullName" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-3">
						<label class="control-label" for="inputEmail"><?php echo smartyTranslate(array('s'=>'Email','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
					</div>
					<div class="col-lg-9">
						<input type="text" name="email"  placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email','mod'=>'leoblog'),$_smarty_tpl);?>
" id="inputEmail" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-3">
						<label class="control-label" for="inputComment"><?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
					</div>
					<div class="col-lg-9">
						<textarea type="text" name="comment" rows="6"  placeholder="<?php echo smartyTranslate(array('s'=>'Enter your comment','mod'=>'leoblog'),$_smarty_tpl);?>
" id="inputComment" class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-3">
						<label class="control-label" for="inputEmail"><?php echo smartyTranslate(array('s'=>'Captcha','mod'=>'leoblog'),$_smarty_tpl);?>
</label>
					</div>
					<div class="col-lg-8 col-md-8 ipts-captcha">
						 <img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captcha_image']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="comment-capcha-image" align="left"/>
						<input class="form-control" type="text" name="captcha" value="" size="10"  />
					</div>
				</div>

				<input type="hidden" name="id_leoblog_blog" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_leoblog_blog']->value), ENT_QUOTES, 'UTF-8');?>
">
				<div class="form-group row">
					<div class="col-lg-9 col-lg-offset-3">
						<button class="btn btn-secondary btn-submit-comment-wrapper" name="submitcomment" type="submit">
							<span class="btn-submit-comment"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
							<span class="leoblog-cssload-container cssload-speeding-wheel"></span>
						</button>
					</div>
				</div>
			</form>
		<?php }?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "module:leoblog/views/templates/front/default/_pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba30126957116_51788441')) {function content_5ba30126957116_51788441($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value)&&$_smarty_tpl->tpl_vars['no_follow']->value) {?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('rel="nofollow"', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value) {?>	
	<?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)<$_smarty_tpl->tpl_vars['nb_items']->value) {?>
		<?php $_smarty_tpl->tpl_vars['blogShowing'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value, null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['blogShowing'] = new Smarty_variable(($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_items']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1, null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['p']->value==1) {?>
		<?php $_smarty_tpl->tpl_vars['blogShowingStart'] = new Smarty_variable(1, null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['blogShowingStart'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
	<?php }?>
        
	<nav class="pagination">
		<div class="col-xs-12 col-md-6 col-lg-6">		
			<?php if ($_smarty_tpl->tpl_vars['nb_items']->value>1) {?>
				<?php echo smartyTranslate(array('s'=>'Showing','mod'=>'leoblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogShowingStart']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogShowing']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'of','mod'=>'leoblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_items']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'items','mod'=>'leoblog'),$_smarty_tpl);?>
	
			<?php } else { ?>
				<?php echo smartyTranslate(array('s'=>'Showing','mod'=>'leoblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogShowingStart']->value, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blogShowing']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'of','mod'=>'leoblog'),$_smarty_tpl);?>
 1 <?php echo smartyTranslate(array('s'=>'item','mod'=>'leoblog'),$_smarty_tpl);?>

			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['start']->value!=$_smarty_tpl->tpl_vars['stop']->value) {?>
			<div id="pagination<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="col-xs-12 col-md-6 col-lg-6">			
				<ul class="page-list clearfix text-sm-right text-xs-center">
					<?php if ($_smarty_tpl->tpl_vars['p']->value!=1) {?>
						<?php $_smarty_tpl->tpl_vars['p_previous'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value-1, null, 0);?>
						<li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">							
							<a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 class="previous" rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<i class="material-icons">&#xE314;</i>
								<span><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
							</a>
						</li>
					<?php } else { ?>
						<li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">							
							<a class="previous disabled" rel="prev" href="#">
								<i class="material-icons">&#xE314;</i>
								<span><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['start']->value==3) {?>
						<li><a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">1</a></li>
						<li><a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,2),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">2</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['start']->value==2) {?>
						<li><a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">1</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['start']->value>3) {?>
						<li><a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">1</a></li>
						<li class="truncate">...</li>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['name'] = 'pagination';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = (int) $_smarty_tpl->tpl_vars['start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total']);
?>
						<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']) {?>
							<li class="current">
								<a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="disabled">
									<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['p']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

								</a>
							</li>
						<?php } else { ?>
							<li>
								<a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
									<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

								</a>
							</li>
						<?php }?>
					<?php endfor; endif; ?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>$_smarty_tpl->tpl_vars['stop']->value+2) {?>
						<li class="truncate">...</li>
						<li>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value==$_smarty_tpl->tpl_vars['stop']->value+1) {?>
						<li>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value==$_smarty_tpl->tpl_vars['stop']->value+2) {?>
						<li>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value-1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pages_nb']->value-intval(1), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
						<li>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>1&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['pages_nb']->value) {?>
						<?php $_smarty_tpl->tpl_vars['p_next'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value+1, null, 0);?>
						<li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">						
							<a <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 class="next" rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">							
								<span><?php echo smartyTranslate(array('s'=>'Next','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
								<i class="material-icons">&#xE315;</i>
							</a>
						</li>
					<?php } else { ?>
						<li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">						
							<a class="next disabled" rel="next" href="#">	
								<span><?php echo smartyTranslate(array('s'=>'Next','mod'=>'leoblog'),$_smarty_tpl);?>
</span>
								<i class="material-icons">&#xE315;</i>
							</a>
						</li>
					<?php }?>
				</ul>			
			</div>
		<?php }?>
	</nav>	
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 04:08:38
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba30126a23819_79541733')) {function content_5ba30126a23819_79541733($_smarty_tpl) {?>

  <div class="footer-top">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore']==0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore']==0) {?>
      </div>
    <?php }?>
  </div>


  <div class="footer-center">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter']==0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter']==0) {?>
      </div>
    <?php }?>
  </div>


  <div class="footer-bottom">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter']==0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter']==0) {?>
      </div>
    <?php }?>
  </div>
<?php }} ?>
