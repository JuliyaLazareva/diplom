<?php
/* Smarty version 3.1.33, created on 2021-01-24 20:20:15
  from '/home/ganzaby/joo.by/backend/design/html/images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600dac4f613406_26081658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6ba08f9cdb5accd4db3df9ff35ff6b5a31e2b2' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/images.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
  ),
),false)) {
function content_600dac4f613406_26081658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ganzaby/joo.by/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->images_images ,false ,32);?>

<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'permissions') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'name_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'theme_locked') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
            <input type="hidden" name="delete_image" value="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_box">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_images, ENT_QUOTES, 'UTF-8', true);?>

                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                            </div>
                        </div>
                                                <div class="toggle_body_wrap fn_card on">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="banner_card">
                                            <div class="banner_card_header">
                                                <input type="text" class="hidden" name="old_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <div class="form-group col-lg-9 col-md-8 px-0 fn_rename_value hidden mb-0">
                                                    <input type="text" class="form-control" name="new_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <span class="font-weight-bold"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true),20,'...');?>
</span>
                                                <i class="fa fa-pencil fn_rename_theme rename_theme p-h" data-old_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></i>

                                                <button type="button" data-name="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
" class="fn_delete_image btn_close float-xs-right">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                </button>
                                            </div>
                                            <div class="banner_card_block">
                                                <div class="wrap_bottom_tag_images">
                                                    <a class="theme_image_item" href='../<?php echo $_smarty_tpl->tpl_vars['images_dir']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'>
                                                        <img src='../<?php echo $_smarty_tpl->tpl_vars['images_dir']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'>
                                                    </a>
                                                    <div class="tag tag-info">
                                                        <?php if ($_smarty_tpl->tpl_vars['image']->value->size > 1024*1024) {?>
                                                            <?php echo round(($_smarty_tpl->tpl_vars['image']->value->size/1024/1024),2);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_mb, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value->size > 1024) {?>
                                                            <?php echo round(($_smarty_tpl->tpl_vars['image']->value->size/1024),2);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_kb, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['image']->value->size;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_byte, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php }?>,
                                                        <?php echo $_smarty_tpl->tpl_vars['image']->value->width;?>
&times;<?php echo $_smarty_tpl->tpl_vars['image']->value->height;?>
 px
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="">
                            <button type="button" class="fn_add_image btn btn_small btn-info mb-1 btn_images_add">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_add, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 pull-right">
                        <button type="submit" name="save" class="btn btn_small btn_blue float-md-right">
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
</div>

<?php echo '<script'; ?>
>
    var general_confirm_delete = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_confirm_delete, ENT_QUOTES, 'UTF-8', true);?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(function() {

    $('.fn_rename_theme').on('click',function(){
        $(this).parent().find('.fn_rename_value').toggleClass('hidden');
        $(this).prev().toggleClass('hidden');
        $(this).parent().find('.fn_rename_value > input').val($(this).data('old_name'))
    });
    // Удалить
    $('.fn_delete_image').on('click',function(){
        $('input[name=delete_image]').val($(this).data('name'));
        $('form').submit();
    });
    
    // Загрузить
    $('.fn_add_image').on('click',function(){
        $(this).closest('div').append($('<input class="import_file" type="file" name="upload_images[]">'));
    });
    
    $("form").submit(function() {
        if($('input[name="delete_image"]').val()!='' && !confirm(general_confirm_delete))
            return false;    
    });

});
<?php echo '</script'; ?>
>

<?php }
}
