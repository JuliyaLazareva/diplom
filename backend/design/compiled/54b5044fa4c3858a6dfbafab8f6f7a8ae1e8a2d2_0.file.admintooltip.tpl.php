<?php
/* Smarty version 3.1.33, created on 2021-01-24 19:51:44
  from '/home/ganzaby/joo.by/backend/design/html/admintooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da5a0095260_97029594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b5044fa4c3858a6dfbafab8f6f7a8ae1e8a2d2' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/admintooltip.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600da5a0095260_97029594 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="backend/design/js/admintooltip/styles/admin.css" type="text/css" rel="stylesheet">

<div class="admTools">
    <a href="javascript:void(0);" class="openTools"></a>
    <p><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_title_1;?>
</p>
    <p class="tool-descr"><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_descr;?>
</p>
    <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_go_to_admin;?>
" href="backend/" class="admin_bookmark"></a>
    <p class="tool-title"><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_fast_edit;?>
</p>
    <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_enable;?>
" href="javascript:void(0);" class="changeTools"><span></span></a>
</div>

<div class="fn_tooltip tooltip"></div>

<a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_go_to_admin;?>
" href="backend/" class="top_admin_bookmark"></a>

<?php echo '<script'; ?>
 src="backend/design/js/admintooltip/admintooltip.js"<?php if ($_smarty_tpl->tpl_vars['scripts_defer']->value == true) {?> defer<?php }?>><?php echo '</script'; ?>
>
<?php }
}
