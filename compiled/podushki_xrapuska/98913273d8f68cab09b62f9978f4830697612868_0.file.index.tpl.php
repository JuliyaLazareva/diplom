<?php
/* Smarty version 3.1.33, created on 2021-03-06 01:44:00
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6042b430bc8ee9_19999065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98913273d8f68cab09b62f9978f4830697612868' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/index.tpl',
      1 => 1614790856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:user_informer.tpl' => 1,
    'file:switcher.tpl' => 1,
    'file:svg.tpl' => 13,
    'file:wishlist_informer.tpl' => 1,
    'file:comparison_informer.tpl' => 1,
    'file:cart_informer.tpl' => 1,
    'file:desktop_categories.tpl' => 1,
    'file:breadcrumb.tpl' => 1,
    'file:advantages.tpl' => 1,
    'file:mobile_menu.tpl' => 1,
    'file:callback.tpl' => 1,
  ),
),false)) {
function content_6042b430bc8ee9_19999065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ganzaby/diplom.dod.by/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->href_lang) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->href_lang, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
  
  <meta name="yandex-verification" content="2ef1fa3b88e114bd" />
  
        <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body class="d-flex flex-column <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController') {?>main_page<?php } else { ?>other_page<?php }?>">

    <?php if (!empty($_smarty_tpl->tpl_vars['counters']->value['body_top'])) {?>
        <?php echo '<script'; ?>
>ut_tracker.start('parsing:body_top:counters');<?php echo '</script'; ?>
>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counters']->value['body_top'], 'counter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo '<script'; ?>
>ut_tracker.end('parsing:body_top:counters');<?php echo '</script'; ?>
>
    <?php }?>

    <header class="header">
        <div class="header__top hidden-md-down">
            <div class="container">
                <div class="f_row flex-nowrap justify-content-between">
                                        <div id="account" class="d-flex align-items-center f_col">
                        <?php $_smarty_tpl->_subTemplateRender("file:user_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="d-flex align-items-center f_col justify-content-end">
                                                <a class="fn_callback callback" href="#fn_callback" data-language="index_back_call">
                            <i class="mdi mdi-phone-return"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span>
                        </a>
                                                <div class="switcher d-flex align-items-center">
                            <?php $_smarty_tpl->_subTemplateRender("file:switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__center hidden-md-down" >
            <div class="container">
                <div class="f_row no_gutters flex-nowrap align-items-center justify-content-between">
                                        <div class="fn_menu_switch menu_switcher"></div>
                                        <div class="logo header__logo ">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {?>
                        <a class="logo__link " href="<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController') {?>javascript:;<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"main"),$_smarty_tpl ) );
}?>">
                            <img class=""  src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
?v=<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo_version;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </a>
                        <?php }?>
                    </div>
                                        <div class="header__menu d-flex flex-wrap">
                        <?php echo $_smarty_tpl->tpl_vars['menu_header']->value;?>

                    </div>
                                        <div class="header-contact">
                        <div class="header-contact__inner">
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_phones) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_phones, 'phone');
$_smarty_tpl->tpl_vars['phone']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->index++;
$_smarty_tpl->tpl_vars['phone']->first = !$_smarty_tpl->tpl_vars['phone']->index;
$__foreach_phone_2_saved = $_smarty_tpl->tpl_vars['phone'];
?>
                                    <div class="header-contact__item<?php if ($_smarty_tpl->tpl_vars['phone']->first) {?> header-contact__item--visible<?php }?>">
                                        <div class="header-contact__phone">
                                            <a class="header-contact__section mdi mdi-phone-in-talk" href="tel:<?php echo preg_replace('~[^0-9]~','',$_smarty_tpl->tpl_vars['phone']->value);?>
">
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </a>
                                        </div>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['phone'] = $__foreach_phone_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_email) {?>
                                <div class="header-contact__item">
                                    <div class="header-contact__email">
                                        <a class="header-contact__section mdi mdi-email-outline" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
" >
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_working_hours) {?>
                                <div class="header-contact__item">
                                    <div class="header-contact__time">
                                        <div class="header-contact__section mdi mdi-calendar-clock">
                                            <div class="header-contact__title-s"><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_working_hours;?>
</div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="<?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController') {?>fn_header__sticky <?php }?>" data-margin-top="0" data-sticky-for="1024" data-sticky-class="is-sticky">
                <div class="container">
                    <div class="header__bottom_panel f_row no_gutters flex-nowrap align-content-stretch justify-content-between">
                                                <div class="fn_menu_switch menu_switcher hidden-lg-up">
                            <div class="menu_switcher__heading d-flex align-items-center">
                                <i class="mdi mdi-menu catalog_icon"></i>
                                <span class="" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_mobile_menu;?>
</span>
                            </div>
                        </div>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0], array( array('var'=>'banner_group1','group'=>'group1'),$_smarty_tpl ) );?>

                        <div class="<?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController' || empty($_smarty_tpl->tpl_vars['banner_group1']->value->items)) {?>fn_catalog_switch button--blick<?php }?> catalog_button d-lg-flex hidden-md-down ">
                            <div class="catalog_button__heading d-flex align-items-center ">
                                <i class="mdi mdi-menu catalog_icon"></i>
                                <span class="" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController' || empty($_smarty_tpl->tpl_vars['banner_group1']->value->items)) {?>
                                    <span class="catalog_button__arrow"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, false);
?></span>
                                <?php }?>
                            </div>
                         </div>
                                                <form id="fn_search" class="fn_search_mob search d-md-flex" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'search'),$_smarty_tpl ) );?>
">
                            <input class="fn_search search__input" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="index_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
                            <button class="search__button mdi mdi-magnify d-flex align-items-center justify-content-center" type="submit"></button>
                        </form>
                        <div class="header_informers">
                                                        <div class="fn_search_toggle header_informers__item mdi mdi-magnify hidden-md-up"></div>
                                                        <div id="wishlist" class="header_informers__item">
                                <?php $_smarty_tpl->_subTemplateRender("file:wishlist_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                                                        <div id="comparison" class="header_informers__item">
                                <?php $_smarty_tpl->_subTemplateRender("file:comparison_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                                                        <div id="cart_informer" class="header_informers__item">
                                <?php $_smarty_tpl->_subTemplateRender('file:cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false && $_smarty_tpl->tpl_vars['is_tablet']->value == false) {?>
                            <nav class="fn_catalog_menu categories_nav hidden-md-down <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController' && !empty($_smarty_tpl->tpl_vars['banner_group1']->value->items)) {?>categories_nav--show<?php }?>">
                                <?php $_smarty_tpl->_subTemplateRender("file:desktop_categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </nav>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <div id="fn_content" class="main">
                <?php if (!empty($_smarty_tpl->tpl_vars['banner_group1']->value->items)) {?>
        <div class="container">
            <div class="main_banner">
                <div class="fn_banner_group1 main_banner__inner owl-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner_group1']->value->items, 'bi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->value) {
?>
                                                                        <div class="main_banner_var main_banner_var2 lazy" data-bg="url('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,1200,700,false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
')">
                            <div class="main_banner_var__content">
                                <div class="main_banner_var__image">
                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,500,320,false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
"/>
                                </div>
                                <div class="main_banner_var__column dark">
                                    <div class="main_banner_var__colboxed">
                                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->title) {?>
                                            <div class="main_banner_var__title">
                                                <?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>

                                            </div>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->description) {?>
                                            <div class="main_banner_var__text">
                                                <?php echo $_smarty_tpl->tpl_vars['bi']->value->description;?>

                                            </div>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['bi']->value->url;?>
" target="_blank" class="main_banner_var__button button button--big button--basic button--blick">
                                                <span>Подробнее</span>
                                            </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['controller']->value == "MainController" || (!empty($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value->url == '404')) {?>
            <div class="fn_ajax_content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        <?php } else { ?>
            <div class="container">
                <?php $_smarty_tpl->_subTemplateRender('file:breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="fn_ajax_content">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


                                        <?php $_smarty_tpl->_subTemplateRender('file:advantages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        <?php }?>
    </div>

        <div class="fn_to_top to_top"></div>

        <footer class="footer">
        <div class="container">
            <div class="f_row flex-column flex-md-row justify-content-md-between align-items-start">
                                <div class="f_col-lg">
                    <div class="footer__title d-flex align-items-center justify-content-between">
                        <span data-language="index_contacts"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="footer__content hidden-md-down">
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_phones) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_phones, 'phone');
$_smarty_tpl->tpl_vars['phone']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->index++;
$_smarty_tpl->tpl_vars['phone']->first = !$_smarty_tpl->tpl_vars['phone']->index;
$__foreach_phone_4_saved = $_smarty_tpl->tpl_vars['phone'];
?>
                                <div class="footer__contact_item">
                                    <a class="phone mdi mdi-phone-in-talk" href="tel:<?php echo preg_replace('~[^0-9]~','',$_smarty_tpl->tpl_vars['phone']->value);?>
">
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['phone'] = $__foreach_phone_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_email) {?>
                            <div class="footer__contact_item">
                                <a class="email mdi mdi-email-outline" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_working_hours) {?>
                            <div class="footer__contact_item">
                                <span class="open_hours mdi mdi-calendar-clock">
                                    <?php echo $_smarty_tpl->tpl_vars['settings']->value->site_working_hours;?>

                                </span>
                            </div>
                        <?php }?>
                                                <div class="footer__contact_item">
                            <a class="fn_callback callback mdi mdi-phone-return" href="#fn_callback" data-language="index_back_call">
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span>
                            </a>
                        </div>
                    </div>
                </div>
                                <div class="f_col-lg">
                    <div class="footer__title d-flex align-items-center justify-content-between">
                        <span data-language="index_about_store"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_about_store;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="footer__content footer__menu hidden-md-down">
                        <?php echo $_smarty_tpl->tpl_vars['menu_footer']->value;?>

                    </div>
                </div>
                                <div class="f_col-lg">
                    <div class="footer__title footer__title d-flex align-items-center justify-content-between">
                        <span data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div class="fn_view_content footer__content footer__menu hidden-md-down">
                        <?php $_smarty_tpl->_assignInScope('c_count', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('c_count', $_smarty_tpl->tpl_vars['c_count']->value+1);?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                                <div class="footer__menu_item <?php if ($_smarty_tpl->tpl_vars['c_count']->value > 5) {?>closed<?php } else { ?>opened<?php }?>">
                                    <a class="footer__menu_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </div>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['c_count']->value > 5) {?>
                            <a class="fn_view_all footer__view_all" href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php }?>
                    </div>
                </div>
                                <div class="f_col-lg">
                    <div class="footer__title footer__title d-flex align-items-center justify-content-between">
                        <span data-language="subscribe_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_heading;?>
</span>
                        <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                    </div>
                    <div id="subscribe_container" class="footer__content hidden-md-down">
                        <div class="subscribe__title">
                            <span data-language="subscribe_promotext"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_promotext;?>
</span>
                        </div>
                        <form class="subscribe_form fn_validate_subscribe" method="post">
                            <div class="subscribe_form__group">
                                <div class="form__group form__group--subscribe">
                                    <input type="hidden" name="subscribe" value="1"/>
                                    <input class="form__input form__input--subscribe" type="email" name="subscribe_email" value="" data-format="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>
                                </div>
                                <button class="form__button form__button--subscribe" type="submit"><span data-language="subscribe_button"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_button;?>
</span></button>
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['subscribe_error']->value)) {?>
                                <div id="subscribe_error" class="popup">
                                    <div class="popup__heading">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, true);
?>
                                        <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value == 'email_exist') {?>
                                            <span data-language="subscribe_already"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_already;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value == 'empty_email') {?>
                                            <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['subscribe_success']->value)) {?>
                                <div id="fn_subscribe_sent" class="popup">
                                    <div class="popup__heading">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, true);
?>
                                        <span data-language="subscribe_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_sent;?>
</span>
                                    </div>

                                </div>
                            <?php }?>
                        </form>
                    </div>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_social_links) {?>
                        <div class="footer__title d-flex align-items-center justify-content-between">
                            <span data-language="index_in_networks"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_in_networks;?>
</span>
                            <span class="fn_switch_parent footer__title_arrow hidden-lg-up"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right"), 0, true);
?></span>
                        </div>
                        <div class="footer__content footer__social social hidden-md-down">
                                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['social_aliases']) ? $_smarty_tpl->tpl_vars['social_aliases']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['ok'] = 'odnoklassniki';
$_smarty_tpl->_assignInScope('social_aliases', $_tmp_array);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_social_links, 'social_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('social_domain', preg_replace('~(https?://)?(www\.)?([^\.]+)?\..*~','$3',$_smarty_tpl->tpl_vars['social_link']->value));?>
                            <?php if (isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value]) || $_smarty_tpl->tpl_vars['social_domain']->value) {?>
                            <a class="social__link <?php if (isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value])) {
echo $_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value];
} else {
echo $_smarty_tpl->tpl_vars['social_domain']->value;
}?>" href="<?php if (!preg_match('~^https?://.*$~',$_smarty_tpl->tpl_vars['social_link']->value)) {?>https://<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['social_domain']->value;?>
">
                                <i class="mdi mdi-<?php if (isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value])) {
echo $_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value];
} else {
echo $_smarty_tpl->tpl_vars['social_domain']->value;
}?>"></i>
                            </a>
                            <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="container">
                <div class="f_row flex-column flex-md-row justify-content-center justify-content-md-between align-items-center">
                                        <div class="f_col-md footer__payments payments">
                        <ul class="payments__list d-flex justify-content-md-end align-items-center">
                            <li class="payments__item">
                                <div class="payments_visa" title="VISA"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"visacard_icon"), 0, true);
?></div>
                            </li>
                            <li class="payments__item">
                                <div class="payments_master" title="Master card"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"mastercard_icon"), 0, true);
?></div>
                            </li>
                            <li class="payments__item">
                                <div class="payments_yamoney" title="Yandex money"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"yandex_money_icon"), 0, true);
?></div>
                            </li>
                            <li class="payments__item">
                                <div class="payments_kiwi" title="Kiwi"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"kiwi_icon"), 0, true);
?></div>
                            </li>
                            <li class="payments__item">
                                <div class="payments_sberbank" title="Sberbank"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"sberbank_icon"), 0, true);
?></div>
                            </li>
                        </ul>
                    </div>
                                        <div class="f_col-md flex-md-first copyright">
                        <span>© <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
                        <a href="https://okay-cms.com" target="_blank">
                        <span data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <div class="fn_mobile_menu hidden">
        <?php $_smarty_tpl->_subTemplateRender("file:mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
            <?php $_smarty_tpl->_subTemplateRender('file:callback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>ut_tracker.start('parsing:body_bottom:scripts');<?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' || $_smarty_tpl->tpl_vars['controller']->value == "BlogController") {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js'][0], array( array('file'=>"jssocials.min.js",'dir'=>'js_libraries/js_socials/js','defer'=>true),$_smarty_tpl ) );?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['ok_footer']->value;?>


    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' || $_smarty_tpl->tpl_vars['controller']->value == "BlogController") {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['css'][0], array( array('file'=>'jssocials.css','dir'=>'js_libraries/js_socials/css'),$_smarty_tpl ) );?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme) {?>
            <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->social_share_theme, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['css'][0], array( array('file'=>"jssocials-theme-".$_prefixVariable3.".css",'dir'=>'js_libraries/js_socials/css'),$_smarty_tpl ) );?>

        <?php }?>
    <?php }?>
    <?php echo '<script'; ?>
>ut_tracker.end('parsing:body_bottom:scripts');<?php echo '</script'; ?>
>

    <?php if (!empty($_smarty_tpl->tpl_vars['counters']->value['body_bottom'])) {?>
        <?php echo '<script'; ?>
>ut_tracker.start('parsing:body_bottom:counters');<?php echo '</script'; ?>
>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['counters']->value['body_bottom'], 'counter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo '<script'; ?>
>ut_tracker.end('parsing:body_bottom:counters');<?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'UserController') {?>
        <?php echo '<script'; ?>
 src="//ulogin.ru/js/ulogin.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
>ut_tracker.end('parsing:page');<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
