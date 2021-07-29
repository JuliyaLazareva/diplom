<?php
/* Smarty version 3.1.33, created on 2021-03-15 10:12:06
  from '/home/ganzaby/diplom.dod.by/backend/design/html/order_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604f08c65d7c22_16800012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cccc91cb09592f12cee2f82d2265a2c38246eba1' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/order_settings.tpl',
      1 => 1614790712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 8,
  ),
),false)) {
function content_604f08c65d7c22_16800012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->order_settings_labels ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_orders, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<div class="row">
        <div class="col-lg-7 col-md-12 pr-0">
        <div class="boxed fn_toggle_wrap">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_statuses, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_order_settings_statuses, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, false);
?>
                </i>
                <div class="box_btn_heading ml-1">
                    <button type="button" class="btn btn_mini btn-info fn_add_status ">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_add_status, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <form class="fn_form_list" method="post">
                    <input type="hidden" value="status" name="status">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_boding okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_order_stg_sts_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_colour, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="fn_status_list fn_sort_list okay_list_body sortable">
                            <?php if ($_smarty_tpl->tpl_vars['orders_statuses']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders_statuses']->value, 'order_status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order_status']->value) {
?>
                                    <div class="fn_row okay_list_body_item">
                                        <div class="okay_list_row fn_sort_item">
                                            <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->position;?>
">
                                            <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
">

                                            <div class="okay_list_boding okay_list_drag move_zone">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                            </div>
                                            <div class="okay_list_boding okay_list_check hidden">
                                                <input class="hidden_check" type="checkbox" id="id_or_<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
"/>
                                                <label class="okay_ckeckbox" for="id_or_<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
"></label>
                                            </div>

                                            <div class="okay_list_boding okay_list_order_stg_sts_name">
                                                <input type="text" class="form-control" name="name[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == true) {?>
                                                <div class="hidden-sm-up mt-q">
                                                    <select name="is_close[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" class="selectpicker col-xs-12 px-0">
                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_write_off, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_yes, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_write_off, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_no, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    </select>
                                                </div>
                                                <?php }?>
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false) {?>
                                            <div class="okay_list_boding okay_list_order_stg_sts_status">
                                                <select name="is_close[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" class="selectpicker col-xs-12 px-0">
                                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_yes, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_no, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                </select>
                                            </div>
                                            <?php }?>
                                            <div class="okay_list_boding okay_list_order_stg_sts_label">
                                                <input  name="color[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->color;?>
" class="hidden">
                                                <span data-hint="#<?php echo $_smarty_tpl->tpl_vars['order_status']->value->color;?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['order_status']->value->color;?>
;"></span>
                                            </div>
                                            <div class="okay_list_boding okay_list_close">
                                                <?php if (count($_smarty_tpl->tpl_vars['orders_statuses']->value) > 1) {?>
                                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_delete_status, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                    </button>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <div class="fn_row fn_new_status fn_sort_item okay_list_body">
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row fn_sort_item">
                                        <div class="okay_list_boding okay_list_drag"></div>
                                        <div class="okay_list_boding okay_list_order_stg_sts_name">
                                            <input type="text" class="form-control" name="new_name[]" value="">
                                            <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == true) {?>
                                                <div class="hidden-sm-up mt-q">
                                                    <select name="new_is_close[]" class="selectpicker col-xs-12 px-0">
                                                        <option value="1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    </select>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false) {?>
                                            <div class="okay_list_boding okay_list_order_stg_sts_status">
                                                <select name="new_is_close[]" class="selectpicker">
                                                    <option value="1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                </select>
                                            </div>
                                        <?php }?>
                                        <div class="okay_list_boding okay_list_order_stg_sts_label">
                                            <input name="new_color[]" value="" class="hidden">
                                            <span data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_select_colour, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="okay_list_footer">
                            <div class="okay_list_foot_left"></div>
                            <button type="submit" value="labels" class="btn btn_small btn_blue">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="col-lg-5 col-md-12 hidden-md-down">
        <div class="boxed fn_toggle_wrap">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_labels, ENT_QUOTES, 'UTF-8', true);?>

                <div class="box_btn_heading ml-1">
                    <button type="button" class="btn btn_mini btn-info fn_add_Label ">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_add_label, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <form class="fn_form_list" method="post">
                    <input type="hidden" value="labels" name="labels">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_order_stg_lbl_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_colour, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="fn_labels_list okay_list_body sortable fn_sort_list">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labels']->value, 'label');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row fn_sort_item">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->position;?>
">
                                        <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
">

                                        <div class="cokay_list_boding okay_list_check hidden">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_order_stg_lbl_name">
                                            <input type="text" class="form-control" name="name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>

                                        <div class="okay_list_boding okay_list_order_stg_sts_label">
                                            <input  name="color[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->color;?>
" class="hidden">
                                            <span data-hint="#<?php echo $_smarty_tpl->tpl_vars['label']->value->color;?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['label']->value->color;?>
;"></span>
                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
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
                            <div class="fn_row fn_new_label fn_sort_item okay_list_body_item">
                                <div class="okay_list_row fn_sort_item">
                                    <div class="okay_list_boding okay_list_order_stg_lbl_name">
                                        <input type="text" class="form-control" name="new_name[]" value="">
                                    </div>
                                    <div class="okay_list_boding okay_list_order_stg_sts_label">
                                        <input name="new_color[]" value="" class="hidden">
                                        <span data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_select_colour, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="okay_list_footer ">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check hidden">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_4" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_4"></label>
                                </div>
                            </div>
                            <button type="submit" value="labels" class="btn btn_small btn_blue">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" media="screen" type="text/css" href="design/js/colorpicker/css/colorpicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="design/js/colorpicker/js/colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        var new_label = $(".fn_new_label").clone(true);
        $(".fn_new_label").remove();

        var new_status = $(".fn_new_status").clone(true);
        $(".fn_new_status").remove();

        $(document).on("click", ".fn_add_Label", function () {
           clone_label = new_label.clone(true);
           $(".fn_labels_list").append(clone_label);
        });

        $(document).on("click", ".fn_add_status", function () {
            clone_status = new_status.clone(true);
            clone_status.find("select").selectpicker();
            $(".fn_status_list").append(clone_status);
        });

        $(document).on("mouseenter click", ".fn_color", function () {
            var elem = $(this);
            elem.ColorPicker({
                onChange: function (hsb, hex, rgb) {
                    elem.css('backgroundColor', '#' + hex);
                    elem.prev().val(hex);
                }
            });
        });

    });
<?php echo '</script'; ?>
>

<?php }
}
