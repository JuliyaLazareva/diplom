<?php
/* Smarty version 3.1.33, created on 2021-01-30 00:37:53
  from '/home/ganzaby/joo.by/backend/design/html/banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60148031c54b74_18980878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d6eec92a3f5046622b91596c99c9fdc5e23c83' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/banners.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_60148031c54b74_18980878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->banners_groups ,false ,32);?>
<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_groups, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                    <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BannerAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-lg-5 col-sm-12 float-xs-right"></div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
        <div class="categories">
            <form class="fn_form_list" method="post">
                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="okay_list products_list fn_sort_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_features_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_group_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_brands_tag"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_display, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                                                <div class="banners_groups_wrap okay_list_body features_wrap sortable">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                            <div class="fn_row okay_list_body_item fn_sort_item">
                                <div class="okay_list_row">
                                    <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['banner']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value->position;?>
">

                                    <div class="okay_list_boding okay_list_drag move_zone">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                    </div>

                                    <div class="okay_list_boding okay_list_check">
                                        <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['banner']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value->id;?>
"/>
                                        <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['banner']->value->id;?>
"></label>
                                    </div>

                                    <div class="okay_list_boding okay_list_features_name">
                                        <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BannerAdmin','id'=>$_smarty_tpl->tpl_vars['banner']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                        </a>
                                    </div>

                                    <div class="okay_list_boding okay_list_brands_tag">
                                        <div class="wrap_tags">
                                            <?php if ($_smarty_tpl->tpl_vars['banner']->value->show_all_pages) {?>
                                                <span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php }?>
                                            <?php if (!$_smarty_tpl->tpl_vars['banner']->value->show_all_pages && $_smarty_tpl->tpl_vars['banner']->value->category_show) {?>
                                                <div>
                                                    <span class="text_dark text_700 font_12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->category_show, 'cat_show');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat_show']->value) {
?>
                                                        <span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_show']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>
                                            <?php if (!$_smarty_tpl->tpl_vars['banner']->value->show_all_pages && $_smarty_tpl->tpl_vars['banner']->value->brands_show) {?>
                                                <div>
                                                    <span class="text_dark text_700 font_12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->brands_show, 'brand_show');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand_show']->value) {
?>
                                                        <span class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand_show']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>
                                            <?php if (!$_smarty_tpl->tpl_vars['banner']->value->show_all_pages && $_smarty_tpl->tpl_vars['banner']->value->page_show) {?>
                                                <div>
                                                    <span class="text_dark text_700 font_12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->page_show, 'page_show');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page_show']->value) {
?>
                                                        <span class="tag tag-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_show']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>

                                    <div class="okay_list_boding okay_list_status">
                                                                                <div class="col-lg-4 col-md-3">
                                            <label class="switch switch-default">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['banner']->value->visible) {?>fn_active_class<?php }?>" data-controller="banner" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['banner']->value->visible) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
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
                    </div>
                                                <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_drag"></div>
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker col-lg-12 col-md-12">
                                        <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
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
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_no_groups, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>

<?php }
}
