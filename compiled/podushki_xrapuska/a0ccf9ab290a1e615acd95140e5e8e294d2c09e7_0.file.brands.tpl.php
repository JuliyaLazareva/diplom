<?php
/* Smarty version 3.1.33, created on 2021-03-15 21:47:36
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604fabc87bbe33_52946377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0ccf9ab290a1e615acd95140e5e8e294d2c09e7' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/brands.tpl',
      1 => 1614790855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fabc87bbe33_52946377 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brands','absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>
<div class="block">
		<div class="block__header block__header--boxed block__header--border">
		<h1 class="block__heading"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></span></h1>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['brands']->value || $_smarty_tpl->tpl_vars['page']->value->description) {?>
		<div class="block__body block--boxed block--border">
						<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
				<div class="brand row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
						<div class="brand__item col-xs-6 col-sm-4 col-lg-2">
							<div class="brand__preview">
								<a class="brand__link" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brand','url'=>$_smarty_tpl->tpl_vars['b']->value->url),$_smarty_tpl ) );?>
">
									<?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
										<div class="brand__image">
											<img class="brand_img lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,120,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,120,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
										</div>
									<?php } else { ?>
										<div class="brand__name">
											<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
										</div>
									<?php }?>
								</a>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
			<div class="">
				<div class="fn_reedmore">
					<div class="page-description__text boxed__description"><?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>
</div>
				</div>
			</div>
			<?php }?>
		</div>
	<?php }?>
</div><?php }
}
