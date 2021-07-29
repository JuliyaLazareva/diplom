<?php
/* Smarty version 3.1.33, created on 2021-01-24 19:56:11
  from '/home/ganzaby/joo.by/backend/design/html/theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da6abb57c23_16918921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bd2b1f49504f983125a6f585d093fafa6ee7d7f' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/theme.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 6,
  ),
),false)) {
function content_600da6abb57c23_16918921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ganzaby/joo.by/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['theme']->value->name) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', ((string)$_smarty_tpl->tpl_vars['btr']->value->general_theme)." ".((string)$_smarty_tpl->tpl_vars['theme']->value->name) ,false ,32);
}?>

<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page ">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_current, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>

            </div>
            <div class="box_btn_heading theme_btn_heading">
                <a class="fn_clone_theme btn btn_small btn-info" href="/">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_copy, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['theme']->value->locked) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_close, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'permissions') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissionse, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['themes_dir']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'name_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_exists, ENT_QUOTES, 'UTF-8', true);?>

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
                <input type="hidden" name="action">
                <input type="hidden" name="theme">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="heading_box">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_themes, ENT_QUOTES, 'UTF-8', true);?>

                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="toggle_body_wrap fn_card on">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 't');
$_smarty_tpl->tpl_vars['t']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->index++;
$_smarty_tpl->tpl_vars['t']->first = !$_smarty_tpl->tpl_vars['t']->index;
$__foreach_t_0_saved = $_smarty_tpl->tpl_vars['t'];
?>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="banner_card">
                                            <div class="banner_card_header img_bnr_c_head">
                                                <input type="text" class="hidden" name="old_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <div class="form-group col-lg-9 col-md-8 px-0 fn_rename_value hidden mb-0">
                                                    <input type="text" class="form-control" name="new_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <span class="theme_active_span font-weight-bold"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true),20,'...');?>
 <?php if ($_smarty_tpl->tpl_vars['t']->value->name == $_smarty_tpl->tpl_vars['theme']->value->name) {?><span class="text_success">- <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_current_item, ENT_QUOTES, 'UTF-8', true);?>
 </span><?php }?></span>
                                                <?php if (!$_smarty_tpl->tpl_vars['t']->value->locked) {?>
                                                    <i class="fa fa-pencil fn_rename_theme rename_theme p-h" data-old_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></i>
                                                <?php }?>

                                                <?php if (!$_smarty_tpl->tpl_vars['t']->first) {?>
                                                    <button data-theme_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close float-xs-right fn_remove_theme" data-toggle="modal" data-target="#fn_delete_theme">
                                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                    </button>
                                                <?php }?>
                                            </div>
                                            <div class="banner_card_block">
                                                <div class="theme_block_image" style="position:relative;">
                                                    <img class="<?php if ($_smarty_tpl->tpl_vars['theme']->value->name != $_smarty_tpl->tpl_vars['t']->value->name) {?>gray_filter<?php }?>" width="" src='<?php echo $_smarty_tpl->tpl_vars['root_dir']->value;?>
../design/<?php echo $_smarty_tpl->tpl_vars['t']->value->name;?>
/preview.png'>
                                                    <?php if ($_smarty_tpl->tpl_vars['theme']->value->name != $_smarty_tpl->tpl_vars['t']->value->name) {?>
                                                        <div class="fn_set_theme btn btn_small btn_blue theme_btn_admin" data-set_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                        </div>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['t']->value->name == $_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?>
                                                        <button type="button" value="" class="btn btn_small btn-danger fn_set_admin theme_btn_block" data-set_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                            <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_unset_to_admin;?>
</span>
                                                        </button>
                                                    <?php } else { ?>
                                                        <button type="button" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn_small btn_blue fn_set_admin theme_btn_block" data-set_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                                            <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_set_to_admin;?>
</span>
                                                        </button>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="boxed fn_toggle_wrap">
                            <div class="heading_box">
                                <?php echo $_smarty_tpl->tpl_vars['btr']->value->restrict_to_admins;?>

                            </div>
                            <div class="toggle_body_wrap on fn_card">
                                <div class="permission_block">
                                    <div class="permission_boxes row fn_perms_wrap">
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="permission_box">
                                                <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_all_admins;?>
</span>
                                                <label class="switch switch-default">
                                                    <input class="switch-input fn_all_managers" name="admin_theme_managers" value="all" type="checkbox" <?php if (!$_smarty_tpl->tpl_vars['admin_theme_managers']->value) {?>checked<?php }?> />
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['managers']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="permission_box">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['m']->value->login;?>
</span>
                                                    <label class="switch switch-default">
                                                        <input class="switch-input fn_manager" name="admin_theme_managers[]" value="<?php echo $_smarty_tpl->tpl_vars['m']->value->login;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['admin_theme_managers']->value && in_array($_smarty_tpl->tpl_vars['m']->value->login,$_smarty_tpl->tpl_vars['admin_theme_managers']->value)) {?>checked<?php }?> />
                                                        <span class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                                <div class="col-xs-12 clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="admin_theme" disabled value="" />
                    <div class="col-lg-12">
                        <button type="submit" name="save" class="btn btn_small btn_blue fn_chek_all float-md-right ">
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

<div id="fn_delete_theme" class="modal fade show" role="document">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header">
                <div class="heading_modal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_perform, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
            <div class="modal-body">
                <button type="submit" class="btn btn_small btn_blue fn_submit_delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_perform_yes, ENT_QUOTES, 'UTF-8', true);?>
</button>
                <button type="button" class="btn btn_small btn_blue fn_dismiss_delete" data-dismiss="modal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_perform_no, ENT_QUOTES, 'UTF-8', true);?>
</button>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    

    $(function() {

        $('.fn_all_managers').on('change', function(){
            $('.fn_manager').attr('checked', false);
        });
        $('.fn_manager').on('change', function(){
            $('.fn_all_managers').attr('checked', false);
        });
        $('.fn_set_admin').on('click', function (e) {
            e.preventDefault();
            $("input[name=admin_theme]").val($(this).val()).attr('disabled', false);
            $("form").submit();
        });

        $('.fn_rename_theme').on('click',function(){
            $(this).parent().find('.fn_rename_value').toggleClass('hidden');
            $(this).prev().toggleClass('hidden');
            $(this).parent().find('.fn_set_theme').toggleClass('opacity_toggle');
            $(this).parent().find('.fn_rename_value > input').val($(this).data('old_name'))
        });
        $('.fn_set_theme').on('click',function(){
            $("input[name=action]").val('set_main_theme');
            $("input[name=theme]").val($(this).data('set_name'));
            $("form").submit();
        });
        // Клонировать текущую тему
        $('.fn_clone_theme').on('click',function(e){
            e.preventDefault();
            $("input[name=action]").val('clone_theme');
            $("form").submit();
        });

        $(".fn_remove_theme").on("click", function () {
            action = "delete_theme";
            theme_name = $(this).data("theme_name");
        });
        $(".fn_submit_delete").on("click",function () {
            $("form input[name=action]").val(action);
            $("form input[name=theme]").val(theme_name);
            $("form").submit();
        });
        $(".fn_dismiss_delete").on("click",function () {
            $("form input[name=action]").val("");
            $("form input[name=theme]").val("");
        });

    });
    
<?php echo '</script'; ?>
>
<?php }
}
