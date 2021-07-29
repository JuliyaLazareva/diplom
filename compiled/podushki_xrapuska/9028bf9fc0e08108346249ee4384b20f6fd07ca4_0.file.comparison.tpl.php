<?php
/* Smarty version 3.1.33, created on 2021-04-25 23:37:26
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/comparison.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6085d306e15d29_35968790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9028bf9fc0e08108346249ee4384b20f6fd07ca4' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/comparison.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_6085d306e15d29_35968790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->comparison_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading">
            <span data-language="comparison_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_header;?>
</span>
        </h1>
    </div>
    <div class="block__body block--boxed block--border">
        <?php if ($_smarty_tpl->tpl_vars['comparison']->value->products) {?>
            <div class="comparison_block clearfix">
                <div class="comparison_block__left">
                    <div class="fn_resize compare_controls">
                                                <?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products) > 1) {?>
                            <div class="fn_show compare_show">
                                <a href="#show_all" class="active"><span data-language="comparison_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_all;?>
</span></a>
                                <a href="#show_dif" class="unique"><span data-language="comparison_unique"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_unique;?>
</span></a>
                            </div>
                        <?php }?>
                    </div>
                                        <div class="cprs_rating" data-use="cprs_rating">
                        <span data-language="product_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_rating;?>
</span>
                    </div>
                                        <?php if ($_smarty_tpl->tpl_vars['comparison']->value->features) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison']->value->features, 'cf', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['cf']->value) {
?>
                            <div class="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 cell<?php if ($_smarty_tpl->tpl_vars['cf']->value->not_unique) {?> not_unique<?php }?>" data-use="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <span data-feature="<?php echo $_smarty_tpl->tpl_vars['cf']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cf']->value->name;?>
</span>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </div>

                <div class="fn_comparison_products comparison_block__products owl-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison']->value->products, 'product', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <div class="comparison_block__item">
                            <div class="fn_resize product_item no_hover">
                                <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>

                                                        <div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="cprs_rating">
                                <span class="rating_starOff">
                                    <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                                </span>
                            </div>

                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->features, 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <div class="cprs_feature_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 cell<?php if ($_smarty_tpl->tpl_vars['comparison']->value->features[$_smarty_tpl->tpl_vars['id']->value]->not_unique) {?> not_unique<?php }?>">
                                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "&mdash;" : $tmp);?>

                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php } else { ?>
            <div class="boxed boxed--big boxed--notify ">
                <span data-language="comparison_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->comparison_empty;?>
</span>
            </div>
        <?php }?>
    </div>
</div><?php }
}
