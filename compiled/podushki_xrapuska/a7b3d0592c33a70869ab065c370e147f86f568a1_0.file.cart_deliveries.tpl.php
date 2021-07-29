<?php
/* Smarty version 3.1.33, created on 2021-03-07 11:43:58
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/cart_deliveries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6044924e9d99f8_90132788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7b3d0592c33a70869ab065c370e147f86f568a1' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/cart_deliveries.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_6044924e9d99f8_90132788 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
   <div class="block form form_cart">
                              
        <div class="form__header">
		<div class="form__title">
			<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"delivery_icon"), 0, false);
?>
			<span data-language="cart_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_delivery;?>
</span>
		</div>
	</div>
    <div class="delivery form__group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deliveries']->value, 'delivery');
$_smarty_tpl->tpl_vars['delivery']->iteration = 0;
$_smarty_tpl->tpl_vars['delivery']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->iteration++;
$_smarty_tpl->tpl_vars['delivery']->index++;
$_smarty_tpl->tpl_vars['delivery']->first = !$_smarty_tpl->tpl_vars['delivery']->index;
$__foreach_delivery_1_saved = $_smarty_tpl->tpl_vars['delivery'];
?>
            <div class="delivery__item">
				<label class="checkbox delivery__label<?php if ($_smarty_tpl->tpl_vars['delivery']->first) {?> active<?php }?>" for="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
">
					<input class="checkbox__input delivery__input" id="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" onclick="change_payment_method(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
)" type="radio" name="delivery_id" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['delivery_id']->value == $_smarty_tpl->tpl_vars['delivery']->value->id || $_smarty_tpl->tpl_vars['delivery']->first) {?> checked<?php }?> />
					<svg class="checkbox__icon" viewBox="0 0 20 20">
						<path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>
					</svg>
                    <div class="delivery__name">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>


						<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_price < $_smarty_tpl->tpl_vars['delivery']->value->free_from && $_smarty_tpl->tpl_vars['delivery']->value->price > 0 && !$_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
							<span class="delivery__name_price">(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery']->value->price ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
)</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
							<span class="delivery__name_price" data-language="cart_free">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_paid_separate;?>
)</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['cart']->value->total_price >= $_smarty_tpl->tpl_vars['delivery']->value->free_from && !$_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
							<span class="delivery__name_price" data-language="cart_free">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_free;?>
)</span>
						<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
						<div class="delivery__image">
							<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery']->value->image,40,25,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
						</div>
					<?php }?>
                </label>
                
				<?php if ($_smarty_tpl->tpl_vars['delivery']->value->description) {?>
					<div class="delivery__description">
						<?php echo $_smarty_tpl->tpl_vars['delivery']->value->description;?>

					</div>
                <?php }?>
            </div>
        <?php
$_smarty_tpl->tpl_vars['delivery'] = $__foreach_delivery_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </div> 
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deliveries']->value, 'delivery');
$_smarty_tpl->tpl_vars['delivery']->iteration = 0;
$_smarty_tpl->tpl_vars['delivery']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->iteration++;
$_smarty_tpl->tpl_vars['delivery']->index++;
$_smarty_tpl->tpl_vars['delivery']->first = !$_smarty_tpl->tpl_vars['delivery']->index;
$__foreach_delivery_2_saved = $_smarty_tpl->tpl_vars['delivery'];
?>
        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->payment_methods) {?>
           
            <div class="fn_delivery_payment" id="fn_delivery_payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery']->iteration != 1) {?> style="display:none"<?php }?>>
            <div class="block form form_cart">
				<div class="form__header">
					<div class="form__title">
					<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"money_icon"), 0, true);
?>
					<span data-language="cart_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_payment;?>
</span>
					</div>
				</div>
                <div class="delivery form__group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery']->value->payment_methods, 'payment_method');
$_smarty_tpl->tpl_vars['payment_method']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->index++;
$_smarty_tpl->tpl_vars['payment_method']->first = !$_smarty_tpl->tpl_vars['payment_method']->index;
$__foreach_payment_method_3_saved = $_smarty_tpl->tpl_vars['payment_method'];
?>
                        <div class="delivery__item">
							<label class="checkbox delivery__label<?php if ($_smarty_tpl->tpl_vars['payment_method']->first) {?> active<?php }?>" for="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
">
								<input class="checkbox__input delivery__input" id="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" type="radio" name="payment_method_id" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery']->first && $_smarty_tpl->tpl_vars['payment_method']->first) {?> checked<?php }?> />
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

                                    <span class="delivery__name_price">(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['total_price_with_delivery']->value,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id ));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_currencies']->value[$_smarty_tpl->tpl_vars['payment_method']->value->currency_id]->sign, ENT_QUOTES, 'UTF-8', true);?>
)</span>
                                </div>
								<?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
									<div class="delivery__image">
										<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,40,25,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
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
$_smarty_tpl->tpl_vars['payment_method'] = $__foreach_payment_method_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                </div>
            </div>
            
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['delivery'] = $__foreach_delivery_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
<?php }
}
}
