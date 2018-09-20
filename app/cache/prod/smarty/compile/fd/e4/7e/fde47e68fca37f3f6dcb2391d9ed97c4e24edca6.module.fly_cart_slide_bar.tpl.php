<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "module:leofeature/views/templates/front/fly_cart_slide_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6887613335ba29d0a62ff00-31421103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fde47e68fca37f3f6dcb2391d9ed97c4e24edca6' => 
    array (
      0 => 'module:leofeature/views/templates/front/fly_cart_slide_bar.tpl',
      1 => 1526563876,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '6887613335ba29d0a62ff00-31421103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_overlay_background' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a632149_29422145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a632149_29422145')) {function content_5ba29d0a632149_29422145($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['enable_overlay_background']->value) {?>
	<div class="leo-fly-cart-mask"></div>
<?php }?>

<div class="leo-fly-cart-slidebar <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
	
	<div class="leo-fly-cart disable-dropdown">
		<div class="leo-fly-cart-wrapper">
			<div class="leo-fly-cart-icon-wrapper">
				<a href="javascript:void(0)" class="leo-fly-cart-icon"><i class="material-icons">&#xE8CC;</i></a>
				<span class="leo-fly-cart-total"></span>
			</div>
			
			<div class="leo-fly-cart-cssload-loader"></div>
		</div>
	</div>

</div><?php }} ?>
