<?php
/* Smarty version 3.1.33, created on 2021-03-07 11:43:58
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/cart_purchases.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6044924e970fc3_67729753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086876cd40955ecfc3e8822dc6b0188fa4e5d341' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/cart_purchases.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_6044924e970fc3_67729753 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

okay.max_order_amount = <?php echo $_smarty_tpl->tpl_vars['settings']->value->max_order_amount;?>
;

<?php echo '</script'; ?>
>

<div class="fn_cart_sticky block--cart_purchases block--boxed block--border" data-margin-top="75" data-sticky-for="1024" data-sticky-class="is-sticky">
<div class="h6" data-language="cart_purchase_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchase_title;?>
</div>

<div class="purchase ">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value->purchases, 'purchase');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
?>
        <div class="purchase__item d-flex align-items-start">
                        <div class="purchase__image d-flex">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
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
                        <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->variant->price) ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->units) {?>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->units, ENT_QUOTES, 'UTF-8', true);
}?></div>
                    </div>
                    <div class="purchase__amount">
                        <div class="purchase__group_title hidden-xs-down">
                            <span data-language="cart_head_amoun"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</span>
                        </div>
                        <div class="fn_product_amount purchase__group_content<?php if ($_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?> fn_is_preorder<?php }?> amount">
                            <span class="fn_minus amount__minus">&minus;</span>
                            <input class="amount__input" type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
" onblur="ajax_change_amount(this, <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);" data-max="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->stock;?>
">
                            <span class="fn_plus amount__plus">&plus;</span>
                        </div>
                    </div>
                    <div class="purchase__price_total">
                        <div class="purchase__group_title hidden-xs-down">
                            <span data-language="cart_head_total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_total;?>
</span>
                        </div>
                        <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->variant->price*$_smarty_tpl->tpl_vars['purchase']->value->amount) ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span></div>
                    </div>
                </div>
                                <a class="purchase__remove" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"cart_remove_item",'variantId'=>$_smarty_tpl->tpl_vars['purchase']->value->variant->id),$_smarty_tpl ) );?>
" onclick="ajax_remove(<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);return false;" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_remove;?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'remove_icon'), 0, true);
?>
                </a>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>
    <div class="coupon">
        <div class="fn_switch coupon__title">Скидочный купон</div>
                <?php if ($_smarty_tpl->tpl_vars['coupon_error']->value) {?>
        <div class="message_error">
            <?php if ($_smarty_tpl->tpl_vars['coupon_error']->value == 'invalid') {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon_error;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['coupon_error']->value == 'empty') {?>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty_coupon_error;?>

            <?php }?>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price > 0) {?>
        <div class="message_success">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon_min;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

        </div>
        <?php }?>

        <div class="coupon__group">
            <div class="form__group form__group--coupon <?php if (!$_smarty_tpl->tpl_vars['coupon_error']->value) {?>filled<?php }?>">
                <input class="fn_coupon form__input form__input--coupon form__placeholder--focus" type="text" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
">
                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
</span>
            </div>
            <input class="form__button form__button--coupon fn_sub_coupon" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchases_coupon_apply;?>
">
        </div>
    </div>
<?php }?>

<div class="purchase_detail">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->discount) {?>
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

        <?php if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>
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
    <?php }?>

    <div class="purchase_detail__item">
        <div class="purchase_detail__column_name">
            <div class="purchase_detail__name purchase_detail__name--total" data-language="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</div>
        </div>
        <div class="purchase_detail__column_value">
            <div class="purchase_detail__price purchase_detail__price--total">
                <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->total_price ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
            </div>
        </div>
    </div>
</div>
</div><?php }
}
