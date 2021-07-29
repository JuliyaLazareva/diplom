<?php
/* Smarty version 3.1.33, created on 2021-01-24 20:00:20
  from '/home/ganzaby/joo.by/backend/design/html/import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da7a42ae8e3_12489730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a537150ca43c5384a61bc2a56d0d15a0ff355da' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/import.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600da7a42ae8e3_12489730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->import_products ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_products, ENT_QUOTES, 'UTF-8', true);?>

            <div class="export_block export_users hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_example, ENT_QUOTES, 'UTF-8', true);?>
">
                <a class="export_block" href="files/import/example.csv" target="_blank">
                   <i class="fa fa-file"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="import_error" class="boxed boxed_warning" style="display: none;"></div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'no_permission') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['import_files_dir']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'convert_error') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_utf, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'locale_error') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_locale, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locale']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_not_correctly, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'upload_error') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->upload_error, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'required_fields') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_required, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'duplicated_columns') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_duplicated, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo implode($_smarty_tpl->tpl_vars['duplicated_columns']->value,", ");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'duplicated_columns_pairs') {?>
                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->import_duplicated_pairs;?>
:<BR>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['duplicated_columns_pairs']->value, 'pair', true);
$_smarty_tpl->tpl_vars['pair']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
$_smarty_tpl->tpl_vars['pair']->iteration++;
$_smarty_tpl->tpl_vars['pair']->last = $_smarty_tpl->tpl_vars['pair']->iteration === $_smarty_tpl->tpl_vars['pair']->total;
$__foreach_pair_0_saved = $_smarty_tpl->tpl_vars['pair'];
?>
                            <?php echo implode($_smarty_tpl->tpl_vars['pair']->value,", ");?>

                            <?php if (!$_smarty_tpl->tpl_vars['pair']->last) {?><BR><?php }?>
                        <?php
$_smarty_tpl->tpl_vars['pair'] = $__foreach_pair_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value != 'no_permission') {?>
    <form class="form-horizontal mt-1 hidden-xs-down" method="post" enctype="multipart/form-data">
        <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['filename']->value || $_smarty_tpl->tpl_vars['import']->value) {?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="boxed fn_toggle_wrap ">
                        <div class="heading_box boxes_inline">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_file, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo round(($_smarty_tpl->tpl_vars['file']->value->size/1024),'2');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_kb, ENT_QUOTES, 'UTF-8', true);?>
)
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['filename']->value) {?>
                            <div class="toggle_body_wrap on fn_card">
                                <div class="boxed boxed_attention">
                                    <div class="text_box mt-0">
                                        <div><?php echo $_smarty_tpl->tpl_vars['btr']->value->import_info;?>
</div>
                                    </div>
                                </div>
                            </div>

                            <div class="okay_list">
                                <div class="okay_list_head">
                                    <div class="col-lg-6 col-md-6"><?php echo $_smarty_tpl->tpl_vars['btr']->value->import_csv_columns;?>
</div>
                                    <div class="col-lg-6 col-md-6">
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->import_fields;?>

                                        <div>
                                            <a href="javascript:;" class="btn btn_small btn-info fn_skip_all"><?php echo $_smarty_tpl->tpl_vars['btr']->value->import_skip_all;?>
</a>
                                            <a href="javascript:;" class="btn btn_small btn-info fn_new_all"><?php echo $_smarty_tpl->tpl_vars['btr']->value->import_new_all;?>
</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['source_columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->index++;
$_smarty_tpl->tpl_vars['column']->first = !$_smarty_tpl->tpl_vars['column']->index;
$__foreach_column_1_saved = $_smarty_tpl->tpl_vars['column'];
?>
                                        <div class="row import_row <?php if ($_smarty_tpl->tpl_vars['column']->first) {?>mt-1<?php }?>">
                                            <div class="col-lg-6 col-md-6">

                                                <div class="push-lg-4 col-lg-6 text-xs-left ml-2 col-sm-12">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->name, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['column']->value->is_feature || !$_smarty_tpl->tpl_vars['column']->value->is_exist) {?> (<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_feature;?>
)<?php }?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 text-xs-left fn_row">
                                                <input type="hidden" name="csv_fields[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->name, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                                                <a href="javascript:;" class="fn_edit_column <?php if (empty($_smarty_tpl->tpl_vars['column']->value->value)) {?>text_warning<?php } elseif ($_smarty_tpl->tpl_vars['column']->value->is_nf_selected) {?>text_green<?php }?>"
                                                   data-column_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                                                   data-is_exist="<?php if ($_smarty_tpl->tpl_vars['column']->value->is_exist) {?>1<?php } else { ?>0<?php }?>">
                                                    <?php if (in_array($_smarty_tpl->tpl_vars['column']->value->value,$_smarty_tpl->tpl_vars['columns_names']->value)) {?>
                                                         <?php echo $_smarty_tpl->tpl_vars['btr']->value->getTranslation(('import_field_').($_smarty_tpl->tpl_vars['column']->value->value));?>
 
                                                    <?php } elseif (empty($_smarty_tpl->tpl_vars['column']->value->value)) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->import_skip;?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['column']->value->is_nf_selected) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->import_new_feature;?>

                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->value, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
$_smarty_tpl->tpl_vars['column'] = $__foreach_column_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <select class="selectpicker fn_select" data-live-search="true">
                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_additional;?>
">
                                            <option value="" data-label="<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_skip;?>
"><?php echo $_smarty_tpl->tpl_vars['btr']->value->import_skip;?>
</option>
                                            <option value="" data-label="<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_new_feature;?>
" class="fn_new_feature">
                                                <?php echo $_smarty_tpl->tpl_vars['btr']->value->import_new_feature;?>

                                            </option>
                                        </optgroup>
                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_main_fields;?>
">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns_names']->value, 'cname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cname']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['btr']->value->getTranslation(('import_field_').($_smarty_tpl->tpl_vars['cname']->value));?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['btr']->value->getTranslation(('import_field_').($_smarty_tpl->tpl_vars['cname']->value));?>

                                                </option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </optgroup>
                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_shop_features;?>
">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value, ENT_QUOTES, 'UTF-8', true);?>

                                                </option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="okay_list_footer">
                                    <div class="col-lg-12 col-md-12 mt-1">
                                        <button type="submit" name="import" value="1" class="btn btn_small btn_blue float-md-right"><i class="fa fa-upload"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_do_import;?>
</button>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['import']->value) {?>
                            <div id='import_result' class="boxes_inline" style="display: none;">
                                <a class="btn btn_small btn-info" href="index.php?controller=ImportLogAdmin" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_log, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </div>
                            <div>
                                <progress id="progressbar" class="progress progress-xs progress-info mt-1" style="display: none" value="0" max="100"></progress>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="boxed fn_toggle_wrap">
                        <div class="heading_box">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_download, ENT_QUOTES, 'UTF-8', true);?>

                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="text_warning">
                                    <div class="heading_normal text_warning">
                                        <span class="text_warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_backup, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="text_primary">
                                    <div class="heading_normal text_primary">
                                        <span class="text_primary">
                                         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_maxsize, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php if ($_smarty_tpl->tpl_vars['config']->value->max_upload_filesize > 1024*1024) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['config']->value->max_upload_filesize/1024/round(1024,'2');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_mb, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['config']->value->max_upload_filesize/round(1024,'2');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_kb, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-12 my-h">
                                <input name="file" class="import_file" style="padding:0px;" type="file" value="" />
                            </div>
                            <div class="col-lg-7 col-md-6 my-h">
                                <button type="submit" class="btn btn_small btn_blue float-md-right"><i class="fa fa-upload"></i>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_to_download, ENT_QUOTES, 'UTF-8', true);?>
</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </form>
<?php }?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/piecon/piecon.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    var new_feature_label = "<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_new_feature;?>
";
    var skip_label = "<?php echo $_smarty_tpl->tpl_vars['btr']->value->import_skip;?>
";
    $(function() {
        var select_column = $(".fn_select");
        $(".fn_select").remove();
        $(document).on("click", ".fn_edit_column", function() {
            var edit = $(this),
                parent = edit.closest(".fn_row");
            $(".fn_edit_column").show();
            edit.hide();
            $(".selectpicker").selectpicker("destroy");
            $(".fn_select").remove();
            parent.append(select_column.clone());

            /* настраиваем селект для текущего елемента */
            var select = parent.find("select.fn_select"),
                new_feature = parent.find(".fn_new_feature"),
                input = parent.find("[name*='csv_fields']");
            new_feature.val(edit.data("column_name"));
            new_feature.prop("disabled", edit.data("is_exist") ? true : false);
            select.find("option[value='" + input.val() + "']").prop("selected", true);

            /* дизаблим уже выбранные значения */
            $("[name*='csv_fields']").each(function() {
                if ($(this).val() != "") {
                    select.find("option[value='" + $(this).val() + "']").prop("disabled", true);
                }
            });

            select.selectpicker();
            select.on("hide.bs.select", function() {
                select.closest(".fn_row").find(".fn_edit_column").show();
                $(".selectpicker").selectpicker("destroy");
                $(".fn_select").remove();
            });
            setTimeout(function() {
                select.selectpicker("toggle");
            }, 10);
        });

        $(document).on("change", ".fn_select select", function() {
            var select = $(this),
                parent = select.closest(".fn_row"),
                selected = select.find("option:selected"),
                edit = parent.find(".fn_edit_column");
            edit.text(selected.data("label"));
            edit.removeClass("text_warning").removeClass("text_green");
            if (select.val()=="") {
                edit.addClass("text_warning");
            } else if (selected.hasClass("fn_new_feature")) {
                edit.addClass("text_green");
            }
            parent.find("[name*='csv_fields']").val(select.val());
        });

        $(document).on("click", ".fn_skip_all", function() {
            $('.fn_edit_column').each(function() {
                var edit = $(this),
                    parent = edit.closest(".fn_row");
                edit.text(skip_label);
                edit.removeClass("text_warning").removeClass("text_green");
                edit.addClass("text_warning");
                parent.find("[name*='csv_fields']").val("");
            });
            return false;
        });
        $(document).on("click", ".fn_new_all", function() {
            $('.fn_edit_column').each(function() {
                var edit = $(this),
                    parent = edit.closest(".fn_row");
                if (!edit.data("is_exist")) {
                    edit.text(new_feature_label);
                    edit.removeClass("text_warning").removeClass("text_green");
                    edit.addClass("text_green");
                    parent.find("[name*='csv_fields']").val(edit.data('column_name'));
                }
            });
            return false;
        });
    });
    
