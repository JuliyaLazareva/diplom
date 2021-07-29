<?php
/* Smarty version 3.1.33, created on 2021-04-26 18:59:30
  from '/home/ganzaby/diplom.dod.by/backend/design/html/email/email_comment_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6086e362ebc052_81626228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbdf9336296582e5c9f06f5f8175ed7de29f02fd' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/email/email_comment_admin.tpl',
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
function content_6086e362ebc052_81626228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['btr']->value->email_comment_from)." ".((string)(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true)))." ".((string)$_smarty_tpl->tpl_vars['btr']->value->email_awaits) ,false ,32);
$_smarty_tpl->_assignInScope('subject', "Вопрос от пользователя ".((string)(htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true))) ,false ,32);?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_new_review, ENT_QUOTES, 'UTF-8', true);?>

        <?php if ($_smarty_tpl->tpl_vars['comment']->value->type == 'product') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_product, ENT_QUOTES, 'UTF-8', true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'blog') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_article, ENT_QUOTES, 'UTF-8', true);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'news') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_news, ENT_QUOTES, 'UTF-8', true);?>

        <?php }?>
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
                                                                <h1>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_new_review, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value->type == 'product') {?>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_product, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'blog') {?>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_article, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'news') {?>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_news, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php }?>.<br>
                                                                </h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p5t es-p5b es-p40r es-p40l" align="center">
                                                                <p style="font-size: 16px;color: #5c5c5c;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_inform_first, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 оставил отзыв
                                                                    <?php if ($_smarty_tpl->tpl_vars['comment']->value->type == 'product') {?>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_product, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'blog') {?>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_article, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'news') {?>
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_to_news, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php }?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p15t es-p10b" align="center">
                                                                <?php if ($_smarty_tpl->tpl_vars['comment']->value->type == 'product') {?>
                                                                <a class="es-button" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['comment']->value->product->url,'absolute'=>1),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_info, ENT_QUOTES, 'UTF-8', true);?>

                                                                </a>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'blog') {?>
                                                                <a class="es-button" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_item','url'=>$_smarty_tpl->tpl_vars['comment']->value->post->url,'absolute'=>1),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_info, ENT_QUOTES, 'UTF-8', true);?>

                                                                </a>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == 'news') {?>
                                                                <a class="es-button" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'news_item','url'=>$_smarty_tpl->tpl_vars['comment']->value->post->url,'absolute'=>1),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_info, ENT_QUOTES, 'UTF-8', true);?>

                                                                </a>
                                                                <?php }?>
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
                                                                        <td class="esd-block-text">
                                                                            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_information, ENT_QUOTES, 'UTF-8', true);?>
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
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->email_order_name, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_phone, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_time, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span>IP:</span></td>
                                                            <td class="es-p5t es-p5b">
                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->ip, ENT_QUOTES, 'UTF-8', true);?>

                                                                (<a style="font-size: 13px;" href='http://www.ip-adress.com/ip_tracer/<?php echo $_smarty_tpl->tpl_vars['comment']->value->ip;?>
/'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_where, ENT_QUOTES, 'UTF-8', true);?>
</a>)
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_comment, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>
</span></td>
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
