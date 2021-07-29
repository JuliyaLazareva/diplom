<?php
/* Smarty version 3.1.33, created on 2021-01-30 18:50:03
  from '/home/ganzaby/joo.by/backend/design/html/languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6015802bbf48d5_01562345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b22688e27767e5f217a0640d4f1a0cfee58ca4c' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/languages.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_6015802bbf48d5_01562345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->general_languages ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->languages_site, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info add" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'LanguageAdmin'),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->languages_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
    <div class="boxed fn_toggle_wrap">
        <form method="post" class="fn_form_list">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
            <div class="okay_list products_list fn_sort_list">
                                <div class="okay_list_head">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_languages_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>
                                <div class="okay_list_body sortable">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row">
                                <input type="hidden" name="positions[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
">

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                </div>
                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
" />
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
"></label>
                                </div>
                                <div class="okay_list_boding okay_list_photo">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'LanguageAdmin','id'=>$_smarty_tpl->tpl_vars['language']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                        <?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['language']->value->label).".png")) {?>
                                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['language']->value->label).".png"),55,55,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" />
                                        <?php }?>
                                    </a>
                                </div>
                                <div class="okay_list_boding okay_list_languages_name">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'LanguageAdmin','id'=>$_smarty_tpl->tpl_vars['language']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 [<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->label, ENT_QUOTES, 'UTF-8', true);?>
]
                                    </a>
                                </div>

                                <div class="okay_list_boding okay_list_status">
                                                                        <label class="switch switch-default">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['language']->value->enabled) {?>fn_active_class<?php }?>" data-controller="language" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
" name="enabled" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['language']->value->enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim"  data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
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
                        <div class="okay_list_boding okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->languages_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->languages_disable, ENT_QUOTES, 'UTF-8', true);?>
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
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->languages_no_list, ENT_QUOTES, 'UTF-8', true);?>

<?php }
}
}
