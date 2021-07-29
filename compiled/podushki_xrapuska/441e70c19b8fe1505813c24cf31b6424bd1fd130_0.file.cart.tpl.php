<?php
/* Smarty version 3.1.33, created on 2021-03-07 11:44:04
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60449254d5fbf8_51303217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '441e70c19b8fe1505813c24cf31b6424bd1fd130' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/cart.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cart_purchases.tpl' => 1,
    'file:svg.tpl' => 1,
    'file:cart_deliveries.tpl' => 1,
  ),
),false)) {
function content_60449254d5fbf8_51303217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->cart_title ,false ,32);?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>
    <div class="block">
        <div class="block__header block__header--boxed block__header--border">
            <h1 class="block__heading">
                <span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span>
            </h1>
        </div>

        <div class="block__body">
            <form id="captcha_id" method="post" name="cart" class="fn_validate_cart">
                <div class="f_row flex-column flex-lg-row" data-sticky-container> 
                    <div class="sticky f_col f_col-lg-6 f_col-xl-5">

														<div id="fn_purchases">
								<?php $_smarty_tpl->_subTemplateRender('file:cart_purchases.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							</div>

					</div>
                    <div class="sticky f_col f_col-lg-6 f_col-xl-7 flex-lg-first">
                        <div class="fn_cart_sticky block--boxed block--border d-flex justify-content-center" data-margin-top="75" data-sticky-for="1024" data-sticky-class="is-sticky">
                            <div class="">
                                <div class="h6" data-language="cart_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_title;?>
</div>

                                <div class="block form form_cart form--boxed">
                                    <div class="form__header">
                                                                                <div class="form__title">
                                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, false);
?>
                                            <span data-language="cart_form_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_form_header;?>
</span>
                                        </div>
                                    </div>

                                    <div class="form__body">
                                                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                        <div class="message_error">
                                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                            <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                            <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                            <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_phone') {?>
                                            <span data-language="form_error_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_phone;?>
</span>
                                            <?php }?>
                                        </div>
                                        <?php }?>
                                        <div class="f_row">
                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group ">
                                                    <input class="form__input form__placeholder--focus" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_name" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group">
                                                    <input class="form__input form__placeholder--focus" name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group">
                                                    <input class="form__input form__placeholder--focus" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-md-6 f_col-lg-12 f_col-xl-6">
                                                <div class="form__group">
                                                    <input class="form__input form__placeholder--focus" name="address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_address" >
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                                                </div>
                                            </div>

                                                                                        <div class="f_col-xl-12">
                                                <div class="form__group form__group--last">
                                                    <textarea class="form__textarea form__placeholder--focus" rows="3" name="comment" data-language="cart_order_comment"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_order_comment;?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                                                <div id="fn_ajax_deliveries">
                                    <?php $_smarty_tpl->_subTemplateRender('file:cart_deliveries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                </div>
                             
                                <div class="block form form_cart form--boxed">
                                    <div class="form__footer">
                                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                                            <div class="captcha">
                                                <div id="recaptcha1"></div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_cart"),$_smarty_tpl ) );?>

                                            <div class="captcha">
                                                <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <div class="form__captcha">
                                                    <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" />
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php }?>

                                        <input type="hidden" name="checkout" value="1">
                                                                                <button class="form__button button--blick g-recaptcha" type="submit" name="checkout" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
">
                                            <span data-language="cart_checkout"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } else { ?>
    <div class="block"> 
                <h1 class="h1"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

        <p class="block padding" data-language="cart_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty;?>
</p>
    </div>
<?php }?>

<?php }
}
