<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6107889465ba29d0a1b2e97-73778488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1526563862,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '6107889465ba29d0a1b2e97-73778488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a1b6756_65019635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a1b6756_65019635')) {function content_5ba29d0a1b6756_65019635($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<a id="click_show_search" href="javascript:void(0)" data-toggle="dropdown" class="float-xs-right popup-title">
	   <i class="material-icons">&#xE8B6;</i>
	</a>
	<span class="close-overlay"><i class="material-icons">&#xE5CD;</i></span>
	<div class="over-layer"></div>
	<div class="block-form clearfix">
		<form method="get" class="form-search" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<input type="hidden" name="controller" value="search">
			<input class="search_query"  type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
			<button class="search-button" type="submit" >
				<i class="material-icons">&#xE8B6;</i>
			</button>
		</form>
	</div>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
