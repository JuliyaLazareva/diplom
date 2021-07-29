<?php
/* Smarty version 3.1.33, created on 2021-01-30 18:10:09
  from '/home/ganzaby/joo.by/backend/design/html/settings_notify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_601576d14a9514_00354972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0d58fe36a10b43c1c420b6aa80319a9fde0388' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/settings_notify.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
  ),
),false)) {
function content_601576d14a9514_00354972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->settings_notify_notifications ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_notifications, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, false);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_notifications, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_emails, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                 <input name="order_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->order_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_reverce, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="notify_from_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->notify_from_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_comments, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="comment_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->comment_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_sender_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="notify_from_name" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->notify_from_name, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_email_lang, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <select name="email_lang" class="selectpicker">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['btr_languages']->value, 'label', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value->email_lang == $_smarty_tpl->tpl_vars['label']->value) {?>selected<?php }?>>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                        </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_auto_approved;?>
</div>
                            <div class="mb-1">
                                <select name="auto_approved" class="selectpicker">
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value->auto_approved == '0') {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_auto_approved_off;?>

                                    </option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value->auto_approved == '1') {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_auto_approved_on;?>

                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;"><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_use_smtp;?>
</div>
                            <div class="mb-1">
                                <select name="use_smtp" class="selectpicker">
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value->use_smtp == '0') {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_turn_off;?>

                                    </option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value->use_smtp == '1') {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_turn_on;?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_server;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_server" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_server, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_port;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_port" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_port, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_user;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_user" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_user, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_pass;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_pass" class="form-control" type="password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_pass, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_test_smtp;?>
</div>
                            <div class="mb-1">
                                <button type="button" class="fn_test_smtp btn btn_small btn_blue float-xs-left">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'refresh_icon'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_do_test_smtp, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                                <div class="fn_test_smtp_status float-xs-left form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row fn_row hidden">
                        <div class="col-md-12">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_test_smtp_trace;?>
</div>
                            <div class="fn_test_smtp_trace"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    $(document).on('click', '.fn_test_smtp', function() {
        $('.fn_test_smtp_status').fadeOut(100);
        var server = $('input[name="smtp_server"]').val(),
            port   = $('input[name="smtp_port"]').val(),
            user   = $('input[name="smtp_user"]').val(),
            pass   = $('input[name="smtp_pass"]').val();
        $.ajax({
            url: 'ajax/test_smtp.php',
            type: 'POST',
            data: {
                server: server,
                port: port,
                user: user,
                pass: pass
            },
            success: function (data) {
                $('.fn_test_smtp_status').text(data.message);
                if (data.status == true) {
                    $('.fn_test_smtp_trace').text('').closest('.fn_row').addClass('hidden');
                    $('.fn_test_smtp_status').removeClass('text-danger').addClass('text-success');
                } else {
                    $('.fn_test_smtp_trace').html(data.trace).closest('.fn_row').removeClass('hidden');
                    $('.fn_test_smtp_status').removeClass('text-success').addClass('text-danger');
                }
                $('.fn_test_smtp_status').fadeIn(500);
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
