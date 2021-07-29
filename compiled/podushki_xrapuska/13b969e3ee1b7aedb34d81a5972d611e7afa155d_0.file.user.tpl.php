<?php
/* Smarty version 3.1.33, created on 2021-04-26 18:02:09
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6086d5f11e1f86_99524707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13b969e3ee1b7aedb34d81a5972d611e7afa155d' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/user.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 3,
  ),
),false)) {
function content_6086d5f11e1f86_99524707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->user_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading"><span data-language="user_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_header;?>
</span></h1>
    </div>
    
    <div class="block block--boxed block--border">
        <div class="f_row flex-lg-row align-items-md-start">
            <div class="form_wrap f_col-lg-5">
                <form method="post" class="fn_validate_register form form--boxed form--account">
                    <div class="form__profile profile">
                        <div class="profile__image">
                            <div class="profile__icon">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, false);
?>
                            </div>
                        </div>
                        <div class="profile__information">
                            <div class="profile__name">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                                                        <div class="profile__logout">
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"logout"),$_smarty_tpl ) );?>
" class="button__logout">
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"exit_icon"), 0, true);
?>
                                    <span data-language="user_logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_logout;?>
</span>
                                </a>
                            </div>
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
                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                            <?php }?>
                        </div>
                        <?php }?>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" type="text" data-language="form_name" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="email" type="text" data-language="form_email" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="phone" type="text" data-language="form_phone" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="address" type="text" data-language="form_address" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                        </div>

                                                <div class="form__group">
                            <p class="change_pass" onclick="$('#password').toggle();return false;">
                                <span data-language="user_change_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_change_password;?>
</span>
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                            </p>
                            <input class="form__input form__placeholder--focus " id="password" value="" name="password" type="password" style="display:none;" />
                        </div>
                    </div>

                    <div class="form__footer">
                                                <button type="submit" class="form__button button--blick" name="user_save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
">
                            <span data-language="form_save"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
</span>
                        </button>
                    </div>
                </form>
            </div>
    
                        <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
                <div class="form_wrap f_col-lg-7">
                    <div class="block_explanation">
                        <div class="block_explanation__header">
                            <span data-language="">Мои заказы / Предзаказы</span>
                        </div>
                        <div class="block_explanation__body">
                            <div class="table_wrapper">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span data-language="user_number_of_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_number_of_order;?>
</span>
                                        </th>
                                        <th>
                                            <span data-language="user_order_date"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_date;?>
</span>
                                        </th>
                                        <th>
                                            <span data-language="user_order_status"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_status;?>
</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                                    <tr>
                                                                                <td>
                                            <a href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"order",'url'=>$_smarty_tpl->tpl_vars['order']->value->url),$_smarty_tpl ) );?>
'><span data-language="user_order_number"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_number;?>
</span><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                                        </td>

                                                                                <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</td>

                                                                                <td>
                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>
                                            <span data-language="status_paid"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span>,
                                            <?php }?>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_status']->value[$_smarty_tpl->tpl_vars['order']->value->status_id]->name, ENT_QUOTES, 'UTF-8', true);?>

                                        </td>
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
