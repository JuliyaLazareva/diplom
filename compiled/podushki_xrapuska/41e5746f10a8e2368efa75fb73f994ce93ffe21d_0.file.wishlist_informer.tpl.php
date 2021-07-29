<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:44:00
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/wishlist_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b430d1f4d1_44648291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e5746f10a8e2368efa75fb73f994ce93ffe21d' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/wishlist_informer.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042b430d1f4d1_44648291 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['wishlist']->value->products) > 0) {?>
    <a class="header_informers__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"wishlist"),$_smarty_tpl ) );?>
">
                <i class="mdi mdi-heart-outline"></i>
                <span class="wishlist_counter"><?php echo count($_smarty_tpl->tpl_vars['wishlist']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <span class="header_informers__link">
                <i class="mdi mdi-heart-outline"></i>
            </span>
<?php }
}
}
