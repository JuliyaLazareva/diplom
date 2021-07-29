<?php
/* Smarty version 3.1.33, created on 2021-01-30 18:54:41
  from '/home/ganzaby/joo.by/backend/design/html/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60158141ef3643_49854941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6ec6f9ab0457481cc81dcf63c16d5f1ba5175e' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/blog.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_60158141ef3643_49854941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->blog_blog ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['keyword']->value && $_smarty_tpl->tpl_vars['posts_count']->value) {?>
                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_blog, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['posts_count']->value;?>

                <?php } elseif ($_smarty_tpl->tpl_vars['posts_count']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_blog, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['posts_count']->value;?>

                <?php }?>
            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'PostAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
                <input type="hidden" name="controller" value="BlogAdmin">
                <div class="input-group">
                    <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                    </span>
                </div>
            </form>
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
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="">
                            <select class="selectpicker px-0"  onchange="location = this.value;">
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BlogAdmin','type_post'=>null,'keyword'=>null,'id'=>null,'page'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['type_post']->value) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BlogAdmin','type_post'=>"blog",'keyword'=>null,'id'=>null,'page'=>null),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['type_post']->value == "blog") {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_articles, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BlogAdmin','type_post'=>"news",'keyword'=>null,'id'=>null,'page'=>null),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['type_post']->value == "news") {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_news, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list fn_fast_button" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="post_wrap okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_blog_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_blog_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_type, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_setting okay_list_blog_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                                                <div class="okay_list_body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">

                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_photo">
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'PostAdmin','id'=>$_smarty_tpl->tpl_vars['post']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->image, ENT_QUOTES, 'UTF-8', true),55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
"/>
                                                </a>
                                            <?php } else { ?>
                                                <img height="55" width="55" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_blog_name">
                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'PostAdmin','id'=>$_smarty_tpl->tpl_vars['post']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            <span class="text_grey"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date ));?>
</span>
                                            <div class="hidden-lg-up mt-q">
                                                <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post == "blog") {?>
                                                    <div class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_articles, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <?php } else { ?>
                                                    <div class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_one_news, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php }?>
                                            </div>
                                        </div>

                                        <div class="okay_list_boding okay_list_blog_type">
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post == "blog") {?>
                                                <div class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_articles, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php } else { ?>
                                                <div class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_one_news, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_status">
                                            <label class="switch switch-default ">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['post']->value->visible) {?>fn_active_class<?php }?>" data-controller="blog" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['post']->value->visible) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>

                                        <div class="okay_list_setting okay_list_blog_setting">
                                                                                        <?php if ($_smarty_tpl->tpl_vars['post']->value->type_post == 'blog') {?>
                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_item','url'=>$_smarty_tpl->tpl_vars['post']->value->url),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('url', $_prefixVariable1);?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->type_post == 'news') {?>
                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'news_item','url'=>$_smarty_tpl->tpl_vars['post']->value->url),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('url', $_prefixVariable2);?>
                                            <?php }?>
                                            <a href="../<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, true);
?>
                                            </a>
                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                                                <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
                                        <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn_small btn_blue">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                    <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_no_post, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }
}
