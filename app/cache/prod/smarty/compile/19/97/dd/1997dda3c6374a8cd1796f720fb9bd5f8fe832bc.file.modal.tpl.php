<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:03:58
         compiled from "/home/www/regalonatural/prestashop/admin576z4owit/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4044118695ba29d9ee9da75-20217817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1997dda3c6374a8cd1796f720fb9bd5f8fe832bc' => 
    array (
      0 => '/home/www/regalonatural/prestashop/admin576z4owit/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1525077396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4044118695ba29d9ee9da75-20217817',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d9ee9f513_61753210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d9ee9f513_61753210')) {function content_5ba29d9ee9f513_61753210($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
