<?php /* Smarty version Smarty-3.1.19, created on 2018-09-20 02:18:32
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8105561155ba2e75900a514-68141040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a46327dff8c3c769913e5cafca84386479e9eb' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl',
      1 => 1526748032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8105561155ba2e75900a514-68141040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'directPrint' => 0,
    'print_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba2e759011184_81545569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba2e759011184_81545569')) {function content_5ba2e759011184_81545569($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['directPrint']->value) {?>
	<input type="submit" name="printCMSPage" value="<?php echo smartyTranslate(array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
" class="btn btn-secondary" onclick="window.print()" />
<?php } else { ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['print_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary" target="_blank"><?php echo smartyTranslate(array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</a>
<?php }?>
<?php }} ?>
