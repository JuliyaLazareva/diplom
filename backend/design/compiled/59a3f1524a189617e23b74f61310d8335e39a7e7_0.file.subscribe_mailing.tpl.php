<?php
/* Smarty version 3.1.33, created on 2021-03-15 10:13:05
  from '/home/ganzaby/diplom.dod.by/backend/design/html/subscribe_mailing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604f0901014cb7_79518830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a3f1524a189617e23b74f61310d8335e39a7e7' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/subscribe_mailing.tpl',
      1 => 1614790714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_604f0901014cb7_79518830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->subscribe_mailing_subscribes ,false ,32);?>

<?php if ($_smarty_tpl->tpl_vars['subscribes_count']->value > 0) {?>
    <div class="row">
        <progress id="progressbar" class="progress progress-xs progress-info mt-0" style="display: none" value="0" max="100"></progress>
    </div>
<?php }?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_page">
            <?php if ($_smarty_tpl->tpl_vars['keyword']->value && $_smarty_tpl->tpl_vars['subscribes_count']->value > 0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->subscribe_mailing_subscribes, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['subscribes_count']->value;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['subscribes_count']->value > 0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->subscribe_mailing_subscribes, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['subscribes_count']->value;?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['subscribes_count']->value > 0) {?>
                <div class="export_block export_subscribes hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->subscribe_mailing_export, ENT_QUOTES, 'UTF-8', true);?>
">
                    <span class="fn_start_export fa fa-file-excel-o"></span>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['subscribes']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
"/>

                    <div class="users_wrap okay_list">
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_subscribe_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->subscribe_mailing_email, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                                                <div class="okay_list_body sortable">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subscribes']->value, 'subscribe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subscribe']->value) {
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                    <div class="okay_list_boding okay_list_check">
                                        <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['subscribe']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['subscribe']->value->id;?>
"/>
                                        <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['subscribe']->value->id;?>
"></label>
                                    </div>

                                    <div class="okay_list_boding okay_list_subscribe_name">
                                        <a class="link" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subscribe']->value->email, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subscribe']->value->email, ENT_QUOTES, 'UTF-8', true);?>

                                        </a>
                                    </div>
                                    <div class="okay_list_boding okay_list_close">
                                                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
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

        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->subscribe_mailing_mo, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/piecon/piecon.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var in_process=false;
    var sort='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8', true);?>
';

    
    $(function() {

        $(document).on('click','.fn_start_export',function(){
            Piecon.setOptions({fallback: 'force'});
            Piecon.setProgress(0);
            var progress_item = $("#progressbar"); //указываем селектор элемента с анимацией
            progress_item.show();
            do_export('',progress_item);
        });

        function do_export(page,progress) {
            page = typeof(page) != 'undefined' ? page : 1;
            $.ajax({
                url: "ajax/export_subscribes.php",
                data: {page:page, sort:sort},
                dataType: 'json',
                success: function(data){
                    if(data && !data.end)
                    {
                        Piecon.setProgress(Math.round(100*data.page/data.totalpages));
                        progress.attr('value',100*data.page/data.totalpages);
                        do_export(data.page*1+1,progress);
                    }
                    else
                    {
                        Piecon.setProgress(100);
                        progress.attr('value','100');
                        window.location.href = 'files/export_users/subscribes.csv';
                        progress.fadeOut(500);
                    }
                },
                error:function(xhr, status, errorThrown) {
                    alert(errorThrown+'\n'+xhr.responseText);
                }

            });
        }
    });
<?php echo '</script'; ?>
>

<?php }
}
