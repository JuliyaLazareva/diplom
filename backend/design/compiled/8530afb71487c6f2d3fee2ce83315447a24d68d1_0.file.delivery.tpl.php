<?php
/* Smarty version 3.1.33, created on 2021-05-07 00:24:07
  from '/home/ganzaby/diplom.dod.by/backend/design/html/delivery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60945e77d762f2_14350476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8530afb71487c6f2d3fee2ce83315447a24d68d1' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/delivery.tpl',
      1 => 1614790711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_60945e77d762f2_14350476 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['delivery']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->delivery_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['delivery']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_updated, ENT_QUOTES, 'UTF-8', true);?>

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

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                                                <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_name_delivery, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="form-group">
                            <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="enabled" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-4 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="brand_images_list">
                        <li class="brand_image_item fn_image_block">
                            <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                                <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                                <div class="fn_parent_image">
                                    <div class="category_image image_wrapper fn_image_wrapper text-xs-center">
                                        <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery']->value->image,300,120,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir ));?>
" alt="" />
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="fn_parent_image"></div>
                            <?php }?>
                            <div class="fn_upload_image dropzone_block_image <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?> hidden<?php }?>">
                                <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                <input class="dropzone_image" name="image" type="file" />
                            </div>
                            <div class="category_image image_wrapper fn_image_wrapper fn_new_image text-xs-center hidden">
                                <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                <img src="" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_type, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <button type="button" class="btn btn-small btn-outline-warning fn_type_delivery delivery_type <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price > 0) {?>active<?php }?>" data-type="paid">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_paid, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                            <button type="button" class="btn btn-small btn-outline-warning fn_type_delivery delivery_type <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price == 0 && !$_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>active<?php }?>" data-type="free">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                            <button type="button" class="btn btn-small btn-outline-warning fn_type_delivery delivery_type <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>active<?php }?>" data-type="delivery">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid_separately, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                        </div>
                    </div>
                    <div class="row fn_delivery_option <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price == 0) {?>hidden<?php }?> mt-1">
                        <div class="col-lg-12 col-md-12">
                            <div class="delivery_inline_block mt-1">
                                <div class="input-group">
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_cost, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <span class="boxes_inline bnr_dl_price">
                                        <div class="input-group">
                                            <input name="price" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->price, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="delivery_inline_block mt-1">
                                <div class="input-group">
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <span class="boxes_inline bnr_dl_price">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <input name="free_from" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->free_from, ENT_QUOTES, 'UTF-8', true);?>
" />
                                                <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="hidden" name="separate_payment" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>checked<?php }?> />
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_payments, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_delivery_payments, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row wrap_payment_item">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment_method');
$_smarty_tpl->tpl_vars['payment_method']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->iteration++;
$__foreach_payment_method_0_saved = $_smarty_tpl->tpl_vars['payment_method'];
?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="payment_item">
                                    <input class="hidden_check" id="id_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['payment_method']->value->id,$_smarty_tpl->tpl_vars['delivery_payments']->value)) {?>checked<?php }?> type="checkbox" name="delivery_payments[]">
                                    <label for="id_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" class="okay_ckeckbox <?php if (in_array($_smarty_tpl->tpl_vars['payment_method']->value->id,$_smarty_tpl->tpl_vars['delivery_payments']->value)) {?>active_payment<?php }?>">
                                        <span class="payment_img_wrap">
                                            <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
">
                                            <?php } else { ?>
                                                <img width="50" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </span>
                                        <span class="payment_name_wrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>

                                    </label>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['payment_method']->iteration%3 == 0) {?>
                                <div class="col-xs-12 clearfix"></div>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['payment_method'] = $__foreach_payment_method_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->delivery_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="description" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
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
            </div>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(document).on("click", ".fn_type_delivery", function () {
        var action = $(this).data("type");
        $(".delivery_type").removeClass("active");

        switch(action) {
            case 'paid':
                $(".fn_delivery_option").removeClass("hidden");
                $("input[name=separate_payment]").removeAttr("checked");
                $(this).addClass("active");
               break;
            case 'free':
                $(".fn_delivery_option").addClass("hidden");
                // $(".fn_delivery_option").find("input").val(0);
                $("input[name=separate_payment]").removeAttr("checked");
                $(this).addClass("active");
                break;
            case 'delivery':
                $(".fn_delivery_option").addClass("hidden");
                // $(".fn_delivery_option").find("input").val(0);
                $("input[name=separate_payment]").trigger("click");
                $(this).addClass("active");
                break;
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
