<?php
/* Smarty version 3.1.33, created on 2021-03-16 13:15:24
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6050853ce36123_70424522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4baf1833cbf6bcbb34893a652e82886e29de88bf' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/post.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 5,
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_6050853ce36123_70424522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/compiled/podushki_xrapuska/4baf1833cbf6bcbb34893a652e82886e29de88bf_0.file.post.tpl.php',
    'uid' => '4baf1833cbf6bcbb34893a652e82886e29de88bf',
    'call_name' => 'smarty_template_function_comments_tree_2747428526050853cd47970_82600190',
  ),
));
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>$_smarty_tpl->tpl_vars['route_name']->value,'url'=>$_smarty_tpl->tpl_vars['post']->value->url,'absolute'=>1),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('canonical', $_prefixVariable1 ,false ,32);?>

<div class="block__header block__header--boxed block__header--border block__header--promo">
    <h1 class="block__heading">
        <span data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </h1>
        <div class="block__header_promo<?php if (!$_smarty_tpl->tpl_vars['post']->value->date) {?> hidden<?php }?>">
        <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date,"d cFR Y, cD" ));?>
</b>
    </div>
</div>
<div class="block__body block--boxed block--border">
        <div class="block__description block__description--style">
        <?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>

    </div>

            <div class="post_share_boxed">
        <div class="share">
            <div class="share__text post_share__text">
                <span data-language="product_share"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_share;?>
:</span>
            </div>
            <div class="fn_share jssocials share__icons"></div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['prev_post']->value || $_smarty_tpl->tpl_vars['next_post']->value) {?>
<nav>
    <ol class="pager row">
        <li class="col-xs-12<?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?> col-sm-6<?php } else { ?> col-sm-12<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['prev_post']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['prev_post']->value->type_post == 'blog') {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_item','url'=>$_smarty_tpl->tpl_vars['prev_post']->value->url),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('prev_post_url', $_prefixVariable2);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['prev_post']->value->type_post == 'news') {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'news_item','url'=>$_smarty_tpl->tpl_vars['prev_post']->value->url),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('prev_post_url', $_prefixVariable3);?>
                <?php }?>
                <a class="" href="<?php echo $_smarty_tpl->tpl_vars['prev_post_url']->value;?>
">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_up_icon"), 0, false);
?>
                    <span><?php echo $_smarty_tpl->tpl_vars['prev_post']->value->name;?>
</span>
                </a>
            <?php }?>
        </li>
        <li class="col-xs-12 col-sm-6">
            <?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['next_post']->value->type_post == 'blog') {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_item','url'=>$_smarty_tpl->tpl_vars['next_post']->value->url),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('next_post_url', $_prefixVariable4);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['next_post']->value->type_post == 'news') {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'news_item','url'=>$_smarty_tpl->tpl_vars['next_post']->value->url),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('next_post_url', $_prefixVariable5);?>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['next_post_url']->value;?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['next_post']->value->name;?>
</span>
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_up_icon"), 0, true);
?>
                </a>
            <?php }?>
        </li>
    </ol>
</nav>
<?php }?>

<div class="block block--boxed block--border">
    <div class="block__header">
        <div class="block__title">
            <span data-language="post_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comments;?>
</span>
        </div>
    </div>
    <div class="block__body">
        <div id="comments">
            <div class="comment-wrap d-lg-flex flex-lg-row align-items-md-start">
                <div class="comment f_col-lg-7">
                    <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                        
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comments']->value), true);?>

                    <?php } else { ?>
                        <div class="boxed boxed--big boxed--notify">
                            <span data-language="product_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
                        </div>
                    <?php }?>
                </div>
                <div class="form_wrap f_col-lg-5">
                                        <form id="fn_blog_comment" class="fn_validate_post form form--boxed"  method="post" action="">
                        <div class="form__header">
                            <div class="form__title">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, true);
?>
                                <span data-language="post_write_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_write_comment;?>
</span>
                            </div>
                        </div>
                        <div class="form__body">
                                                        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                            <div class="message_error">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_comment') {?>
                                <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                <?php }?>
                            </div>
                            <?php }?>

                                                        <div class="form__group">
                                <input class="form__input form__placeholder--focus" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                            </div>

                                                        <div class="form__group">
                                <input class="form__input form__placeholder--focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" />
                                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
</span>
                            </div>

                                                        <div class="form__group">
                                <textarea class="form__textarea form__placeholder--focus" rows="3" name="text" ><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
                                <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*</span>
                            </div>
                        </div>
                        <div class="form__footer">
                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_post) {?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                                    <div class="captcha">
                                        <div id="recaptcha1"></div>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_post"),$_smarty_tpl ) );?>

                                    <div class="captcha">
                                        <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_post']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_post']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <div class="form__captcha">
                                            <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" />
                                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php }?>

                            <input type="hidden" name="comment" value="1">
                                                        <button class="form__button button--blick g-recaptcha" type="submit" name="comment" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
">
                                <span  data-language="form_send"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
    <div class="block block--boxed block--border">
        <div class="block__header">
            <div class="block__title">
                <span data-language="product_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
            </div>
        </div>

        <div class="block__body">
            <div class="products_list row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_products']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                    <div class="product_item col-xs-6 col-sm-4 col-md-4 col-xl-25">
                        <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0, true);
?>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
     </div>
<?php }
}
/* smarty_template_function_comments_tree_2747428526050853cd47970_82600190 */
if (!function_exists('smarty_template_function_comments_tree_2747428526050853cd47970_82600190')) {
function smarty_template_function_comments_tree_2747428526050853cd47970_82600190(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                        <div class="comment__item <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?> admin_note<?php }?>">
                                                        <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
                                                        <div class="comment__inner">
                                <div class="comment__icon">
                                    <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-admin_icon"), 0, true);
?>
                                    <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, true);
?>
                                    <?php }?>
                                </div>
                                <div class="comment__boxed">
                                    <div class="comment__header">
                                                                                <div class="comment__author">
                                            <span class="comment__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                            <span class="comment__status" data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                            <?php }?>
                                        </div>
                                                                                <div class="comment__date">
                                            <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
</span>
                                        </div>
                                    </div>

                                                                        <div class="comment__body">
                                        <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id])) {?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                            <?php }?>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}}
/*/ smarty_template_function_comments_tree_2747428526050853cd47970_82600190 */
}
