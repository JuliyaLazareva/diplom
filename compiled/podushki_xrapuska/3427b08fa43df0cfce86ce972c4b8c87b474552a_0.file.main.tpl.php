<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:53:13
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b659f2b5d7_53063269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3427b08fa43df0cfce86ce972c4b8c87b474552a' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/main.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 4,
    'file:product_list.tpl' => 3,
    'file:post_list.tpl' => 1,
  ),
),false)) {
function content_6042b659f2b5d7_53063269 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"main",'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0], array( array('var'=>'featured_products','limit'=>6),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
    <div class="main-products main-products__featured container">
        <div class="block block--boxed block--border">
            <div class="block__header block__header--promo">
                <div class="block__title">
                    <span data-language="main_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_recommended_products;?>
</span>
                </div>
                <div class="block__header_button">
                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"bestsellers"),$_smarty_tpl ) );?>
">
                        <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
 </span>
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, false);
?>
                    </a>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_products_slide products_list row no_gutters owl-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <div class="item product_item no_hover">
                            <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="scrollbar"><div class="handle"><div class="mousearea"></div></div></div>
        </div>
    </div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0], array( array('var'=>'new_products','limit'=>5),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
    <div class="main-products main-products__new container">
        <div class="block block--boxed block--border">
            <div class="block__header">
                <div class="block__title">
                    <span data-language="main_new_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_new_products;?>
</span>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_products_slide products_list row no_gutters owl-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <div class="product_item no_hover">
                            <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
         </div>
    </div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0], array( array('var'=>'discounted_products','limit'=>6),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
    <div class="main-products main-products__new container">
        <div class="block block--boxed block--border">
            <div class="block__header block__header--promo">
                <div class="block__title">
                    <span data-language="main_discount_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_discount_products;?>
</span>
                </div>
                <div class="block__header_button">
                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"discounted"),$_smarty_tpl ) );?>
">
                        <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
 </span>
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                    </a>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_products_slide products_list row no_gutters owl-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounted_products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <div class="product_item no_hover">
                            <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="scrollbar"><div class="handle"><div class="mousearea"></div></div></div>
        </div>
    </div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0], array( array('var'=>'all_brands','visible_brand'=>1,'limit'=>9),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->description || $_smarty_tpl->tpl_vars['all_brands']->value) {?>
    <div class="container section_about_&_brands">
        <div class="block block--boxed block--border">
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
                    <div class="col-lg-7 col-xl-8">
                        <div class="block__abouts_us">
                            <div class="block__header">
                                <h1 class="about_us__heading">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </h1>
                            </div>
                            <div class="block__body">
                                <div class="fn_reedmore">
                                    <div class="page-description__text boxed__description"><?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['all_brands']->value) {?>
                    <div class="col-lg-5 col-xl-4">
                        <div class="block__header block__header--promo">
                            <div class="block__title">
                                <span data-language="main_recommended_products">Бренды</span>
                            </div>
                            <div class="block__header_button">
                                <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brands"),$_smarty_tpl ) );?>
">
                                    <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
 </span>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                                </a>
                            </div>
                        </div>
                        <div class="block__body">
                            <div class="main_brands f_row no_gutters">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_brands']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                <div class="main_brands__item f_col-4 f_col-md-2 f_col-lg-4 f_col-xl-4">
                                    <a class="main_brands__link " href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['b']->value->url),$_smarty_tpl ) );?>
" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
                                            <div class="main_brands__image">
                                                <img class="main_brands_img lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,100,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                            </div>
                                        <?php } else { ?>
                                            <div class="main_brands__name">
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
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
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

 
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0], array( array('var'=>'last_posts','limit'=>4,'type_post'=>"news"),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
    <div class="main-articles container">
        <div class="block block--boxed block--border">
            <div class="block__header block__header--promo">
                <div class="block__title">
                    <span data-language="main_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>
</span>
                </div>
                <div class="block__header_button">
                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"news"),$_smarty_tpl ) );?>
">
                        <span data-language="main_all_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_all_news;?>
 </span>
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                    </a>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_articles_slide article_list row no_gutters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                        <div class="article_item no_hover col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <?php $_smarty_tpl->_subTemplateRender('file:post_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>   
        </div>
    </div>
<?php }?>

<?php }
}
