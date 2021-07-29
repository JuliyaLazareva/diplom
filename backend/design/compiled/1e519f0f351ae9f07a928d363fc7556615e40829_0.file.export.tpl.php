<?php
/* Smarty version 3.1.33, created on 2021-05-07 00:17:14
  from '/home/ganzaby/diplom.dod.by/backend/design/html/export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60945cdaac98e4_99680836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e519f0f351ae9f07a928d363fc7556615e40829' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/export.tpl',
      1 => 1614790711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_60945cdaac98e4_99680836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_tree' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/1e519f0f351ae9f07a928d363fc7556615e40829_0.file.export.tpl.php',
    'uid' => '1e519f0f351ae9f07a928d363fc7556615e40829',
    'call_name' => 'smarty_template_function_categories_tree_105207213360945cdaa6b4c0_33074509',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->export_products ,false ,32);?>

<div class="row">
    <progress id="progressbar" class="progress progress-info mt-0" style="display: none" value="0" max="100"></progress>
    <div class="col-lg-7 col-md-7">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->export_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-5 col-md-5 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'no_permission') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['export_files_dir']->value;?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value != 'no_permission') {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_attention">
                <div class="">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->export_message, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>

        <div class="boxed fn_toggle_wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <div id="fn_start" class="">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-lg-3 col-sm-12 mb-h">
                            <div class="option_export_wrap">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <select class="selectpicker fn_type_export">
                                   <option value="all_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                   <option value="category_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                   <option value="brands_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_brand, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                        <div id="category_products"  class="col-md-3 col-sm-3 col-lg-3 col-sm-12 export_options hidden mb-h">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_category, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <select class="selectpicker" data-live-search="true" data-size="10"  name="category_id">
                                
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>0), true);?>

                            </select>
                        </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
                        <div id="brands_products" class="col-md-3 col-sm-3 col-lg-3 col-sm-12 export_options hidden mb-h">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_brand, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <select class="selectpicker" data-size="10" name="brand_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'b');
$_smarty_tpl->tpl_vars['b']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->index++;
$_smarty_tpl->tpl_vars['b']->first = !$_smarty_tpl->tpl_vars['b']->index;
$__foreach_b_1_saved = $_smarty_tpl->tpl_vars['b'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['b']->first) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <?php }?>
                        <div class="col-md-3 col-sm-3 col-lg-3 col-sm-12 float-sm-right mt-2">
                            <button id="fn_start" type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'magic'), 0, false);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="success_export" class="" style="display: none">
                    <div class="text_success font_20 text_600"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export_successful, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/piecon/piecon.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    

    var in_process=false;
    var field = '',
        value = '';

    $(function() {
        $(".fn_type_export").on("change",function () {
            elem = $("#"+$(this).val());
            $(".export_options").addClass("hidden");
            elem.removeClass("hidden");

        });

        $('button#fn_start').click(function() {
            if($(".export_options:visible")){
                field = $(".export_options:visible").find('select').attr('name');
                value = $(".export_options:visible").find('select').val();
            }
            Piecon.setOptions({fallback: 'force'});
            Piecon.setProgress(0);
            var progress_item = $("#progressbar"); //указываем селектор элемента с анимацией
            progress_item.show();

            do_export('',progress_item);

        });

        function do_export(page,progress)
        {
            page = typeof(page) != 'undefined' ? page : 1;
            var data = {page: page};
            if (field && value) {
                data[field] = value;
            }
            $.ajax({
                url: "ajax/export.php",
                data: data,
                dataType: 'json',
                success: function(data){

                    if(data && !data.end)
                    {
                        Piecon.setProgress(Math.round(100*data.page/data.totalpages));
                        progress.attr('value',100*data.page/data.totalpages);
                        do_export(data.page*1+1,progress);
                    }
                    else
                    {
                        if(data && data.end)
                        {
                            Piecon.setProgress(100);
                            progress.attr('value','100');
                            window.location.href = 'files/export/export.csv';
                            progress.fadeOut(500);
                            $('#success_export').show();
                        }
                    }
                },
                error:function(xhr, status, errorThrown) {
                    alert(errorThrown+'\n'+xhr.responseText);
                }
            });
        }
    });
    
<?php echo '</script'; ?>
>


<?php }
/* smarty_template_function_categories_tree_105207213360945cdaa6b4c0_33074509 */
if (!function_exists('smarty_template_function_categories_tree_105207213360945cdaa6b4c0_33074509')) {
function smarty_template_function_categories_tree_105207213360945cdaa6b4c0_33074509(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;<?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}}
/*/ smarty_template_function_categories_tree_105207213360945cdaa6b4c0_33074509 */
}
