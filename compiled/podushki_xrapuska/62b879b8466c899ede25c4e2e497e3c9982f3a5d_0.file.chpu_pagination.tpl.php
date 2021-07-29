<?php
/* Smarty version 3.1.33, created on 2021-03-06 02:33:23
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/chpu_pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042bfc3e51364_95944730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62b879b8466c899ede25c4e2e497e3c9982f3a5d' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/chpu_pagination.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042bfc3e51364_95944730 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_pages_num']->value > 1) {?>
    <ul class="fn_ajax_buttons pagination<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?> fn_is_ajax<?php }?>">
                <?php $_smarty_tpl->_assignInScope('visible_pages', 5);?>

                <?php $_smarty_tpl->_assignInScope('page_from', 1);?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value > floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
            <?php $_smarty_tpl->_assignInScope('page_from', max(1,$_smarty_tpl->tpl_vars['current_page_num']->value-floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)-1));?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value > $_smarty_tpl->tpl_vars['total_pages_num']->value-ceil($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
            <?php $_smarty_tpl->_assignInScope('page_from', max(1,$_smarty_tpl->tpl_vars['total_pages_num']->value-$_smarty_tpl->tpl_vars['visible_pages']->value-1));?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('page_to', min($_smarty_tpl->tpl_vars['page_from']->value+$_smarty_tpl->tpl_vars['visible_pages']->value,$_smarty_tpl->tpl_vars['total_pages_num']->value-1));?>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value > 1) {?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );
}?>">
                    <span>&laquo; <?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_prev;?>
</span>
                </a>
            </li>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 1) {?>
            <li class="pagination__item active">
                <span class="pagination__link">1</span>
            </li>
        <?php } else { ?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );?>
">1</a>
            </li>
        <?php }?>

                <?php
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page_to']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_0_start = (int)@$_smarty_tpl->tpl_vars['page_from']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['page_from']->value + $__section_pages_0_loop) : min((int)@$_smarty_tpl->tpl_vars['page_from']->value, $__section_pages_0_loop);
$__section_pages_0_total = min(($__section_pages_0_loop - $__section_pages_0_start), $__section_pages_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new Smarty_Variable(array());
if ($__section_pages_0_total !== 0) {
for ($__section_pages_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_0_start; $__section_pages_0_iteration <= $__section_pages_0_total; $__section_pages_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('p', (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null)+1);?>
            <?php if (($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page_from']->value+1 && $_smarty_tpl->tpl_vars['p']->value != 2) || ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page_to']->value && $_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['total_pages_num']->value-1)) {?>
                <li class="pagination__item">
                    <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
">...</a>
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['current_page_num']->value) {?>
                <li class="pagination__item<?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['current_page_num']->value) {?> active<?php }?>">
                    <span class="pagination__link"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</span>
                </li>
            <?php } else { ?>
                <li class="pagination__item">
                    <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
                </li>
            <?php }?>
        <?php
}
}
?>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
            <li class="pagination__item active">
                <span class="pagination__link"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</span>
            </li>
        <?php } else { ?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['total_pages_num']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</a>
            </li>
        <?php }?>

                <li class="pagination__item">
            <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>'all'),$_smarty_tpl ) );?>
" data-language="pagination_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_all;?>
</a>
        </li>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value < $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl ) );?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_next;?>
 &raquo;</span>
                </a>
            </li>
        <?php }?>
    </ul>
<?php }
}
}
