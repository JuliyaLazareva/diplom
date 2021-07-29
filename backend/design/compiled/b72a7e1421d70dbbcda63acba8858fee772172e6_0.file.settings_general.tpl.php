<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:11:34
  from '/home/ganzaby/diplom.dod.by/backend/design/html/settings_general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fc3468d6077_41041365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72a7e1421d70dbbcda63acba8858fee772172e6' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/settings_general.tpl',
      1 => 1614790714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_603fc3468d6077_41041365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->settings_general_sites ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_sites, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-5 col-md-5 text-xs-right float-xs-right"></div>
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
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_options, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_sitename, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_general_sitename, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="mb-1">
                                <input name="site_name" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="date_format" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->date_format, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_email, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_general_email, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="mb-1">
                                <input name="admin_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_shutdown, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <select name="site_work" class="selectpicker">
                                    <option value="on" <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_work == "on") {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_turn_on, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value="off" <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_work == "off") {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_turn_off, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_tech_message, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="">
                                <textarea name="site_annotation" class="form-control okay_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_capcha, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="boxed boxed_attention">
                        <div class="">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_capcha_help1, ENT_QUOTES, 'UTF-8', true);?>
 <a class="link_white" target="_blank" rel="nofollow" href="https://www.google.com/recaptcha/admin#list"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_capcha_help2, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_type_capcha, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <select name="captcha_type" class="selectpicker">
                                    <option value="default" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->captcha_default;?>
</option>
                                    <option value="v3" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>selected<?php }?>>reCAPTCHA V3</option>
                                    <option value="v2" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>selected<?php }?>>reCAPTCHA V2</option>
                                    <option value="invisible" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>selected<?php }?>>reCAPTCHA Invisible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_product, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_product" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_product) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_blog, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_post" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_post) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_cart, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_cart" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                 </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_register, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_register" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_register) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_contact_form, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_feedback" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_feedback) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_callback, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_callback" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_callback) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="boxed">
                                <div class="heading_box">
                                    reCAPTCHA V2
                                 </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="public_recaptcha" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_secret_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="secret_recaptcha" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->secret_recaptcha, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="boxed">
                                <div class="heading_box">
                                    reCAPTCHA invisible
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="public_recaptcha_invisible" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_secret_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="secret_recaptcha_invisible" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->secret_recaptcha_invisible, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="boxed">
                                <div class="heading_box">
                                    reCAPTCHA V3
                                 </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="public_recaptcha_v3" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_v3, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_secret_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="secret_recaptcha_v3" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->secret_recaptcha_v3, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="boxed">
                                <div class="heading_box">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_v3_scores, ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_scores_product, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="recaptcha_scores[product]" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->recaptcha_scores['product'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_scores_cart, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="recaptcha_scores[cart]" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->recaptcha_scores['cart'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_scores_other, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="recaptcha_scores[other]" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->recaptcha_scores['other'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_general_gathering_data;?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="permission_box">
                                    <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_general_gather_enabled;?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="gather_enabled" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->gather_enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 clearfix"></div>
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
</form>
<?php }
}
