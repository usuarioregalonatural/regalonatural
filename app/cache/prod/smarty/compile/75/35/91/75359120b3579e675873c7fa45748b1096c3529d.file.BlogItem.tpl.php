<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:50
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/modules/appagebuilder/views/templates/hook/letter-blog/BlogItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13868957445ba29d1ee99c50-54922333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75359120b3579e675873c7fa45748b1096c3529d' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/modules/appagebuilder/views/templates/hook/letter-blog/BlogItem.tpl',
      1 => 1526563858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13868957445ba29d1ee99c50-54922333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d1eed0df9_27614541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d1eed0df9_27614541')) {function content_5ba29d1eed0df9_27614541($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/regalonatural/prestashop/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
				<img class="img-fluid" src="<?php if ((isset($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'])&&$_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url']!='')) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['preview_url'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'])) {?>width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'])) {?> height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
					 itemprop="image" />
			<?php }?>
            </a>
            <div class="gr-author">
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
					<span class="created">
						<time class="date" datetime="<?php echo htmlspecialchars(smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), ENT_QUOTES, 'UTF-8');?>
">
							<i class="material-icons">&#xE614;</i>
							<span>
								<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%B"),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<!-- day of month -->
								<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%d"),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
th<!-- month-->
								<!-- <?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
year -->
							</span>
						</time>
					</span>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
					<span class="author">
						
						<span class="icon-author"><i class="material-icons">&#xE7FD;</i><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span> 
					</span>
				<?php }?>
            </div>
        </div>
    </div>
    <div class="right-block">
    	<div class="box-blog">
	        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_title']) {?>
	        	<h5 class="blog-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['title']),100,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h5>
	        <?php }?>
        	
					
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
				<span class="cat"> <span class="icon-list"><?php echo smartyTranslate(array('s'=>'In','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span> 
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
				</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
				<span class="nbcomment">
					<span class="icon-comment"><i class="fa fa-comment" aria-hidden="true"></i> <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']), ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'Comment','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 </span>
				</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
				<span class="hits">
					<span class="icon-hits"> <?php echo smartyTranslate(array('s'=>'Hits','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
:</span> <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['hits']), ENT_QUOTES, 'UTF-8');?>

				</span>	
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
		        <p class="blog-desc" itemprop="description">
		            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),80,'...'), ENT_QUOTES, 'UTF-8');?>

		        </p>
	        <?php }?>
	    </div>
    </div>
</div>



<?php }} ?>
