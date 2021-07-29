<?php
/* Smarty version 3.1.33, created on 2021-03-28 14:38:45
  from '/home/ganzaby/diplom.dod.by/backend/design/html/category_stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60606ac5a19a67_52881080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e064cade9a368d01f25b9222ad957175848b86' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/category_stats.tpl',
      1 => 1614790710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_60606ac5a19a67_52881080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/d8e064cade9a368d01f25b9222ad957175848b86_0.file.category_stats.tpl.php',
    'uid' => 'd8e064cade9a368d01f25b9222ad957175848b86',
    'call_name' => 'smarty_template_function_category_select_141864357660606ac59ac7c5_12284325',
  ),
  'categories_list_tree' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/d8e064cade9a368d01f25b9222ad957175848b86_0.file.category_stats.tpl.php',
    'uid' => 'd8e064cade9a368d01f25b9222ad957175848b86',
    'call_name' => 'smarty_template_function_categories_list_tree_141864357660606ac59ac7c5_12284325',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->category_stats_sales ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->category_stats_sales, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_category_stats_sales, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, false);
?>
                </i>
            </div>
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
                    <div class="col-xs-12 mb-1">
                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-xl-7 col-sm-12">
                                <div class="date">
                                                                        <form class="date_filter row" method="get">
                                        <input type="hidden" name="controller" value="CategoryStatsAdmin" />
                                        <div class="col-md-5 col-lg-5 pr-0 pl-0">
                                            <div class="input-group mobile_input-group input-group--date">
                                                <span class=" input-group-addon-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value || $_smarty_tpl->tpl_vars['is_tablet']->value) {?>
                                                    <input type="date" class="fn_from_date form-control" name="date_from" value="<?php echo $_smarty_tpl->tpl_vars['date_from']->value;?>
" autocomplete="off">
                                                    <?php } else { ?>
                                                    <input type="text" class="fn_from_date form-control" name="date_from" value="<?php echo $_smarty_tpl->tpl_vars['date_from']->value;?>
" autocomplete="off">
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-5 pr-0 pl-0">
                                            <div class="input-group mobile_input-group input-group--date">
                                                <span class=" input-group-addon-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_to, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value || $_smarty_tpl->tpl_vars['is_tablet']->value) {?>
                                                    <input type="date" class="fn_to_date form-control" name="date_to" value="<?php echo $_smarty_tpl->tpl_vars['date_to']->value;?>
" autocomplete="off">
                                                    <?php } else { ?>
                                                    <input type="text" class="fn_to_date form-control" name="date_to" value="<?php echo $_smarty_tpl->tpl_vars['date_to']->value;?>
" autocomplete="off">
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-md-2 pr-0 mobile_text_right">
                                            <button class="btn btn_blue" type="submit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand'=>null,'category'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['category']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm 12">
                        <select onchange="location = this.value;" class="selectpicker">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['brand']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_brands, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand'=>$_smarty_tpl->tpl_vars['b']->value->id),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-12 mobile_text_right">
                        <button id="fn_start" type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'magic'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <form method="post" class="fn_form_list">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
        <div class="okay_list products_list fn_sort_list">
                        <div class="okay_list_head">
                <div class="okay_list_heading okay_list_categorystats_categories"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_categorystats_total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_categorystats_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_amount, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
                        <div class="okay_list_body">
                
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_list_tree', array('categories'=>$_smarty_tpl->tpl_vars['categories_list']->value), true);?>

            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-12 col-md-12">
                <div class="text_dark text_500 text-xs-right mr-1 mt-h">
                    <div class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_total, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
 <span class="text_grey">(<?php echo $_smarty_tpl->tpl_vars['total_amount']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_units, ENT_QUOTES, 'UTF-8', true);?>
)</span></div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
        <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php echo '<script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
    var category = <?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
;
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
    var brand = <?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
;
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['date_from']->value) {?>
    var date_from = '<?php echo $_smarty_tpl->tpl_vars['date_from']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['date_to']->value) {?>
    var date_to = '<?php echo $_smarty_tpl->tpl_vars['date_to']->value;?>
';
    <?php }
echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function() {
            $('input[name="date_from"]').datepicker();
            $('input[name="date_to"]').datepicker();
            $('button#fn_start').click(function() {
                do_export();
            });
            function do_export(page) {
                page = typeof(page) != 'undefined' ? page : 1;
                category = typeof(category) != 'undefined' ? category : 0;
                brand = typeof(brand) != 'undefined' ? brand : 0;
                date_from = typeof(date_from) != 'undefined' ? date_from : 0;
                date_to = typeof(date_to) != 'undefined' ? date_to : 0;
                $.ajax({
                    url: "ajax/export_stat.php",
                    data: {
                        page: page,
                        category: category,
                        brand: brand,
                        date_from: date_from,
                        date_to: date_to
                    },
                    dataType: 'json',
                    success: function () {

                        window.location.href = 'files/export/export_stat.csv';
                    },
                    error: function (xhr, status, errorThrown) {
                        alert(errorThrown + '\n' + xhr.responseText + 'asdasd');
                    }

                });

            }
        });
    <?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_select_141864357660606ac59ac7c5_12284325 */
if (!function_exists('smarty_template_function_category_select_141864357660606ac59ac7c5_12284325')) {
function smarty_template_function_category_select_141864357660606ac59ac7c5_12284325(Smarty_Internal_Template $_smarty_tpl,$params) {
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
                                    <option value='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand'=>null,'category'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
' <?php if ($_GET['category'] == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>>
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
/*/ smarty_template_function_category_select_141864357660606ac59ac7c5_12284325 */
/* smarty_template_function_categories_list_tree_141864357660606ac59ac7c5_12284325 */
if (!function_exists('smarty_template_function_categories_list_tree_141864357660606ac59ac7c5_12284325')) {
function smarty_template_function_categories_list_tree_141864357660606ac59ac7c5_12284325(Smarty_Internal_Template $_smarty_tpl,$params) {
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
                        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                            <div class="okay_list_body_item">
                                <div class="okay_list_row ">
                                    <div class="okay_list_boding okay_list_categorystats_categories">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                        <div class="hidden-md-up mt-q">
                                            <span class="text_dark text_600">
                                                <span class="hidden-xs-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                <span class="<?php if ($_smarty_tpl->tpl_vars['category']->value->price) {?>text_primary <?php } else { ?>text_dark <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['category']->value->price;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="okay_list_boding okay_list_categorystats_total">
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value->price) {?><span class="text_dark"><?php echo $_smarty_tpl->tpl_vars['category']->value->price;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['category']->value->price;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;
}?>
                                    </div>
                                    <div class="okay_list_boding okay_list_categorystats_setting">
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value->amount) {?><span class="text_dark"><?php echo $_smarty_tpl->tpl_vars['category']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['btr']->value->reportstats_units;?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['category']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['btr']->value->reportstats_units;
}?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_list_tree', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}}
/*/ smarty_template_function_categories_list_tree_141864357660606ac59ac7c5_12284325 */
}
