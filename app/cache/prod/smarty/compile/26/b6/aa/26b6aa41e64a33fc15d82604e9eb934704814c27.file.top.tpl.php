<?php /* Smarty version Smarty-3.1.19, created on 2018-09-19 21:01:30
         compiled from "modules/uecookie/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14239643495ba29d0a51fb25-40939994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26b6aa41e64a33fc15d82604e9eb934704814c27' => 
    array (
      0 => 'modules/uecookie/top.tpl',
      1 => 1536396052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14239643495ba29d0a51fb25-40939994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vareu' => 0,
    'uecookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ba29d0a53f6e6_26901098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba29d0a53f6e6_26901098')) {function content_5ba29d0a53f6e6_26901098($_smarty_tpl) {?><script>
    
    function setcook() {
        var nazwa = 'cookie_ue';
        var wartosc = '1';
        var expire = new Date();
        expire.setMonth(expire.getMonth() + 12);
        document.cookie = nazwa + "=" + escape(wartosc) + ";path=/;" + ((expire == null) ? "" : ("; expires=" + expire.toGMTString()))
    }

    
    <?php if (Configuration::get('uecookie_close_anim')==1) {?>
    
        function closeUeNotify() {
            $('#cookieNotice').fadeOut(1500);
            setcook();
        }
    
    <?php }?>
    

    
    <?php if (Configuration::get('uecookie_close_anim')==0) {?>
    
        function closeUeNotify() {
            <?php if ($_smarty_tpl->tpl_vars['vareu']->value->uecookie_position==2) {?>
            $('#cookieNotice').animate(
                    {bottom: '-200px'},
                    2500, function () {
                        $('#cookieNotice').hide();
                    });
            setcook();
            <?php } else { ?>
            $('#cookieNotice').animate(
                    {top: '-200px'},
                    2500, function () {
                        $('#cookieNotice').hide();
                    });
            setcook();
            <?php }?>
        }
    
    <?php }?>
    
    
</script>
<style>
    
    .closeFontAwesome:before {
        content: "\f00d";
        font-family: "FontAwesome";
        display: inline-block;
        font-size: 23px;
        line-height: 23px;
        color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_closex, ENT_QUOTES, 'UTF-8');?>
;
        padding-right: 15px;
        cursor: pointer;
    }

    .closeButtonNormal {
         <?php if (Configuration::get('uecookie_x_where')!=3) {?>display: block;<?php } else { ?>display: inline-block; margin:5px;<?php }?> 
        text-align: center;
        padding: 2px 5px;
        border-radius: 2px;
        color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_close_txt, ENT_QUOTES, 'UTF-8');?>
;
        background: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_close_bg, ENT_QUOTES, 'UTF-8');?>
;
        cursor: pointer;
    }

    #cookieNotice p {
        margin: 0px;
        padding: 0px;
    }


    #cookieNoticeContent {
        
        <?php if (Configuration::get('uecookie_padding')!='') {?>
            padding:<?php echo htmlspecialchars(Configuration::get('uecookie_padding'), ENT_QUOTES, 'UTF-8');?>
px;
        <?php }?>
        
    }

    
</style>
<?php if (Configuration::get('uecookie_x_fa')==1) {?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<?php }?>
<div id="cookieNotice" style=" width: 100%; position: fixed; <?php if ($_smarty_tpl->tpl_vars['vareu']->value->uecookie_position==2) {?>bottom:0px; box-shadow: 0px 0 10px 0 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_shadow, ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?> top:0px; box-shadow: 0 0 10px 0 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_shadow, ENT_QUOTES, 'UTF-8');?>
;<?php }?> background: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_bg, ENT_QUOTES, 'UTF-8');?>
; z-index: 9999; font-size: 14px; line-height: 1.3em; font-family: arial; left: 0px; text-align:center; color:#FFF; opacity: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_opacity, ENT_QUOTES, 'UTF-8');?>
 ">
    <div id="cookieNoticeContent" style="position:relative; margin:auto; width:100%; display:block;">
        <table style="width:100%;">
            <tr>
            <?php if (Configuration::get('uecookie_x_where')==1) {?>
                <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:left;">
                    <?php if (Configuration::get('uecookie_usex')==1) {?>
                        <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
                    <?php } else { ?>
                        <span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo smartyTranslate(array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl);?>
</span>
                    <?php }?>
                </td>
            <?php }?>
            <td style="text-align:center;">
                <?php echo $_smarty_tpl->tpl_vars['uecookie']->value;?>

            </td>
            <?php if (Configuration::get('uecookie_x_where')==2) {?>
                <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:right;">
                    <?php if (Configuration::get('uecookie_usex')==1) {?>
                        <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
                    <?php } else { ?>
                        <span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo smartyTranslate(array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl);?>
</span>
                    <?php }?>
                </td>
            <?php }?>
            </tr>
            <tr>
                <?php if (Configuration::get('uecookie_x_where')==3) {?>
                    <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:center;">
                        <?php if (Configuration::get('uecookie_usex')==1) {?>
                            <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
                        <?php } else { ?>
                            <span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo smartyTranslate(array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl);?>
</span>
                        <?php }?>
                    </td>
                <?php }?>
            </tr>
        </table>
    </div>
</div><?php }} ?>
