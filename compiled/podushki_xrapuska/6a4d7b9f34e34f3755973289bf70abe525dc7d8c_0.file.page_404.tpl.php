<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:52:40
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/page_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b63817dec7_32832884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a4d7b9f34e34f3755973289bf70abe525dc7d8c' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/page_404.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_6042b63817dec7_32832884 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block">
    <div class="container">
        <div class="not_found">
            <div class="not_found__image">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"404_icon"), 0, false);
?>
            </div>
            <div class="not_found__description">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="not_found__menu">
                <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

            </div>
        </div>
    </div>
</div><?php }
}
