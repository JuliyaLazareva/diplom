<?php
/* Smarty version 3.1.33, created on 2021-03-06 02:33:23
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042bfc3d94fd7_70580120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dbe798b2253cdb99ac096d968153ed059aa9102' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/features.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 9,
  ),
),false)) {
function content_6042bfc3d94fd7_70580120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_tree_sidebar' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/compiled/podushki_xrapuska/4dbe798b2253cdb99ac096d968153ed059aa9102_0.file.features.tpl.php',
    'uid' => '4dbe798b2253cdb99ac096d968153ed059aa9102',
    'call_name' => 'smarty_template_function_categories_tree_sidebar_7734306716042bfc3cca7e2_80985501',
  ),
));
if (($_smarty_tpl->tpl_vars['category']->value->subcategories && $_smarty_tpl->tpl_vars['category']->value->count_children_visible) || ($_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories && $_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->count_children_visible) || $_smarty_tpl->tpl_vars['brand']->value->categories) {?>
        <div class="sidebar__boxed hidden-md-down">
        <?php if (($_smarty_tpl->tpl_vars['category']->value->subcategories && $_smarty_tpl->tpl_vars['category']->value->count_children_visible) || ($_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories && $_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->count_children_visible)) {?>
            <div class="filters filters_catalog">
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_catalog;?>
</span>
                    <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, false);
?></span>
                </div>
                <div class="filter__group">
                    
                    <?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories && $_smarty_tpl->tpl_vars['category']->value->count_children_visible) {?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree_sidebar', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>1), true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories && $_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->count_children_visible) {?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree_sidebar', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories,'level'=>1), true);?>

                    <?php }?>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['brand']->value->categories) {?>
            <div class="filters filters_catalog">
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_catalog;?>
</span>
                    <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                </div>

                <div class="filter__group">
                    <div class="level_1 filter__catalog_menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value->categories, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                            <div class="filter__catalog_item has_child">
                                <a class="filter__catalog_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
/brand-<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                                </a>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
 <?php }?>

<?php if (($_smarty_tpl->tpl_vars['category']->value->brands || ($_smarty_tpl->tpl_vars['prices']->value->range->min != '' && $_smarty_tpl->tpl_vars['prices']->value->range->max != '') || $_smarty_tpl->tpl_vars['features']->value)) {?>
    <div class="sidebar__boxed">
        <div class="filters">
                        <?php if ($_smarty_tpl->tpl_vars['prices']->value->range->min != '' && $_smarty_tpl->tpl_vars['prices']->value->range->max != '') {?>
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
</span>
                    <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                </div>

                <div class="filter__group">
                                        <div class="price_range">
                        <div class="price_label">
                            <input class="min_input" id="fn_slider_min" name="p[min]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->min)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->min : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->min;?>
" type="text">
                        </div>
                        <div class="separator">-</div>
                        <div class="price_label max_price">
                            <input class="max_input" id="fn_slider_max" name="p[max]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->max)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->max : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->max;?>
" type="text">
                        </div>
                        <div class="price_currency">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                    </div>
                                        <div id="fn_slider_price"></div>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['other_filters']->value) {?>
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_other_filter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_other_filter;?>
</span>
                    <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                </div>
                <div class="filter__group">
                                        <div class="filter__item">
                        <form method="post">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('filter'=>null,'page'=>null,'absolute'=>1)),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable9);?>
                            <button type="submit" name="prg_seo_hide" class="filter__link <?php if (!$_smarty_tpl->tpl_vars['selected_other_filters']->value) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="filter__checkbox">
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                    </svg>
                                </span>
                                <span class="filter__label" data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                            </button>
                        </form>
                    </div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['other_filters']->value, 'f');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$__foreach_f_6_saved = $_smarty_tpl->tpl_vars['f'];
?>
                        <div class="filter__item">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('filter'=>$_smarty_tpl->tpl_vars['f']->value->url,'page'=>null,'absolute'=>1)),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable10);?>
                            <?php if ($_smarty_tpl->tpl_vars['seo_hide_filter']->value || ($_smarty_tpl->tpl_vars['selected_other_filters']->value && in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_other_filters']->value))) {?>
                                <form method="post">
                                    <button type="submit" name="prg_seo_hide" class="filter__link<?php if ($_smarty_tpl->tpl_vars['selected_other_filters']->value && in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_other_filters']->value)) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="filter__checkbox">
                                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                            </svg>
                                        </span>
                                        <span class="filter__label" data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span>
                                    </button>
                                </form>
                            <?php } else { ?>
                                <a class="filter__link<?php if ($_smarty_tpl->tpl_vars['selected_other_filters']->value && in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_other_filters']->value)) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                    <span class="filter__checkbox">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                        </svg>
                                    </span>
                                    <span class="filter__label" data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span>
                                </a>
                            <?php }?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['f'] = $__foreach_f_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['category']->value->brands) {?>
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_manufacturer"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_manufacturer;?>
</span>
                    <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                </div>
                
                <div class="fn_view_content filter__group feature_content">
                                        <div class="filter__item">
                        <form method="post">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('brand'=>null,'page'=>null,'absolute'=>1)),$_smarty_tpl ) );
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable11);?>
                            <button type="submit" name="prg_seo_hide" class="filter__link <?php if (!$_smarty_tpl->tpl_vars['brand']->value->id && !$_smarty_tpl->tpl_vars['selected_brands_ids']->value) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="filter__checkbox">
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                    </svg>
                                </span>
                                <span class="filter__label" data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                            </button>
                        </form>
                    </div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value->brands, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('b_count', $_smarty_tpl->tpl_vars['b_count']->value+1);?>
                        <div class="filter__item <?php if ($_smarty_tpl->tpl_vars['b']->value && $_smarty_tpl->tpl_vars['b_count']->value > 4) {?> <?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_brands_ids']->value)) {?>opened<?php } else { ?>closed<?php }
}?>">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null,'absolute'=>1)),$_smarty_tpl ) );
$_prefixVariable12 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable12);?>
                            <?php if ($_smarty_tpl->tpl_vars['seo_hide_filter']->value || ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_brands_ids']->value))) {?>
                                <form method="post">
                                    <button type="submit" name="prg_seo_hide" class="filter__link<?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_brands_ids']->value)) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="filter__checkbox">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                            </svg>
                                        </span>
                                        <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </button>
                                </form>
                            <?php } else { ?>
                                <a class="filter__link<?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_brands_ids']->value)) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                    <span class="filter__checkbox">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                        </svg>
                                    </span>
                                    <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            <?php }?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['b_count']->value > 4) {?>
                        <div class="box_view_all_feature">
                            <a class="fn_view_all view_all_feature" href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'f', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
$__foreach_f_8_saved = $_smarty_tpl->tpl_vars['f'];
?>
                    <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                        <span data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="fn_view_content filter__group feature_content">
                                                <div class="filter__item">
                            <form method="post">
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>null,'page'=>null,'absolute'=>1)),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable13);?>
                                <button type="submit" name="prg_seo_hide" class="filter__link <?php if (!isset($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id])) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <span class="filter__checkbox">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                        </svg>
                                    </span>
                                    <span class="filter__label" data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                                </button>
                            </form>
                        </div>
                        
                                                <?php $_smarty_tpl->_assignInScope('f_count', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value->features_values, 'fv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('f_count', $_smarty_tpl->tpl_vars['f_count']->value+1);?>
                            <div class="filter__item <?php if ($_smarty_tpl->tpl_vars['fv']->value && $_smarty_tpl->tpl_vars['f_count']->value > 4) {?> <?php if ($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id] && isset($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id])) {?>opened<?php } else { ?>closed<?php }
}?>"> 
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['fv']->value->translit,'page'=>null,'absolute'=>1)),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable14);?>
                                <?php if (!$_smarty_tpl->tpl_vars['fv']->value->to_index || $_smarty_tpl->tpl_vars['seo_hide_filter']->value || ($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id] && isset($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id]))) {?>
                                    <form method="post">
                                        <button type="submit" name="prg_seo_hide" class="filter__link<?php if ($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id] && isset($_smarty_tpl->tpl_vars['selected_filters']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id])) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <span class="filter__checkbox">
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                                </svg>
                                            </span>
                                            <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </button>
                                    </form>
                                <?php } else { ?>
                                    <a class="filter__link<?php if ($_GET[$_smarty_tpl->tpl_vars['f']->key] && in_array($_smarty_tpl->tpl_vars['fv']->value->translit,$_GET[$_smarty_tpl->tpl_vars['f']->key],true)) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                        <span class="filter__checkbox">
                                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                            </svg>
                                        </span>
                                        <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['f_count']->value > 4) {?>
                        <div class="box_view_all_feature">
                            <a class="fn_view_all view_all_feature" href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                    <?php }?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['f'] = $__foreach_f_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
<?php }
}
/* smarty_template_function_categories_tree_sidebar_7734306716042bfc3cca7e2_80985501 */
if (!function_exists('smarty_template_function_categories_tree_sidebar_7734306716042bfc3cca7e2_80985501')) {
function smarty_template_function_categories_tree_sidebar_7734306716042bfc3cca7e2_80985501(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                            <div class="level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>filter__catalog_menu <?php } else { ?>filter__subcatalog <?php }?>">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                                        <div class="filter__catalog_item has_child">
                                            <<?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['category']->value->id) {?>b<?php } else { ?>a<?php }?> class="filter__catalog_link<?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?> sub_cat<?php }
if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                                    <img class="lazy" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir,null,null,true ));?>
"/>
                                                <?php } else { ?>
                                                    <div class="filter_catalog__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                                    </div>
                                                <?php }?>
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['c']->value->id != $_smarty_tpl->tpl_vars['category']->value->id) {?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                                                <?php }?>
                                            </<?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['category']->value->id) {?>b<?php } else { ?>a<?php }?>>
                                        </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                    <?php
}}
/*/ smarty_template_function_categories_tree_sidebar_7734306716042bfc3cca7e2_80985501 */
}
