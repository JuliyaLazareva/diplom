<?php
/* Smarty version 3.1.33, created on 2021-01-24 20:09:10
  from '/home/ganzaby/joo.by/backend/design/html/translation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600da9b6abf9c1_89993003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169dab8b73cf65619f3595a7f29fcb9edb2cfb0b' => 
    array (
      0 => '/home/ganzaby/joo.by/backend/design/html/translation.tpl',
      1 => 1611506928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_600da9b6abf9c1_89993003 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['translation']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['translation']->value->label ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->translation_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <?php if (!$_smarty_tpl->tpl_vars['translation']->value->id) {?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_add, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_theme;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);
}?></div>
        <?php } else { ?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['translation']->value->label, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_theme;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);
}?></div>
        <?php }?>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

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
                    <span class="text">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_updated, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </span>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'TranslationsAdmin','id'=>null),$_smarty_tpl ) );?>
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

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'label_empty') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_empty, ENT_QUOTES, 'UTF-8', true);
}?>
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'label_exists') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_used, ENT_QUOTES, 'UTF-8', true);
}?>
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'label_is_class') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_not_allowed, ENT_QUOTES, 'UTF-8', true);
}?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input name=id type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['translation']->value->id;?>
"/>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="boxed match_matchHeight_true">
                <div class="row">
                                        <div class="col-lg-12 col-md-12">
                        <div class="heading_label">

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input name="label" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['translation']->value->label;?>
" <?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>readonly=""<?php }?> />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-h">
                            <div class="heading_label mb-h">
                                <?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['lang']->value->label).".png")) {?>
                                <div class="translation_icon">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['lang']->value->label).".png"),32,32,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" />
                                </div>
                                <?php }?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                            <div class="">
                                <textarea name="lang_<?php echo $_smarty_tpl->tpl_vars['lang']->value->label;?>
" class="form-control okay_textarea" <?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>readonly=""<?php }?>><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value->id;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['translation']->value->values[$_prefixVariable1];?>
</textarea>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value) {?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-1">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</form>


    <?php echo '<script'; ?>
>
        $(function() {
            $('textarea').on( "focusout", function(){
                label = $(this).val();
                label = label.replace(/[\s]+/gi, '_');
                label = translit(label);
                label = label.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();

                if(($('input[name="label"]').val() == label || $('input[name="label"]').val() == ''))
                    $('input[name="label"]').val(label);
            });

        });

        function translit(str)
        {
            var ru=("А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я").split("-")
            var en=("A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya").split("-")
            var res = '';
            for(var i=0, l=str.length; i<l; i++)
            {
                var s = str.charAt(i), n = ru.indexOf(s);
                if(n >= 0) { res += en[n]; }
                else { res += s; }
            }
            return res;
        }
    <?php echo '</script'; ?>
>


<?php }
}
