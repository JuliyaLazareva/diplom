<?php
/* Smarty version 3.1.33, created on 2021-03-06 02:33:23
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/products_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042bfc3df1748_74197973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e86f6bf25e2f68d0ae386d267c8ee992d98be2c' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/products_content.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_6042bfc3df1748_74197973 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="product_item col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
            <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="col-xs-12">
        <div class="boxed boxed--big boxed--notify ">
            <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
        </div>
    </div>
<?php }
}
}
