<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:03:02
         compiled from "modules/leofeature/views/templates/hook/leo_product_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15339781575ba29d66153ef2-48009719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88a585e639211250b052c5aeaa7211400209ea8' => 
    array (
      0 => 'modules/leofeature/views/templates/hook/leo_product_tab.tpl',
      1 => 1526563876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15339781575ba29d66153ef2-48009719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d6615a2b3_21271150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d6615a2b3_21271150')) {function content_5ba29d6615a2b3_21271150($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='default') {?>
	<h4 class="title-info-product leo-product-show-review-title"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl);?>
</h4>
<?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='accordion') {?>
	<div class="card-header" role="tab" id="headingleofeatureproductreview">
	  <h5 class="h5">
		<a class="collapsed leo-product-show-review-title leofeature-accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseleofeatureproductreview" aria-expanded="false" aria-controls="collapseleofeatureproductreview">
		  <?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl);?>

		</a>
	 </h5>
  </div>
<?php } else { ?>
	<li class="nav-item">
	  <a class="nav-link leo-product-show-review-title" data-toggle="tab" href="#leo-product-show-review-content"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl);?>
</a>
	</li>
<?php }?>

<?php }} ?>
