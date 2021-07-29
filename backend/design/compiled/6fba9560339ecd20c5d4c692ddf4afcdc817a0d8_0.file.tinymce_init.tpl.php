<?php
/* Smarty version 3.1.33, created on 2021-01-24 20:10:05
  from '/home/ganzaby/joo.by/backend/design/html/tinymce_init.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da9edbebb83_26753020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fba9560339ecd20c5d4c692ddf4afcdc817a0d8' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/tinymce_init.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600da9edbebb83_26753020 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="design/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function(){
        tinyMCE.init({
            selector: "textarea.editor_large, textarea.editor_small",
            height: 300,
            plugins: [
                "advlist autolink lists link image preview anchor responsivefilemanager emoticons",
                "hr visualchars autosave noneditable searchreplace wordcount visualblocks",
                "code fullscreen save charmap nonbreaking",
                "insertdatetime media table paste imagetools"
            ],
            toolbar_items_size : 'small',
            menubar:'file edit insert view format table tools',
            toolbar1: "restoredraft save fontselect formatselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | forecolor backcolor | table | link unlink anchor media image emoticons | fullscreen visualblocks visualchars code",
            statusbar: true,
            font_formats: "Andale Mono=andale mono,times;"+
            "Arial=arial,helvetica,sans-serif;"+
            "Arial Black=arial black,avant garde;"+
            "Book Antiqua=book antiqua,palatino;"+
            "Comic Sans MS=comic sans ms,sans-serif;"+
            "Courier New=courier new,courier;"+
            "Georgia=georgia,palatino;"+
            "Helvetica=helvetica;"+
            "Impact=impact,chicago;"+
            "Symbol=symbol;"+
            "Tahoma=tahoma,arial,helvetica,sans-serif;"+
            "Terminal=terminal,monaco;"+
            "Times New Roman=times new roman,times;"+
            "Trebuchet MS=trebuchet ms,geneva;"+
            "Verdana=verdana,geneva;"+
            "Webdings=webdings;"+
            "Wingdings=wingdings,zapf dingbats",


            image_advtab: true,
            external_filemanager_path:"<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/filemanager/",
            filemanager_title:"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tinymce_init_filemanager, ENT_QUOTES, 'UTF-8', true);?>
" ,
            external_plugins: { "filemanager" : "<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/filemanager/plugin.min.js"},


            save_enablewhendirty: true,
            save_title: "save",
            theme_advanced_buttons3_add : "save",
            save_onsavecallback: function() {
                $("[type='submit']").trigger("click");
                },

            language : "<?php echo $_smarty_tpl->tpl_vars['manager']->value->lang;?>
",
            /* Замена тега P на BR при разбивке на абзацы
             force_br_newlines : true,
             force_p_newlines : false,
             forced_root_block : '',
             */
            <?php if ($_GET['controller'] != "SeoPatternsAdmin") {?>
                setup : function(ed) {
                    ed.on('keyup change', (function() {
                        set_meta();
                    }));
                }
            <?php }?>

            });
    });

<?php echo '</script'; ?>
>
<?php }
}
