<?php
/* Smarty version 3.1.33, created on 2021-01-24 19:59:23
  from '/home/ganzaby/joo.by/backend/design/html/features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da76b13f304_40464161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22f9ac39b58f1c677b6a251dcdbf3ccd4b317e16' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/features.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_600da76b13f304_40464161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/22f9ac39b58f1c677b6a251dcdbf3ccd4b317e16_0.file.features.tpl.php',
    'uid' => '22f9ac39b58f1c677b6a251dcdbf3ccd4b317e16',
    'call_name' => 'smarty_template_function_category_select_226541668600da76af2e542_60092508',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->features_features ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_features, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['features_count']->value;?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'FeatureAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="fn_toggle_wrap">
                <div class="heading_box visible_md">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="boxed_sorting toggle_body_wrap off fn_card">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['category']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories_tree']->value), true);?>

                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm 12">
                        <select onchange="location = this.value;" class="selectpicker">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>5),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 5) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 5</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>10),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 10) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 10</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>25),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 25) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 25</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>50),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 50) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 50</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>100),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 100) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 100</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
        <form method="post" class="fn_form_list fn_fast_button">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
"/>

            <div class="okay_list products_list fn_sort_list">
                                <div class="okay_list_head">
                    <div class="okay_list_heading okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_features_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_features_tag"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_setting okay_list_features_setting"></div>
                    <div class="okay_list_heading okay_list_url_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_url_in_product_short, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>
                                <div class="okay_list_body features_wrap sort_extended">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                    <div class="fn_row okay_list_body_item fn_sort_item">
                        <div class="okay_list_row ">
                            <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value->position;?>
" />

                            <div class="okay_list_boding okay_list_drag move_zone">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                            </div>

                            <div class="okay_list_boding okay_list_check">
                                <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" />
                                <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"></label>
                            </div>

                            <div class="okay_list_boding okay_list_features_name">
                                <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'FeatureAdmin','id'=>$_smarty_tpl->tpl_vars['feature']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </div>

                            <div class="okay_list_boding okay_list_features_tag">
                                <div class="wrap_tags">
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value->features_categories) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value->features_categories, 'feature_cat');
$_smarty_tpl->tpl_vars['feature_cat']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature_cat']->value) {
$_smarty_tpl->tpl_vars['feature_cat']->iteration++;
$__foreach_feature_cat_2_saved = $_smarty_tpl->tpl_vars['feature_cat'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['feature_cat']->iteration <= 12 && isset($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['feature_cat']->value])) {?>
                                           <span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['feature_cat']->value]->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['feature_cat'] = $__foreach_feature_cat_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                </div>
                            </div>
                            <div class="okay_list_boding okay_list_setting okay_list_features_setting"></div>
                            <div class="okay_list_boding okay_list_url_status">
                                                                <label class="switch switch-default">
                                    <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feature']->value->url_in_product) {?>fn_active_class<?php }?>" data-controller="feature" data-action="url_in_product" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" name="url_in_product" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['feature']->value->url_in_product) {?>checked=""<?php }?>/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div class="okay_list_boding okay_list_status">
                                                                <label class="switch switch-default">
                                    <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feature']->value->in_filter) {?>fn_active_class<?php }?>" data-controller="feature" data-action="in_filter" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" name="in_filter" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['feature']->value->in_filter) {?>checked=""<?php }?>/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div class="okay_list_boding okay_list_close">
                                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_delete, ENT_QUOTES, 'UTF-8', true);?>
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
                            <select name="action" class="selectpicker features_action">
                                <option value="set_in_filter"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="unset_in_filter"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_not_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php if ($_smarty_tpl->tpl_vars['pages_count']->value > 1) {?>
                                    <option value="move_to_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_move_to_page, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="fn_additional_params">
                            <div class="fn_move_to_page col-lg-12 col-md-12 col-sm-12 hidden fn_hide_block">
                                <select name="target_page" class="selectpicker">
                                    <?php
$__section_target_page_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_target_page_1_total = $__section_target_page_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_target_page'] = new Smarty_Variable(array());
if ($__section_target_page_1_total !== 0) {
for ($__section_target_page_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] = 0; $__section_target_page_1_iteration <= $__section_target_page_1_total; $__section_target_page_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']++){
?>
                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] : null)+1;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_target_page']->value['index'] : null)+1;?>
</option>
                                    <?php
}
}
?>
                                </select>
                            </div>
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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>


    <?php echo '<script'; ?>
>
        $(function() {
            $(document).on('change', '.fn_action_block select.features_action', function () {
                var elem = $(this).find('option:selected').val();
                $('.fn_hide_block').addClass('hidden');
                if ($('.fn_' + elem).size() > 0) {
                    $('.fn_' + elem).removeClass('hidden');
                }
            });
        });
    <?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_select_226541668600da76af2e542_60092508 */
if (!function_exists('smarty_template_function_category_select_226541668600da76af2e542_60092508')) {
function smarty_template_function_category_select_226541668600da76af2e542_60092508(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                    <option value='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('category_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
' <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>>
                                        <?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>-<?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </option>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}}
/*/ smarty_template_function_category_select_226541668600da76af2e542_60092508 */
}
