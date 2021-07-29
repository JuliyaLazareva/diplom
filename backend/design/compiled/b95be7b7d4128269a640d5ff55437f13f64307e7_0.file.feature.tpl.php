<?php
/* Smarty version 3.1.33, created on 2021-01-29 20:41:49
  from '/home/ganzaby/joo.by/backend/design/html/feature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_601448dd0bee92_54151611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95be7b7d4128269a640d5ff55437f13f64307e7' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/feature.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 15,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_601448dd0bee92_54151611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/b95be7b7d4128269a640d5ff55437f13f64307e7_0.file.feature.tpl.php',
    'uid' => 'b95be7b7d4128269a640d5ff55437f13f64307e7',
    'call_name' => 'smarty_template_function_category_select_29239450601448dcd166b9_97291219',
  ),
));
if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['feature']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->feature_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['feature']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

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

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == "duplicate_url") {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_duplicate_url, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'auto_name_id_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_auto_name_id_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'auto_value_id_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_auto_value_id_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'forbidden_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_forbidden_name, ENT_QUOTES, 'UTF-8', true);?>
:<BR>
                        <?php echo implode(", ",$_smarty_tpl->tpl_vars['forbidden_names']->value);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button fn_is_translit_alpha">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12">
            <div class="boxed match_matchHeight_true">
                                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label heading_label--required">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_name_feature, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-6">
                                <div class="">
                                    <div class="input-group">
                                        <span class="input-group-addon">URL</span>
                                        <input name="url" class="form-control fn_url <?php if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-q">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_url_in_product, ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="url_in_product" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['feature']->value->url_in_product) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_filter, ENT_QUOTES, 'UTF-8', true);?>

                                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_feature_url_in_product, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                        </i>
                                    </label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="in_filter" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['feature']->value->in_filter) {?>checked=""<?php }?>/>
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
        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_in_categories, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_feature_in_categories, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="boxed boxed_warning">
                        <div class="">
                           <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_message, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                    </div>

                    <div class="activity_of_switch_item">                         <div class="okay_switch clearfix">
                            <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_select_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</label>
                            <label class="switch switch-default">
                                <input class="switch-input" name="" value='' type="checkbox" id="select_all_categories"/>
                                <span class="switch-label"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>

                    <select class="selectpicker fn_select_all_categories col-xs-12 px-0" multiple name="feature_categories[]" size="10" data-selected-text-format="count" >
                        
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="boxed match fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_metatags, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_id, ENT_QUOTES, 'UTF-8', true);?>

                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_feature_id, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                        </i>
                    </div>
                    <input name="auto_name_id" class="form-control  mb-1" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->auto_name_id, ENT_QUOTES, 'UTF-8', true);?>
"/>

                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_value_id, ENT_QUOTES, 'UTF-8', true);?>

                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_feature_value_id, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                        </i>
                    </div>
                    <input name="auto_value_id" class="form-control mb-t" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->auto_value_id, ENT_QUOTES, 'UTF-8', true);?>
"/>

                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_description, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <textarea class="form-control okay_textarea" name="description"><?php echo $_smarty_tpl->tpl_vars['feature']->value->description;?>
</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
                <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_feature_values, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->tpl_vars['feature_values_count']->value;?>
)
                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_feature_feature_values, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card fn_sort_list">

                    <div class="row mb-1">
                        <div class="col-lg-8 col-md-7 col-sm 12">
                            <button type="button" class="btn btn_small btn-info fn_add_value float-lg-left mr-1">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_add_value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                            <div class="float-lg-left mt-q feature_to_index_new_value">
                                <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_to_index_new_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="to_index_new_value" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['feature']->value->to_index_new_value) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm 12">
                            <div class="float-xs-none float-md-right">
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


                    <div class="okay_list ok_related_list">
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_drag"></div>
                            <div class="okay_list_heading feature_value_name"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_name;?>
</div>
                            <div class="okay_list_heading feature_value_translit"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_translit;?>
</div>
                            <div class="okay_list_heading feature_value_products_num"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_products_num;?>
</div>
                            <div class="okay_list_heading feature_value_index">
                                <?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_index;?>

                                <div class="okay_switch clearfix">
                                    <label class="switch switch-default">
                                        <input class="switch-input fn_to_index_all_values" value="" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['feature']->value->to_index_new_value) {?>checked=""<?php }?>/>
                                        <input type="hidden" name="to_index_all_values" value="" disabled=""/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="okay_list_body fn_feature_values_list sort_extended fn_values_list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_values']->value, 'fv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
?>
                                <div class="fn_row okay okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <input type="hidden" name="feature_values[id][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <input class="hidden_check" type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['fv']->value->id;?>
" />
                                        <input type="hidden" class="fn_value_to_delete" name="values_to_delete[]" disabled="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                        </div>
                                        <div class="okay_list_boding feature_value_name">
                                            <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_name;?>
</div>
                                            <input type="text" class="form-control fn_feature_alias_name" name="feature_values[value][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                        <div class="okay_list_boding feature_value_translit">
                                            <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_translit;?>
</div>
                                            <input type="text" class="form-control fn_feature_alias_name" name="feature_values[translit][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->translit, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                        <div class="okay_list_boding feature_value_products_num">
                                            <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_products_num;?>
</div>
                                            <a href="index.php?controller=ProductsAdmin&features[<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->translit, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" target="_blank">
                                                <?php if (isset($_smarty_tpl->tpl_vars['products_counts']->value[$_smarty_tpl->tpl_vars['fv']->value->id]->count)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['products_counts']->value[$_smarty_tpl->tpl_vars['fv']->value->id]->count;?>

                                                <?php } else { ?>
                                                    0
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="okay_list_boding feature_value_index">
                                            <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_index;?>
</div>
                                            <div class="okay_switch clearfix">
                                                <label class="switch switch-default">
                                                    <input class="switch-input fn_index" name="" value="" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['fv']->value->to_index) {?>checked=""<?php }?>/>
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                </label>
                                            </div>
                                            <input type="hidden" class="form-control" name="feature_values[to_index][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->to_index, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_value, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_value hint-bottom-right-t-info-s-small-mobile hint-anim">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                <span class="visible_md"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <div class="fn_row okay okay_list_body_item fn_sort_item fn_new_value" style="display: none;">
                                <div class="okay_list_row">
                                    <input type="hidden" class="fn_feature_alias_id" name="feature_values[id][]" value="">
                                    <input class="hidden_check" type="checkbox" name="check[]" value="" />
                                    <div class="okay_list_boding okay_list_drag move_zone">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                    </div>
                                    <div class="okay_list_boding feature_value_name">
                                        <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_name;?>
</div>
                                        <input type="text" class="form-control fn_feature_alias_name" name="feature_values[value][]" value="">
                                    </div>
                                    <div class="okay_list_boding feature_value_translit">
                                        <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_translit;?>
</div>
                                        <input type="text" class="form-control fn_feature_alias_name" name="feature_values[translit][]" value="">
                                    </div>
                                    <div class="okay_list_boding feature_value_products_num">
                                        <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_products_num;?>
</div>
                                        <input type="text" class="form-control" name="" value="0" readonly="">
                                    </div>
                                    <div class="okay_list_boding feature_value_index">
                                        <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_value_index;?>
</div>
                                        <div class="okay_switch clearfix">
                                            <label class="switch switch-default">
                                                <input class="switch-input fn_index" name="" value="" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['feature']->value->to_index_new_value) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <input type="hidden" class="form-control" name="feature_values[to_index][]" value="<?php if ($_smarty_tpl->tpl_vars['feature']->value->to_index_new_value) {?>1<?php }?>">
                                    </div>
                                    <div class="okay_list_boding okay_list_close">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_alias, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                            <span class="visible_md"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_alias, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden">
                                                <select name="action" class="selectpicker values_action">
                            <option value="" selected></option>
                            <?php if ($_smarty_tpl->tpl_vars['pages_count']->value > 1) {?>
                                <option value="move_to_page"></option>
                            <?php }?>
                        </select>
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
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                            <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>
    <div class="boxed fn_toggle_wrap">
        <div class="heading_box">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_union_values, ENT_QUOTES, 'UTF-8', true);?>

            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_feature_union_values, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
            </i>
            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
            </div>
        </div>
        <div class="toggle_body_wrap on fn_card">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-2">
                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_union_main_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <input class="form-control mb-1 fn_union_main_value" type="text" value=""/>
                    <input name="union_main_value_id" type="hidden" value=""/>
                </div>
                <div class="col-lg-6 col-md-6 mb-2">
                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_union_second_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <input class="form-control mb-1 fn_union_second_value" type="text" value=""/>
                    <input name="union_second_value_id" type="hidden" value=""/>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-12 col-md-12 mb-2">
            <button type="submit" class="btn btn_small btn_blue float-md-right">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
        </div>
    </div>
</form>

<?php if ($_smarty_tpl->tpl_vars['feature']->value->id) {?>

    <?php echo '<script'; ?>
 src="design/js/autocomplete/jquery.autocomplete-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var union_main_value_id = $('input[name="union_main_value_id"]'),
            union_second_value_id = $('input[name="union_second_value_id"]');

        $(".fn_union_main_value").devbridgeAutocomplete({
            serviceUrl:'ajax/options_autocomplete.php',
            minChars:0,
            params: {feature_id:<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
},
            noCache: false,
            orientation:'auto',
            onSelect:function(suggestion){
                union_main_value_id.val(suggestion.data.id);
            },
            onSearchStart:function(params){
                union_main_value_id.val("");
            }
        });

        $(".fn_union_second_value").devbridgeAutocomplete({
            serviceUrl:'ajax/options_autocomplete.php',
            minChars:0,
            params: {feature_id:<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
},
            noCache: false,
            orientation:'auto',
            onSelect:function(suggestion){
                union_second_value_id.val(suggestion.data.id);
                $(this).trigger('change');
            },
            onSearchStart:function(params){
                union_second_value_id.val("");
            }
        });
    <?php echo '</script'; ?>
>

<?php }?>


    <?php echo '<script'; ?>
>
        $(document).on('change', '#select_all_categories', function () {
            $('.fn_select_all_categories option').prop("selected", $(this).is(':checked'));
            $('.fn_select_all_categories').selectpicker('refresh');
        });

        var new_value = $(".fn_new_value").clone(false);
        $(".fn_new_value").remove();
        $(document).on("click", ".fn_add_value", function () {
            var value = new_value.clone(true),
                index_new_value = ($('input[name="to_index_new_value"]').is(':checked') ? 1 : 0);
            value.find('input[name="feature_values[to_index][]"]').val(index_new_value);
            if (index_new_value == 1) {
                value.find(".fn_index").attr("checked", true);
            }
            value.show();
            $(".fn_values_list").prepend(value);
            return false;
        });

        $(document).on('change', '.fn_index', function(){
            var state = ($(this).is(':checked') ? 1 : 0);
            $(this).closest(".fn_row").find('input[name="feature_values[to_index][]"]').val(state);
        });

        $(document).on('change', '.fn_to_index_all_values', function(){
            var state = ($(this).is(':checked') ? 1 : 0);
            $('input[name="feature_values[to_index][]"]').val(state);
            $(".fn_index").prop("checked", Boolean(state));
            $('input[name="to_index_all_values"]').val(state).attr("disabled", false);
        });

        $(document).on('click', '.fn_remove_value', function(){
            $(this).closest('.fn_row').fadeOut(200, function() {
                $(this).closest(".fn_row").find(".fn_value_to_delete").attr("disabled", false);
            });
        });

        $(function() {
            $('input[name="name"]').keyup(function() {
                if(!$('#block_translit').is(':checked')) {
                    $('input[name="url"]').val(generate_url());
                }
            });
        });
    <?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_select_29239450601448dcd166b9_97291219 */
if (!function_exists('smarty_template_function_category_select_29239450601448dcd166b9_97291219')) {
function smarty_template_function_category_select_29239450601448dcd166b9_97291219(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('selected_id'=>$_smarty_tpl->tpl_vars['product_category']->value,'level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                <option value='<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
' <?php if (in_array($_smarty_tpl->tpl_vars['category']->value->id,$_smarty_tpl->tpl_vars['feature_categories']->value)) {?>selected<?php }?> category_name='<?php echo $_smarty_tpl->tpl_vars['category']->value->single_name;?>
'><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
}
}
echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected_id'=>$_smarty_tpl->tpl_vars['selected_id']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}}
/*/ smarty_template_function_category_select_29239450601448dcd166b9_97291219 */
}
