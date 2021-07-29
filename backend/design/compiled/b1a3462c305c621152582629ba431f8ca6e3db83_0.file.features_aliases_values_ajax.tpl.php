<?php
/* Smarty version 3.1.33, created on 2021-01-30 21:13:12
  from '/home/ganzaby/joo.by/backend/design/html/features_aliases_values_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6015a1b88c9204_85190530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1a3462c305c621152582629ba431f8ca6e3db83' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/features_aliases_values_ajax.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_6015a1b88c9204_85190530 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['features_values']->value) {?>
    <div class="row">
                <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_options_aliases, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row options_aliases">
                    <div class="col-lg-12 col-md-12">
                        <div class="okay_list">
                            <div class="okay_list_head">
                                <div class="okay_list_heading feature_option_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="okay_list_heading feature_option_aliases"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_option_aliases_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            </div>
                            <div class="okay_list_body">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_values']->value, 'fv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
?>
                                    <div class="fn_row okay okay_list_body_item">
                                        <div class="okay_list_row">
                                            <div class="okay_list_boding feature_option_name">
                                                <div class="heading_box visible_xs"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_feature_alias_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>

                                            </div>
                                            <div class="okay_list_boding feature_option_aliases">
                                                <div class="heading_box visible_xs"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_option_aliases_value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_aliases']->value, 'fa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fa']->value) {
?>
                                                    <div class="feature_opt_aliases_list">
                                                        <div class="heading_label option_alias_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        <div class="option_alias_value">
                                                            <input type="text" class="form-control" name="options_aliases[<?php echo $_smarty_tpl->tpl_vars['fv']->value->translit;?>
][<?php echo $_smarty_tpl->tpl_vars['fa']->value->id;?>
]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['fa']->value->id;
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->aliases[$_prefixVariable1]->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                        </div>
                                                    </div>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            </div>
        </div>
    </div>
<?php }?>
<div class="row">
    <div class="col-lg-12 col-md-12 mb-2">
        <button type="submit" class="btn btn_small btn_blue float-md-right fn_save_aliases">
            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, false);
?>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </button>
    </div>
</div>
<?php }
}
