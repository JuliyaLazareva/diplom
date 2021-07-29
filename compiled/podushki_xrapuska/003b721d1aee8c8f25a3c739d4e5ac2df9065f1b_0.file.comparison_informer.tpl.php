<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:44:00
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/comparison_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b430d2bc78_69716175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003b721d1aee8c8f25a3c739d4e5ac2df9065f1b' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/comparison_informer.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042b430d2bc78_69716175 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['comparison']->value->products) > 0) {?>
    <a class="header_informers__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"comparison"),$_smarty_tpl ) );?>
">
                <i class="mdi mdi-scale-balance"></i>
                <span class="compare_counter"><?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <div class="header_informers__link">
                <i class="mdi mdi-scale-balance"></i>
            </div>
<?php }
}
}
