<?php
/* Smarty version 3.1.33, created on 2021-01-30 21:13:12
  from '/home/ganzaby/joo.by/backend/design/html/features_aliases_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6015a1b8874395_88971676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a0ff50d477ad4444d2c0973613bebafbad49f9' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/features_aliases_ajax.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_6015a1b8874395_88971676 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" name="feature_id" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" />
<div class="min_height_210px">
    <div class="heading_box">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_feature_aliases, ENT_QUOTES, 'UTF-8', true);?>

    </div>
    <div class="fn_sort_list">
        <div class="boxed boxed_warning">
            <div class="">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_alias_notice, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
        <div class="okay_list ok_related_list">
            <div class="okay_list_head">
                <div class="okay_list_heading okay_list_drag"></div>
                <div class="okay_list_heading feature_alias_name"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_name;?>
</div>
                <div class="okay_list_heading feature_alias_variable"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_variable;?>
</div>
                <div class="okay_list_heading feature_alias_value"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_value;?>
</div>
                <div class="okay_list_heading okay_list_close"></div>
            </div>
            <div class="okay_list_body fn_feature_aliases_list sortable">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_aliases']->value, 'fa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fa']->value) {
?>
                    <div class="fn_row okay okay_list_body_item fn_sort_item">
                        <div class="okay_list_row">
                            <input type="hidden" class="fn_feature_alias_id" name="features_aliases[id][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
                            <div class="okay_list_boding okay_list_drag move_zone">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                            </div>
                            <div class="okay_list_boding feature_alias_name">
                                <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_name;?>
</div>
                                <input type="text" class="form-control fn_feature_alias_name" name="features_aliases[name][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <div class="okay_list_boding feature_alias_variable">
                                <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_variable;?>
</div>
                                <input type="text" class="form-control fn_feature_alias_variable" name="" value="{$f_alias_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->variable, ENT_QUOTES, 'UTF-8', true);?>
}" readonly="">
                            </div>
                            <div class="okay_list_boding feature_alias_value">
                                <div class="heading_label visible_md"><?php echo $_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_value;?>
</div>
                                <input type="text" class="form-control" name="feature_aliases_value[value][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->value->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <input type="hidden" name="feature_aliases_value[id][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <div class="okay_list_boding okay_list_close">
                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_alias, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                    <span class="visible_md"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_delete_alias, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="mt-1">
            <button type="button" class="btn btn_small btn-info fn_add_feature_alias">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_add_feature_alias, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>

            <button type="submit" class="btn btn_small btn_blue float-md-right fn_save_aliases">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
        </div>
    </div>
</div>
<?php }
}
