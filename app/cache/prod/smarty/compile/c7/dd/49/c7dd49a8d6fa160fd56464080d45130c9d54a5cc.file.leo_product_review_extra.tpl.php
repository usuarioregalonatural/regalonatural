<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:03:02
         compiled from "/home/www/regalonatural/prestashop/themes/leo_angel/modules/leofeature/views/templates/hook/leo_product_review_extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1803697635ba29d660b4ea2-60028903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7dd49a8d6fa160fd56464080d45130c9d54a5cc' => 
    array (
      0 => '/home/www/regalonatural/prestashop/themes/leo_angel/modules/leofeature/views/templates/hook/leo_product_review_extra.tpl',
      1 => 1526563860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803697635ba29d660b4ea2-60028903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbReviews_product_extra' => 0,
    'too_early_extra' => 0,
    'customer' => 0,
    'allow_guests_extra' => 0,
    'averageTotal_extra' => 0,
    'ratings_extra' => 0,
    'id_product_review_extra' => 0,
    'link_product_review_extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d660cf191_22767195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d660cf191_22767195')) {function content_5ba29d660cf191_22767195($_smarty_tpl) {?>

<?php if (($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value==0&&$_smarty_tpl->tpl_vars['too_early_extra']->value==false&&($_smarty_tpl->tpl_vars['customer']->value['is_logged']||$_smarty_tpl->tpl_vars['allow_guests_extra']->value))||($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value!=0)) {?>
	<div id="leo_product_reviews_block_extra" class="no-print" <?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value!=0) {?>itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value!=0) {?>
			<div class="reviews_note clearfix">
				<span class="hidden-xl-down"><?php echo smartyTranslate(array('s'=>'Rating','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
&nbsp;</span>
				<div class="star_content clearfix">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
						<?php if ($_smarty_tpl->tpl_vars['averageTotal_extra']->value<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
							<div class="star"></div>
						<?php } else { ?>
							<div class="star star_on"></div>
						<?php }?>
					<?php endfor; endif; ?>
					<meta itemprop="worstRating" content = "0" />
					<meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings_extra']->value['avg'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(round($_smarty_tpl->tpl_vars['ratings_extra']->value['avg'],1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(round($_smarty_tpl->tpl_vars['averageTotal_extra']->value,1),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
					<meta itemprop="bestRating" content = "5" />
				</div>
			</div>
		<?php }?>

		<ul class="reviews_advices">
			<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value!=0) {?>
				<li>
					<a href="#" class="read-review">					
						<i class="material-icons hidden-xl-down">&#xE0B9;</i>
						<span itemprop="reviewCount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'Reviews','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['too_early_extra']->value==false&&($_smarty_tpl->tpl_vars['customer']->value['is_logged']||$_smarty_tpl->tpl_vars['allow_guests_extra']->value))) {?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value!=0) {?>last<?php }?>">
					<a class="open-review-form" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_review_extra']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_product_review_extra']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons hidden-xl-down">&#xE150;</i>
						<?php echo smartyTranslate(array('s'=>'Add Reviews','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
		</ul>
	</div>
<?php }?>

<?php }} ?>
