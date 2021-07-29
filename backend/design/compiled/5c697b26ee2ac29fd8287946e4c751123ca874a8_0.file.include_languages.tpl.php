<?php
/* Smarty version 3.1.33, created on 2021-01-24 19:54:05
  from '/home/ganzaby/joo.by/backend/design/html/include_languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da62df1f4e9_59702719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c697b26ee2ac29fd8287946e4c751123ca874a8' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/include_languages.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600da62df1f4e9_59702719 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['languages']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
        <a class="flag flag_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
 <?php if ($_smarty_tpl->tpl_vars['lang']->value->id == $_smarty_tpl->tpl_vars['lang_id']->value) {?> focus<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('lang_id'=>$_smarty_tpl->tpl_vars['lang']->value->id),$_smarty_tpl ) );?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->label;?>
">
            <?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['lang']->value->label).".png")) {?>
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['lang']->value->label).".png"),32,32,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" width="32px;" height="32px;">
            <?php }?>
        </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
