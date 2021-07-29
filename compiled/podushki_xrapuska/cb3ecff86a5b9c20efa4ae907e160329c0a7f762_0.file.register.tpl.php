<?php
/* Smarty version 3.1.33, created on 2021-04-26 12:13:29
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6086843958af30_22400022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb3ecff86a5b9c20efa4ae907e160329c0a7f762' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/register.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_6086843958af30_22400022 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"register",'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->register_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading"><span data-language="register_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_header;?>
</span></h1>
    </div>

    <div class="block block--boxed block--border">
        <div class="f_row flex-lg-row align-items-md-start">
            <div class="form_wrap f_col-lg-7 f_col-xl-6">
                <form id="captcha_id" method="post" class="fn_validate_register form form--boxed">
                    <div class="form__header">
                        <div class="form__title">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"note_icon"), 0, false);
?>
                            <span data-language="product_write_comment">Заполните форму</span>
                        </div>
                    </div>

                    <div class="form__body">
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="message_error">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                            <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                            <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_password') {?>
                            <span data-language="form_enter_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'user_exists') {?>
                            <span data-language="register_user_registered"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_user_registered;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                            <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                            <?php }?>
                        </div>
                        <?php }?>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_name" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email"/>
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_address" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="password" name="password" value="" data-language="form_enter_password" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
*</span>
                        </div>
                    </div>

                    <div class="form__footer">
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_register) {?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                                <div class="captcha">
                                    <div id="recaptcha1"></div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_register"),$_smarty_tpl ) );?>

                                <div class="captcha">
                                    <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_register']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_register']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <span class="form__captcha">
                                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" data-language="form_enter_captcha" >
                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                     </span>
                                </div>
                            <?php }?>
                        <?php }?>
                        <input name="register" type="hidden" value="1">
                                                <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->register_create_account;?>
" class="form__button button--blick g-recaptcha" name="register" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?>>
                            <span data-language="register_create_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_create_account;?>
</span>
                        </button>
                    </div>
                 </form>
            </div>
            <div class="f_col-lg-5 f_col-xl-6">
                <div class="block_explanation">
                    <div class="block_explanation__body page_description">
                        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

                    </div>
                                        <div class="form__footer">
                        <div id="uLogin" data-ulogin="display=panel;theme=flat;fields=first_name,last_name,email;providers=facebook,google;mobilebuttons=0;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
