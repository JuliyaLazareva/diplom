<?php
/* Smarty version 3.1.33, created on 2021-02-15 23:43:17
  from '/home/ganzaby/joo.by/backend/design/html/seo_filter_patterns_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602adce52bb6c2_83419791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8534112e92d015e2f712fe769cca6574e001d1' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/seo_filter_patterns_ajax.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
  ),
),false)) {
function content_602adce52bb6c2_83419791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 mt-1">
        <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
</div>
<div class="boxed">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="mb_mobile_seofilter">
            <select class="selectpicker fn_pattern_type form-control" data-size="2" data-live-search="false">
                <option value="brand">+ <?php echo $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_brand;?>
</option>
                <option value="feature">+ <?php echo $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_feature;?>
</option>
            </select>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-lg-4 col-sm-12 ">
            <div class="mb_mobile_seofilter">
            <select class="selectpicker fn_features hidden form-control" disabled=""></select>
            </div>
        </div>
        <div class="col-md-5 col-lg-5 col-sm-12 float-sm-right ">
            <button type="button" class="btn btn_small btn_blue float-md-right fn_add_seo_template " >
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_add_template, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="boxed boxed_attention">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_caution, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="text_box">
                <div class="mb-1">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_ajax_message1, ENT_QUOTES, 'UTF-8', true);?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_ajax_message2, ENT_QUOTES, 'UTF-8', true);?>
 <b style="display: inline;">{$brand}</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_ajax_message3, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="mb-h"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_ajax_message4, ENT_QUOTES, 'UTF-8', true);?>
</b> </div>
                <div>
                    <ul class="mb-0 pl-1">
                        
                            <li>{$category} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_cat_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$category_h1} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_cat_h1, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$brand} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_brand_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$sitename} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_site_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$feature_name} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_feature_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$feature_val} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_feature_val, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        

                        <?php if ($_smarty_tpl->tpl_vars['features_aliases']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_aliases']->value, 'fa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fa']->value) {
?>
                                <li>{$f_alias_<?php echo $_smarty_tpl->tpl_vars['fa']->value->variable;?>
} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_feature_name, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->name, ENT_QUOTES, 'UTF-8', true);?>
)</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['features_aliases']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features_aliases']->value, 'fa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fa']->value) {
?>
                                <li>{$o_alias_<?php echo $_smarty_tpl->tpl_vars['fa']->value->variable;?>
} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_feature_val, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fa']->value->name, ENT_QUOTES, 'UTF-8', true);?>
)</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fn_templates">
    <?php if ($_smarty_tpl->tpl_vars['patterns']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patterns']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
            <div class="fn_<?php echo $_smarty_tpl->tpl_vars['p']->value->type;
if ($_smarty_tpl->tpl_vars['p']->value->feature_id) {?>_<?php echo $_smarty_tpl->tpl_vars['p']->value->feature_id;
}?> fn_template_block">
                <div class="boxed">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_box fn_heading_box">
                            <?php echo $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_category;?>
 +
                            <?php if ($_smarty_tpl->tpl_vars['p']->value->type == 'brand') {?>
                                <?php echo $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_brand;?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value->type == 'feature') {?>
                                <?php echo $_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_feature;?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['p']->value->feature) {?>
                                (<?php echo $_smarty_tpl->tpl_vars['p']->value->feature->name;?>
)
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading_label">H1</div>
                                <div class="mb-1">
                                    <input name="seo_filter_patterns[h1][]" class="form-control mb-h fn_ajax_area" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->h1, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="heading_label">Auto Meta-description</div>
                                <div class="mb-1">
                                    <input name="seo_filter_patterns[meta_description][]" class="form-control fn_ajax_area" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading_label">Auto Meta-title</div>
                                <div class="mb-1">
                                    <input name="seo_filter_patterns[title][]" class="form-control mb-h fn_ajax_area" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="heading_label">Auto Meta-keywords</div>
                                <div class="mb-1">
                                    <input name="seo_filter_patterns[keywords][]" class="form-control fn_ajax_area" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_ajax_description, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="mb-1">
                            <textarea name="seo_filter_patterns[description][]" class="okay_textarea fn_ajax_area"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="button" class="fn_delete_template btn btn_mini btn-danger float-md-right" >
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_filter_patterns_delete_template, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
                <input name="seo_filter_patterns[type][]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->type;?>
" type="hidden" />
                <input name="seo_filter_patterns[feature_id][]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->feature_id;?>
" type="hidden" />
                <input name="seo_filter_patterns[id][]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" type="hidden" />
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

</div>

<div class="row">
    <div class="col-lg-12 col-md-12 mt-1">
        <button type="submit" class="btn btn_small btn_blue float-md-right fn_update_category" data-category_id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </button>
    </div>
</div>
<?php }
}
