<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:52:40
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b63816ec82_20443073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d6b0699f701f504675f2e40638bf89830ec1011' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/page.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_404.tpl' => 1,
  ),
),false)) {
function content_6042b63816ec82_20443073 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"page",'url'=>$_smarty_tpl->tpl_vars['page']->value->url,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url == '404') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
	<div class="block">
				<div class="block__header block__header--boxed block__header--border">
			<h1 class="block__heading">
				<span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></span>
			</h1>
		</div>

				<div class="block block--boxed block--border">
			<?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

		</div>
    </div>
<?php }
}
}
