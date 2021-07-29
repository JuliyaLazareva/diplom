<?php
/* Smarty version 3.1.33, created on 2021-05-07 00:17:16
  from '/home/ganzaby/diplom.dod.by/backend/design/html/import_log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60945cdcb8c910_76425803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5bd48dfeebe3c0dc5daa2b0ae132f665a76cf4' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/import_log.tpl',
      1 => 1614790712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_60945cdcb8c910_76425803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->import_log_products ,false ,32);?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <?php if ($_smarty_tpl->tpl_vars['logs_count']->value) {?>
                <div class="box_heading heading_page">
                    <?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                       <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['logs_count']->value,'Найден','Найдено','Найдено' ));?>
 <?php echo $_smarty_tpl->tpl_vars['logs_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['logs_count']->value,'товар','товаров','товара' ));?>

                    <?php } else { ?>
                       <?php echo $_smarty_tpl->tpl_vars['logs_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['logs_count']->value,'товар','товаров','товара' ));?>

                    <?php }?>
                </div>
            <?php } else { ?>
                <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_log_empty, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
            <input type="hidden" name="controller" value="ImportLogAdmin">
            <div class="input-group">
                <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_search, ENT_QUOTES, 'UTF-8', true);?>
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
        <div class="col-lg-12 col-md-12 ">
            <div class="boxed_sorting">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select class="selectpicker" onchange="location = this.value;">
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'limit'=>null,'filter'=>null),$_smarty_tpl ) );?>
" <?php if (!$_smarty_tpl->tpl_vars['filter']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'limit'=>null,'filter'=>'added'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'added') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_added, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('keyword'=>null,'page'=>null,'limit'=>null,'filter'=>'updated'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'updated') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_updated, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        </select>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm 12">
                        <div class="pull-right">
                            <select onchange="location = this.value;" class="selectpicker">
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
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 100) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 100</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>200),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 200) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 200</option>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('limit'=>500),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value == 500) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 500</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="okay_list">
                                                <div class="okay_list_head">
                           <div class="okay_list_heading okay_list_check">№</div>
                           <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                           <div class="okay_list_heading okay_list_log_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 </div>
                            <div class="okay_list_heading okay_list_log_status">
                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_status, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                        </div>
                                                <div class="okay_list_body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
$_smarty_tpl->tpl_vars['log']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->iteration++;
$__foreach_log_0_saved = $_smarty_tpl->tpl_vars['log'];
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_check"><?php echo $_smarty_tpl->tpl_vars['log']->iteration;?>
</div>
                                        <div class="okay_list_boding okay_list_photo">
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value->product->image) {?>
                                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['log']->value->product_id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
" target="_blank">
                                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['log']->value->product->image->filename, ENT_QUOTES, 'UTF-8', true),55,55 ));?>
"/>
                                                </a>
                                            <?php } else { ?>
                                                <img height="55" width="55" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_log_name">
                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['log']->value->product_id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value->variant_name) {?>
                                                <span class="text_grey">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
)</span>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_log_status">
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value->status == 'added') {?>
                                                <i class="fa fa-plus font-2xl text-success" title="<?php echo $_smarty_tpl->tpl_vars['log']->value->status;?>
"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['log']->value->status == 'updated') {?>
                                                <i class="fa fa-refresh font-2xl text-info" title="<?php echo $_smarty_tpl->tpl_vars['log']->value->status;?>
"></i>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['log'] = $__foreach_log_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_log_empty, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }
}
