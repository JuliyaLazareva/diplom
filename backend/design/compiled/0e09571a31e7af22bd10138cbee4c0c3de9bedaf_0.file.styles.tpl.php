<?php
/* Smarty version 3.1.33, created on 2021-01-30 18:05:59
  from '/home/ganzaby/joo.by/backend/design/html/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_601575d7d39a91_87340405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e09571a31e7af22bd10138cbee4c0c3de9bedaf' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/styles.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_601575d7d39a91_87340405 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['style_file']->value) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', ((string)$_smarty_tpl->tpl_vars['btr']->value->styles_styles)." ".((string)$_smarty_tpl->tpl_vars['style_file']->value) ,false ,32);
}?>

<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="design/js/codemirror/theme/monokai.css">
<?php echo '<script'; ?>
 src="design/js/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="design/js/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/addon/selection/active-line.js"><?php echo '</script'; ?>
>
 

<style type="text/css">

.CodeMirror{
    font-family:'Courier New';
    margin-bottom:10px;
    border:1px solid #c0c0c0;
    background-color: #ffffff;
    height: auto;
    min-height: 100px;
    width:100%;
}
.CodeMirror-scroll
{
    overflow-y: hidden;
    overflow-x: auto;
}
</style>

<?php echo '<script'; ?>
>
$(function() {    
    // Сохранение кода аяксом
    function save() {
        $('.CodeMirror').css('background-color','#e0ffe0');
        content = editor.getValue();
        $.ajax({
            type: 'POST',
            url: 'ajax/save_style.php',
            data: {'content': content, 'theme':'<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
', 'style': '<?php echo $_smarty_tpl->tpl_vars['style_file']->value;?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
            success: function(data){
                $('.CodeMirror').animate({'background-color': '#ffffff'});
                $('.CodeMirror').animate({'background-color': '#272822'},500);
            },
            dataType: 'json'
        });
    }
    // Нажали кнопку Сохранить
    $('.fn_save').on('click',function(){
        save();
        return false;
    });
});
<?php echo '</script'; ?>
>


<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->styles_style, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['style_file']->value;?>

            </div>
        </div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'permissions') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permission, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['style_file']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'theme_locked') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="boxed boxed_attention">
            <div class="">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_design_message, ENT_QUOTES, 'UTF-8', true);?>

                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_design_message2, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed match fn_toggle_wrap tabs">
            <div class="design_tabs">
                <div class="design_container">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                        <a class="design_tab <?php if ($_smarty_tpl->tpl_vars['style_file']->value == $_smarty_tpl->tpl_vars['s']->value) {?>focus<?php }?>" href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'StylesAdmin','file'=>$_smarty_tpl->tpl_vars['s']->value),$_smarty_tpl ) );?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['style_file']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->styles_styles, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style_file']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                 <form class="fn_fast_button">
                    <textarea id="content" name="content" style="width:100%;height:500px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </form>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" name="save" class="fn_save btn btn_small btn_blue float-md-right">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, false);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

        
    <?php echo '<script'; ?>
>

    var editor = CodeMirror.fromTextArea(document.getElementById("content"), {
            mode: "css",
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: false,
            enterMode: 'keep',
            indentWithTabs: false,
            indentUnit: 1,
            tabMode: 'classic',
            theme : 'monokai'
        });
    <?php echo '</script'; ?>
>
    

<?php }
}
}
