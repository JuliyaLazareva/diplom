<?php
/* Smarty version 3.1.33, created on 2021-01-24 20:10:05
  from '/home/ganzaby/joo.by/backend/design/html/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da9edbaefb9_00598286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb15c2b81acb05677b55a4e0510a1652da44e3f' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/category.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 12,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_600da9edbaefb9_00598286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/eeb15c2b81acb05677b55a4e0510a1652da44e3f_0.file.category.tpl.php',
    'uid' => 'eeb15c2b81acb05677b55a4e0510a1652da44e3f',
    'call_name' => 'smarty_template_function_category_select_1404384745600da9ed9c7af8_29157690',
  ),
));
if ($_smarty_tpl->tpl_vars['category']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['category']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->category_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['category']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="../<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['category']->value->url),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, false);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_open, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

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
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'url_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_url') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_url, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'url_wrong') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

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
            <div class="boxed match_matchHeight_true">
                                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label heading_label--required">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_name_category, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="">
                                    <div class="input-group">
                                       <span class="input-group-addon">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>

                                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_enable_category, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                        </i>
                                    </label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['category']->value->visible) {?>checked=""<?php }?>/>
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
        <div class="col-lg-4 col-md-12 pr-0 hidden-sm-down">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_image_category, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="category_images_list">
                        <li class="category_image_item fn_image_block">
                            <?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?>
                            <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                                <div class="fn_parent_image">
                                    <div class="category_image image_wrapper fn_image_wrapper text-xs-center">
                                        <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->image,300,120,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="" />
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="fn_parent_image"></div>
                            <?php }?>
                            <div class="fn_upload_image dropzone_block_image <?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?> hidden<?php }?>">
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
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_parameters, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_category_parameters, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 toggle_body_wrap on fn_card">
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="form-group clearfix">
                                    <label class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_h1, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <div>
                                        <input name="name_h1" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="product_categories">
                            <div class="heading_box">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_category_category, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <select name="parent_id" class="selectpicker mb-1" data-live-search="true" data-size="10">
                                <option value='0'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_root, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('cats'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_metatags, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row">
                    <div class="col-lg-6 col-md-6">
                        <div class="heading_label" >Meta-title <span id="fn_meta_title_counter"></span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="mb-q" >Meta-description <span id="fn_meta_description_counter"></span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_description, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
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
                        <a href="#tab1" class="tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_short_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <a href="#tab2" class="tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card ">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="annotation" id="fn_editor" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div id="tab2" class="tab">
                            <textarea name="description" class="editor_large fn_editor_class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->description, ENT_QUOTES, 'UTF-8', true);?>
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
}
/* smarty_template_function_category_select_1404384745600da9ed9c7af8_29157690 */
if (!function_exists('smarty_template_function_category_select_1404384745600da9ed9c7af8_29157690')) {
function smarty_template_function_category_select_1404384745600da9ed9c7af8_29157690(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value->id != $_smarty_tpl->tpl_vars['cat']->value->id) {?>
                                            <option value='<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['category']->value->parent_id == $_smarty_tpl->tpl_vars['cat']->value->id) {?>selected<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>--<?php
}
}
echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</option>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('cats'=>$_smarty_tpl->tpl_vars['cat']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}}
/*/ smarty_template_function_category_select_1404384745600da9ed9c7af8_29157690 */
}
