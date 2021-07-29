<?php
/* Smarty version 3.1.33, created on 2021-03-06 02:33:23
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/browsed_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042bfc3dbf7b1_53947690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fe4c217c2f7d5361eb96beac2fb35170a3be88e' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/browsed_products.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_6042bfc3dbf7b1_53947690 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
    <div class="sidebar__boxed browsed">
        <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
            <span data-language="features_browsed"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_browsed;?>
</span>
            <span class="filter__name_arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, false);
?></span>
        </div>

        <div class="browsed__content row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['browsed_products']->value, 'browsed_product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->value) {
?>
                <div class="browsed__item col-xs-4 col-md-4 col-lg-4">
                    <a class="browsed__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['browsed_product']->value->url),$_smarty_tpl ) );?>
">
                        <?php if ($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename) {?>
                            <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,80,80 ));?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,80,80 ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php } else { ?>
                            <div class="browsed__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                            </div>
                        <?php }?>
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
