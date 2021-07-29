<?php
/* Smarty version 3.1.33, created on 2021-03-28 13:12:51
  from '/home/ganzaby/diplom.dod.by/backend/design/html/callbacks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_606056a3d725d3_60689634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca8207cc75b27db13c8cd9875f5713efaadded5' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/callbacks.tpl',
      1 => 1614790710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_606056a3d725d3_60689634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->callbacks_order ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
               <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->callbacks_requests, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['callbacks_count']->value;?>

            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
                <input type="hidden" name="controller" value="CallbacksAdmin">
                <div class="input-group">
                    <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->callbacks_search, ENT_QUOTES, 'UTF-8', true);?>
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
" <?php if ($_smarty_tpl->tpl_vars['status']->value == null) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->callbacks_all, ENT_QUOTES, 'UTF-8', true);?>
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
    <?php if ($_smarty_tpl->tpl_vars['callbacks']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="post_wrap okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_comments_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->callbacks_requests, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_comments_btn"></div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>

                                                <div class="okay_list_body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callbacks']->value, 'callback');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['callback']->value) {
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_comments_name">
                                            <div class="okay_list_text_inline mb-q mr-1">
                                                <span class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 </span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </div>
                                            <div class="okay_list_text_inline mb-q">
                                                <span class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_phone, ENT_QUOTES, 'UTF-8', true);?>
 </span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->phone, ENT_QUOTES, 'UTF-8', true);?>

                                            </div>
                                            <div class="mb-q">
                                                <span class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_message, ENT_QUOTES, 'UTF-8', true);?>
 </span>
                                                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->message, ENT_QUOTES, 'UTF-8', true));?>

                                            </div>
                                            <div>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_request_sent, ENT_QUOTES, 'UTF-8', true);?>
 <span class="tag tag-default"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['callback']->value->date ));?>
 | <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['callback']->value->date ));?>
</span>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_page, ENT_QUOTES, 'UTF-8', true);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->url, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            </div>
                                            <div class="hidden-md-up mt-q">
                                                <button type="button" class="btn btn_small btn-outline-warning fn_ajax_action fn_callbacks_toggle <?php if ($_smarty_tpl->tpl_vars['callback']->value->processed) {?>hidden<?php }?>" data-controller="callback" data-action="processed" data-id="<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_process, ENT_QUOTES, 'UTF-8', true);?>

                                                </button>
                                                <button type="button" class="btn btn_small btn-outline-warning fn_ajax_action fn_callbacks_toggle fn_active_class <?php if (!$_smarty_tpl->tpl_vars['callback']->value->processed) {?>hidden<?php }?>" data-controller="callback" data-action="processed" data-id="<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unprocess, ENT_QUOTES, 'UTF-8', true);?>

                                                </button>
                                             </div>
                                            <div class="mb-q fn_ajax_block admin_note" data-id="<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
" data-controller="callback">
                                                <span class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->callbacks_admin_notes, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <span class="fn_an_text"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->admin_notes, ENT_QUOTES, 'UTF-8', true));?>
</span>
                                                <div>
                                                    <a href="javascript:;" class="fn_an_edit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->callbacks_edit, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                </div>
                                                <div class="fn_an_edit_block hidden">
                                                    <textarea class="fn_ajax_element" name="admin_notes"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->admin_notes, ENT_QUOTES, 'UTF-8', true));?>
</textarea>
                                                    <p><a href="javascript:;" class="fn_an_save"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="okay_list_boding okay_list_comments_btn">
                                            <button type="button" class="btn btn_small btn-outline-warning fn_ajax_action fn_callbacks_toggle <?php if ($_smarty_tpl->tpl_vars['callback']->value->processed) {?>hidden<?php }?>" data-controller="callback" data-action="processed" data-id="<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_process, ENT_QUOTES, 'UTF-8', true);?>

                                            </button>
                                            <button type="button" class="btn btn_small btn-outline-warning fn_ajax_action fn_callbacks_toggle fn_active_class <?php if (!$_smarty_tpl->tpl_vars['callback']->value->processed) {?>hidden<?php }?>" data-controller="callback" data-action="processed" data-id="<?php echo $_smarty_tpl->tpl_vars['callback']->value->id;?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unprocess, ENT_QUOTES, 'UTF-8', true);?>

                                            </button>
                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_request, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                                                <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
                                        <option value="processed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_process, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="unprocessed"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_unprocess, ENT_QUOTES, 'UTF-8', true);?>
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
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_no_request, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php echo '<script'; ?>
>
    $(function() {
        $(document).on('click', '.fn_an_edit', function() {
            var block = $(this).closest('.fn_ajax_block');
            block.find('.fn_an_edit_block').removeClass("hidden");
            $(this).addClass("hidden");
        });
        $(document).on('click', '.fn_an_save', function() {
            var block = $(this).closest('.fn_ajax_block');
            block.find('.fn_an_text').text(block.find('[name="admin_notes"]').val());
            ajax_action(block);

            block.find('.fn_an_edit_block').addClass("hidden");
            block.find('.fn_an_edit').removeClass("hidden");
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
