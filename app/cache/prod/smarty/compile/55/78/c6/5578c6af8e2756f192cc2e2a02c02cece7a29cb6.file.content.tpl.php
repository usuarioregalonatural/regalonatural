<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:03:58
         compiled from "/home/www/regalonatural/prestashop/admin576z4owit/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10464693475ba29d9ee31b13-96660060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5578c6af8e2756f192cc2e2a02c02cece7a29cb6' => 
    array (
      0 => '/home/www/regalonatural/prestashop/admin576z4owit/themes/default/template/content.tpl',
      1 => 1525077396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10464693475ba29d9ee31b13-96660060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d9ee34250_09473683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d9ee34250_09473683')) {function content_5ba29d9ee34250_09473683($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
