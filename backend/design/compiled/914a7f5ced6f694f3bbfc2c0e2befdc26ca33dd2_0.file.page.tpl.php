<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:58:45
  from '/home/ganzaby/diplom.dod.by/backend/design/html/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fce559559a5_24427202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914a7f5ced6f694f3bbfc2c0e2befdc26ca33dd2' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/page.tpl',
      1 => 1614790712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_603fce559559a5_24427202 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['page']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->page_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['page']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->page_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="../<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"page",'url'=>$_smarty_tpl->tpl_vars['page']->value->url),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, false);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_open, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->page_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->page_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
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

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'url_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'url_wrong') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'url_system') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_url_system, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
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
        <div class="col-xs-12 ">
            <div class="boxed match_matchHeight_true">
                                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="mt-h mb-h mt-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <span class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->page_h1, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <input name="name_h1" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['page']->value->visible) {?>checked=""<?php }?>/>
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
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row">
                    <div class="col-lg-6 col-md-6">
                        <div class="heading_label" >Meta-title <span id="fn_meta_title_counter"></span></div>
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords</div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>

                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="heading_label" >Meta-description <span id="fn_meta_description_counter"></span></div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="description" id="fn_editor" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 mt-1">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
