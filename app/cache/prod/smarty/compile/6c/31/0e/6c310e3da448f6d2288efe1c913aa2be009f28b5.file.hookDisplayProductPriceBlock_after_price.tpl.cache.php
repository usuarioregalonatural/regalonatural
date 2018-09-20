<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:03:02
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19470745225ba29d660e1f44-85967405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c310e3da448f6d2288efe1c913aa2be009f28b5' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl',
      1 => 1526748032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19470745225ba29d660e1f44-85967405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d660e7699_62111623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d660e7699_62111623')) {function content_5ba29d660e7699_62111623($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'])) {?>
        <span class="aeuc_delivery_label">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }?>
<?php }?>
<?php }} ?>
