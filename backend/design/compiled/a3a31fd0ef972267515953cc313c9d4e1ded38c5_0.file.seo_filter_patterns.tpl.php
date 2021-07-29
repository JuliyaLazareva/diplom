<?php
/* Smarty version 3.1.33, created on 2021-03-15 10:07:36
  from '/home/ganzaby/diplom.dod.by/backend/design/html/seo_filter_patterns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604f07b83a6079_32096691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3a31fd0ef972267515953cc313c9d4e1ded38c5' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/seo_filter_patterns.tpl',
      1 => 1614790713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_604f07b83a6079_32096691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_seo' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/a3a31fd0ef972267515953cc313c9d4e1ded38c5_0.file.seo_filter_patterns.tpl.php',
    'uid' => 'a3a31fd0ef972267515953cc313c9d4e1ded38c5',
    'call_name' => 'smarty_template_function_category_seo_669553174604f07b8337741_79701009',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_auto ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_auto, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);
}?>
                </div>
                <?php if ($_GET['return']) {?>
                    <a class="button" href="<?php echo $_GET['return'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</a>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
    <input type="hidden" name="ajax" value="1" />
    <input type="hidden" name="category_id" value="" />
    <input type="hidden" name="action" value="set" />

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="row">
                                        <div class="col-lg-5 col-md-12">
                        <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_cat_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <div class="fn_preloader"></div>
                            <div>
                                <div class="seo_cateogories_wrap scrollbar-inner">
                                    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                                        
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_seo', array('cats'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1), true);?>

                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="fn_result_ajax clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_chpu_filter, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->max_filter_brands, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_filter_brands" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_filter_brands, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->max_filter_filter, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_filter_filter" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_filter_filter, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->max_filter_features_values, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_filter_features_values" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_filter_features_values, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->max_filter_features, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_filter_features" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_filter_features, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->max_filter_depth, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_filter_depth" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_filter_depth, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <div class="heading_label">&nbsp;</div>
                            <button type="submit" class="btn btn_small btn_blue float-md-right fn_update_category" data-category_id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, false);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="fn_new_template hidden fn_template_block">
    <div class="boxed">
    <div class="row">
        <div class="col-md-6">
            <div class="heading_box fn_heading_box"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_label">H1</div>
                    <div class="mb-1">
                        <input name="seo_filter_patterns[h1][]" class="fn_auto_meta_h1 form-control mb-h fn_ajax_area" value="" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="heading_label">Auto Meta-description</div>
                    <div class="mb-1">
                        <input name="seo_filter_patterns[meta_description][]" class="fn_auto_meta_desc form-control fn_ajax_area" value="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_label">Auto Meta-title</div>
                    <div class="mb-1">
                        <input name="seo_filter_patterns[title][]" class="fn_auto_meta_title form-control mb-h fn_ajax_area" value="" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="heading_label">Auto Meta-keywords</div>
                    <div class="mb-1">
                        <input name="seo_filter_patterns[keywords][]" class="fn_auto_meta_keywords form-control fn_ajax_area" value="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_ajax_description, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <div class="mb-1">
                <textarea name="seo_filter_patterns[description][]" class="fn_auto_description form-control okay_textarea fn_ajax_area"></textarea>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button type="button" class="fn_delete_template btn btn_mini btn-danger float-md-right" >
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_delete_template, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>
            </div>
        </div>
     </div>
    <input name="seo_filter_patterns[type][]" class="fn_pattern_type form-control" value="" type="hidden" />
    <input name="seo_filter_patterns[feature_id][]" class="fn_feature_id form-control" value="" type="hidden" />
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    $(function() {

        toastr.options = {
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            preventDuplicates: false,
            onclick: null
        };
        msg = '';

        var new_template = $('.fn_new_template').clone();
        $('.fn_new_template').remove();

        var new_templates_counter = 0;

        $(document).on("click", ".fn_delete_template", function () {
            $(this).closest('.fn_template_block').fadeOut(200, function() {
                $(this).remove();
            });
        });

        $(document).on("click", ".fn_add_seo_template", function () {
            var template = new_template.clone(),
                pattern_type_elem = $('.fn_pattern_type'),
                pattern_type_class = pattern_type = pattern_type_elem.children(':selected').val(),
                feature_elem = $('.fn_features'),
                feature_id   = feature_elem.children(':selected').val();

            if (pattern_type == 'feature' && feature_id) {
                pattern_type_class += '_'+feature_id;
            }

            if ($('.fn_'+pattern_type_class).size() > 0) {
                toastr.error(msg, "Template already exists");
            } else {
                template.addClass('fn_'+pattern_type_class);
                template.find('.fn_heading_box').text(
                        '<?php echo $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_category;?>
 '
                        +pattern_type_elem.children(':selected').text()
                        +(feature_id ? ' ('+feature_elem.children(':selected').text()+')' : '')
                );

                template.find('.fn_pattern_type').val(pattern_type);
                if (feature_id) {
                    template.find('.fn_feature_id').val(feature_id);
                }

                template.removeClass('hidden');
                new_templates_counter++;
                $('.fn_templates').append(template);
            }
        });

        $(document).on("change", ".fn_pattern_type", function () {
            var elem = $(this),
                category_elem = $('.fn_get_category.active'),
                pattern_type = elem.children(':selected').val(),
                category_id = parseInt(category_elem.data("category_id")) ? parseInt(category_elem.data("category_id")) : null,
                action = "get_features",
                link = window.location.href,
                session_id = '<?php echo $_SESSION['id'];?>
';

            if (pattern_type == 'brand') {
                $('.fn_features').prop('disabled', true).addClass('hidden').children(':first').prop('selected', true);
            } else if (pattern_type == 'feature') {
                $.ajax({
                    url: link,
                    method : 'post',
                    data: {
                        ajax: 1,
                        session_id: session_id,
                        category_id: category_id,
                        action : action,
                    },
                    dataType: 'json',
                    success: function(data){
                        if(data.success && data.features) {
                            var features_html = '<option value=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_all_features, ENT_QUOTES, 'UTF-8', true);?>
</option>';
                            for(var i=0; i<data.features.length; i++) {
                                var feature = data.features[i];
                                features_html += '<option value="'+feature.id+'">'+feature.name+'</option>';
                            }
                            $('.fn_features').html(features_html).prop('disabled', false).removeClass('hidden');
                        }
                    }
                });
            }
        });

        $(document).on("click", ".fn_get_category", function () {
            $(".fn_preloader ").addClass("ajax_preloader");
            $(".fn_get_category").removeClass("active");
            var elem = $(this),
                category_id = parseInt(elem.data("category_id")) ? parseInt(elem.data("category_id")) : null,
                action = "get",
                link = window.location.href,
                session_id = '<?php echo $_SESSION['id'];?>
';

            $.ajax({
                url: link,
                method : 'post',
                data: {
                    ajax: 1,
                    session_id: session_id,
                    category_id: category_id,
                    action : action,
                },
                dataType: 'json',
                success: function(data){
                    if(data.success) {
                        $(".fn_result_ajax").html(data.tpl);
                        toastr.success(msg, "Success");
                        elem.addClass("active");
                        $(".fn_preloader ").removeClass("ajax_preloader");
                    } else {
                        toastr.error(msg, "Error");
                        $(".fn_preloader ").removeClass("ajax_preloader");
                    }
                }
            });
        });

        $(document).on("click", ".fn_update_category", function () {
            $(".fn_preloader ").addClass("ajax_preloader ");
            var elem = $(this),
                category_id = parseInt(elem.data("category_id")) ? parseInt(elem.data("category_id")) : null,
                action = "set",
                link = window.location.href,
                session_id = '<?php echo $_SESSION['id'];?>
';

            $('input[name="category_id"]').val(category_id);
            $('input[name="action"]').val(action);

            $.ajax({
                url: link,
                method : 'post',
                data: $(this).closest('form').serialize(),
                dataType: 'json',
                success: function(data){
                    if(data.success) {
                        $(".fn_result_ajax").html(data.tpl);
                        toastr.success(msg, "Success");
                        $(".fn_preloader ").removeClass("ajax_preloader ");
                    } else {
                        toastr.error(msg, "Error");
                        $(".fn_preloader ").removeClass("ajax_preloader ");
                    }
                }
            });
           return false;
        });
    });
<?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_seo_669553174604f07b8337741_79701009 */
if (!function_exists('smarty_template_function_category_seo_669553174604f07b8337741_79701009')) {
function smarty_template_function_category_seo_669553174604f07b8337741_79701009(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                                <div class="seo_item fn_get_category" data-category_id="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
" style="padding-left: <?php echo $_smarty_tpl->tpl_vars['level']->value*10;?>
px" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_seo', array('cats'=>$_smarty_tpl->tpl_vars['cat']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}}
/*/ smarty_template_function_category_seo_669553174604f07b8337741_79701009 */
}
