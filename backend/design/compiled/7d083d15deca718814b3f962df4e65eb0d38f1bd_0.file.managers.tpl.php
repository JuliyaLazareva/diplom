<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:11:42
  from '/home/ganzaby/diplom.dod.by/backend/design/html/managers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fc34e6717c8_82265514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d083d15deca718814b3f962df4e65eb0d38f1bd' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/managers.tpl',
      1 => 1614790712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 3,
  ),
),false)) {
function content_603fc34e6717c8_82265514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->managers_managers ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->managers_managers, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['managers_count']->value;?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ManagerAdmin'),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->managers_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['managers']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post" class="fn_form_list">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="managers_wrap okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_manager_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>

                                                <div class="okay_list_body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['managers']->value, 'manager_admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manager_admin']->value) {
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['manager_admin']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['manager_admin']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['manager_admin']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_manager_name">
                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ManagerAdmin','id'=>$_smarty_tpl->tpl_vars['manager_admin']->value->id),$_smarty_tpl ) );?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manager_admin']->value->login, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                            <?php if ($_smarty_tpl->tpl_vars['manager_admin']->value->comment) {?>
                                                <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manager_admin']->value->comment, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php }?>
                                        </div>

                                        <?php if ($_smarty_tpl->tpl_vars['manager_admin']->value->id != $_smarty_tpl->tpl_vars['manager']->value->id) {?>
                                            <div class="okay_list_boding okay_list_close">
                                                                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->managers_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                                                </button>
                                            </div>
                                        <?php }?>
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
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->managers_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }
}
