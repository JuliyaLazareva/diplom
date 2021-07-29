<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:11:08
  from '/home/ganzaby/diplom.dod.by/backend/design/html/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fc32cb7edb7_82848281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f545dad4b3bc173406250e5e2ae3dacf7d9842' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/pagination.tpl',
      1 => 1614790712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603fc32cb7edb7_82848281 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pages_count']->value > 1) {?>
<!-- Листалка страниц -->
<ul class="pagination fn_pagination">
    
        <?php $_smarty_tpl->_assignInScope('visible_pages', 5);?>

        <?php $_smarty_tpl->_assignInScope('page_from', 1);?>
    
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value > floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
        <?php $_smarty_tpl->_assignInScope('page_from', max(1,$_smarty_tpl->tpl_vars['current_page']->value-floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)-1));?>
    <?php }?>    
    
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value > $_smarty_tpl->tpl_vars['pages_count']->value-ceil($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
        <?php $_smarty_tpl->_assignInScope('page_from', max(1,$_smarty_tpl->tpl_vars['pages_count']->value-$_smarty_tpl->tpl_vars['visible_pages']->value-1));?>
    <?php }?>
    
        <?php $_smarty_tpl->_assignInScope('page_to', min($_smarty_tpl->tpl_vars['page_from']->value+$_smarty_tpl->tpl_vars['visible_pages']->value,$_smarty_tpl->tpl_vars['pages_count']->value-1));?>

    <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <li class="page-item">
        <a id="PrevLink" href="<?php if ($_smarty_tpl->tpl_vars['current_page']->value == 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>null),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page']->value-1),$_smarty_tpl ) );
}?>">&lt;</a>
    </li>
    <?php }?>

        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 1) {?>active<?php }?>">
        <a class="page-link <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 1) {?>selected<?php } else { ?>droppable<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>null),$_smarty_tpl ) );?>
">1</a>
    </li>
        
    <?php
$__section_pages_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page_to']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_3_start = (int)@$_smarty_tpl->tpl_vars['page_from']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['page_from']->value + $__section_pages_3_loop) : min((int)@$_smarty_tpl->tpl_vars['page_from']->value, $__section_pages_3_loop);
$__section_pages_3_total = min(($__section_pages_3_loop - $__section_pages_3_start), $__section_pages_3_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new Smarty_Variable(array());
if ($__section_pages_3_total !== 0) {
for ($__section_pages_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_3_start; $__section_pages_3_iteration <= $__section_pages_3_total; $__section_pages_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
            
        <?php $_smarty_tpl->_assignInScope('p', (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null)+1);?>    
            <li class="page-item <?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>active<?php }?>">
        <?php if (($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page_from']->value+1 && $_smarty_tpl->tpl_vars['p']->value != 2) || ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page_to']->value && $_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['pages_count']->value-1)) {?>    
        <a class="page-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
">...</a>
        <?php } else { ?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['current_page']->value) {?>droppable<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
        <?php }?>
    </li>
    <?php
}
}
?>

        <li class="page-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value == $_smarty_tpl->tpl_vars['pages_count']->value) {?>active<?php }?>">
        <a class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value != $_smarty_tpl->tpl_vars['pages_count']->value) {?>droppable<?php }?>"  href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['pages_count']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['pages_count']->value;?>
</a>
    </li>

    <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['pages_count']->value) {?>
    <li class="page-item">
        <a id="NextLink" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page']->value+1),$_smarty_tpl ) );?>
">&gt;</a>
    </li>
    <?php }?>
    <li class="page-item">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>'all'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pagination_show_all, ENT_QUOTES, 'UTF-8', true);?>
</a>
    </li>
    
</ul>
<!-- Листалка страниц (The End) -->
<?php }
}
}
