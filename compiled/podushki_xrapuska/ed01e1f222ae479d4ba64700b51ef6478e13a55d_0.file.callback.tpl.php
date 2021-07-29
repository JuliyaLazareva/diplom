<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:44:00
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/callback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b430e4edd0_31326976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed01e1f222ae479d4ba64700b51ef6478e13a55d' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/callback.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_6042b430e4edd0_31326976 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hidden">
    <form id="fn_callback" class="form form--boxed popup fn_validate_callback" method="post">

                <div class="form__header">
            <div class="form__title">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"support_icon"), 0, false);
?>
                <span data-language="callback_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_header;?>
</span>
            </div>
        </div>

        <div class="form__body">
            <?php if ($_smarty_tpl->tpl_vars['call_error']->value) {?>
            <div class="message_error">
                <?php if ($_smarty_tpl->tpl_vars['call_error']->value == 'captcha') {?>
                <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value == 'empty_name') {?>
                <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value == 'empty_phone') {?>
                <span data-language="form_enter_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_phone;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value == 'empty_comment') {?>
                <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                <?php } else { ?>
                <span><?php echo $_smarty_tpl->tpl_vars['call_error']->value;?>
</span>
                <?php }?>
            </div>
            <?php }?>

                        <div class="form__group">
                <input class="form__input form__placeholder--focus" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['callname']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['callname']->value, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" data-language="form_name">
                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
            </div>

                        <div class="form__group">
                <input class="form__input form__placeholder--focus" type="text" name="phone" value="<?php if ($_smarty_tpl->tpl_vars['callphone']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['callphone']->value, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8', true);
}?>" data-language="form_phone">
                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*</span>
            </div>

                        <div class="form__group">
                <textarea class="form__textarea form__placeholder--focus" rows="3" name="message" data-language="form_enter_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callmessage']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
</span>
            </div>
        </div>

        <div class="form__footer">
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_callback) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                <div class="captcha">
                    <div id="recaptcha2"></div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_callback"),$_smarty_tpl ) );?>

                <div class="captcha">
                    <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_callback']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_callback']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <span class="form__captcha">
                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" >
                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                    </span>
            </div>
            <?php }?>
            <?php }?>
            <input name="callback" type="hidden" value="1">
                        <button class="form__button button--blick g-recaptcha" type="submit" name="callback" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmitCallback"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
">
                <span data-language="callback_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
</span>
            </button>
        </div>
    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
    <div class="hidden">
        <div id="fn_callback_sent" class="popup">
            <div class="popup__heading">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, true);
?>
                <span data-language="callback_sent_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_header;?>
</span>
            </div>
            <div class="popup__description">
                <span data-language="callback_sent_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_text;?>
</span>
            </div>
        </div>
    </div>
<?php }
}
}
