<?php
/* Smarty version 3.1.33, created on 2021-01-29 22:29:41
  from '/home/ganzaby/joo.by/backend/design/html/translations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60146225d620e9_39132761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7b6191062a2f7a445c39c36ee8fee6c3f0f8145' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/translations.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 5,
  ),
),false)) {
function content_60146225d620e9_39132761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->translations_translate ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_translate, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_theme;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);
}?>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'TranslationAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-5 col-lg-4 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>
<?php }?>

<div class="boxed fn_toggle_wrap">
    <form class="fn_form_list" method="post">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

        <div class="translation_wrap okay_list products_list fn_sort_list">
            <div class="okay_list_head">
                <div class="okay_list_heading okay_list_check">
                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                    <label class="okay_ckeckbox" for="check_all_1"></label>
                </div>
                <div class="okay_list_heading okay_list_translations_num">
                    <span>№</span>
                </div>
                <div class="okay_list_heading okay_list_translations_name">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_translation, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <a <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'translation' || $_smarty_tpl->tpl_vars['sort']->value == 'translation_desc') {?> class="selected" <?php }?> href="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'translation') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('sort'=>'translation_desc'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('sort'=>'translation'),$_smarty_tpl ) );
}?>"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), 0, true);
?></a>
                </div>
                <div class="okay_list_heading okay_list_translations_variable">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translations_var, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <a <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'label' || $_smarty_tpl->tpl_vars['sort']->value == 'label_desc' || !$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" <?php }?>href="<?php if ($_smarty_tpl->tpl_vars['sort']->value == 'label' || !$_smarty_tpl->tpl_vars['sort']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('sort'=>'label_desc'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('sort'=>null),$_smarty_tpl ) );
}?>"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sorts'), 0, true);
?></a>
                </div>
                <div class="okay_list_heading okay_list_close"></div>
            </div>

                        <div class="okay_list_body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translations']->value, 'value', false, 'label');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
                    <div class="fn_row okay_list_body_item fn_sort_item"<?php if (!$_smarty_tpl->tpl_vars['translations_template']->value[$_smarty_tpl->tpl_vars['label']->value]) {?> title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->translations_system_translation;?>
"<?php }?>>
                        <div class="okay_list_row ">
                            <div class="okay_list_boding okay_list_check">
                                <input class="hidden_check" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" />
                                <label class="okay_ckeckbox" for="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"></label>
                            </div>
                            <div class="okay_list_heading okay_list_translations_num">№ <?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</div>
                            <div class="okay_list_boding okay_list_translations_name">
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'TranslationAdmin','id'=>$_smarty_tpl->tpl_vars['label']->value,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </div>
                            <div class="okay_list_boding  okay_list_translations_variable">
                                 <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'TranslationAdmin','id'=>$_smarty_tpl->tpl_vars['label']->value,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </div>
                            <div class="okay_list_boding okay_list_close">
                                <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value && $_smarty_tpl->tpl_vars['translations_template']->value[$_smarty_tpl->tpl_vars['label']->value]) {?>
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                    </button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value) {?>
                                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button id="apply_action" type="submit" class="btn btn_small btn_blue">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            <?php }?>
        </div>
    </form>
</div>
<?php }
}
