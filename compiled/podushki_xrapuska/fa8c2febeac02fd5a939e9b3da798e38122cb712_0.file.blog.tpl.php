<?php
/* Smarty version 3.1.33, created on 2021-03-14 20:52:30
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604e4d5ed550a3_97194066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8c2febeac02fd5a939e9b3da798e38122cb712' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/blog.tpl',
      1 => 1614790855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post_list.tpl' => 1,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_604e4d5ed550a3_97194066 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>$_smarty_tpl->tpl_vars['route_name']->value,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>
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

        <div class="block__body block--boxed block--border">
        <div class="article_list row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                <div class="article_item col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <?php $_smarty_tpl->_subTemplateRender('file:post_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                 </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
