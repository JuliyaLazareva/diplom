<?php
/* Smarty version 3.1.33, created on 2021-01-24 20:20:26
  from '/home/ganzaby/joo.by/backend/design/html/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600dac5a145fa7_31601113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12035f557ecb364d09b7efc8d3103350627b25e5' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/scripts.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_600dac5a145fa7_31601113 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['script_file']->value) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', ((string)$_smarty_tpl->tpl_vars['btr']->value->scripts_scripts)." ".((string)$_smarty_tpl->tpl_vars['script_file']->value) ,false ,32);
}?>

<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="design/js/codemirror/theme/monokai.css">

<?php echo '<script'; ?>
 src="design/js/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="design/js/codemirror/mode/smarty/smarty.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/smartymixed/smartymixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/xml/xml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/htmlmixed/htmlmixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
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
        .cm-s-monokai .cm-smarty.cm-tag{color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-string {color: #007000;}
        .cm-s-monokai .cm-smarty.cm-variable {color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-variable-2 {color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-variable-3 {color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-property {color: #ff008a;}
        .cm-s-monokai .cm-comment {color: #505050;}
        .cm-s-monokai .cm-smarty.cm-attribute {color: #ff20Fa;}
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
                url: 'ajax/save_script.php',
                data: {'content': content, 'theme':'<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
', 'script': '<?php echo $_smarty_tpl->tpl_vars['script_file']->value;?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
                success: function(data){
                    $('.CodeMirror').animate({'background-color': '#fff'},500);
                    $('.CodeMirror').animate({'background-color': '#272822'},500);
                },
                dataType: 'json'
            });
        }

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
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8', true);?>

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
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_file']->value, ENT_QUOTES, 'UTF-8', true);?>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                        <a class="design_tab <?php if ($_smarty_tpl->tpl_vars['script_file']->value == $_smarty_tpl->tpl_vars['s']->value) {?>focus<?php }?>" href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ScriptsAdmin','file'=>$_smarty_tpl->tpl_vars['s']->value),$_smarty_tpl ) );?>
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


<?php if ($_smarty_tpl->tpl_vars['script_file']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_template, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_file']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>

                <form class="fn_fast_button">
                    <textarea id="script_content" name="script_content" style="width:700px;height:500px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['script_content']->value, ENT_QUOTES, 'UTF-8', true);?>
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
        var editor = CodeMirror.fromTextArea(document.getElementById("script_content"), {
            mode: "javascript",
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: false,
            enterMode: 'keep',
            indentWithTabs: false,
            indentUnit: 2,
            tabMode: 'classic',
            theme : 'monokai'
        });
    <?php echo '</script'; ?>
>
    

<?php }
}
}
