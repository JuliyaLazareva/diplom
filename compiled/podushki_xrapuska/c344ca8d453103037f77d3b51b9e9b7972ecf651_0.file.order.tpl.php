<?php
/* Smarty version 3.1.33, created on 2021-03-07 11:44:55
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60449287adb245_31194687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c344ca8d453103037f77d3b51b9e9b7972ecf651' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/order.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_60449287adb245_31194687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', ((string)$_smarty_tpl->tpl_vars['lang']->value->email_order_title)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id) ,false ,32);?>

<div class="block">
    <div class="block__header block__header--boxed block__header--border">
        <div class="block__title block__title--order">
            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, false);
?>
            <span data-language="order_greeting"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_greeting;?>
</span>
            <span class="order_number">№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span>
            <span data-language="order_success_issued"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_success_issued;?>
</span>
        </div>
    </div>

    <div class="block__body">
        <div class="f_row flex-column flex-lg-row" data-sticky-container>
            <div class="sticky f_col f_col-lg-6 f_col-xl-5">
                <div class="fn_cart_sticky block--cart_purchases block--boxed block--border" data-margin-top="15" data-sticky-for="1024" data-sticky-class="is-sticky">
                    <div class="order_boxeded">
                        <div class="h6" data-language="cart_purchase_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchase_title;?>
</div>

                        <div class="purchase">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchases']->value, 'purchase');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
?>
                                <div class="purchase__item d-flex align-items-start">
                                                                        <div class="purchase__image d-flex">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'product','url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                                 <img class="" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,70,70 ));?>
">
                                            <?php } else { ?>
                                                <div class="purchase__no_image d-flex align-items-start">
                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                                </div>
                                            <?php }?>
                                        </a>
                                     </div>
                                    <div class="purchase__content">
                                                                                <div class="purchase__name">
                                            <a class="purchase__name_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
</i>
                                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
                                            
                                        </div>
                                        <div class="purchase__group">
                                                                                        <div class="purchase__price hidden-xs-down">
                                                <div class="purchase__group_title hidden-xs-down">
                                                    <span data-language="cart_head_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
</span>
                                                </div>
                                                <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->price) ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->units) {?>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->units, ENT_QUOTES, 'UTF-8', true);
}?></div>
                                            </div>
                                            <div class="purchase__amount">
                                                <div class="purchase__group_title hidden-xs-down">
                                                    <span data-language="cart_head_amoun"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</span>
                                                </div>
                                                <div class="fn_product_amount purchase__group_content d-flex justify-content-center align-items-center">
                                                    <span class="order_purchase_count">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->amount, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                            <div class="purchase__price_total">
                                                <div class="purchase__group_title hidden-xs-down">
                                                    <span data-language="cart_head_total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_total;?>
</span>
                                                </div>
                                                <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->price*$_smarty_tpl->tpl_vars['purchase']->value->amount) ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                        <div class="purchase_detail">
                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->discount > 0) {?>
                            <div class="purchase_detail__item">
                                <div class="purchase_detail__column_name">
                                    <div class="purchase_detail__name" data-language="cart_discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_discount;?>
:</div>
                                </div>
                                <div class="purchase_detail__column_value">
                                    <div class="purchase_detail__price"><?php echo $_smarty_tpl->tpl_vars['user']->value->discount;?>
%</div>
                                </div>
                            </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon_discount > 0) {?>
                            <div class="purchase_detail__item">
                                <div class="purchase_detail__column_name">
                                    <div class="purchase_detail__name" data-language="cart_coupon"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
:</div>
                                </div>
                                <div class="purchase_detail__column_value">
                                    <div class="purchase_detail__price">
                                        <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->coupon_percent, ENT_QUOTES, 'UTF-8', true);?>
 %</i>
                                        &minus; <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->coupon_discount ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery || !$_smarty_tpl->tpl_vars['order']->value->separate_delivery && $_smarty_tpl->tpl_vars['order']->value->delivery_price > 0) {?>
                                <div class="purchase_detail__item">
                                    <div class="purchase_detail__column_name">
                                        <div class="purchase_detail__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
:</div>
                                    </div>
                                    <div class="purchase_detail__column_value">
                                        <div class="purchase_detail__price">
                                            <?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
                                               <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->delivery_price ));?>
 <span class="currency"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                            <?php } else { ?>
                                            <?php }?>
                                         </div>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="purchase_detail__item">
                                <div class="purchase_detail__column_name">
                                    <div class="purchase_detail__name purchase_detail__name--total" data-language="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</div>
                                </div>
                                <div class="purchase_detail__column_value">
                                    <div class="purchase_detail__price purchase_detail__price--total">
                                        <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->total_price ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky f_col f_col-lg-6 f_col-xl-7 flex-lg-first">
                <div class="fn_cart_sticky block--boxed block--border d-flex justify-content-center" data-margin-top="15" data-sticky-for="1024" data-sticky-class="is-sticky">
                    <div class="order_boxeded">
                        <?php if (!$_smarty_tpl->tpl_vars['order']->value->paid) {?>
                            <div class="block form--boxed form form_cart">

                                                                <div class="h6">
                                    <span data-language="order_payment_details"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_payment_details;?>
</span>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value && !$_smarty_tpl->tpl_vars['payment_method']->value && $_smarty_tpl->tpl_vars['order']->value->total_price > 0) {?>
                                    <div class="delivery padding block">
                                        <form method="post">
                                            <div class="delivery form__group">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment_method');
$_smarty_tpl->tpl_vars['payment_method']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->index++;
$_smarty_tpl->tpl_vars['payment_method']->first = !$_smarty_tpl->tpl_vars['payment_method']->index;
$__foreach_payment_method_1_saved = $_smarty_tpl->tpl_vars['payment_method'];
?>
                                                <div class="delivery__item">
                                                    <label class="checkbox delivery__label<?php if ($_smarty_tpl->tpl_vars['payment_method']->first) {?> active<?php }?>">
                                                        <input class="checkbox__input delivery__input"  type="radio" name="payment_method_id" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['delivery']->first && $_smarty_tpl->tpl_vars['payment_method']->first) {?> checked<?php }?> id="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
">

                                                        <svg class="checkbox__icon" viewBox="0 0 20 20">
                                                            <path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                                        </svg>

                                                        <div class="delivery__name">
                                                            <?php $_smarty_tpl->_assignInScope('total_price_with_delivery', $_smarty_tpl->tpl_vars['cart']->value->total_price);?>
                                                            <?php if (!$_smarty_tpl->tpl_vars['delivery']->value->separate_payment && $_smarty_tpl->tpl_vars['cart']->value->total_price < $_smarty_tpl->tpl_vars['delivery']->value->free_from) {?>
                                                                <?php $_smarty_tpl->_assignInScope('total_price_with_delivery', $_smarty_tpl->tpl_vars['cart']->value->total_price+$_smarty_tpl->tpl_vars['delivery']->value->price);?>
                                                            <?php }?>

                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_deliveries_to_pay;?>

                                                            <span class="delivery__name_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id ));?>
 <?php echo $_smarty_tpl->tpl_vars['all_currencies']->value[$_smarty_tpl->tpl_vars['payment_method']->value->currency_id]->sign;?>
</span>
                                                        </div>

                                                        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                                            <div class="delivery__image">
                                                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,40,25,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
" />
                                                            </div>
                                                        <?php }?>
                                                    </label>

                                                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->description) {?>
                                                        <div class="delivery__description">
                                                            <?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

                                                        </div>
                                                    <?php }?>
                                                </div>
                                                <?php
$_smarty_tpl->tpl_vars['payment_method'] = $__foreach_payment_method_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>

                                            <input type="submit" data-language="cart_checkout" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
" name="checkout" class="form__button">
                                        </form>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
                                                                        <div class="block_selected_payment">
                                        <div class="order_payment">
                                            <div class="order_payment__title">
                                                <span data-language="order_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_payment;?>
:</span>
                                                <span class="order_payment__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </div>
                                            <form class="order_payment__form" method="post">
                                                <input class="order_payment__button" type=submit name='reset_payment_method' data-language="order_change_payment" value='<?php echo $_smarty_tpl->tpl_vars['lang']->value->order_change_payment;?>
'/>
                                            </form>
                                            <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->description) {?>
                                            <div class="order_payment__description">
                                                <?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

                                            </div>
                                            <?php }?>

                                            <div class="order_payment__checkout">
                                                                                                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkout_payment_form'][0], array( array('order_id'=>$_smarty_tpl->tpl_vars['order']->value->id,'module'=>$_smarty_tpl->tpl_vars['payment_method']->value->module),$_smarty_tpl ) );?>

                                            </div>
                                        </div>
                                     </div>
                                <?php }?>
                            </div>
                        <?php }?>
                        <div class="block form form_cart">
                            <div class="h6" data-language="order_details"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_details;?>
</div>
                                                        <div class="block padding">
                                <table class="order_details">
                                    <tr>
                                        <td>
                                            <span data-language="user_order_status"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_status;?>
</span>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>
                                            , <span data-language="status_paid"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span data-language="order_date"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_date;?>
</span>
                                        </td>
                                        <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
 <span data-language="order_time"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_time;?>
</span> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span data-language="order_number_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_number_text;?>
</span>
                                        </td>
                                        <td>№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span data-language="order_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_name;?>
</span>
                                        </td>
                                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span data-language="order_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_email;?>
</span>
                                        </td>
                                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    </tr>
                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
                                    <tr>
                                        <td>
                                            <span data-language="order_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_phone;?>
</span>
                                        </td>
                                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    </tr>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
                                    <tr>
                                        <td>
                                            <span data-language="order_address"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_address;?>
</span>
                                        </td>
                                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    </tr>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
                                    <tr>
                                        <td>
                                            <span data-language="order_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_comment;?>
</span>
                                        </td>
                                        <td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</td>
                                    </tr>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value) {?>
                                    <tr>
                                        <td>
                                            <span data-language="order_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_delivery;?>
</span>
                                        </td>
                                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>

                        <div class="block form form_cart">
                            <div class="o_notify_v2_content">
                                <div class="o_notify_v2_content_inner" data-language="order_success_text">
                                    <p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</strong>, <?php echo $_smarty_tpl->tpl_vars['lang']->value->order_success_text;?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
