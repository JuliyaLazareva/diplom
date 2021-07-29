<?php
/* Smarty version 3.1.33, created on 2021-05-07 00:17:05
  from '/home/ganzaby/diplom.dod.by/backend/design/html/features_aliases.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60945cd10e0796_19244460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48d3ac12e0f681c3aefedbe08f8966b5a870ce72' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/features_aliases.tpl',
      1 => 1614790711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_60945cd10e0796_19244460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->feature_feature_aliases ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_feature_aliases, ENT_QUOTES, 'UTF-8', true);?>
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
    <input type="hidden" name="action" value="set" />

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="row">
                                        <div class="col-lg-4 col-md-12">
                        <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_feature_aliases, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <div class="fn_preloader"></div>
                            <div>
                                <div class="seo_cateogories_wrap scrollbar-inner">
                                    <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                                            <div class="seo_item fn_get_feature" data-feature_id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="fn_aliases_result_ajax clearfix"></div>
                        <div class="fn_row okay okay_list_body_item fn_sort_item fn_new_feature_alias" style="display: none;">
                            <div class="okay_list_row">
                                <input type="hidden" class="fn_feature_alias_id" name="features_aliases[id][]" value="">
                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, false);
?>
                                </div>
                                <div class="okay_list_boding feature_alias_name">
                                    <input type="text" class="form-control fn_feature_alias_name" name="features_aliases[name][]" value="">
                                </div>
                                <div class="okay_list_boding feature_alias_variable">
                                    <input type="text" class="form-control fn_feature_alias_variable" name="" value="" readonly="">
                                </div>
                                <div class="okay_list_boding feature_alias_value">
                                    <input type="text" class="form-control" name="feature_aliases_value[value][]" value="">
                                    <input type="hidden" name="feature_aliases_value[id][]" value="">
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_alias, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-1">
                        <div class="fn_aliases_values_result_ajax clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


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

        $(document).on('click', '.fn_remove_item', function(){
            $(this).closest('.fn_row').fadeOut(200, function() {
                $(this).remove();
            });
        });
        $(document).on('change', '.fn_feature_alias_name', function(){
            var elem = $(this),
                variable_elem = elem.closest('.fn_row').find('.fn_feature_alias_variable'),
                id = elem.closest('.fn_row').find('.fn_feature_alias_id').val(),
                name = elem.val(),
                variable = translit(name);

            if (name != '' && !id) {
                variable = variable.replace(/[^a-z0-9]/gim, '').toLowerCase();
                variable_elem.val('{$f_alias_'+variable+'}');
            }
        });

        var feature_alias = $(".fn_new_feature_alias").clone(false);
        $(".fn_new_feature_alias").remove();
        $(document).on("click", ".fn_add_feature_alias", function () {
            var feature_alias_clone = feature_alias.clone(true);
            feature_alias_clone.show();
            $(".fn_feature_aliases_list").append(feature_alias_clone);
            return false;
        });

        $(document).on("click", ".fn_save_aliases", function () {
            var action = "set",
                link = window.location.href;

            $('input[name="action"]').val(action);

            $.ajax({
                url: link,
                method : 'post',
                data: $(this).closest('form').serialize(),
                dataType: 'json',
                success: function(data){
                    if(data.success) {
                        $(".fn_aliases_result_ajax").html(data.feature_aliases_tpl);
                        $(".fn_aliases_values_result_ajax").html(data.feature_aliases_values_tpl);
                        set_sortable();
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

        $(document).on("click", ".fn_get_feature", function () {
            $(".fn_preloader ").addClass("ajax_preloader");
            $(".fn_get_feature").removeClass("active");
            var elem = $(this),
                feature_id = parseInt(elem.data("feature_id")) ? parseInt(elem.data("feature_id")) : null,
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
                    feature_id: feature_id,
                    action : action,
                },
                dataType: 'json',
                success: function(data){
                    if(data.success) {
                        $(".fn_aliases_result_ajax").html(data.feature_aliases_tpl);
                        $(".fn_aliases_values_result_ajax").html(data.feature_aliases_values_tpl);
                        set_sortable();
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

        function set_sortable() {
            $(".sortable").each(function() {
                Sortable.create(this, {
                    handle: ".move_zone",  // Drag handle selector within list items
                    sort: true,  // sorting inside list
                    animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation

                    ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                    chosenClass: "sortable-chosen",  // Class name for the chosen item
                    dragClass: "sortable-drag",  // Class name for the dragging item
                    scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                    scrollSpeed: 10, // px
                });
            });
        }
    });
<?php echo '</script'; ?>
>

<?php }
}
