<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:03:02
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14086598395ba29d660d6247-56362216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '522fce31d44b6bdb995a28df6fc5f6ca7a34a71d' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl',
      1 => 1526748032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14086598395ba29d660d6247-56362216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d660dd908_21948608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d660dd908_21948608')) {function content_5ba29d660dd908_21948608($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }?>
<?php }?>
<?php }} ?>
