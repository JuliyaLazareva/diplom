<?php
/* Smarty version 3.1.33, created on 2021-03-03 22:10:39
  from '/home/ganzaby/diplom.dod.by/backend/design/html/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fdf2f3f67d0_32743382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d824d247fc37f6a500087c59f1d78b863da206' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/banner.tpl',
      1 => 1614790709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_603fdf2f3f67d0_32743382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/home/ganzaby/diplom.dod.by/backend/design/compiled/41d824d247fc37f6a500087c59f1d78b863da206_0.file.banner.tpl.php',
    'uid' => '41d824d247fc37f6a500087c59f1d78b863da206',
    'call_name' => 'smarty_template_function_category_select_1924967367603fdf2f334144_09941394',
  ),
));
if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['banner']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->banner_new_group ,false ,32);
}?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['banner']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_new_group, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_group_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_updated, ENT_QUOTES, 'UTF-8', true);?>

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

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'group_id_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_id_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_group_id') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_enter_id, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                <div class="row d_flex">
                                        <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="mt-h">
                                    <span class="boxes_inline">
                                        <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline">
                                        <input class="switch-input" name="show_all_pages" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->show_all_pages) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                    </span>
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_group, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="input-group">
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_id_enter, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <span class="boxes_inline bnr_id_grup">
                                        <input name="group_id" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->group_id, ENT_QUOTES, 'UTF-8', true);?>
" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_banner, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="toggle_body_wrap fn_card on">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="pages[]" class="selectpicker fn_action_select" multiple="multiple" data-selected-text-format="count">
                                        <option value="0" <?php if (!$_smarty_tpl->tpl_vars['banner']->value->page_selected || in_array(0,$_smarty_tpl->tpl_vars['banner']->value->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['page']->value->name != '') {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value->page_selected && in_array($_smarty_tpl->tpl_vars['page']->value->id,$_smarty_tpl->tpl_vars['banner']->value->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="categories[]" class="selectpicker" multiple="multiple" data-selected-text-format="count">
                                        <option value='0' <?php if (!$_smarty_tpl->tpl_vars['banner']->value->category_selected || in_array(0,$_smarty_tpl->tpl_vars['banner']->value->category_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['banner']->value->category_selected), true);?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="brands[]" class="selectpicker" multiple="multiple" data-selected-text-format="count">
                                        <option value='0' <?php if (!$_smarty_tpl->tpl_vars['banner']->value->brand_selected || in_array(0,$_smarty_tpl->tpl_vars['banner']->value->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
                                            <option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['banner']->value->brand_selected && in_array($_smarty_tpl->tpl_vars['brand']->value->id,$_smarty_tpl->tpl_vars['banner']->value->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="boxed fn_toggle_wrap min_height_230px">
                    <div class="heading_box">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                    <textarea id="fn_banner_code" readonly>
{get_banner var="banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
" group="<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
"}
{if $banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
->items}
<div class="container hidden-md-down">
    <div class="fn_banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
 owl-carousel">
        {foreach $banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
->items as $bi}
        <div>
            {if $bi->url}
                <a href="{$bi->url}" target="_blank">
            {/if}
            {if $bi->image}
                <img src="{$bi->image|resize:1170:390:false:$config->resized_banners_images_dir}" alt="{$bi->alt}" title="{$bi->title}"/>
            {/if}
            <span class="owl-carousel__name">
                {$bi->title}
            </span>
            {if $bi->description}
                <span class="owl-carousel__description">
                {$bi->description}
            </span>
            {/if}
            {if $bi->url}
            </a>
            {/if}
        </div>
        {/foreach}
    </div>
</div>
{/if}</textarea>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="boxed fn_toggle_wrap min_height_230px">
                    <div class="heading_box">
                       <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction2, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
<textarea disabled id="fn_banner_js">
$('.fn_banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
').owlCarousel({
    loop:false,
    lazyLoad:true,
    nav:false,
    dotsEach:true,
    items:1
});</textarea>
                </div>
            </div>
        </div>
    <?php }?>

</form>
<?php if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
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
 src="design/js/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
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
            var editor = CodeMirror.fromTextArea(document.getElementById("fn_banner_code"), {
                mode: "smartymixed",
                lineNumbers: true,
                matchBrackets: false,
                enterMode: 'keep',
                indentWithTabs: false,
                indentUnit: 1,
                tabMode: 'classic',
                theme : 'monokai',
                readOnly: true,
            });

            var editor_2 = CodeMirror.fromTextArea(document.getElementById("fn_banner_js"), {
                mode: "javascript",
                lineNumbers: true,
                matchBrackets: false,
                enterMode: 'keep',
                indentWithTabs: false,
                indentUnit: 1,
                tabMode: 'classic',
                theme : 'monokai',
                readOnly: true,
            });
        <?php echo '</script'; ?>
>
    
<?php }
}
/* smarty_template_function_category_select_1924967367603fdf2f334144_09941394 */
if (!function_exists('smarty_template_function_category_select_1924967367603fdf2f334144_09941394')) {
function smarty_template_function_category_select_1924967367603fdf2f334144_09941394(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value && in_array($_smarty_tpl->tpl_vars['category']->value->id,$_smarty_tpl->tpl_vars['selected']->value)) {?>selected<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;<?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected'=>$_smarty_tpl->tpl_vars['banner']->value->category_selected,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}}
/*/ smarty_template_function_category_select_1924967367603fdf2f334144_09941394 */
}
