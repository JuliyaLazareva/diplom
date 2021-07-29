<?php
/* Smarty version 3.1.33, created on 2021-01-30 21:07:16
  from '/home/ganzaby/joo.by/backend/design/html/seo_patterns_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6015a0545bbd28_70059932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '720f2ed6ccc2e76a6541d393ae8247602b5469eb' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/seo_patterns_ajax.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_6015a0545bbd28_70059932 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="boxed boxed_attention">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_caution, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="text_box">
                <div class="mb-1">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_message1, ENT_QUOTES, 'UTF-8', true);?>

                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_message2, ENT_QUOTES, 'UTF-8', true);?>
 <b style="display: inline;">{$brand}</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_message3, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="mb-h"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_message4, ENT_QUOTES, 'UTF-8', true);?>
</b> </div>
                <div>
                    <ul class="mb-0 pl-1">
                        
                            <li>{$category} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_cat_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$category_h1} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_cat_h1, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$brand} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_brand_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$product} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_product_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$price} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_product_price, ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <li>{$sitename} - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_site_name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value->auto_name_id && $_smarty_tpl->tpl_vars['feature']->value->auto_value_id) {?>
                                <li>
                                    <span>"<?php echo $_smarty_tpl->tpl_vars['feature']->value->name;?>
": </span>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 - {$<?php echo $_smarty_tpl->tpl_vars['feature']->value->auto_name_id;?>
};</span>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_value, ENT_QUOTES, 'UTF-8', true);?>
 - {$<?php echo $_smarty_tpl->tpl_vars['feature']->value->auto_value_id;?>
}</span>
                                </li>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_label">Auto Meta-title</div>
                <div class="mb-1">
                    <input name="auto_meta_title" class="form-control mb-h fn_ajax_area" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->auto_meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading_label">Auto Meta-keywords</div>
                <div class="mb-1">
                    <input name="auto_meta_keywords" class="form-control fn_ajax_area" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->auto_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_label">Auto Meta-description</div>
                <div class="mb-1">
                     <textarea name="auto_meta_desc" class="form-control okay_textarea fn_ajax_area"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->auto_meta_desc, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->seo_patterns_ajax_products_description, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <div class="mb-1">
            <textarea name="auto_description" class="okay_textarea fn_ajax_area"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->auto_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 mt-1">
        <button type="submit" class="btn btn_small btn_blue float-md-right fn_update_category" data-template_type="<?php if ($_smarty_tpl->tpl_vars['category']->value->id) {?>category<?php } else { ?>default<?php }?>" data-category_id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, false);
?>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </button>
    </div>
</div>
<?php }
}
