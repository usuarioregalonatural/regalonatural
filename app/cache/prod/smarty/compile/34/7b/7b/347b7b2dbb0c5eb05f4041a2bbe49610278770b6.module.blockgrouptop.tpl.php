<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "module:blockgrouptop/views/templates/hook/blockgrouptop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17732209105ba29d0a18d327-96456480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '347b7b2dbb0c5eb05f4041a2bbe49610278770b6' => 
    array (
      0 => 'module:blockgrouptop/views/templates/hook/blockgrouptop.tpl',
      1 => 1526563858,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '17732209105ba29d0a18d327-96456480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'current_language' => 0,
    'img_lang_url' => 0,
    'currencies' => 0,
    'currency' => 0,
    'enable_userinfo' => 0,
    'logged' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
    'logout_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a1abed2_93636648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a1abed2_93636648')) {function content_5ba29d0a1abed2_93636648($_smarty_tpl) {?>

<!-- Block languages module -->
<div id="leo_block_top" class="popup-over e-scale float-md-right">
    <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title">
    	<i class="material-icons hidden-xl-up">&#xE8B8;</i>
    	<span class="hidden-lg-down"><?php echo smartyTranslate(array('s'=>'Setting','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
    	<i class="material-icons">&#xE5C5;</i>
    </a>	    
	<div class="popup-content">
		<div class="language-selector">
			<span><?php echo smartyTranslate(array('s'=>'Language:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
			<ul class="link">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
		          	<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
		            	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
" class="dropdown-item">
		            		<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['img_lang_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['id_lang'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_tmp5,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" />
		            	</a>
		          	</li>
		        <?php } ?>
			</ul>
		</div>
		<div class="currency-selector">
			<span><?php echo smartyTranslate(array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
			<ul class="link">
				<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
		        	<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
		          		<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</a>
		        	</li>
		      	<?php } ?>
			</ul>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['enable_userinfo']->value==1) {?>
				<div class="useinfo-selector">
					<ul class="user-info">
					<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
					<li>
					  <a
						class="account" 
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
						title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
						rel="nofollow"
					  >
					  	<i class="material-icons">&#xE853;</i>
						<span><?php echo smartyTranslate(array('s'=>'Hello','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
					  </a>
					</li>
					<li>
					  <a
						class="logout"
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
						rel="nofollow"
					  >
					  	<i class="material-icons">&#xE853;</i>
						<?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

					  </a>
					</li>
					<?php } else { ?>
					<li>
					  <a
						class="signin"
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
						title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
						rel="nofollow"
					  >
					  	<i class="material-icons">&#xE88D;</i>
						<span><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
					  </a>
					</li>
					<?php }?>
					<li>
					<a
					  class="myacount"
					  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
					  title="<?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
					  rel="nofollow"
					>
						<i class="material-icons">&#xE8A6;</i>
					  <span><?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
					</a>
					</li>
					<li>
					<a
					  class="checkout"
		          href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl);?>
"
					  title="<?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
					  rel="nofollow"
					>
					  <i class="material-icons">&#xE890;</i>
					  <span><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
					</a>
					</li>
					<li>
			      <a
			        class="ap-btn-wishlist dropdown-item"
			        href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl);?>
"
			        title="<?php echo smartyTranslate(array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
			        rel="nofollow"
			      >
			      	<i class="material-icons">&#xE87E;</i>
			        <span><?php echo smartyTranslate(array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
					<span class="ap-total-wishlist ap-total"></span>
			      </a>
			    </li>
				<li>
			      <a
			        class="ap-btn-compare dropdown-item"
			        href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'leofeature','controller'=>'productscompare'),$_smarty_tpl);?>
"
			        title="<?php echo smartyTranslate(array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
			        rel="nofollow"
			      >
			      	<i class="material-icons">&#xE3B9;</i>
			        <span><?php echo smartyTranslate(array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
					<span class="ap-total-compare ap-total"></span>
			      </a>
			    </li>
					</ul>
				</div>
			<?php }?>
	</div>
</div>

<!-- /Block languages module -->
<?php }} ?>
