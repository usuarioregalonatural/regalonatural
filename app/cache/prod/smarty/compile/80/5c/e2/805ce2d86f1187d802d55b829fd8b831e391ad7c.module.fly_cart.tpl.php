<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "module:leofeature/views/templates/front/fly_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12334590655ba29d0a625169-00516559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805ce2d86f1187d802d55b829fd8b831e391ad7c' => 
    array (
      0 => 'module:leofeature/views/templates/front/fly_cart.tpl',
      1 => 1526563876,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '12334590655ba29d0a625169-00516559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type_fly_cart' => 0,
    'type_position' => 0,
    'vertical_position' => 0,
    'horizontal_position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a62e114_65353761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a62e114_65353761')) {function content_5ba29d0a62e114_65353761($_smarty_tpl) {?>
<div data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_fly_cart']->value, ENT_QUOTES, 'UTF-8');?>
" style="position: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_position']->value, ENT_QUOTES, 'UTF-8');?>
; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vertical_position']->value, ENT_QUOTES, 'UTF-8');?>
; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['horizontal_position']->value, ENT_QUOTES, 'UTF-8');?>
" class="leo-fly-cart solo type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_position']->value, ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['type_fly_cart']->value=='dropup'||$_smarty_tpl->tpl_vars['type_fly_cart']->value=='dropdown') {?> enable-dropdown<?php }?><?php if ($_smarty_tpl->tpl_vars['type_fly_cart']->value=='slidebar_top'||$_smarty_tpl->tpl_vars['type_fly_cart']->value=='slidebar_bottom'||$_smarty_tpl->tpl_vars['type_fly_cart']->value=='slidebar_right'||$_smarty_tpl->tpl_vars['type_fly_cart']->value=='slidebar_left') {?> enable-slidebar<?php }?>">
	<div class="leo-fly-cart-icon-wrapper">
		<a href="javascript:void(0)" class="leo-fly-cart-icon" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_fly_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE8CC;</i></a>
		<span class="leo-fly-cart-total"></span>
	</div>
	
	<div class="leo-fly-cart-cssload-loader"></div>
</div><?php }} ?>
