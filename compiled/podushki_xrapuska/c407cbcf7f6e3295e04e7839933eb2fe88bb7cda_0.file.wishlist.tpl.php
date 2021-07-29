<?php
/* Smarty version 3.1.33, created on 2021-03-29 16:19:53
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6061d3f90495e7_55402574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c407cbcf7f6e3295e04e7839933eb2fe88bb7cda' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/wishlist.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_6061d3f90495e7_55402574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->wishlist_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading">
            <span data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
        </h1>
    </div>
    <div class="block__body block--boxed block--border">
        <?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
            <div class="block">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
        <?php }?>

        <?php if (count($_smarty_tpl->tpl_vars['wishlist']->value->products)) {?>
            <div class="fn_wishlist_page products_list row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist']->value->products, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    <div class="product_item no_hover col-xs-6 col-sm-4 col-md-3 col-xl-25">
                        <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="block">
                <span data-language="wishlist_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_empty;?>
</span>
            </div>
        <?php }?>
    </div>
</div><?php }
}
