<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14125232175ba29d0a50b2b5-94841113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a1de3f23a244d15606daad64585ac97be4a512' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl',
      1 => 1526748032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14125232175ba29d0a50b2b5-94841113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_links' => 0,
    'cms_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a511f89_87393785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a511f89_87393785')) {function content_5ba29d0a511f89_87393785($_smarty_tpl) {?>

 <div class="euAboutUsCMS col-md-2">
 	<h3 class="h3"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</h3>
 	<ul>
 		<?php  $_smarty_tpl->tpl_vars['cms_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link']->key => $_smarty_tpl->tpl_vars['cms_link']->value) {
$_smarty_tpl->tpl_vars['cms_link']->_loop = true;
?>
 			<li>
 				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cms-page-link" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cms_link']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
 </a>
 			</li>
 		<?php } ?>
 	</ul>
 </div>
<?php }} ?>
