<?php
/* Smarty version 3.1.33, created on 2021-01-24 22:37:03
  from '/home/ganzaby/joo.by/backend/design/html/coupons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600dcc5fad32f1_48970365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae85b1a51003dfd58df151c05566800d17f65a59' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/coupons.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 8,
  ),
),false)) {
function content_600dcc5fad32f1_48970365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ganzaby/joo.by/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->coupons_coupons ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['coupons_count']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['btr']->value->coupons_coupons;?>
 - <?php echo $_smarty_tpl->tpl_vars['coupons_count']->value;?>

                <?php }?>
            </div>
            <div class="box_btn_heading fn_add_coupon">
                <button class="btn btn_small btn-info">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_update, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
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

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'code_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_code') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_enter_code, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
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

<?php if ($_smarty_tpl->tpl_vars['coupons']->value) {?>
    <div class="boxed fn_toggle_wrap">
        <form class="fn_form_list" method="post">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
            <div class="okay_list products_list fn_sort_list">
                                <div class="okay_list_head">
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_coupon_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_sale"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_condit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_conditions, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_validity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_terms, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_disposable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_one_off, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_qty_uses, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>
                                <div class="okay_list_body fn_new_coupon">
                    <div class="okay_list_body_item">
                        <div class="okay_list_row ">
                            <div class="okay_list_heading okay_list_check"></div>
                            <div class="okay_list_boding okay_list_coupon_name">
                                <input class="form-control" name="new_code" type="text" value="" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_enter_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                <input name="new_id" type="hidden" value=""/>
                            </div>
                            <div class="okay_list_boding okay_list_coupon_sale">
                                <div class="input-group">
                                    <input class="form-control" name="new_value" type="text" value="" />
                                    <select class="selectpicker form-control" name="new_type">
                                        <option value="percentage">%</option>
                                        <option value="absolute"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</option>
                                    </select>
                                </div>

                            </div>
                            <div class="okay_list_boding okay_list_coupon_condit">
                                <input class="form-control" type="text" name="new_min_order_price" value="" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_order_price, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <div class="okay_list_boding okay_list_coupon_validity">
                                <div class="input-group">
                                    <input class="form-control" type=text name="new_expire" value="">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="okay_list_boding okay_list_coupon_disposable">
                                <input class="hidden_check" type="checkbox" name="new_single" id="single" value="1" />
                                <label class="okay_ckeckbox" for="single"></label>
                            </div>
                            <div class="okay_list_heading okay_list_coupon_count"></div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                    </div>
                </div>
                                <div class="okay_list_body fn_coupon_wrap">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coupons']->value, 'coupon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['coupon']->value) {
?>
                        <div class="fn_row okay_list_body_item">
                            <div class="okay_list_row ">
                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['coupon']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value->id;?>
"/>
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['coupon']->value->id;?>
"></label>
                                </div>
                                <div class="okay_list_boding okay_list_coupon_name">
                                    <span class="text_dark">
                                        <?php echo $_smarty_tpl->tpl_vars['coupon']->value->code;?>

                                    </span>
                                    <div class="hidden-lg-up mt-q">
                                        <?php if ($_smarty_tpl->tpl_vars['coupon']->value->expire) {?>
                                            <?php if (smarty_modifier_date_format(time(),'%Y%m%d') <= smarty_modifier_date_format($_smarty_tpl->tpl_vars['coupon']->value->expire,'%Y%m%d')) {?>
                                                <span class="tag tag-primary">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_valid_until, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['coupon']->value->expire ));?>

                                                </span>
                                            <?php } else { ?>
                                                <span class="tag tag-danger">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_expired, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['coupon']->value->expire ));?>

                                                </span>
                                            <?php }?>
                                        <?php } else { ?>
                                            <span class="tag tag-warning">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'infinity'), 0, true);
?>
                                            </span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['coupon']->value->min_order_price > 0) {?>
                                            <span class="tag tag-success">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_order_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon']->value->min_order_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                            </span>
                                        <?php }?>
                                        <div class="mt-q">
                                            <?php if ($_smarty_tpl->tpl_vars['coupon']->value->single) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_one_off, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_many, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </div>

                                    </div>
                                </div>
                                <div class="okay_list_boding okay_list_coupon_sale">
                                    <?php echo $_smarty_tpl->tpl_vars['coupon']->value->value*1;?>

                                    <?php if ($_smarty_tpl->tpl_vars['coupon']->value->type == 'absolute') {?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php } else { ?>
                                        %
                                    <?php }?>
                                </div>
                                <div class="okay_list_boding okay_list_coupon_condit">
                                    <?php if ($_smarty_tpl->tpl_vars['coupon']->value->min_order_price > 0) {?>
                                        <div class="">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_order_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon']->value->min_order_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                        </div>
                                    <?php }?>
                                </div>
                                <div class="okay_list_boding okay_list_coupon_validity">
                                    <div class="">
                                        <?php if ($_smarty_tpl->tpl_vars['coupon']->value->expire) {?>
                                            <?php if (smarty_modifier_date_format(time(),'%Y%m%d') <= smarty_modifier_date_format($_smarty_tpl->tpl_vars['coupon']->value->expire,'%Y%m%d')) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_valid_until, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['coupon']->value->expire ));?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_expired, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['coupon']->value->expire ));?>

                                            <?php }?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'infinity'), 0, true);
?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="okay_list_boding okay_list_coupon_disposable">
                                    <?php if ($_smarty_tpl->tpl_vars['coupon']->value->single) {?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_yes, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_no, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                                <div class="okay_list_boding okay_list_coupon_count">
                                    <?php if ($_smarty_tpl->tpl_vars['coupon']->value->usages > 0) {?>
                                         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon']->value->usages, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php } else { ?>
                                         0
                                    <?php }?>
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_small btn_blue">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
<?php } else { ?>
        <div class="boxed fn_toggle_wrap">
        <form method="post" class="clearfix">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

            <div class="okay_list products_list fn_sort_list">
                                <div class="okay_list_head">
                    <div class="okay_list_heading okay_list_check"></div>
                    <div class="okay_list_heading okay_list_coupon_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_sale"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_condit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_conditions, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_validity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_terms, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_disposable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_one_off, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_coupon_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_qty_uses, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>
                                <div class="okay_list_body">
                    <div class="okay_list_body_item">
                        <div class="okay_list_row ">
                            <div class="okay_list_heading okay_list_check"></div>
                            <div class="okay_list_boding okay_list_coupon_name">
                                <input class="form-control" name="new_code" type="text" value="" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_enter_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                <input name="new_id" type="hidden" value=""/>
                            </div>
                            <div class="okay_list_boding okay_list_coupon_sale">
                                <div class="input-group">
                                    <input class="form-control" name="new_value" type="text" value="" />
                                    <select class="selectpicker form-control" name="new_type">
                                        <option value="percentage">%</option>
                                        <option value="absolute"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</option>
                                    </select>
                                </div>
                            </div>
                            <div class="okay_list_boding okay_list_coupon_condit">
                                <input class="form-control" type="text" name="new_min_order_price" value="" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->coupons_order_price, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <div class="okay_list_boding okay_list_coupon_validity">

                                <div class="input-group">
                                    <input class="form-control" type=text name="new_expire" value="">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="okay_list_boding okay_list_coupon_disposable">
                                <input class="hidden_check" type="checkbox" name="new_single" id="single" value="1" />
                                <label class="okay_ckeckbox" for="single"></label>
                            </div>
                            <div class="okay_list_heading okay_list_coupon_count"></div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 mt-1">
                    <button type="submit" class="btn btn_small btn_blue float-md-right">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
       <?php echo '<script'; ?>
>
           $('input[name="new_expire"]').datepicker();
       <?php echo '</script'; ?>
>
    </div>
<?php }?>



    <?php echo '<script'; ?>
>
        $(function() {
            var new_coupon = $(".fn_new_coupon").clone(true);
            $(".fn_new_coupon").remove();

            $(document).on("click", ".fn_add_coupon", function () {
                $(this).remove();
                new_coupon.find("select").selectpicker();
                new_coupon.find('input[name="new_expire"]').datepicker();
                $(".fn_coupon_wrap").prepend(new_coupon);
            })
        });
    <?php echo '</script'; ?>
>

<?php }
}
