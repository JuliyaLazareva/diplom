<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:44:00
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/user_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b430c829e7_27325918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a9c3f09f96f3484e82a4d57c8762ae5bbf45246' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/user_informer.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042b430c829e7_27325918 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value) {?>
	<a class="account__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user"),$_smarty_tpl ) );?>
">
        <i class="mdi mdi-account-check"></i>
		<span class="account__text" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
 </span>
		<span class="account__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
	</a>
<?php } else { ?>
	<a class="account__link" href="javascript:;" onclick="document.location.href = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"login"),$_smarty_tpl ) );?>
'" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
">
        <i class="mdi mdi-account"></i>
		<span class="account__text" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
 </span>
		<span class="account__login" data-language="index_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span>
	</a>
<?php }
}
}
