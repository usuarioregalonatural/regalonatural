<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:29
         compiled from "modules/leobootstrapmenu/views/widgets/widget_sub_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2711816235ba29d09c44c70-80904631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27033ca060c2b0c0115c2284622899ca063547d5' => 
    array (
      0 => 'modules/leobootstrapmenu/views/widgets/widget_sub_categories.tpl',
      1 => 1526563876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2711816235ba29d09c44c70-80904631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'widget_heading' => 0,
    'cat' => 0,
    'link' => 0,
    'subcategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d09c656c6_94757020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d09c656c6_94757020')) {function content_5ba29d09c656c6_94757020($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
<div class="widget-subcategories">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php if ($_smarty_tpl->tpl_vars['cat']->value->id_category!='') {?>
			<div class="menu-title">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat']->value->id_category,$_smarty_tpl->tpl_vars['cat']->value->link_rewrite),'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cat']->value->name,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img">
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cat']->value->name,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 
				</a>
			</div>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
					<li class="clearfix">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img">
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 
						</a>
					</li>
				<?php } ?>

			</ul>
		<?php } else { ?>
			<div class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'The ID category does not exist','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>
</div>
<?php }?> <?php }} ?>
