<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:15:32
  from '/home/ganzaby/diplom.dod.by/backend/design/html/seo_patterns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fc4347195e9_19329172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd36a342e3608340a16d0608b20b43cb9927585e' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/seo_patterns.tpl',
      1 => 1614790713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_603fc4347195e9_19329172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_seo' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/fd36a342e3608340a16d0608b20b43cb9927585e_0.file.seo_patterns.tpl.php',
    'uid' => 'fd36a342e3608340a16d0608b20b43cb9927585e',
    'call_name' => 'smarty_template_function_category_seo_2145448395603fc4346ae734_74962056',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->seo_patterns_auto ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_auto, ENT_QUOTES, 'UTF-8', true);?>
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
                                    <div class="seo_item fn_get_category" data-template_type="default"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
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
</form>
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
        $(document).on("click", ".fn_get_category", function () {
            $(".fn_preloader ").addClass("ajax_preloader");
            $(".fn_get_category").removeClass("active");
            var elem = $(this),
                category_id = parseInt(elem.data("category_id")) ? parseInt(elem.data("category_id")) : null,
                template_type = elem.data("template_type"),
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
                    template_type: template_type,
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
                template_type = elem.data("template_type"),
                action = "set",
                link = window.location.href,
                session_id = '<?php echo $_SESSION['id'];?>
';

            var auto_meta_title = '',
                auto_meta_keywords = '',
                auto_meta_desc = '',
                auto_description = '';

            auto_meta_title = $("input[name=auto_meta_title]").val();
            auto_meta_keywords = $("input[name=auto_meta_keywords]").val();
            auto_meta_desc = $("textarea[name=auto_meta_desc]").val();
            auto_description = $("textarea[name=auto_description]").val();

            $.ajax({
                url: link,
                method : 'post',
                data: {
                    ajax: 1,
                    session_id: session_id,
                    category_id: category_id,
                    template_type: template_type,
                    action : action,
                    auto_meta_title: auto_meta_title,
                    auto_meta_keywords: auto_meta_keywords,
                    auto_meta_desc: auto_meta_desc,
                    auto_description: auto_description,

                },
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
/* smarty_template_function_category_seo_2145448395603fc4346ae734_74962056 */
if (!function_exists('smarty_template_function_category_seo_2145448395603fc4346ae734_74962056')) {
function smarty_template_function_category_seo_2145448395603fc4346ae734_74962056(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                                <div class="seo_item fn_get_category" data-template_type="category" data-category_id="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
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
/*/ smarty_template_function_category_seo_2145448395603fc4346ae734_74962056 */
}
