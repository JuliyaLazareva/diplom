<?php
/* Smarty version 3.1.33, created on 2021-03-07 11:44:55
  from '/home/ganzaby/diplom.dod.by/backend/design/html/email/email_order_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604492871a3794_02934289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3653c34a11da648a4c1906bb8a6171d9017b4a0b' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/email/email_order_admin.tpl',
      1 => 1614790718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/design/html/email/email_head.tpl' => 1,
    'file:backend/design/html/email/email_header.tpl' => 1,
    'file:backend/design/html/email/email_footer.tpl' => 1,
  ),
),false)) {
function content_604492871a3794_02934289 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['order']->value->paid) {
$_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['btr']->value->email_order)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id)." ".((string)$_smarty_tpl->tpl_vars['btr']->value->email_paid) ,false ,32);
} else {
$_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['btr']->value->email_new_order)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id) ,false ,32);
}?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_new_order, ENT_QUOTES, 'UTF-8', true);?>
 № <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</title>
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">

    <?php $_smarty_tpl->_subTemplateRender("file:backend/design/html/email/email_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
<div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="es-p25t es-p25b" valign="center">

                                <?php $_smarty_tpl->_subTemplateRender("file:backend/design/html/email/email_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p10t es-p10b es-p20r es-p20l" align="center">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-p10t es-p15b" align="center">
                                                                <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_new_order, ENT_QUOTES, 'UTF-8', true);?>
 <span class="es-number-order">№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span><br></h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p10t es-p0b es-p40r es-p40l" align="center">
                                                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_inform_order_first, ENT_QUOTES, 'UTF-8', true);?>
 <strong>№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_from, ENT_QUOTES, 'UTF-8', true);?>
 <strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
.</strong><br> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_inform_order_last, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <span class="es-status-color"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p15t es-p10b" align="center">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/index.php?controller=OrderAdmin&id=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="es-button" target="_blank" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_info, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p30b es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" align="left">
                                            <tbody>
                                            <tr>
                                                <td class="es-p20t es-p10b" align="left">
                                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-m-p0r es-m-p20b" width="100%" valign="top" align="center">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="esd-block-text" align="left">
                                                                            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_details_order, ENT_QUOTES, 'UTF-8', true);?>
:</h4>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="es-m-p20b" width="100%" align="left">
                                                    <table class="es-table-infobox" cellspacing="1" cellpadding="1" border="0" align="left">
                                                        <tbody>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_number_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span>№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_date_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_status_s, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_payment_status, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b">
                                                                    <span>
                                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>
                                                                             <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_paid, ENT_QUOTES, 'UTF-8', true);?>

                                                                         <?php } else { ?>
                                                                             <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_not_paid, ENT_QUOTES, 'UTF-8', true);?>

                                                                         <?php }?>
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_name, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_email, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_phone, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_address, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180px"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_comment, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</span></td>
                                                        </tr>
                                                        <?php }?>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p10t es-p0b es-p20r es-p20l" align="left">
                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                            <tbody>
                                            <tr>
                                                <td class="es-p20t es-p10b" align="left">
                                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-m-p0r es-m-p10b" width="100%" valign="top" align="center">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="esd-block-text" align="left">
                                                                            <h4><?php echo $_smarty_tpl->tpl_vars['btr']->value->email_order_purchases;?>
:</h4>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td width="560" valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-p10b" align="center">
                                                                <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="border-bottom: 1px solid #dbdbdb; background: #dbdbdb; height: 1px; width: 100%; margin: 0px;"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchases']->value, 'purchase');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
?>
                                <tr>
                                    <td class="es-p5t es-p10b es-p20r es-p20l" align="left">
                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                            <tbody>
                                            <tr>
                                                <td class="es-m-p0r es-m-p20b" width="178" valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                                                    <img align="middle" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,120,120 ));?>
" />
                                                                    <?php } else { ?>
                                                                    <img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                    <?php }?>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table cellspacing="0" cellpadding="0" align="right">
                                            <tbody>
                                            <tr>
                                                <td width="400" align="left">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td align="left">
                                                                <p><br></p>
                                                                <table style="width: 100%;" cellspacing="1" cellpadding="1" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url,'absolute'=>1),$_smarty_tpl ) );?>
" style="font-family: 'Trebuchet MS';font-size: 16px;color: #222;text-decoration: none;line-height: normal;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a><br />
                                                                            <span class="es-p5t"><em><span style="color: rgb(128, 128, 128); font-size: 12px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span></em></span>
                                                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?>
                                                                            <div class="es-p5t" style="color: #000; font-size: 12px;font-weight: 600"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</div>
                                                                            <?php }?>
                                                                            
                                                                        </td>
                                                                        <td style="text-align: center;" width="60">
                                                                            <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->tpl_vars['settings']->value->units;
}?>
                                                                        </td>
                                                                        <td style="text-align: center;" width="100">
                                                                            <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->price,$_smarty_tpl->tpl_vars['currency']->value->id ));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</b>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td width="560" valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-p10b" align="center">
                                                                <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="border-bottom: 1px solid #dbdbdb; background: #dbdbdb; height: 1px; width: 100%; margin: 0px;"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <tr>
                                    <td class="es-p15t es-p30b es-p40r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td width="540" valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td align="right">
                                                                <table style="width: 500px;" cellspacing="1" cellpadding="1" border="0" align="right">
                                                                    <tbody>
                                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->discount) {?>
                                                                    <tr>
                                                                        <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_discount;?>
:</td>
                                                                        <td style="text-align: right; font-size: 18px; line-height: 150%; color: #000;"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
&nbsp;%</td>
                                                                    </tr>
                                                                    <?php }?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount > 0) {?>
                                                                    <tr>
                                                                        <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_coupon;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>
:</td>
                                                                        <td style="text-align: right; font-size: 18px; line-height: 150%; color: #000;">&minus;<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
                                                                    </tr>
                                                                    <?php }?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery || !$_smarty_tpl->tpl_vars['order']->value->separate_delivery && $_smarty_tpl->tpl_vars['order']->value->delivery_price > 0) {?>
                                                                    <tr>
                                                                        <td style="text-align: right; font-size: 18px; line-height: 150%;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
:</td>
                                                                        <td style="text-align: right; font-size: 18px; line-height: 150%; color: #000;">
                                                                            <?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->delivery_price,$_smarty_tpl->tpl_vars['currency']->value->id ));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php } else {
}?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php }?>

                                                                    <tr class="es-p5t">
                                                                        <td style="text-align: right; font-size: 20px; line-height: 150%;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_total;?>
:</strong></td>
                                                                        <td style="text-align: right; font-size: 20px; line-height: 150%; color: #F36D17;"><strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id ));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</strong></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p style="line-height: 150%;"><br></p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                                <?php $_smarty_tpl->_subTemplateRender("file:backend/design/html/email/email_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>

<?php }
}
