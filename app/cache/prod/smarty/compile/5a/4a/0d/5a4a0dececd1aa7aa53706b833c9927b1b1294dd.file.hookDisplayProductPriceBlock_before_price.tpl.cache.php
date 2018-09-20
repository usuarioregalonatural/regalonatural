<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:29
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1377145495ba29d09d4fc44-44150642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4a0dececd1aa7aa53706b833c9927b1b1294dd' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl',
      1 => 1526748032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1377145495ba29d09d4fc44-44150642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d09d597b1_26507271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d09d597b1_26507271')) {function content_5ba29d09d597b1_26507271($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'])) {?>
        <span class="aeuc_from_label">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }?>
<?php }?><?php }} ?>
