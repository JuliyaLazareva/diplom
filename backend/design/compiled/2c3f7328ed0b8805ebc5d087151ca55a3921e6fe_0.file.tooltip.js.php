<?php
/* Smarty version 3.1.33, created on 2021-03-03 20:15:40
  from '/home/ganzaby/diplom.dod.by/backend/design/js/admintooltip/tooltip.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603fc43c40ece7_08545676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3f7328ed0b8805ebc5d087151ca55a3921e6fe' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/js/admintooltip/tooltip.js',
      1 => 1614790719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603fc43c40ece7_08545676 (Smarty_Internal_Template $_smarty_tpl) {
?>$(function() {
    tooltip = $(".fn_tooltip");
    $(document).on('mouseleave', '.tooltip', function(){ tooltipcanclose=true;setTimeout("close_tooltip();", 300); });
    $(document).on('mouseover', '.tooltip', function(){ tooltipcanclose=false; });
    $(document).on('click', '.openTools', function() { $(this).closest('.admTools').toggleClass('open'); });

    if(typeof(Storage) !== "undefined") {

        function setTools() {
            if ( localStorage.getItem("adminTooltip") == "set" ) {
                $('[data-page], [data-category], [data-brand], [data-product], [data-post], [data-feature], [data-language], [data-languages]').on('mouseover', show_tooltip);
                $('.changeTools').addClass('on').attr('title', '<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_disable;?>
');
            } else {
                $('[data-page], [data-category], [data-brand], [data-product], [data-post], [data-feature], [data-language], [data-languages]').off('mouseover', show_tooltip);
                $('.changeTools').removeClass('on').attr('title', '<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_enable;?>
');
            }
        }

        setTools();

        $(document).on('click', '.changeTools', function() {
            if ( localStorage.getItem("adminTooltip") == "set" ) {
                localStorage.setItem("adminTooltip", "unset");
                setTools();
            } else {
                localStorage.setItem("adminTooltip", "set");
                setTools();
            }
        });

    } else {
        $('[data-page], [data-category], [data-brand], [data-product], [data-post], [data-feature], [data-language], [data-languages]').on('mouseover', show_tooltip);
    }
});

function show_tooltip()
{
    tooltipcanclose=false;
    tooltip.show();
    $(this).on('mouseleave', function(){ tooltipcanclose=true;setTimeout("close_tooltip();", 500); });

    flip = !($(this).offset().left+tooltip.width()+25 < $('body').width());

    tooltip.css('top',  $(this).outerHeight() + 5 + $(this).offset().top + 'px');
    tooltip.css('left', ($(this).offset().left + $(this).outerWidth()*0.5 - (flip ? tooltip.width()-40 : 0)  + 0) + 'px');

    from = encodeURIComponent(window.location);
    tooltipcontent = '';
    var lang = '&lang_id=<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
';
    if(typeof  lang_id != 'undefined') {
        lang = '&lang_id=' + lang_id;
    }

    if(id = $(this).attr('data-page'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=PageAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_page;?>
</a>";
        tooltipcontent += "<a href='backend/index.php?controller=PageAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_page;?>
</a>";
    }

    if(id = $(this).attr('data-category'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=CategoryAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_category;?>
</a>";
        tooltipcontent += "<a href='backend/index.php?controller=CategoryAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_category;?>
</a>";
        tooltipcontent += "<a href='backend/index.php?controller=ProductAdmin&category_id="+id+"&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_product;?>
</a>";
    }

    if(id = $(this).attr('data-brand'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=BrandAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_brand;?>
</a>";
        tooltipcontent += "<a href='backend/index.php?controller=BrandAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_brand;?>
</a>";
    }

    if(id = $(this).attr('data-product'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=ProductAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_product;?>
</a>";
        tooltipcontent += "<a href='backend/index.php?controller=ProductAdmin&category_id="+id+"&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_product;?>
</a>";
    }

    if(id = $(this).attr('data-post'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=PostAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_post;?>
</a>";
    }

    if(id = $(this).attr('data-feature'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=FeatureAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_feature;?>
</a>";
        tooltipcontent += "<a href='backend/index.php?controller=FeatureAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_feature;?>
</a>";
    }

    if(id = $(this).attr('data-language'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=TranslationAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_translarion;?>
</a>";
    }

    if(id = $(this).attr('data-languages'))
    {
        tooltipcontent = "<a href='backend/index.php?controller=LanguagesAdmin&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_language;?>
</a>";
    }

    $('.tooltip').html(tooltipcontent);
}

function close_tooltip()
{
    if(tooltipcanclose)
    {
        tooltipcanclose=false;
        tooltip.hide();
    }
}

function SetTooltips() {
    elements = document.getElementsByTagName("body")[0].getElementsByTagName("*");

    for (i = 0; i <elements.length; i++)
    {
        tooltip = elements[i].getAttribute('tooltip');
        if(tooltip)
        {
            elements[i].onmouseout = function(e) { tooltipcanclose=true;setTimeout("CloseTooltip();", 1000); };
            switch(tooltip)
            {
                case 'product':
                    elements[i].onmouseover = function(e) { AdminProductTooltip(this,  this.getAttribute('product_id'));tooltipcanclose=false; }
                    break;
                case 'hit':
                    elements[i].onmouseover = function(e) { AdminHitTooltip(this,  this.getAttribute('product_id'));tooltipcanclose=false;tooltipcanclose=false; }
                    break;
                case 'category':
                    elements[i].onmouseover = function(e) { AdminCategoryTooltip(this,  this.getAttribute('category_id'));tooltipcanclose=false; }
                    break;
                case 'news':
                    elements[i].onmouseover = function(e) { AdminNewsTooltip(this,  this.getAttribute('news_id'));tooltipcanclose=false; }
                    break;
                case 'article':
                    elements[i].onmouseover = function(e) { AdminArticleTooltip(this,  this.getAttribute('article_id'));tooltipcanclose=false; }
                    break;
                case 'page':
                    elements[i].onmouseover = function(e) { AdminPageTooltip(this,  this.getAttribute('id')); tooltipcanclose=false; }
                    break;
                case 'currency':
                    elements[i].onmouseover = function(e) { AdminCurrencyTooltip(this); tooltipcanclose=false; }
                    break;
            }
        }
    }
}


function ShowTooltip(i, content) {

    tooltip = document.getElementById('tooltip');

    document.getElementById('tooltip').innerHTML = content;
    tooltip.style.display = 'block';

    var xleft=0;
    var xtop=0;
    o = i;

    do {
        xleft += o.offsetLeft;
        xtop  += o.offsetTop;

    } while (o=o.offsetParent);

    xwidth  = i.offsetWidth  ? i.offsetWidth  : i.style.pixelWidth;
    xheight = i.offsetHeight ? i.offsetHeight : i.style.pixelHeight;

    bwidth =  tooltip.offsetWidth  ? tooltip.offsetWidth  : tooltip.style.pixelWidth;

    w = window;

    xbody  = document.compatMode=='CSS1Compat' ? w.document.documentElement : w.document.body;
    dwidth = xbody.clientWidth  ? xbody.clientWidth   : w.innerWidth;
    bwidth = tooltip.offsetWidth ? tooltip.offsetWidth  : tooltip.style.pixelWidth;

    flip = !( 25 + xleft + bwidth < dwidth);

    tooltip.style.top  = xheight - 3 + xtop + 'px';
    tooltip.style.left = (xleft - (flip ? bwidth : 0)  + 25) + 'px';

    return false;
}<?php }
}
