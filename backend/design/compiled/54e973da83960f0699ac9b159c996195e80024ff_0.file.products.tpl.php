<?php
/* Smarty version 3.1.33, created on 2021-01-24 19:54:05
  from '/home/ganzaby/joo.by/backend/design/html/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da62d8f3bb3_26243041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54e973da83960f0699ac9b159c996195e80024ff' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/products.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 7,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_600da62d8f3bb3_26243041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/54e973da83960f0699ac9b159c996195e80024ff_0.file.products.tpl.php',
    'uid' => '54e973da83960f0699ac9b159c996195e80024ff',
    'call_name' => 'smarty_template_function_category_select_890723830600da62d561cf9_09276341',
  ),
  'category_select_btn' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/54e973da83960f0699ac9b159c996195e80024ff_0.file.products.tpl.php',
    'uid' => '54e973da83960f0699ac9b159c996195e80024ff',
    'call_name' => 'smarty_template_function_category_select_btn_890723830600da62d561cf9_09276341',
  ),
));
if ($_smarty_tpl->tpl_vars['category']->value) {?>
	<?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['category']->value->name ,false ,32);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->general_products ,false ,32);
}?>

<div class="row">
    <div class="col-lg-7 col-md-12">
        <div class="wrap_heading">
            <?php if ($_smarty_tpl->tpl_vars['products_count']->value) {?>
                <div class="box_heading heading_page">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value->name || $_smarty_tpl->tpl_vars['brand']->value->name) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['products_count']->value;?>

                    <?php }?>
                </div>
            <?php } else { ?>
                <div class="box_heading heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <?php }?>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
            <input type="hidden" name="controller" value="ProductsAdmin">
            <div class="input-group">
                <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                <span class="input-group-btn">
                    <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                </span>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
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
                        <div>
                            <select id="id_filter" name="products_filter" class="selectpicker form-control" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_filter, ENT_QUOTES, 'UTF-8', true);?>
" data-live-search="true" onchange="location = this.value;">
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand_id'=>null,'category_id'=>null,'keyword'=>null,'page'=>null,'limit'=>null,'filter'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['filter']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'featured'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'featured') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_bestsellers, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'discounted'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'discounted') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_discount, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'visible'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'visible') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'hidden'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'hidden') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'outofstock'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'outofstock') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_out_of_stock, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'category_id'=>null,'page'=>null,'limit'=>null,'filter'=>'without_images'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'without_images') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_without_photos, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['category_id']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>-1),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['category_id']->value == -1) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_without_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                        </select>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_brands" name="brands_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brand_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['brand_id']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_brands, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>-1,'page'=>null,'limit'=>null),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['brand_id']->value == -1) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->products_without_brand;?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'limit'=>null,'brand_id'=>$_smarty_tpl->tpl_vars['b']->value->id),$_smarty_tpl ) );?>
" brand_id="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"  <?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="pull-right">
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
    </div>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post" class="fn_form_list fn_fast_button">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="okay_list products_list fn_sort_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_boding okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value="" />
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 </div>
                            <div class="okay_list_heading okay_list_price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_setting okay_list_products_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                                                <div class="okay_list_body sort_extended">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                                <div class="fn_row okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->position;?>
">

                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                        </div>

                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"></label>
                                        </div>
                                        <div class="okay_list_boding okay_list_photo">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->image->filename, ENT_QUOTES, 'UTF-8', true),55,55 ));?>
"/>
                                                </a>
                                            <?php } else { ?>
                                                <img height="55" width="55" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_name">

                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                                <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->name) {?>
                                                    <span class="text_grey">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variants[0]->name, ENT_QUOTES, 'UTF-8', true);?>
)</span>
                                                <?php }?>
                                                <div class="hidden-lg-up mt-q">
                                                <span class="text_primary text_600"><?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->price;?>
 <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id])) {?>
                                                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id]->code, ENT_QUOTES, 'UTF-8', true);?>

                                                      <?php }?></span>
                                                    <span class="text_500"><?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->infinity) {?>∞<?php } else {
echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->stock;
}?> <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variants[0]->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);
}?></span>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['all_brands']->value[$_smarty_tpl->tpl_vars['product']->value->brand_id]->name) {?>
                                                <div class="okay_list_name_brand"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brand, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_brands']->value[$_smarty_tpl->tpl_vars['product']->value->brand_id]->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </a>
                                            <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants) > 1) {?>
                                                <div class="fn_variants_toggle variants_toggle">
                                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_options, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <i class="fn_icon_arrow fa fa-angle-down fa-lg m-t-2"></i>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_price">
                                            <div class="input-group">
                                                <input class="form-control <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->compare_price > 0) {?>text_warning<?php }?>" type="text" name="price[<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->price;?>
">
                                                <span class="input-group-addon">
                                                      <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id])) {?>
                                                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['product']->value->variants[0]->currency_id]->code, ENT_QUOTES, 'UTF-8', true);?>

                                                      <?php }?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_count">
                                            <div class="input-group">
                                                <input class="form-control " type="text" name="stock[<?php echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->id;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->infinity) {?>∞<?php } else {
echo $_smarty_tpl->tpl_vars['product']->value->variants[0]->stock;
}?>"/>
                                                <span class="input-group-addon  p-0">
                                                     <?php if ($_smarty_tpl->tpl_vars['product']->value->variants[0]->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variants[0]->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);
}?>
                                                </span>
                                            </div>
                                        </div>
                                                                                <div class="okay_list_boding okay_list_status">
                                            <label class="switch switch-default ">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->visible) {?>fn_active_class<?php }?>" data-controller="product" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['product']->value->visible) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <div class=" okay_list_setting okay_list_products_setting">
                                                                                        <div class="">

                                                                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_bestseller, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_featured fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-controller="product" data-action="featured" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" >
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_featured'), 0, true);
?>
                                                </button>

                                                                                                <a href="../<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['product']->value->url),$_smarty_tpl ) );?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, true);
?>
                                                </a>

                                                                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_dublicate, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_copy fn_copy hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_copy'), 0, true);
?>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>

                                    <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants) > 1) {?>
                                                                            <div class="okay_list_variants products_variants_block">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->variants, 'variant');
$_smarty_tpl->tpl_vars['variant']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->iteration++;
$__foreach_variant_3_saved = $_smarty_tpl->tpl_vars['variant'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['variant']->iteration > 1) {?>
                                                <div class="okay_list_row">
                                                    <div class="okay_list_boding okay_list_drag"></div>
                                                    <div class="okay_list_boding okay_list_check"></div>
                                                    <div class="okay_list_boding okay_list_photo"></div>
                                                    <div class="okay_list_boding okay_list_variant_name">
                                                        <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_price">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" name="price[<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value->price;?>
">
                                                            <span class="input-group-addon">
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['variant']->value->currency_id])) {?>
                                                                      <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['variant']->value->currency_id]->code;?>

                                                                  <?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_count">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" name="stock[<?php echo $_smarty_tpl->tpl_vars['variant']->value->id;?>
]" value="<?php if ($_smarty_tpl->tpl_vars['variant']->value->infinity) {?>∞<?php } else {
echo $_smarty_tpl->tpl_vars['variant']->value->stock;
}?>"/>
                                                            <span class="input-group-addon p-0">
                                                                 <?php if ($_smarty_tpl->tpl_vars['variant']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);
}?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="okay_list_boding okay_list_status"></div>
                                                    <div class="okay_list_setting okay_list_products_setting">
                                                    </div>
                                                    <div class="okay_list_boding okay_list_close"></div>
                                                </div>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['variant'] = $__foreach_variant_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                                                <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_boding okay_list_drag"></div>
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker products_action">
                                        <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="set_featured"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_mark_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="unset_featured"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_unmark_bestseller, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="duplicate"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_create_dublicate, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php if ($_smarty_tpl->tpl_vars['pages_count']->value > 1) {?>
                                            <option value="move_to_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_move_to_page, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php }?>
                                        <?php if (count($_smarty_tpl->tpl_vars['categories']->value) > 1) {?>
                                            <option value="move_to_category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_move_to_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php }?>
                                        <?php if (count($_smarty_tpl->tpl_vars['all_brands']->value) > 0) {?>
                                            <option value="move_to_brand"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_specify_brand, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php }?>
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
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
                                    <div class="fn_move_to_category col-lg-12 col-md-12 col-sm-12 hidden fn_hide_block">
                                        <select name="target_category" class="selectpicker" data-live-search="true" data-size="10">
                                            
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select_btn', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                                        </select>
                                    </div>
                                    <div class="fn_move_to_brand col-lg-12 col-md-12 col-sm-12 hidden fn_hide_block">
                                        <select name="target_brand" class="selectpicker" data-live-search="true" data-size="<?php if (count($_smarty_tpl->tpl_vars['brands']->value) < 10) {
echo count($_smarty_tpl->tpl_vars['brands']->value);
} else { ?>10<?php }?>">
                                            <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->products_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>



<?php echo '<script'; ?>
>

$(function() {
    $(document).on('click','.fn_variants_toggle',function(){
        $(this).find('.fn_icon_arrow').toggleClass('rotate_180');
        $(this).parents('.fn_row').find('.products_variants_block').slideToggle();
    });


    $(document).on('change','.fn_action_block select.products_action',function(){
        var elem = $(this).find('option:selected').val();
        $('.fn_hide_block').addClass('hidden');
        if($('.fn_'+elem).size()>0){
            $('.fn_'+elem).removeClass('hidden');
        }
    });

    $(document).on('click','.fn_show_icon_menu',function(){
        $(this).toggleClass('show');
    });

    // Дублировать товар
    $(document).on("click", ".fn_copy", function () {
        $('.fn_form_list input[type="checkbox"][name*="check"]').attr('checked', false);
        $(this).closest(".fn_form_list").find('select[name="action"] option[value=duplicate]').attr('selected', true);
        $(this).closest(".fn_row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
        $(this).closest(".fn_row").find('input[type="checkbox"][name*="check"]').click();
        $(this).closest(".fn_form_list").submit();
    });
    // Бесконечность на складе
    $("input[name*=stock]").focus(function() {
        if($(this).val() == '∞')
            $(this).val('');
        return false;
    });
    $("input[name*=stock]").blur(function() {
        if($(this).val() == '')
            $(this).val('∞');
    });
    });

<?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_select_890723830600da62d561cf9_09276341 */
if (!function_exists('smarty_template_function_category_select_890723830600da62d561cf9_09276341')) {
function smarty_template_function_category_select_890723830600da62d561cf9_09276341(Smarty_Internal_Template $_smarty_tpl,$params) {
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
                                    <option value='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
' <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>>
                                        <?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>- <?php
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
/*/ smarty_template_function_category_select_890723830600da62d561cf9_09276341 */
/* smarty_template_function_category_select_btn_890723830600da62d561cf9_09276341 */
if (!function_exists('smarty_template_function_category_select_btn_890723830600da62d561cf9_09276341')) {
function smarty_template_function_category_select_btn_890723830600da62d561cf9_09276341(Smarty_Internal_Template $_smarty_tpl,$params) {
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
                                                    <option value='<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
'><?php
$__section_sp_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_2_total = $__section_sp_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_2_total !== 0) {
for ($__section_sp_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_2_iteration <= $__section_sp_2_total; $__section_sp_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select_btn', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected_id'=>$_smarty_tpl->tpl_vars['selected_id']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php
}}
/*/ smarty_template_function_category_select_btn_890723830600da62d561cf9_09276341 */
}