<?php if ($_smarty_tpl->tpl_vars['import']->value) {?>
    
        // On document load
        $(function(){
            Piecon.setOptions({fallback: 'force'});
            Piecon.setProgress(0);
            var progress_item = $("#progressbar"); //указываем селектор элемента с анимацией
            progress_item.show();
            do_import('',progress_item);
        });

        function do_import(from,progress)
        {
            from = typeof(from) != 'undefined' ? from : 0;
            $.ajax({
                 url: "ajax/import.php",
                    data: {from:from},
                    dataType: 'json',
                    success: function(data){
                        if (data.error) {
                            var error = '';
                            if (data.missing_fields) {
                                error = '<span class="heading_box">В файле импорта отсутствуют необходимые столбцы: </span><b>';
                                for (var i in data.missing_fields) {
                                    error += data.missing_fields[i] + ', ';
                                }
                                error = error.substring(0, error.length-2);
                                error += '</b>';
                            }

                            progress.fadeOut(500);
                            $('#import_error').html(error);
                            $('#import_error').show();
                        } else {
                            Piecon.setProgress(Math.round(100 * data.from / data.totalsize));
                            progress.attr('value',100*data.from/data.totalsize);

                            if (data != false && !data.end) {
                                do_import(data.from,progress);
                            } else {
                                Piecon.setProgress(100);
                                progress.attr('value','100');
                                $("#import_result").show();
                                progress.fadeOut(500);
                            }
                        }
                    },
                    error: function(xhr, status, errorThrown) {
                        alert(errorThrown+'\n'+xhr.responseText);
                    }
            });

        }
    
<?php }
echo '</script'; ?>
>
<?php }
}
