<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:13:15
  from '/home/ganzaby/diplom.dod.by/backend/design/html/robots.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fc3abb29294_45256047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76375c8687bb93cd538307b91940df1b7a4e29d7' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/robots.tpl',
      1 => 1614790713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_603fc3abb29294_45256047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->robots_file ,false ,32);?>

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->robots_file, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-5 col-md-5 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'write_error') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->robots_permissions, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->robots_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, false);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
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
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->robots_message, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed fn_toggle_wrap min_height_230px">
            <div class="heading_box">robots.txt</div>
            <form method="post">
                <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
                <textarea id="robots" class="settings_robots_area" name="robots"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['robots_txt']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" name="save" class="fn_save btn btn_small btn_blue float-md-right">
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
</div>

<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="design/js/codemirror/theme/monokai.css">

<?php echo '<script'; ?>
 src="design/js/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
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
        var editor = CodeMirror.fromTextArea(document.getElementById("robots"), {
            mode: "mixed",
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
