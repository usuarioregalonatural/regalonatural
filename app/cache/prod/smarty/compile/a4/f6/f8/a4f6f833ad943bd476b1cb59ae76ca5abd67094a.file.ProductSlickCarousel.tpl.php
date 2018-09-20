<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:50
         compiled from "/home/www/regalonatural/prestashop/modules/appagebuilder/views/templates/hook//ProductSlickCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5317667405ba29d1e42fbb0-98511076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f6f833ad943bd476b1cb59ae76ca5abd67094a' => 
    array (
      0 => '/home/www/regalonatural/prestashop/modules/appagebuilder/views/templates/hook//ProductSlickCarousel.tpl',
      1 => 1526563872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5317667405ba29d1e42fbb0-98511076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'products' => 0,
    'productClassWidget' => 0,
    'product_item_path' => 0,
    'IS_RTL' => 0,
    'mobile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d1e46fa79_20378127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d1e46fa79_20378127')) {function content_5ba29d1e46fa79_20378127($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
<?php } else { ?>
	<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
		<div class="slick-row">
			<div class="timeline-wrapper clearfix prepare"
				data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'], ENT_QUOTES, 'UTF-8');?>
" 
				data-xl="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
				data-lg="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
				data-md="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
				data-sm="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
				data-m="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'], ENT_QUOTES, 'UTF-8');?>
<?php }?>"
			>
				<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>			
					<div class="timeline-parent">
						<?php $_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['slick_row']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['slick_row'])+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration == 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration == $_smarty_tpl->tpl_vars['foo_child']->total;?>
							<div class="timeline-item">
								<div class="animated-background">					
									<div class="background-masker content-top"></div>							
									<div class="background-masker content-second-line"></div>							
									<div class="background-masker content-third-line"></div>							
									<div class="background-masker content-fourth-line"></div>
								</div>
							</div>
						<?php }} ?>
					</div>
				<?php }} ?>
			</div>
			<div class="list-product-slick-carousel slick-slider slick-loading <?php if (isset($_smarty_tpl->tpl_vars['productClassWidget']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['productClassWidget']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">		
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['index']++;
?>
					<?php if (isset($_smarty_tpl->tpl_vars['product_item_path']->value)) {?>
						<div class="slick-slide <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==0) {?> first<?php }?>">
							<div class="item">
		                    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_item_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		                   	</div>
						</div>
	                <?php }?>
				<?php } ?>
			</div>
		</div>
	<?php } else { ?>
		<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>	
	<?php }?>
<?php }?>

<script type="text/javascript">
ap_list_functions.push(function(){
	$('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
').imagesLoaded( function() {
		$('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
').slick(
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom_status']) {?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom'], ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			{			
				centerMode: <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode'])&&$_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
				centerPadding: '<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'])&&$_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>px',
				dots: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?>true<?php } else { ?>false<?php }?>,
				infinite: <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_loopinfinite'])&&$_smarty_tpl->tpl_vars['formAtts']->value['slick_loopinfinite']) {?>true<?php } else { ?>false<?php }?>,
				vertical: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				autoplay: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_autoplay']) {?>false<?php } else { ?>false<?php }?>,
				pauseonhover: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_pauseonhover']) {?>true<?php } else { ?>false<?php }?>,
				autoplaySpeed: 2000,
				arrows: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_arrows']) {?>true<?php } else { ?>false<?php }?>,
				rows: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_row'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToShow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoshow'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoshow'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoscroll'], ENT_QUOTES, 'UTF-8');?>
<?php }?>,
				rtl: <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value)&&$_smarty_tpl->tpl_vars['IS_RTL']->value) {?>true<?php } else { ?>false<?php }?>,
				responsive: [
					<?php  $_smarty_tpl->tpl_vars['mobile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mobile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['slick_items_custom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mobile']->key => $_smarty_tpl->tpl_vars['mobile']->value) {
$_smarty_tpl->tpl_vars['mobile']->_loop = true;
?>
					{
					  breakpoint: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[0], ENT_QUOTES, 'UTF-8');?>
,
					  settings: {
						centerMode: <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode'])&&$_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
						centerPadding: '<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'])&&$_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>px',
						slidesToShow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[1], ENT_QUOTES, 'UTF-8');?>
,
						slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile']->value[1], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['slick_slidestoscroll'], ENT_QUOTES, 'UTF-8');?>
<?php }?>,
					  }
					},
					<?php } ?>
				]
			}
			<?php }?>
		);
		$('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
').removeClass('slick-loading').addClass('slick-loaded').parents('.slick-row').addClass('hide-loading');
	});
});
</script>


<?php }} ?>
