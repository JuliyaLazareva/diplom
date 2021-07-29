<?php
/* Smarty version 3.1.33, created on 2021-03-15 09:53:35
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604f046fe9a9c4_11358656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e7fce5299981a7529e75e1031b5077b460a1d0' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/login.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_604f046fe9a9c4_11358656 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"login"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->login_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
    	<h1 class="block__heading"><span data-language="login_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_enter;?>
</span></h1>
    </div>
    <div class="block block--boxed block--border">
        <div class="f_row flex-lg-row align-items-md-start">
            <div class="form_wrap f_col-lg-6">
                <form method="post" class="fn_validate_login form form--boxed">
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
                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'login_incorrect') {?>
                            <span data-language="login_error_pass"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_error_pass;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'user_disabled') {?>
                            <span data-language="login_pass_not_active"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_pass_not_active;?>
</span>
                            <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                        </div>
                        <?php }?>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
"  data-language="form_email" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                        </div>
                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="password" name="password" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
" value="" readonly
                                   onfocus="this.removeAttribute('readonly');" data-language="form_password" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_password;?>
*</span>
                                                        <a class="password_remind" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"password_remind"),$_smarty_tpl ) );?>
">
                                <span data-language="login_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_remind;?>
</span>
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                            </a>
                        </div>
                    </div>
                    <div class="form__footer">
                                                <button type="submit" class="form__button button--blick" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->login_sign_in;?>
">
                            <span data-language="login_sign_in"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_sign_in;?>
</span>
                        </button>

                        <div id="uLogin" data-ulogin="display=panel;theme=flat;fields=first_name,last_name,email;providers=facebook,google;"></div>
                    </div>
                </form>
            </div>
            <div class="f_col-lg-6">
                <div class="block_explanation">
                    <div class="block_explanation__header">
                        <span data-language="login_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_text;?>
</span>
                    </div>
                    <div class="block_explanation__body page_description">
                        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

                    </div>
                                        <div class="form__footer">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"register"),$_smarty_tpl ) );?>
" class="form__button button--blick" data-language="login_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_registration;?>
</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<?php }
}
