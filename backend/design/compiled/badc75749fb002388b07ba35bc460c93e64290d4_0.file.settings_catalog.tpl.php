<?php
/* Smarty version 3.1.33, created on 2021-03-03 22:13:12
  from '/home/ganzaby/diplom.dod.by/backend/design/html/settings_catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fdfc8ced0d5_39192666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'badc75749fb002388b07ba35bc460c93e64290d4' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/settings_catalog.tpl',
      1 => 1614790713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_603fdfc8ced0d5_39192666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value && empty($_smarty_tpl->tpl_vars['message_error']->value)) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog, ENT_QUOTES, 'UTF-8', true);?>

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
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'truncate_table_password_failed') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_password_failed, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_products_on_page, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <input name="products_num" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->products_num, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_products_max, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_order_amount" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_order_amount, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_posts_on_page, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="posts_num" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->posts_num, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_products_comparcion, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="comparison_count" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->comparison_count, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <input name="units" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_cents, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <select name="decimals_point" class="selectpicker">
                                    <option value='.' <?php if ($_smarty_tpl->tpl_vars['settings']->value->decimals_point == '.') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_dot, ENT_QUOTES, 'UTF-8', true);?>
 12.45 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value=',' <?php if ($_smarty_tpl->tpl_vars['settings']->value->decimals_point == ',') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_comma, ENT_QUOTES, 'UTF-8', true);?>
 12,45 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_thousands, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <select name="thousands_separator" class="selectpicker">
                                    <option value='' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator == '') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_without, ENT_QUOTES, 'UTF-8', true);?>
 1245678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value=' ' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator == ' ') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_space, ENT_QUOTES, 'UTF-8', true);?>
 1 245 678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value=',' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator == ',') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_comma, ENT_QUOTES, 'UTF-8', true);?>
 1,245,678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 mt-2">
                            <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_not_in_stock, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="boxes_inline">
                               <div class="okay_switch clearfix">
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="is_preorder" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>checked=""<?php }?>/>
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
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->title_truncate_table, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label">&nbsp;</div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>
                        <div class="fn_truncate_table_confirm" style="display: none;">
                            <div class="col-lg-4 col-md-6">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_password, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="mb-1">
                                    <input name="truncate_table_password" class="form-control" type="password" value="" disabled />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="heading_label">&nbsp;</div>
                                <button type="submit" class="btn btn_small btn-danger" name="truncate_table_confirm" value="1">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_confirm, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_watermark, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="boxed fn_image_block">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value->watermark_file) {?>
                                    <div class="fn_parent_image">
                                        <input class="fn_accept_delete" name="delete_watermark" value="" type="hidden" />
                                        <div class="banner_image fn_image_wrapper text-xs-center">
                                            <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                            <img class="watermark_image" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->watermark_file;?>
" alt="" />
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_parent_image"></div>
                                <?php }?>

                                <div class="fn_upload_image dropzone_block_image text-xs-center <?php if ($_smarty_tpl->tpl_vars['config']->value->watermark_file) {?> hidden<?php }?>">
                                    <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                    <input class="dropzone_image" name="watermark_file" type="file" accept="image/jpeg,image/png,image/gif" />
                                </div>
                                <div class="banner_image fn_image_wrapper fn_new_image text-xs-center">
                                    <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                    <img class="watermark_image" src="" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-xs-12 fn_range_wrap">
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_watermark_position, ENT_QUOTES, 'UTF-8', true);?>

                                        <span class="font-weight-bold fn_show_range"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                    <div class="raiting_boxed">
                                        <input class="fn_range_value" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
" name="watermark_offset_x" />
                                        <input class="fn_rating range_input" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <div class="raiting_range_number">
                                            <span class="float-xs-left">1</span>
                                            <span class="float-xs-right">100</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 fn_range_wrap">
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_watermark_position_y, ENT_QUOTES, 'UTF-8', true);?>

                                        <span class="font-weight-bold fn_show_range"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                    <div class="raiting_boxed">
                                        <input class="fn_range_value" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
" name="watermark_offset_y" />
                                        <input class="fn_rating range_input" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <div class="raiting_range_number">
                                            <span class="float-xs-left">1</span>
                                            <span class="float-xs-right">100</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
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
    </div>
</form>
<?php echo '<script'; ?>
>
    $(document).on("click", ".fn_truncate_table", function () {
        $('.fn_truncate_table_confirm').fadeIn(500);
        $('[name="truncate_table_password"]').prop('disabled', false);
    });
    $(document).on("input", ".fn_rating", function () {
        $(this).closest(".fn_range_wrap").find(".fn_show_range").html($(this).val());
        $(this).closest(".fn_range_wrap").find(".fn_range_value").val($(this).val());
    });
<?php echo '</script'; ?>
>
<?php }
}
