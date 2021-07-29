<?php
/* Smarty version 3.1.33, created on 2021-01-30 18:50:58
  from '/home/ganzaby/joo.by/backend/design/html/feedbacks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60158062491f61_64453862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b4f1f6d06bcf8f209acd85f00326ce812a656dd' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/feedbacks.tpl',
      1 => 1611506927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_60158062491f61_64453862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/home/ganzaby/joo.by/backend/design/compiled/1b4f1f6d06bcf8f209acd85f00326ce812a656dd_0.file.feedbacks.tpl.php',
    'uid' => '1b4f1f6d06bcf8f209acd85f00326ce812a656dd',
    'call_name' => 'smarty_template_function_comments_tree_43866959060158062324802_56536831',
  ),
));
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->general_feedback ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['feedbacks_count']->value > 0) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_feedback, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['feedbacks_count']->value;?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_no_request, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
                <input type="hidden" name="controller" value="FeedbacksAdmin">
                <div class="input-group">
                    <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feedbacks_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="fn_toggle_wrap">
                <div class="heading_box visible_md">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="boxed_sorting toggle_body_wrap off fn_card">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <select class="selectpicker form-control" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'status'=>null),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['status']->value == null) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feedbacks_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'status'=>'processed'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['status']->value == 'processed') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter_processed, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'status'=>'unprocessed'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['status']->value == 'unprocessed') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter_unprocessed, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 pull-right">
                        <div class="pull-right">
                            <select onchange="location = this.value;" class="selectpicker">
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>5),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 5) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 5</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>10),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 10) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 10</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>25),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 25) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 25</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>50),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 50) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 50</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>100),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 100) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 100</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['feedbacks']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post" class="fn_form_list">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="post_wrap okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_comments_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_messages, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_comments_btn"></div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>

                                                <div class="okay_list_body">
                            
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('feedbacks'=>$_smarty_tpl->tpl_vars['feedbacks']->value), true);?>

                        </div>

                                                <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
                                        <option value="approve"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_process, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn_small btn_blue">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                    <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feedbacks_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>

<div id="answer_popup" class="modal fade show" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header">
                <div class="heading_modal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_answer, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
            <div class="modal-body">
                <form class="form-horizontal " method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <input class="fn_feedback_id" type="hidden" name="feedback_id" value="" />
                    <div class="form-group">
                        <textarea class="fn_comment_area form-control okay_textarea" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_answer, ENT_QUOTES, 'UTF-8', true);?>
" name="text" rows="10" cols="50"></textarea>
                    </div>
                    <button type="submit" name="feedback_answer" value="1" class="btn btn_small btn_blue mx-h">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_answer, ENT_QUOTES, 'UTF-8', true);?>
</span>
                   </button>
                    <button type="button" class="btn btn_small btn-danger mx-h" data-dismiss="modal">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_cancel, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
$(function() {
    $('.fn_answer').on('click',function(){
        $('.fn_feedback_id').val($(this).data('feedback_id'));
        $('.fn_comment_area').html($(this).data('user_name')+', ');
    });

});
<?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_comments_tree_43866959060158062324802_56536831 */
if (!function_exists('smarty_template_function_comments_tree_43866959060158062324802_56536831')) {
function smarty_template_function_comments_tree_43866959060158062324802_56536831(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feedbacks']->value, 'feedback');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feedback']->value) {
?>
                                    <div class="fn_row okay_list_body_item <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>admin_note2<?php }?>">
                                        <div class="okay_list_row">
                                            <div class="okay_list_boding okay_list_check">
                                                <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
"/>
                                                <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
"></label>
                                            </div>

                                            <div class="okay_list_boding okay_list_comments_name <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>admin_note<?php }?>">
                                                <div class="okay_list_text_inline mb-q mr-1">
                                                    <span class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 </span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                                <div class="okay_list_text_inline mb-q">
                                                    <span class="text_dark text_bold">Email: </span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->email, ENT_QUOTES, 'UTF-8', true);?>

                                                </div>
                                                <div class="mb-q">
                                                    <span class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_message, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                     <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->message, ENT_QUOTES, 'UTF-8', true));?>

                                                </div>
                                                <div>
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_request_sent, ENT_QUOTES, 'UTF-8', true);?>
  <span class="tag tag-default"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['feedback']->value->date ));?>
 | <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['feedback']->value->date ));?>
</span>
                                                </div>
                                                
                                                <div class="hidden-md-up mt-q">
                                                    <?php if (!$_smarty_tpl->tpl_vars['feedback']->value->processed) {?>
                                                    <button type="button" class="btn btn_small btn-outline-warning fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feedback']->value->processed) {?>fn_active_class<?php }?>" data-controller="feedback" data-action="processed" data-id="<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
" onclick="$(this).hide();">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_process, ENT_QUOTES, 'UTF-8', true);?>

                                                    </button>
                                                    <?php }?>
                                                    <div class="answer_wrap <?php if ($_smarty_tpl->tpl_vars['level']->value > 0 || !$_smarty_tpl->tpl_vars['feedback']->value->processed) {?>hidden<?php }?>">
                                                        <button type="button" data-parent_id="<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
" data-user_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" data-toggle="modal" data-target="#answer_popup" class="btn btn_small btn-outline-info fn_answer">
                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_answer, ENT_QUOTES, 'UTF-8', true);?>

                                                        </button>
                                                    </div>
                                                 </div>
                                                
                                            </div>

                                            <div class="okay_list_boding okay_list_comments_btn">
                                                <?php if (!$_smarty_tpl->tpl_vars['feedback']->value->processed) {?>
                                                    <button type="button" class="btn btn_small btn-outline-warning fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feedback']->value->processed) {?>fn_active_class<?php }?>" data-controller="feedback" data-action="processed" data-id="<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
" onclick="$(this).hide();">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_process, ENT_QUOTES, 'UTF-8', true);?>

                                                    </button>
                                                <?php }?>
                                                <div class="answer_wrap fn_answer_btn" <?php if ($_smarty_tpl->tpl_vars['level']->value > 0 || !$_smarty_tpl->tpl_vars['feedback']->value->processed) {?>style="display: none;"<?php }?>>
                                                    <button type="button" data-feedback_id="<?php echo $_smarty_tpl->tpl_vars['feedback']->value->id;?>
" data-user_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" data-toggle="modal" data-target="#answer_popup" class="btn btn_small btn-outline-info fn_answer">
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_answer, ENT_QUOTES, 'UTF-8', true);?>

                                                    </button>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_close">
                                                                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_request, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                </button>
                                            </div>
                                        </div>
                                        <?php if (isset($_smarty_tpl->tpl_vars['admin_answer']->value[$_smarty_tpl->tpl_vars['feedback']->value->id])) {?>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('feedbacks'=>$_smarty_tpl->tpl_vars['admin_answer']->value[$_smarty_tpl->tpl_vars['feedback']->value->id],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                        <?php }?>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}}
/*/ smarty_template_function_comments_tree_43866959060158062324802_56536831 */
}
