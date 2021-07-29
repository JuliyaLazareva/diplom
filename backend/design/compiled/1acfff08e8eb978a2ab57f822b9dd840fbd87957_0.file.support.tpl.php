<?php
/* Smarty version 3.1.33, created on 2021-02-14 00:55:55
  from '/home/ganzaby/joo.by/backend/design/html/support.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60284aebd56cb1_83012121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1acfff08e8eb978a2ab57f822b9dd840fbd87957' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/support.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_60284aebd56cb1_83012121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->support_support ,false ,32);?>

<div class="row">
    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['topics_count']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_msg, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['topics_count']->value;?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_support, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'TopicAdmin'),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
        <div class="wrap_heading wrap_head_mob float-sm-right">
            <a class="btn btn_blue btn_small" target="_blank" href="https://okay-cms.com/support">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'sertificat'), 0, true);
?>
                <span class="ml-q"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_condition, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </a>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['topics']->value) {?>
    <div class="boxed fn_toggle_wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="orders_list okay_list fn_sort_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_support_num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_number, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_support_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_theme, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_support_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_status, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_support_time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_time, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </div>
                                                <div class="okay_list_body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_support_num">
                                            <div class="text_dark text_600 txt_center mb-q"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value->id, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <span class="text_grey font_12"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->created ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->created ));?>
</span>

                                        </div>

                                        <div class="okay_list_boding okay_list_support_name">
                                            <div class="mb-q">
                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'TopicAdmin','id'=>$_smarty_tpl->tpl_vars['topic']->value->id,'page'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            </div>
                                            <div class="">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_last_answer, ENT_QUOTES, 'UTF-8', true);?>

                                                <?php if ($_smarty_tpl->tpl_vars['topic']->value->last_comment) {?>
                                                    <span class="tag tag-default"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->last_comment ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->last_comment ));?>
</span>
                                                <?php }?>
                                            </div>
                                        </div>

                                        <div class="okay_list_boding okay_list_support_status ">
                                            <?php if ($_smarty_tpl->tpl_vars['topic']->value->status == 'received') {?>
                                                <span class="text_success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_waiting, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['topic']->value->status == 'sent') {?>
                                                <span class="text_success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_reseived, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['topic']->value->status == 'closed') {?>
                                                <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_closed, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php } else { ?>
                                               <span class="text_grey">unknown</span>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_support_time <?php if ($_smarty_tpl->tpl_vars['topic']->value->spent_time < 0) {?>text_success<?php }?>">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'balance' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value->spent_time,false ));?>

                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="heading_box">
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_key') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_no_keys, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'domain_not_found') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_no_domain, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'domain_disabled') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_domain_blocked, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'wrong_key') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_wrong_keys, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'domain_has_already_gotten_keys') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_already_receive_keys, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'request_has_already_sent') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_already_sent, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'localhost') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_local, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                    <?php if (in_array($_smarty_tpl->tpl_vars['message_error']->value,array('empty_key','domain_not_found'))) {?>
                        <div class="text_box">
                            <form class="fn_form_list" method="post">
                                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                                <input class="btn btn-sm btn-primary" type="submit" name="get_new_keys" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_get_keys, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </form>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="heading_box">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_no, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
}
