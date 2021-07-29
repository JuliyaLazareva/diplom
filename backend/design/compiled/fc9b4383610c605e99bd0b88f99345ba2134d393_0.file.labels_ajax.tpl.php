<?php
/* Smarty version 3.1.33, created on 2021-03-03 22:29:08
  from '/home/ganzaby/diplom.dod.by/backend/design/html/labels_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fe3840ff441_77951884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc9b4383610c605e99bd0b88f99345ba2134d393' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/labels_ajax.tpl',
      1 => 1614790712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603fe3840ff441_77951884 (Smarty_Internal_Template $_smarty_tpl) {
if ($_GET['controller'] == "OrderAdmin") {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labels']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
        <?php if (in_array($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['order_labels']->value)) {?>
            <span class="tag font-xs" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['l']->value->color;?>
;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
            <input type="hidden" name="order_labels[]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
">
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->labels) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->labels, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
            <span class="tag" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['l']->value->color;?>
;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
}
