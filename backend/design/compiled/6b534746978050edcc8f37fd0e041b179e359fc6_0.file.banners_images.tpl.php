<?php
/* Smarty version 3.1.33, created on 2021-01-24 22:51:15
  from '/home/ganzaby/joo.by/backend/design/html/banners_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600dcfb36a96f8_63070716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b534746978050edcc8f37fd0e041b179e359fc6' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/banners_images.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_600dcfb36a96f8_63070716 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['banner']->value) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['banner']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->banners_images_banners ,false ,32);
}?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['banners_images_count']->value) {?>
                   <?php echo $_smarty_tpl->tpl_vars['btr']->value->banners_images_banners;?>
 - <?php echo $_smarty_tpl->tpl_vars['banners_images_count']->value;?>

               <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['btr']->value->banners_images_banners;?>
 - <?php echo $_smarty_tpl->tpl_vars['banners_images_count']->value;?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_none, ENT_QUOTES, 'UTF-8', true);?>

               <?php }?>
            </div>
            <div class="box_btn_heading">
               <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BannersImageAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
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
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div>
                            <select class="selectpicker" onchange="location = this.value;">
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('brand_id'=>null,'banner_id'=>null,'keyword'=>null,'page'=>null,'filter'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['filter']->value) {
}?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'banner_id'=>null,'page'=>null,'filter'=>'visible'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'visible') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'brand_id'=>null,'banner_id'=>null,'page'=>null,'filter'=>'hidden'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'hidden') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <select class="selectpicker" onchange="location = this.value;">
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('banner_id'=>null,'brand_id'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['banner']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_groups, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                    <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'banner_id'=>$_smarty_tpl->tpl_vars['b']->value->id),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value->id == $_smarty_tpl->tpl_vars['b']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    <?php }?>
                </div>
            </div>
            </div>
        </div>
    </div>

        <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['banners_images']->value) {?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <div id="main_list" class=" okay_list products_list fn_sort_list">
                        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_brands_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_bransimages_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_brands_group"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_banner_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>

                                                <div class="banners_wrap okay_list_body features_wrap sortable">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners_images']->value, 'banners_image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banners_image']->value) {
?>
                                <div class="fn_row okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->position;?>
">

                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                        </div>

                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_brands_photo">
                                            <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->image) {?>
                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BannersImageAdmin','id'=>$_smarty_tpl->tpl_vars['banners_image']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['banners_image']->value->image,200,200,false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" width="200px"/>
                                                </a>
                                            <?php } else { ?>
                                                <img height="100" width="100" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_bransimages_name">
                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'BannersImageAdmin','id'=>$_smarty_tpl->tpl_vars['banners_image']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banners_image']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                            <div class="okay_list_name_brand">
                                                <?php echo $_smarty_tpl->tpl_vars['banners_image']->value->image;?>

                                            </div>
                                        </div>

                                        <div class="okay_list_boding okay_list_brands_group">
                                            <?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
                                                <select class="selectpicker" name=image_banners[<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->id;?>
]">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value->id == $_smarty_tpl->tpl_vars['banners_image']->value->banner_id) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['b']->value->name;?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_status">
                                                                                        <label class="switch switch-default">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->visible) {?>fn_active_class<?php }?>" data-controller="banners_image" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['banners_image']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['banners_image']->value->visible) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_delete, ENT_QUOTES, 'UTF-8', true);?>
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
                                <div class="okay_list_heading okay_list_drag"></div>
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                   <select name="action" class="selectpicker">
                                        <?php if (count($_smarty_tpl->tpl_vars['banners']->value) > 1) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                                <option value="move_to_banner[<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_move, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
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
        <?php } else { ?>
            <div class="heading_box mt-1">
                <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banners_images_none, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
