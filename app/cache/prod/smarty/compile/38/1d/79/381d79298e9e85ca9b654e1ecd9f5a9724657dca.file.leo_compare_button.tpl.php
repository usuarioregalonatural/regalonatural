<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/modules/leofeature/views/templates/hook/leo_compare_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5606228365ba29d0a362767-61114729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381d79298e9e85ca9b654e1ecd9f5a9724657dca' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/modules/leofeature/views/templates/hook/leo_compare_button.tpl',
      1 => 1526563860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5606228365ba29d0a362767-61114729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'added' => 0,
    'leo_compare_id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a366bb4_21126796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a366bb4_21126796')) {function content_5ba29d0a366bb4_21126796($_smarty_tpl) {?>
<div class="compare">
	<a class="leo-compare-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {?><?php echo smartyTranslate(array('s'=>'Remove from Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php }?>">
	<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-compare-bt-content">
		<i class="material-icons">&#xE86A;</i>
	</span>
</a>
</div>


<?php }} ?>
