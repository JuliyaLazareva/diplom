<?php
/* Smarty version 3.1.33, created on 2021-01-29 20:59:19
  from '/home/ganzaby/joo.by/backend/design/html/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60144cf7ae6fd8_55003454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ebd3e827dd4ff1311ee0e98594af24a0334882' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/product.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 36,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_60144cf7ae6fd8_55003454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/38ebd3e827dd4ff1311ee0e98594af24a0334882_0.file.product.tpl.php',
    'uid' => '38ebd3e827dd4ff1311ee0e98594af24a0334882',
    'call_name' => 'smarty_template_function_category_select_190595511960144cf76201e4_19258080',
  ),
));
if ($_smarty_tpl->tpl_vars['product']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['product']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->product_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['product']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->id && !empty($_smarty_tpl->tpl_vars['product']->value->url)) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="../<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['product']->value->url),$_smarty_tpl ) );?>
" >
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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_updated, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_url') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_url, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'url_wrong') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_categories') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_no_category, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" id="product" enctype="multipart/form-data" class="clearfix fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label heading_label--required">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_name, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input id="product_id" name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="">
                                    <div class="input-group">
                                        <span class="input-group-addon">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>
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

                                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_enable, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                        </i>
                                    </label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['product']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_bestseller, ENT_QUOTES, 'UTF-8', true);?>

                                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_bestseller, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                        </i>
                                    </label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="featured" value="1" type="checkbox" id="featured_checkbox" <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>checked=""<?php }?>/>
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
        <div class="col-lg-8 col-md-12 pr-0 ">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_images, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="toggle_body_wrap fn_card on ">
                    <ul class="fn_droplist_wrap product_images_list clearfix sortable" data-image="product">
                        <li class="fn_dropzone dropzone_block">
                            <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                            <input type="file" name="dropped_images[]" multiple class="dropinput">
                        </li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$__foreach_image_0_saved = $_smarty_tpl->tpl_vars['image'];
?>
                            <li class="product_image_item <?php if ($_smarty_tpl->tpl_vars['image']->first) {?>first_image<?php }?> <?php if ($_smarty_tpl->tpl_vars['image']->iteration > 4) {?>fn_toggle_hidden hidden<?php }?> fn_sort_item">
                                <button type="button" class="fn_remove_image remove_image"></button>
                                <i class="move_zone">
                                    <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                                         <img class="product_icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,300,120 ));?>
" alt=""/>
                                    <?php } else { ?>
                                        <img class="product_icon" src="design/images/no_image.png" width="40">
                                    <?php }?>
                                   <input type=hidden name='images[]' value="<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
">
                                </i>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <li class="fn_new_image_item product_image_item fn_sort_item">
                            <button type="button" class="fn_remove_image remove_image"></button>
                            <img src="" alt=""/>
                            <input type=hidden name='images_urls[]' value="">
                        </li>
                    </ul>
                    <?php if (count($_smarty_tpl->tpl_vars['product_images']->value) > 4) {?>
                        <div class="show_more_images fn_show_images"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_images_all, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>

                <div class="col-lg-4 col-md-12 ">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_label">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brand, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_brand, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 toggle_body_wrap on fn_card ">
                        <select name="brand_id" class="selectpicker mb-1<?php if (!$_smarty_tpl->tpl_vars['brands']->value) {?> hidden<?php }?> fn_meta_brand" data-live-search="true">
                            <option value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->brand_id) {?>selected=""<?php }?> data-brand_name=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->brand_id == $_smarty_tpl->tpl_vars['brand']->value->id) {?>selected=""<?php }?> data-brand_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <div class="heading_label heading_label--required">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_category, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div id="product_cats">
                            <?php $_smarty_tpl->_assignInScope('first_category', reset($_smarty_tpl->tpl_vars['product_categories']->value));?>
                            <select class="selectpicker  mb-1 fn_product_category fn_meta_categories" data-live-search="true">
                                <option value="0" selected="" disabled="" data-category_name=""><?php echo $_smarty_tpl->tpl_vars['btr']->value->product_select_category;?>
</option>
                                
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                            </select>
                            <div id="sortable_cat" class="fn_product_categories_list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_categories']->value, 'product_category');
$_smarty_tpl->tpl_vars['product_category']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_category']->value) {
$_smarty_tpl->tpl_vars['product_category']->index++;
$_smarty_tpl->tpl_vars['product_category']->first = !$_smarty_tpl->tpl_vars['product_category']->index;
$__foreach_product_category_3_saved = $_smarty_tpl->tpl_vars['product_category'];
?>
                                    <div class="fn_category_item product_category_item <?php if ($_smarty_tpl->tpl_vars['product_category']->first) {?>first_category<?php }?>">
                                        <span class="product_cat_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <label class="fn_delete_product_cat fa fa-times" for="id_<?php echo $_smarty_tpl->tpl_vars['product_category']->value->id;?>
"></label>
                                        <input id="id_<?php echo $_smarty_tpl->tpl_vars['product_category']->value->id;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['product_category']->value->id;?>
" data-cat_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" checked="" name="categories[]">
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['product_category'] = $__foreach_product_category_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <div class="fn_category_item fn_new_category_item product_category_item">
                                <span class="product_cat_name"></span>
                                <label class="fn_delete_product_cat fa fa-times" for=""></label>
                                <input id="" type="checkbox" value="" name="categories[]" data-cat_name="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="boxed fn_toggle_wrap match_matchHeight_true">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_options, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_options, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="variants_wrapper fn_card">
                    <div class="okay_list variants_list scrollbar-variant">
                        <div class="okay_list_body sortable variants_listadd">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->index++;
$_smarty_tpl->tpl_vars['variant']->first = !$_smarty_tpl->tpl_vars['variant']->index;
$__foreach_variant_4_saved = $_smarty_tpl->tpl_vars['variant'];
?>
                                <div class="okay_list_body_item variants_list_item ">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding variants_item_drag">
                                            <div class="heading_label"></div>
                                            <div class="move_zone">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding variants_item_sku">
                                            <div class="heading_label">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>

                                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_sku, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                                </i>
                                            </div>
                                            <input class="variant_input" name="variants[sku][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_name">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_option_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input name="variants[id][]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            <input class="variant_input" name="variants[name][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </div>
                                        <div class="okay_list_boding variants_item_price">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[price][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->price, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_discount">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_old_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[compare_price][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->compare_price, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_currency">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <select name="variants[currency_id][]" class="selectpicker">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['variant']->value->currency_id) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                        <div class="okay_list_boding variants_item_weight">
                                            <div class="heading_label">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_weight, ENT_QUOTES, 'UTF-8', true);?>

                                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_weight, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                                </i>
                                            </div>
                                            <input class="variant_input" name="variants[weight][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->weight, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_amount">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[stock][]" type="text" value="<?php if ($_smarty_tpl->tpl_vars['variant']->value->infinity || $_smarty_tpl->tpl_vars['variant']->value->stock == '') {?>∞<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->stock, ENT_QUOTES, 'UTF-8', true);
}?>"/>
                                        </div>
                                        <div class="okay_list_boding variants_item_units">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_variant_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <input class="variant_input" name="variants[units][]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->units, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <?php if (!$_smarty_tpl->tpl_vars['variant']->first) {?>
                                        <div class="okay_list_boding okay_list_close remove_variant">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_variant hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                            </button>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['variant'] = $__foreach_variant_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="okay_list_body_item variants_list_item fn_new_row_variant">
                                <div class="okay_list_row ">
                                    <div class="okay_list_boding variants_item_drag">
                                        <div class="heading_label"></div>
                                        <div class="move_zone">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                        </div>
                                    </div>
                                    <div class="okay_list_boding variants_item_sku">
                                        <div class="heading_label">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>

                                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_sku, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                            </i>
                                        </div>
                                        <input class="variant_input" name="variants[sku][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_name">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_option_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input name="variants[id][]" type="hidden" value="" />
                                        <input class="variant_input" name="variants[name][]" type="text" value="" />
                                    </div>
                                    <div class="okay_list_boding variants_item_price">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[price][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_discount">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_old_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[compare_price][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_currency">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <select name="variants[currency_id][]" class="selectpicker">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->code, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <div class="okay_list_boding variants_item_weight">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_weight, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[weight][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_amount">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[stock][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding variants_item_units">
                                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_variant_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="variant_input" name="variants[units][]" type="text" value=""/>
                                    </div>
                                    <div class="okay_list_boding okay_list_close remove_variant">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_variant hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_btn_heading mt-1">
                        <button type="button" class="btn btn_mini btn-info fn_add_variant">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_add_option, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-8 col-md-12 pr-0 ">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_promotions, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_product_promotions, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="fn_droplist_wrap product_images_list clearfix sortable" data-image="special">
                        <li class="fn_dropzone dropzone_block">
                            <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                            <input type="file" name="spec_dropped_images[]" multiple class="dropinput">
                        </li>
                        <?php if (count($_smarty_tpl->tpl_vars['special_images']->value) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['special_images']->value, 'special');
$_smarty_tpl->tpl_vars['special']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['special']->value) {
$_smarty_tpl->tpl_vars['special']->iteration++;
$__foreach_special_7_saved = $_smarty_tpl->tpl_vars['special'];
?>
                                <li class="product_image_item <?php if ($_smarty_tpl->tpl_vars['special']->iteration > 4) {?>fn_toggle_hidden hidden<?php }?> fn_sort_item <?php if ($_smarty_tpl->tpl_vars['product']->value->special == $_smarty_tpl->tpl_vars['special']->value->filename) {?>product_special<?php }?>">
                                    <button type="button" class=" fn_remove_image remove_image"></button>
                                    <i class="move_zone">
                                        <img class="product_icon" title="<?php echo $_smarty_tpl->tpl_vars['special']->value->name;?>
" src="../<?php echo $_smarty_tpl->tpl_vars['config']->value->special_images_dir;
echo $_smarty_tpl->tpl_vars['special']->value->filename;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value->filename;?>
" />
                                        <span class="fn_change_special change_special" data-origin="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select, ENT_QUOTES, 'UTF-8', true);?>
" data-result="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unselect, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->special == $_smarty_tpl->tpl_vars['special']->value->filename) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unselect, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                        <input type="radio" name="special" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value->filename, ENT_QUOTES, 'UTF-8', true);?>
" class="hidden" <?php if ($_smarty_tpl->tpl_vars['product']->value->special == $_smarty_tpl->tpl_vars['special']->value->filename) {?>checked<?php }?>>
                                    </i>
                                    <input type="hidden" name="spec_images[]" value="<?php echo $_smarty_tpl->tpl_vars['special']->value->id;?>
" />
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['special'] = $__foreach_special_7_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <li class="fn_new_spec_image_item product_image_item fn_sort_item">
                            <button type="button" class="fn_remove_image remove_image"></button>
                            <img src="" alt=""/>
                            <input type="hidden" name='spec_images_urls[]' value="" />
                            <i class="move_zone fa fa-arrows font-2xl"></i>
                        </li>
                    </ul>
                    <?php if (count($_smarty_tpl->tpl_vars['special_images']->value) > 4) {?>
                        <div class="show_more_images fn_show_images"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_images_all, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
                <div class="col-lg-4 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="heading_label">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating_value, ENT_QUOTES, 'UTF-8', true);?>

                        <span class="font-weight-bold fn_show_rating"><?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
</span>
                    </div>
                    <div class="raiting_boxed">
                        <input class="fn_rating_value" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
" name="rating" />
                        <input class="fn_rating range_input" type="range" min="1" max="5" step="0.1" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->rating;?>
" />

                        <div class="raiting_range_number">
                            <span class="float-xs-left">1</span>
                            <span class="float-xs-right">5</span>
                        </div>
                    </div>
                    <div class="heading_label">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating_number, ENT_QUOTES, 'UTF-8', true);?>

                        <input type="text" class="form-control" name="votes" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->votes;?>
">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6 col-md-12 pr-0 ">
            <div class="boxed fn_toggle_wrap min_height_210px">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_features, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_product_features, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                </i>
                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['lang_id']->value != $_smarty_tpl->tpl_vars['main_lang_id']->value) {?>
                    <div class="boxed boxed_attention mt-h mb-0">
                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->product_features_values_change_notice;?>

                    </div>
                <?php }?>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <div class="features_wrap fn_features_wrap">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                        <div class="fn_feature_block_<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
">
                            <?php $_smarty_tpl->_assignInScope('feature_id', $_smarty_tpl->tpl_vars['feature']->value->id);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_values']->value[$_smarty_tpl->tpl_vars['feature_id']->value], 'feature_value');
$_smarty_tpl->tpl_vars['feature_value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature_value']->value) {
$_smarty_tpl->tpl_vars['feature_value']->index++;
$_smarty_tpl->tpl_vars['feature_value']->first = !$_smarty_tpl->tpl_vars['feature_value']->index;
$__foreach_feature_value_9_saved = $_smarty_tpl->tpl_vars['feature_value'];
?>
                                <div class="feature_row clearfix">
                                    <div class="feature_name<?php if (!$_smarty_tpl->tpl_vars['feature_value']->first) {?> additional_values<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['feature_value']->first) {?>
                                            <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <a href="index.php?controller=FeatureAdmin&id=<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" target="_blank">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                                </a>
                                            </span>
                                        <?php }?>
                                    </div>
                                    <div class="feature_value">
                                        <input class="feature_input fn_auto_option" data-id="<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
" type="text" name="features_values_text[<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_value']->value->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['lang_id']->value != $_smarty_tpl->tpl_vars['main_lang_id']->value) {?> readonly<?php }?>/>
                                        <input class="fn_value_id_input" type="hidden" name="features_values[<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['feature_value']->value->id;?>
"/>
                                        <button type="button" class="btn btn_mini<?php if ($_smarty_tpl->tpl_vars['feature_value']->first) {?> btn-info fn_add<?php } else { ?> btn-danger fn_remove<?php }?> fn_feature_multi_values feature_multi_values">
                                            <span class="fn_plus" <?php if (!$_smarty_tpl->tpl_vars['feature_value']->first) {?>style="display: none;"<?php }?>>
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                                            </span>
                                            <span class="fn_minus" <?php if ($_smarty_tpl->tpl_vars['feature_value']->first) {?>style="display: none;"<?php }?>>
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'minus'), 0, true);
?>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['feature_value'] = $__foreach_feature_value_9_saved;
}
} else {
?>
                                <div class="feature_row clearfix">
                                    <div class="feature_name">
                                        <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <a href="index.php?controller=FeatureAdmin&id=<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" target="_blank">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </span>
                                    </div>
                                    <div class="feature_value">
                                        <input class="feature_input fn_auto_option" data-id="<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
" type="text" name="features_values_text[<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
][]" value=""<?php if ($_smarty_tpl->tpl_vars['lang_id']->value != $_smarty_tpl->tpl_vars['main_lang_id']->value) {?> readonly<?php }?>/>
                                        <input class="fn_value_id_input" type="hidden" name="features_values[<?php echo $_smarty_tpl->tpl_vars['feature_id']->value;?>
][]" value=""/>
                                        <button type="button" class="btn btn_mini btn-info fn_add fn_feature_multi_values feature_multi_values">
                                            <span class="fn_plus">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                                            </span>
                                            <span class="fn_minus" style="display: none">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'minus'), 0, true);
?>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="fn_new_feature">
                        <div class="new_feature_row clearfix">
                            <div class="wrap_inner_new_feature">
                                <input type="text" class="new_feature new_feature_name" name="new_features_names[]" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_features_enter, ENT_QUOTES, 'UTF-8', true);?>
" />
                                <input type="text" class="new_feature new_feature_value"  name="new_features_values[]" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_features_value_enter, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                            <span class="fn_delete_feature btn_close delete_feature">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                            </span>
                        </div>
                    </div>
                    <div class="fn_new_feature_category">
                        <div class="feature_row clearfix">
                            <div class="feature_name">
                                <span title="" class="fn_feature_name">
                                    <a href="" target="_blank"></a>
                                </span>
                            </div>
                            <div class="feature_value">
                                <input class="feature_input fn_auto_option" data-id="" type="text" name="" value=""<?php if ($_smarty_tpl->tpl_vars['lang_id']->value != $_smarty_tpl->tpl_vars['main_lang_id']->value) {?> readonly<?php }?>/>
                                <input class="fn_value_id_input" type="hidden" name="" value=""/>
                                <button type="button" class="btn btn_mini btn-info fn_add fn_feature_multi_values feature_multi_values">
                                    <span class="fn_plus">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                                    </span>
                                    <span class="fn_minus" style="display: none">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'minus'), 0, true);
?>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_btn_heading mt-1">
                    <button type="button" class="btn btn_mini btn-info fn_add_feature">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_feature_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </div>
        </div>

                <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_recommended, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card fn_sort_list">
                    <div class="okay_list ok_related_list">
                        <div class="okay_list_body related_products sortable">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_products']->value, 'related_product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->value) {
?>
                                <div class="fn_row okay okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                        </div>
                                        <div class="okay_list_boding okay_list_related_photo">
                                            <input type="hidden" name=related_products[] value='<?php echo $_smarty_tpl->tpl_vars['related_product']->value->id;?>
'>
                                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl ) );?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['related_product']->value->images[0]) {?>
                                                    <img class="product_icon" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['related_product']->value->images[0]->filename,40,40 ));?>
'>
                                                <?php } else { ?>
                                                    <img class="product_icon" src="design/images/no_image.png" width="40">
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="okay_list_boding okay_list_related_name">
                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['related_product']->value->id),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
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
                            <div id="new_related_product" class="fn_row okay okay_list_body_item fn_sort_item" style='display:none;'>
                                <div class="okay_list_row">
                                    <div class="okay_list_boding okay_list_drag move_zone">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                    </div>
                                    <div class="okay_list_boding okay_list_related_photo">
                                        <input type="hidden" name="related_products[]" value="">
                                        <img class=product_icon src="">
                                    </div>
                                    <div class="okay_list_boding okay_list_related_name">
                                        <a class="link related_product_name" href=""></a>
                                    </div>
                                    <div class="okay_list_boding okay_list_close">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_recommended_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="autocomplete_arrow">
                        <input type=text name=related id="related_products" class="form-control" placeholder='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_product, ENT_QUOTES, 'UTF-8', true);?>
'>
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
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>

                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="heading_label" >Meta-description <span id="fn_meta_description_counter"></span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_description, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
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
                        <a href="#tab1" class="heading_box tab_navigation_link">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_short_description, ENT_QUOTES, 'UTF-8', true);?>


                        </a>
                        <a href="#tab2" class="heading_box tab_navigation_link">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>

                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_full_description, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="annotation" id="annotation" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div id="tab2" class="tab">
                            <textarea id="fn_editor" name="description" class="editor_large fn_editor_class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->description, ENT_QUOTES, 'UTF-8', true);?>
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
 src="design/js/autocomplete/jquery.autocomplete-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/js/chosen/chosen.jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="design/js/chosen/chosen.min.css" media="screen" />
<?php echo '<script'; ?>
>
    $(window).on("load", function() {

        $(document).on("click", ".fn_show_images",function () {
           $(this).prev().find($(".fn_toggle_hidden")).toggleClass("hidden");
        });
        // Удаление товара
        $(document).on( "click", ".fn_remove_item", function() {
            $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
            return false;
        });
        $(".chosen").chosen('chosen-select');

        $(document).on("input", ".fn_rating", function () {
            $(".fn_show_rating").html($(this).val());
            $(".fn_rating_value").val($(this).val());
        });

        var image_item_clone = $(".fn_new_image_item").clone(true);
        $(".fn_new_image_item").remove();
        var new_image_tem_clone = $(".fn_new_spec_image_item").clone(true);
        $(".fn_new_spec_image_item").remove();
        // Или перетаскиванием
        if(window.File && window.FileReader && window.FileList) {

            $(".fn_dropzone").on('dragover', function (e){
                e.preventDefault();
                $(this).css('background', '#bababa');
            });
            $(".fn_dropzone").on('dragleave', function(){
                $(this).css('background', '#f8f8f8');
            });

            function handleFileSelect(evt){
                dropInput = $(this).closest(".fn_droplist_wrap").find("input.dropinput:last").clone();
                var parent = $(this).closest(".fn_droplist_wrap");
                var files = evt.target.files; // FileList object
                // Loop through the FileList and render image files as thumbnails.
                for (var i = 0, f; f = files[i]; i++) {
                    // Only process image files.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
                    var reader = new FileReader();
                    // Closure to capture the file information.
                    reader.onload = (function(theFile) {
                        return function(e) {
                            // Render thumbnail.
                            if(parent.data('image') == "product"){
                                var clone_item = image_item_clone.clone(true);
                            } else if(parent.data('image') == "special") {
                                var clone_item = new_image_tem_clone.clone(true);
                            }
                            clone_item.find("img").attr("onerror",'');
                            clone_item.find("img").attr("src", e.target.result);
                            clone_item.find("input").val(theFile.name);
                            clone_item.appendTo(parent);
                            temp_input =  dropInput.clone();
                            parent.find("input.dropinput").hide();
                            parent.find(".fn_dropzone").append(temp_input);
                        };
                    })(f);
                    // Read in the image file as a data URL.
                    reader.readAsDataURL(f);
                }
                $(".fn_dropzone").removeAttr("style");
            }
            $(document).on('change','.dropinput',handleFileSelect);
        }
        $(document).on("click", ".fn_remove_image", function () {
            $(this).closest("li").remove();
        });
        $(document).on("click", ".fn_change_special", function () {
            if($(this).closest('li').hasClass("product_special")) {
                $(this).closest("ul").find("input[type=radio]").attr("checked", false);
                $(this).closest("li").removeClass("product_special");
                $(this).text($(this).data("origin"));
            } else {
                $(this).closest("ul").find("input[type=radio]").attr("checked", false);
                $(this).closest("li").removeClass("product_special");
                $(this).closest("li").find("input[type=radio]").attr("checked", true).click();
                $(this).closest("ul").find("li").removeClass("product_special");
                $(this).closest("li").addClass("product_special");
                $(this).text($(this).data("result"));
            }

        });
        $(document).on("click",".fn_remove_variant",function () {
            $(this).closest(".variants_list_item ").fadeOut(200);
            $(this).closest(".variants_list_item ").remove();
        });

        // Добавление варианта
        var variant = $(".fn_new_row_variant").clone(false);
        $(".fn_new_row_variant").remove();
        variant.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
        $(document).on("click", ".fn_add_variant", function () {
           var variant_clone = variant.clone(true);
           variant_clone.find("select").selectpicker();
           variant_clone.removeClass("hidden").removeClass("fn_new_row_variant");
           $(".variants_listadd").append(variant_clone);
            return false;
        });

        var clone_cat = $(".fn_new_category_item").clone();
        $(".fn_new_category_item").remove();
        clone_cat.removeClass("fn_new_category_item");
        $(document).on("change", ".fn_product_category select", function () {
            var clone = clone_cat.clone();
            clone.find("label").attr("for","id_"+$(this).find("option:selected").val());
            clone.find("span").html($(this).find("option:selected").data("category_name"));
            clone.find("input").attr("id","id_"+$(this).find("option:selected").val());
            clone.find("input").val($(this).find("option:selected").val());
            clone.find("input").attr("checked",true);
            clone.find("input").attr("data-cat_name",$(this).find("option:selected").data("category_name"));
            $(".fn_product_categories_list").append(clone);
            if ($(".fn_category_item").size() == 1) {
                change_product_category();
            }
        });
        $(document).on("click", ".fn_delete_product_cat", function () {
            var item = $(this).closest(".fn_category_item"),
                is_first = item.hasClass("first_category");
            item.remove();
            if (is_first && $(".fn_category_item").size() > 0) {
                change_product_category();
            }
        });

        var el = document.getElementById('sortable_cat');
        var sortable = Sortable.create(el, {
            handle: ".product_cat_name",  // Drag handle selector within list items
            sort: true,  // sorting inside list
            animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation

            ghostClass: "sortable-ghost",  // Class name for the drop placeholder
            chosenClass: "sortable-chosen",  // Class name for the chosen item
            dragClass: "sortable-drag",  // Class name for the dragging item
            scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
            scrollSpeed: 10, // px
            // Changed sorting within list
            onUpdate: function (evt) {
                change_product_category();
            }
        });

        function change_product_category() {
            var wrapper = $(".fn_product_categories_list");
            var first_category = wrapper.find("div.fn_category_item:first input").val();
            wrapper.find("div.first_category").removeClass("first_category");
            wrapper.find("div.fn_category_item:first ").addClass("first_category");
            set_meta();
            show_category_features(first_category);
        }

        var new_feature_category = $(".fn_new_feature_category").clone(true);
        $(".fn_new_feature_category").remove();
        new_feature_category.removeClass("fn_new_feature_category");
        function show_category_features(category_id)
        {
            $("div.fn_features_wrap").empty();
            $.ajax({
                url: "ajax/get_features.php",
                data: {category_id: category_id, product_id: $("#product_id").val()},
                dataType: 'json',
                success: function(data){
                    for(i=0; i<data.length; i++)
                    {
                        feature = data[i];
                        for (var iv=0; iv<feature.values.length; iv++) {
                            var new_line = new_feature_category.clone(true);
                            new_line.addClass('fn_feature_block_'+feature.id);
                            new_line.find(".fn_feature_name").attr('title', feature.name);
                            new_line.find(".fn_feature_name a").text(feature.name).attr('href', "index.php?controller=FeatureAdmin&id="+feature.id);
                            var value = new_line.find(".fn_auto_option"),
                                id_input = new_line.find(".fn_value_id_input");
                            value.data('id', feature.id);
                            value.val(feature.values[iv].value);
                            value.attr('name', "features_values_text["+feature.id+"][]");
                            id_input.attr('name', "features_values["+feature.id+"][]");
                            id_input.val(feature.values[iv].id)
                            
                            <?php if ($_smarty_tpl->tpl_vars['lang_id']->value == $_smarty_tpl->tpl_vars['main_lang_id']->value) {?>
                            
                                value.devbridgeAutocomplete({
                                    serviceUrl:'ajax/options_autocomplete.php',
                                    minChars:0,
                                    orientation:'auto',
                                    params: {feature_id:feature.id},
                                    noCache: false,
                                    onSelect:function(suggestion){
                                        id_input.val(suggestion.data.id);
                                        $(this).trigger('change');
                                    },
                                    onSearchStart:function(params){
                                        id_input.val("");
                                    }
                                });
                            
                            <?php }?>
                            
                            if (iv > 0) {
                                new_line.find(".fn_feature_multi_values")
                                    .removeClass("fn_add")
                                    .removeClass("btn-info")
                                    .addClass("fn_remove")
                                    .addClass("btn-danger");
                                new_line.find(".fn_plus").hide();
                                new_line.find(".fn_minus").show();
                                new_line.find(".feature_name").html("").addClass("additional_values");
                            }

                            new_line.appendTo("div.fn_features_wrap");
                        }
                    }
                }
            });
            return false;
        }

        
        <?php if ($_smarty_tpl->tpl_vars['lang_id']->value == $_smarty_tpl->tpl_vars['main_lang_id']->value) {?>
        
        $(document).on("click",".fn_feature_multi_values.fn_add", function () {
            var feature_id  = $(this).closest(".feature_value").find(".fn_auto_option").data("id"),
                new_value   = new_feature_category.clone(true),
                value_input = new_value.find(".fn_auto_option"),
                id_input    = new_value.find(".fn_value_id_input");
            value_input.data("id", feature_id);
            value_input.val("");
            value_input.attr('name', "features_values_text["+feature_id+"][]");
            id_input.attr("name", "features_values["+feature_id+"][]");

            new_value.find(".feature_name").html("").addClass("additional_values");
            new_value.find(".fn_feature_multi_values")
                .removeClass("fn_add")
                .removeClass("btn-info")
                .addClass("fn_remove")
                .addClass("btn-danger");
            new_value.find(".fn_plus").hide();
            new_value.find(".fn_minus").show();

            value_input.devbridgeAutocomplete({
                serviceUrl:'ajax/options_autocomplete.php',
                minChars:0,
                params: {feature_id:feature_id},
                noCache: false,
                onSelect:function(suggestion){
                    id_input.val(suggestion.data.id);
                    $(this).trigger('change');
                },
                onSearchStart:function(params){
                    id_input.val("");
                }
            });
            new_value.appendTo(".fn_feature_block_"+feature_id).fadeIn('slow');
            return false;
        });

        $(document).on("click",".fn_feature_multi_values.fn_remove",function () {
            $(this).closest(".feature_row").remove();
        });

        // Автодополнение свойств
        $(".fn_auto_option").each(function() {
            var feature_id = $(this).data("id"),
                id_input = $(this).closest(".feature_value").find(".fn_value_id_input");
            $(this).devbridgeAutocomplete({
                serviceUrl:'ajax/options_autocomplete.php',
                minChars:0,
                params: {feature_id:feature_id},
                noCache: false,
                onSelect:function(suggestion){
                    id_input.val(suggestion.data.id);
                    $(this).trigger('change');
                },
                onSearchStart:function(params){
                    id_input.val("");
                }
            });
        });
        
        <?php }?>
        

        // Добавление нового свойства товара
        var new_feature = $(".fn_new_feature").clone(true);
        $(".fn_new_feature").remove();
        new_feature.removeClass("fn_new_feature");
        $(document).on("click",".fn_add_feature",function () {
            $(new_feature).clone(true).appendTo(".features_wrap").fadeIn('slow');
            return false;
        });
        $(document).on("click",".fn_delete_feature",function () {
           $(this).parent().remove();
        });

        // Добавление связанного товара
        var new_related_product = $('#new_related_product').clone(true);
        $('#new_related_product').remove();
        new_related_product.removeAttr('id');
        $("input#related_products").devbridgeAutocomplete({
            serviceUrl:'ajax/search_products.php',
            minChars:0,
            orientation:'auto',
            noCache: false,
            onSelect:
                function(suggestion){
                    $("input#related_products").val('').focus().blur();
                    new_item = new_related_product.clone().appendTo('.related_products');
                    new_item.find('a.related_product_name').html(suggestion.data.name);
                    new_item.find('a.related_product_name').attr('href', 'index.php?controller=ProductAdmin&id='+suggestion.data.id);
                    new_item.find('input[name*="related_products"]').val(suggestion.data.id);
                    if(suggestion.data.image)
                        new_item.find('img.product_icon').attr("src", suggestion.data.image);
                    else
                        new_item.find('img.product_icon').remove();
                    new_item.show();
                },
            formatResult:
                function(suggestions, currentValue){
                    var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                    var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                    return "<div>" + (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + "</div>" +  "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                }

        });
        // infinity
        $("input[name*=variant][name*=stock]").focus(function() {
            if($(this).val() == '∞')
                $(this).val('');
            return false;
        });

        $("input[name*=variant][name*=stock]").blur(function() {
            if($(this).val() == '')
                $(this).val('∞');
        });
    });
<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_category_select_190595511960144cf76201e4_19258080 */
if (!function_exists('smarty_template_function_category_select_190595511960144cf76201e4_19258080')) {
function smarty_template_function_category_select_190595511960144cf76201e4_19258080(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['first_category']->value->id) {?>selected<?php }?> data-category_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>- <?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}}
/*/ smarty_template_function_category_select_190595511960144cf76201e4_19258080 */
}
