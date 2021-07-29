<?php
/* Smarty version 3.1.33, created on 2021-01-30 18:05:23
  from '/home/ganzaby/joo.by/backend/design/html/payment_methods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_601575b3425c08_25479540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706814c5b3919d7ec3380c7d955e10a061fda793' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/payment_methods.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_601575b3425c08_25479540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->payment_methods_methods ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_methods_methods, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'PaymentMethodAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_methods_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
        <form class="fn_form_list" method="post">
            <div class="okay_list products_list fn_sort_list">
                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                                <div class="okay_list_head">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_delivery_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_delivery_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_delivery_condit"></div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                                <div class="deliveries_wrap okay_list_body sortable">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment_method');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
?>
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row">
                                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->position;?>
">

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                </div>

                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"/>
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"></label>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_photo">
                                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->tpl_vars['payment_method']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->image, ENT_QUOTES, 'UTF-8', true),55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
"/>
                                        </a>
                                    <?php } else { ?>
                                        <img height="55" width="55" src="design/images/no_image.png"/>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_name">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->tpl_vars['payment_method']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </div>
                                <div class="okay_list_boding okay_list_delivery_condit"></div>
                                <div class="okay_list_boding okay_list_status">
                                                                        <label class="switch switch-default">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->enabled) {?>fn_active_class<?php }?>" data-controller="payment" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
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
                        <div class="okay_list_boding okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
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
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_methods_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }
}
