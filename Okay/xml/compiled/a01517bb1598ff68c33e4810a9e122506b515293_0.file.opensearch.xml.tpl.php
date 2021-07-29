<?php
/* Smarty version 3.1.33, created on 2021-03-03 21:22:38
  from '/home/ganzaby/diplom.dod.by/Okay/xml/opensearch.xml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fd3ee9396e8_04010677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01517bb1598ff68c33e4810a9e122506b515293' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/Okay/xml/opensearch.xml.tpl',
      1 => 1614790931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603fd3ee9396e8_04010677 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>version="1.0" encoding="UTF-8"<?php echo '?>';?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
    <ShortName>OkayCMS</ShortName>
    <Developer>OkayCMS <?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value->version_type;?>
</Developer>
    <Description><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
</Description>
    <InputEncoding>UTF-8</InputEncoding>
    <?php if ((!empty($_smarty_tpl->tpl_vars['favicon_mime']->value))) {?>
        <Image type="<?php echo $_smarty_tpl->tpl_vars['favicon_mime']->value;?>
" width="16" height="16"><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/files/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_favicon;?>
</Image>
    <?php }?>

    <Url type="application/opensearchdescription+xml" rel="self" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch",'absolute'=>1),$_smarty_tpl ) );?>
" />
    <Url type="application/x-suggestions+json" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch_ajax",'absolute'=>1),$_smarty_tpl ) );?>
?query={searchTerms}" />
    <Url type="text/html" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"search",'absolute'=>1),$_smarty_tpl ) );?>
?keyword={searchTerms}" />
    <moz:SearchForm><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"search",'absolute'=>1),$_smarty_tpl ) );?>
</moz:SearchForm>
    <OutputEncoding>UTF-8</OutputEncoding>
    <InputEncoding>UTF-8</InputEncoding>
</OpenSearchDescription><?php }
}
