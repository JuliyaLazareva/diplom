<?php
/* Smarty version 3.1.33, created on 2021-03-06 02:33:23
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/products_rel_prev_next.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042bfc3bef540_34401816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a11bbfaaa10a19b8abd5816ff8c621e1aab5c381' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/products_rel_prev_next.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042bfc3bef540_34401816 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_pages_num']->value > 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );?>
"/>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value == 1) {?>
        <link rel="next" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>2),$_smarty_tpl ) );?>
"/>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );?>
"/>
        <?php }?>
        <link rel="next" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl ) );?>
"/>
    <?php }
}
}
}
