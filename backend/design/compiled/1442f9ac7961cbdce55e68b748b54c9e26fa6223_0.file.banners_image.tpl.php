<?php
/* Smarty version 3.1.33, created on 2021-01-24 22:51:19
  from '/home/ganzaby/joo.by/backend/design/html/banners_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600dcfb7104306_47256590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1442f9ac7961cbdce55e68b748b54c9e26fa6223' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/banners_image.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_600dcfb7104306_47256590 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['banners_image']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['banners_image']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->banners_image_add_banner ,false ,32);
}?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['banners_image']->value->id) {?>
                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_add_banner, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, false);
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

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed">
                <div class="row d_flex">
                                        <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->visible || !$_smarty_tpl->tpl_vars['banners_image']->value->id) {?>checked=""<?php }?>/>
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
        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap fn_card on text-xs-center">
                    <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                        <div class="banner_image text-xs-center">
                            <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->image) {?>
                                <a href="javascript:;" class="fn_delete_banner remove_image"></a>
                                <img class="admin_banner_images" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['banners_image']->value->image,465,265,false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" alt="" />
                            <?php }?>
                        </div>
                        <div class="fn_upload_image dropzone_block_image text-xs-center <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->image) {?> hidden<?php }?>">
                            <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                            <input class="dropzone_banner" name="image" type="file" />
                        </div>
                </div>
            </div>
        </div>

                <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_param, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="">
                        <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_banner_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <select name="banner_id" class="selectpicker mb-1">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['banner']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->banner_id == $_smarty_tpl->tpl_vars['banner']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_url, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                          <input name="url" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                    </div>

                    <div class="">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_alt, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                          <input name="alt" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->alt, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                    </div>

                    <div class="">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                          <input name="title" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                    </div>

                    <div class="">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_image_description, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                          <textarea name="description" class="form-control okay_textarea "><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-lg-12 col-md-12 ">
            <button type="submit" class="btn btn_small btn_blue float-md-right">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
        </div>
    </div>
</form>
<?php echo '<script'; ?>
>
    $(document).on("click", ".fn_delete_banner",function () {
       $(this).closest(".banner_image").find("img").remove();
       $(this).remove();
       $(".fn_upload_image ").removeClass("hidden");
        $(".fn_accept_delete").val(1);
    });

    if(window.File && window.FileReader && window.FileList) {

        $(".fn_upload_image").on('dragover', function (e){
            e.preventDefault();
            $(this).css('background', '#bababa');
        });
        $(".fn_upload_image").on('dragleave', function(){
            $(this).css('background', '#f8f8f8');
        });
        function handleFileSelect(evt){
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
                        $("<a href='javascript:;' class='fn_delete_banner remove_image'></a><img class='admin_banner_images' onerror='$(this).closest(\"div\").remove();' src='"+e.target.result+"' />").appendTo("div.banner_image ");
                        $(".fn_upload_image").addClass("hidden");
                    };
                })(f);
                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
            $(".fn_upload_image").removeAttr("style");
        }
        $(document).on('change','.dropzone_banner',handleFileSelect);
    }
<?php echo '</script'; ?>
>
<?php }
}
