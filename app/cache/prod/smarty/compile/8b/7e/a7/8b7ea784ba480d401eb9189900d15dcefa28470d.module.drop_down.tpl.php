<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 09:31:41
         compiled from "module:leofeature/views/templates/front/drop_down.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15801697345ba34cdd01fb11-18061883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7ea784ba480d401eb9189900d15dcefa28470d' => 
    array (
      0 => 'module:leofeature/views/templates/front/drop_down.tpl',
      1 => 1526563876,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15801697345ba34cdd01fb11-18061883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'only_total' => 0,
    'cart' => 0,
    'width_cart_item' => 0,
    'height_cart_item' => 0,
    'product' => 0,
    'show_combination' => 0,
    'show_customization' => 0,
    'enable_update_quantity' => 0,
    'enable_button_quantity' => 0,
    'attribute' => 0,
    'value' => 0,
    'customization' => 0,
    'field' => 0,
    'subtotal' => 0,
    'cart_url' => 0,
    'order_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba34cdd0797f3_64618504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba34cdd0797f3_64618504')) {function content_5ba34cdd0797f3_64618504($_smarty_tpl) {?>
	<?php if ($_smarty_tpl->tpl_vars['only_total']->value!=1) {?>
		<div class="leo-dropdown-cart-content clearfix">
			<div class="leo-dropdown-list-item-warpper">
				<ul class="leo-dropdown-list-item"><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cart_product"]['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["cart_product"]['last'] = $_smarty_tpl->tpl_vars['product']->last;
?><li style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_cart_item']->value, ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height_cart_item']->value, ENT_QUOTES, 'UTF-8');?>
px" class="leo-dropdown-cart-item clearfix<?php if ((count($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['show_combination']->value)||(count($_smarty_tpl->tpl_vars['product']->value['customizations'])&&$_smarty_tpl->tpl_vars['show_customization']->value)) {?> has-view-additional<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cart_product']['first']) {?> first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cart_product']['last']) {?> last<?php }?>">						
							<div class="leo-cart-item-img">
								<?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?>
									<a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/></a>
								<?php }?>	
							</div>						
							<div class="leo-cart-item-info">					
								<div class="product-name"><a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],18,'...'), ENT_QUOTES, 'UTF-8');?>
</a></div>
								<div class="product-price">
									<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<div class="product-discount">
										  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
										  
										  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
											<span class="discount discount-percentage">
												-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>

											  </span>
										  <?php } else { ?>
											<span class="discount discount-amount">
												-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>

											  </span>
										  <?php }?>
										  
										</div>
									  <?php }?>
									  <div class="current-price">
										<span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
									  </div>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
										  <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
										<?php }?>
								</div>
								
								<?php if ($_smarty_tpl->tpl_vars['enable_update_quantity']->value) {?>
									<div class="product-quantity">												
										<?php if ($_smarty_tpl->tpl_vars['enable_button_quantity']->value) {?>
											<a href="javascript:void(0)" class="leo-bt-product-quantity leo-bt-product-quantity-down"><i class="material-icons">&#xE15B;</i></a>
										<?php }?>
										<input
											class="leo-input-product-quantity input-group"
											data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
											data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
											data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
											data-id-product = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
											data-id-product-attribute = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
											data-id-customization = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
											data-min-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
											data-product-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
											data-quantity-available="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_available'], ENT_QUOTES, 'UTF-8');?>
"									
											type="text"
											value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"								
											min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
										  />
										<?php if ($_smarty_tpl->tpl_vars['enable_button_quantity']->value) {?>	
											<a href="javascript:void(0)" class="leo-bt-product-quantity leo-bt-product-quantity-up"><i class="material-icons">&#xE145;</i></a>
										<?php }?>
									</div>
								<?php } else { ?>
									<div class="product-quantity"><span class="lablel"><?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'leofeature'),$_smarty_tpl);?>
</span>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</div>
								<?php }?>
							</div>
							<a class="leo-remove-from-cart"					
								href="javascript:void(0)"					
								title="<?php echo smartyTranslate(array('s'=>'Remove from cart','mod'=>'leofeature'),$_smarty_tpl);?>
" 
								data-link-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
								data-id-product = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
								data-id-product-attribute = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
								data-id-customization = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
							>
								<i class="material-icons">&#xE872;</i>
							</a>
							<?php if ((count($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['show_combination']->value)||(count($_smarty_tpl->tpl_vars['product']->value['customizations'])&&$_smarty_tpl->tpl_vars['show_customization']->value)) {?>
								<div class="view-additional">								
									<div class="view-leo-dropdown-additional"></div>
								</div>
							<?php }?>
							<div class="leo-dropdown-overlay">
								<div class="leo-dropdown-cssload-speeding-wheel"></div>
							</div>
							<div class="leo-dropdown-additional">
								<?php if (count($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['show_combination']->value) {?>							
									<div class="view-combination label">
										
									</div>
									<div class="combinations">
										<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["attribute"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["attribute"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
											  <div class="product-line-info">
												<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
												<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
											  </div>
										<?php } ?>
									</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])&&$_smarty_tpl->tpl_vars['show_customization']->value) {?>
									<div class="view-customization label">
										
									</div>
									<div class="customizations">								
										<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>			
											
											<ul>
												<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
													<li>
														<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
															: <span class="value"><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span>
														<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
															<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
														<?php }?>
													</li>
												<?php } ?>
											</ul>								
										<?php } ?>								
									</div>
								<?php }?>
							</div>
						</li><?php } ?></ul>
			</div>
			<div class="leo-dropdown-bottom">
			<?php }?>
				<div class="leo-dropdown-total" data-cart-total="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
">
					<div class="leo-dropdown-cart-subtotals">
						<?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['subtotal']->value)) {?>
								<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 clearfix">
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
											<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
											<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
										</div>
									</div>
								</div>
							<?php }?>
						<?php } ?>
					</div>
					<div class="leo-dropdown-cart-total clearfix">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
								<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
						</div>
					</div>
				</div>
			<?php if ($_smarty_tpl->tpl_vars['only_total']->value!=1) {?>
				<div class="leo-cart-dropdown-action clearfix" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width_cart_item']->value, ENT_QUOTES, 'UTF-8');?>
px;">
					<a class="cart-dropdow-button cart-dropdow-viewcart btn btn-primary btn-outline" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'View Cart','mod'=>'leofeature'),$_smarty_tpl);?>
</a>
					<a class="cart-dropdow-button cart-dropdow-checkout btn btn-primary btn-outline" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Check Out','mod'=>'leofeature'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>
	<?php }?>
<?php }} ?>
