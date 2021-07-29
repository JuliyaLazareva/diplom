<?php
/* Smarty version 3.1.33, created on 2021-03-28 14:38:39
  from '/home/ganzaby/diplom.dod.by/backend/design/html/reportstats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60606abfcb3436_15977087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4edab1117590d60d86503f3ed5799e0caa6374d' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/reportstats.tpl',
      1 => 1614790713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_60606abfcb3436_15977087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/a4edab1117590d60d86503f3ed5799e0caa6374d_0.file.reportstats.tpl.php',
    'uid' => 'a4edab1117590d60d86503f3ed5799e0caa6374d',
    'call_name' => 'smarty_template_function_category_select_67779864260606abfc06483_03688244',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->reportstats_orders ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_orders, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_reportstats_orders, ENT_QUOTES, 'UTF-8', true);?>
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
                            <div class="col-md-11 col-lg-11 col-xl-7 col-sm-12 ">
                                                               <div class="date">
                                   <form class="date_filter row" method="get">
                                       <input type="hidden" name="controller" value="ReportStatsAdmin">
                                       <input type="hidden" name="date_filter" value="">

                                       <div class="col-md-5 col-lg-5 pr-0 pl-0">
                                           <div class="input-group mobile_input-group input-group--date">
                                               <span class="input-group-addon-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from, ENT_QUOTES, 'UTF-8', true);?>
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
" autocomplete="off" >
                                                   <?php } else { ?>
                                                   <input type="text" class="fn_to_date form-control" name="date_to" value="<?php echo $_smarty_tpl->tpl_vars['date_to']->value;?>
" autocomplete="off" >
                                               <?php }?>
                                           </div>
                                       </div>
                                       <div class="col-md-2 col-lg-2 pr-0 mobile_text_right">
                                           <button class="btn btn_blue" type="submit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
                                       </div>
                                   </form>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['category']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                        </select>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select class="selectpicker" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option <?php if (!$_GET['status']) {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('status'=>null),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_all_statuses, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_status']->value, 'status_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status_item']->value) {
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['status_item']->value->id == $_GET['status']) {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('status'=>$_smarty_tpl->tpl_vars['status_item']->value->id),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm 12">
                        <select onchange="location = this.value;" class="selectpicker">
                            <option <?php if (!$_smarty_tpl->tpl_vars['date_filter']->value) {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>null,'date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_all_orders, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'today') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'today','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_today, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'this_week') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'this_week','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_this_week, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'this_month') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'this_month','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_this_month, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'this_year') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'this_year','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_this_year, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'yesterday') {?>selected<?php }?>  value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'yesterday','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_yesterday, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'last_week') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'last_week','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_last_week, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'last_month') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'last_month','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_last_month, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'last_year') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'last_year','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_last_year, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'last_24hour') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'last_24hour','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_last_24, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'last_7day') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'last_7day','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_last_7_days, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['date_filter']->value == 'last_30day') {?>selected<?php }?> value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('date_filter'=>'last_30day','date_to'=>null,'date_from'=>null,'filter_check'=>null),$_smarty_tpl ) );?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->reportstats_last_30_days, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        </select>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-12 mobile_text_right">
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
        <?php $_smarty_tpl->_assignInScope('total_summ', 0);?>
        <?php $_smarty_tpl->_assignInScope('total_amount', 0);?>
        <div class="okay_list products_list fn_sort_list">
                        <div class="okay_list_head">
                <div class="okay_list_heading okay_list_reportstats_categories"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_reportstats_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_reportstats_total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sales_amount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <div class="okay_list_heading okay_list_reportstats_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_amt, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>

                        <div class="okay_list_body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['report_stat_purchases']->value, 'purchase');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('total_summ', $_smarty_tpl->tpl_vars['total_summ']->value+$_smarty_tpl->tpl_vars['purchase']->value->sum_price);?>
                    <?php $_smarty_tpl->_assignInScope('total_amount', $_smarty_tpl->tpl_vars['total_amount']->value+$_smarty_tpl->tpl_vars['purchase']->value->amount);?>
                    <div class="okay_list_body_item">
                        <div class="okay_list_row ">
                            <div class="okay_list_boding okay_list_reportstats_categories">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase']->value->category->path, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                    <?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
/
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <div class="okay_list_boding okay_list_reportstats_products">
                                <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['purchase']->value->product_id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->product_name;?>
</a> <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant_name;?>

                                <div class="hidden-md-up mt-q">
                                    <span class="text_dark text_600">
                                        <span class="hidden-xs-down">Сумма продаж: </span>
                                        <span class="text_primary">
                                            <?php echo $_smarty_tpl->tpl_vars['purchase']->value->sum_price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="okay_list_boding okay_list_reportstats_total">
                                <?php echo $_smarty_tpl->tpl_vars['purchase']->value->sum_price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                            </div>

                            <div class="okay_list_reportstats_setting">
                                <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->tpl_vars['settings']->value->units;
}?>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-12 col-md-12">
                <div class="text_dark text_500 text-xs-right mr-1 mt-h">
                    <div class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_total, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['total_summ']->value);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
  <span class="text_grey">(<?php echo $_smarty_tpl->tpl_vars['total_amount']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['btr']->value->reportstats_units;?>
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
    $(function() {
        $('input[name="date_from"]').datepicker();
        $('input[name="date_to"]').datepicker();
    });
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['date_filter']->value) {?>
    var date_filter = '<?php echo $_smarty_tpl->tpl_vars['date_filter']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['date_from']->value) {?>
    var date_from = '<?php echo $_smarty_tpl->tpl_vars['date_from']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['date_to']->value) {?>
    var date_to = '<?php echo $_smarty_tpl->tpl_vars['date_to']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
    var status = '<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['sort_prod']->value) {?>
    var sort_prod = '<?php echo $_smarty_tpl->tpl_vars['sort_prod']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
    var page = '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
    var category = '<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
';
    <?php }
echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(function() {

            $('button#fn_start').click(function() {
                do_export();
            });

            function do_export(page) {
                page = typeof(page) != 'undefined' ? page : 1;
                category = typeof(category) != 'undefined' ? category : 0;
                date_filter = typeof(date_filter) != 'undefined' ? date_filter : 0;
                date_from = typeof(date_from) != 'undefined' ? date_from : 0;
                date_to = typeof(date_to) != 'undefined' ? date_to : 0;
                status =  typeof(status) != 'undefined' ? status : 0;
                sort_prod = typeof(sort_prod) != 'undefined' ? sort_prod : 0;
                $.ajax({
                    url: "ajax/export_stat_products.php",
                    data: {
                        page: page,
                        category: category,
                        date_filter: date_filter,
                        date_from: date_from,
                        date_to: date_to,
                        status: status,
                        sort_prod: sort_prod
                    },
                    dataType: 'json',
                    success: function () {

                        window.location.href = 'files/export/export_stat_products.csv';
                    },
                    error: function (xhr, status, errorThrown) {
                        alert(errorThrown + '\n' + xhr.responseText);
                    }
                });
            }
        });
    <?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_select_67779864260606abfc06483_03688244 */
if (!function_exists('smarty_template_function_category_select_67779864260606abfc06483_03688244')) {
function smarty_template_function_category_select_67779864260606abfc06483_03688244(Smarty_Internal_Template $_smarty_tpl,$params) {
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
                                    <option value='<?php ob_start();
echo $_smarty_tpl->tpl_vars['c']->value->id;
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'page'=>null,'category_id'=>$_prefixVariable1),$_smarty_tpl ) );?>
' <?php if ($_GET['category_id'] == $_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>>
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
/*/ smarty_template_function_category_select_67779864260606abfc06483_03688244 */
}
