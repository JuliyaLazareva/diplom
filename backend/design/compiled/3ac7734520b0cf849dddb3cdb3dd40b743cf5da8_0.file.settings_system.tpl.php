<?php
/* Smarty version 3.1.33, created on 2021-03-26 14:21:24
  from '/home/ganzaby/diplom.dod.by/backend/design/html/settings_system.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605dc3b432d3b8_73208399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac7734520b0cf849dddb3cdb3dd40b743cf5da8' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/settings_system.tpl',
      1 => 1614790713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605dc3b432d3b8_73208399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->settings_system_title ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_system_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed fn_toggle_wrap">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_options, ENT_QUOTES, 'UTF-8', true);?>

                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                </div>
            </div>
                        <div class="toggle_body_wrap on fn_card">
               <div class="row">
                   <?php if ($_smarty_tpl->tpl_vars['php_version']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">PHP Version</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       Version: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['php_version']->value, ENT_QUOTES, 'UTF-8', true);?>

                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>
                   <?php if ($_smarty_tpl->tpl_vars['sql_info']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">SQL</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sql_info']->value, 'sql_ver', false, 'sql_param');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sql_param']->value => $_smarty_tpl->tpl_vars['sql_ver']->value) {
?>
                                           <div>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sql_param']->value, ENT_QUOTES, 'UTF-8', true);?>
: </span>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sql_ver']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                           </div>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>

                   <?php if ($_smarty_tpl->tpl_vars['ini_params']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">INI params</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ini_params']->value, 'param_value', false, 'param_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['param_name']->value => $_smarty_tpl->tpl_vars['param_value']->value) {
?>
                                           <div>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_name']->value, ENT_QUOTES, 'UTF-8', true);?>
: </span>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_value']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                           </div>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>

                   <?php if ($_smarty_tpl->tpl_vars['server_ip']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['btr']->value->system_server_ip;?>
</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       IP: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server_ip']->value, ENT_QUOTES, 'UTF-8', true);?>

                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>

                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="boxed boxed_attention">
                           <div class="heading_box">
                               <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_caution, ENT_QUOTES, 'UTF-8', true);?>

                           </div>
                           <div class="text_box">
                               <div class="mb-1">
                                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_message_1, ENT_QUOTES, 'UTF-8', true);?>

                               </div>
                               <div class="mb-h"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_message_2, ENT_QUOTES, 'UTF-8', true);?>
</b> </div>
                               <div>
                                   <ul class="mb-0 pl-1">
                                       <li>display_errors - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_display_errors, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>memory_limit - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_memory_limit, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>post_max_size - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_post_max_size, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_input_time - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_input_time, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_file_uploads - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_file_uploads, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_execution_time - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_execution_time, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>upload_max_filesize - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_upload_max_filesize, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_input_vars - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_input_vars, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>

                   <?php if ($_smarty_tpl->tpl_vars['all_extensions']->value) {?>
                       <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">Server extensions</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information clearfix">
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_extensions']->value, 'ext_val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ext_val']->value) {
?>
                                           <div class="col-xl-3 col-lg-4 col-md-6">
                                               <div>
                                                   <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ext_val']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                               </div>
                                           </div>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>
               </div>
            </div>
        </div>
    </div>
</div><?php }
}
