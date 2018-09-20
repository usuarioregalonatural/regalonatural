<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19193991475ba29d0a4b7e14-62856586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1526563860,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '19193991475ba29d0a4b7e14-62856586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conditions' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'urls' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a4c1289_60185000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a4c1289_60185000')) {function content_5ba29d0a4c1289_60185000($_smarty_tpl) {?>

<div class="block_newsletter block">
  <h3 class="title_block"><?php echo smartyTranslate(array('s'=>'join our newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h3>
  <div class="msg-block">
      <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
        <p class="sub-letter"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
        <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
      <?php }?>
  </div>
  <div class="block_content">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="form-group">          
          <!-- <div class="input-wrapper"> -->
            <input name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
">
          <!-- </div> -->
          <button class="btn btn-outline" name="submitNewsletter" type="submit" value="<?php echo smartyTranslate(array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
">
            <span><?php echo smartyTranslate(array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
            <i class="fa fa-long-arrow-right"></i>
          </button>
          <input type="hidden" name="action" value="0">
          <div class="clearfix"></div>
        </div>
        
    </form>

  </div>
</div>
<?php }} ?>
