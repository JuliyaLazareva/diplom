<?php
/* Smarty version 3.1.33, created on 2021-03-28 13:37:15
  from '/home/ganzaby/diplom.dod.by/backend/design/html/deliveries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60605c5bb2c1f4_09911594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634972544fae3e1925a1dac1b66174eedbf34182' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/deliveries.tpl',
      1 => 1614790710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
  ),
),false)) {
function content_60605c5bb2c1f4_09911594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->general_shipping ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_shipping, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'DeliveryAdmin'),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
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
                    <div class="okay_list_heading okay_list_delivery_condit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_conditions, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                                <div class="deliveries_wrap okay_list_body sortable">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deliveries']->value, 'delivery');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->value) {
?>
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row">
                               <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->position;?>
">

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                </div>

                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"/>
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"></label>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_photo">
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'DeliveryAdmin','id'=>$_smarty_tpl->tpl_vars['delivery']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->image, ENT_QUOTES, 'UTF-8', true),75,75,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir ));?>
"/>
                                        </a>
                                    <?php } else { ?>
                                        <img width="75" src="design/images/no_image.png"/>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_name">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'DeliveryAdmin','id'=>$_smarty_tpl->tpl_vars['delivery']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                    <div class="hidden-lg-up mt-q">
                                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                                            <div><span class="tag tag-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price > 0) {?>
                                            <div><span class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php } else { ?>
                                            <div><span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->free_from > 0) {?>
                                            <div><span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->free_from;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_condit">
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                                        <div><span class="tag tag-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price > 0) {?>
                                        <div><span class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php } else { ?>
                                        <div><span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->free_from > 0) {?>
                                        <div><span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->free_from;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_status">
                                                                        <label class="switch switch-default">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>fn_active_class<?php }?>" data-controller="delivery" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" name="enabled" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>checked=""<?php }?>/>
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
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }
}
