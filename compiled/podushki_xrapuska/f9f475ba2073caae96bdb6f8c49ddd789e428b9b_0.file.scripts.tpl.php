<?php
/* Smarty version 3.1.33, created on 2021-03-06 10:51:16
  from '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60433474bacec2_03582905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f475ba2073caae96bdb6f8c49ddd789e428b9b' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/design/podushki_xrapuska/html/scripts.tpl',
      1 => 1614790857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60433474bacec2_03582905 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    
    okay.max_order_amount = <?php echo $_smarty_tpl->tpl_vars['settings']->value->max_order_amount;?>
;

    /*Сброс фильтра*/
    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductsController' || $_smarty_tpl->tpl_vars['controller']->value == 'BrandController' || $_smarty_tpl->tpl_vars['controller']->value == 'CategoryController') {?>
        $(document).on('click', '.fn_filter_reset', function () {
            var date = new Date(0);
            document.cookie = "price_filter=; path=/; expires=" + date.toUTCString();
        });
    <?php }?>



    /* Mobile menu */
    $(function(){
        var $main_nav = $('.fn_mobile_menu');
        var $toggle = $('.fn_menu_switch');
        var defaultData = {
            maxWidth: false,
            navClass: 'mobile_nav',
            customToggle: $toggle,
            levelTitles: true,
            insertClose: -1,
            labelBack: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->mobile_menu_prev, ENT_QUOTES, 'UTF-8', true);?>
',
            labelClose: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->mobile_menu_close, ENT_QUOTES, 'UTF-8', true);?>
',
            closeLevels: false
        };
        $main_nav.hcOffcanvasNav(defaultData);
    });

    /* Показать все в фильтрах по свойствам и в футере категории */
    $( document ).on( 'click', '.fn_view_all', function(e) {
        $(this).closest('.fn_view_content').toggleClass('opened');
        $('.fn_view_all').not($(this)).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
');
        $('.fn_view_all').not($(this)).closest('.fn_view_content').removeClass('opened');
        if ($(this).closest('.fn_view_content').hasClass('opened')) {
            $(this).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_hide, ENT_QUOTES, 'UTF-8', true);?>
');
        } else {
            $(this).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
');
        }
        return false;
    });

    /* Предзаказ */
    okay.is_preorder = <?php echo $_smarty_tpl->tpl_vars['settings']->value->is_preorder;?>
;

    /* Ошибка при отправке комментария в посте */
    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'BlogController' && $_smarty_tpl->tpl_vars['error']->value) {?>
        /* Переход по якорю к форме */
        $( window ).on( 'load', function() {
            location.href = location.href + '#fn_blog_comment';
            $( '#fn_blog_comment' ).trigger( 'submit' );
        } );
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_callback_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value) {?>
        $(function() {
            $.fancybox.open({
                src: '#fn_callback',
                type : 'inline'
            });
        });
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' && $_smarty_tpl->tpl_vars['error']->value) {?>
        $( window ).on( 'load', function() {
            $( '.tab_navigation a' ).removeClass( 'selected' );
            $( '.tab' ).hide();
            $( 'a[href="#comments"]' ).addClass( 'selected' );
             $( '#comments').show();
        } );
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController') {?>
        $( window ).on( 'load', function() {
            if( location.hash.search('comment') !=-1 ) {
                $( '.tab_navigation a' ).removeClass( 'selected' );
                $( '.tab' ).hide();
                $( 'a[href="#comments"]' ).addClass( 'selected' );
                 $( '#comments').show();
            }
        } );
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_subscribe_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
        $( window ).on( 'load', function() {
            location.href = location.href + '#subscribe_error';
            $.fancybox.open( {
                src: '#subscribe_error',
                type : 'inline',
            } );
        } );
    <?php }?>

    var form_enter_name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_name, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_phone = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_phone, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_error_captcha = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_error_captcha, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_email = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_email, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_password = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_password, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_message = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_message, ENT_QUOTES, 'UTF-8', true);?>
";

    if($(".fn_validate_product").length>0) {
        $(".fn_validate_product").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }
    if($(".fn_validate_callback").length>0) {
        $(".fn_validate_callback").validate({
            rules: {
                name: "required",
                phone: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                phone: form_enter_phone,
                captcha_code: form_error_captcha
            }

        });
    }
    if($(".fn_validate_subscribe").length>0) {
        $(".fn_validate_subscribe").validate({
            rules: {
                subscribe_email: "required",
            },
            messages: {
                subscribe_email: form_enter_email
            }
        });
    }
    if($(".fn_validate_post").length>0) {
        $(".fn_validate_post").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_feedback").length>0) {
        $(".fn_validate_feedback").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                message: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                message: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_cart").length>0) {
        $(".fn_validate_cart").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha
            }
        });
		
		var submitted_cart = false;
        $('.fn_validate_cart').on('submit', function () {
            if ($('.fn_validate_cart').valid() === true) {
                if (submitted_cart === true) {
                    return false;
                } else {
                    submitted_cart = true;
                }
            }
        });
    }

    if($(".fn_validate_login").length>0) {
        $(".fn_validate_login").validate({
            rules: {
                email: "required",
                password: "required",
            },
            messages: {
                email: form_enter_email,
                password: form_enter_password
            }
        });
    }

    if($(".fn_validate_register").length>0) {
        $(".fn_validate_register").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha,
                password: form_enter_password
            }
        });
    }

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->sj_shares) {?>
         if($(".fn_share").length>0) {
        <?php if ($_smarty_tpl->tpl_vars['js_custom_socials']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_custom_socials']->value, 'params', false, 'social');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social']->value => $_smarty_tpl->tpl_vars['params']->value) {
?>
        jsSocials.shares.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value, ENT_QUOTES, 'UTF-8', true);?>
 = <?php echo json_encode($_smarty_tpl->tpl_vars['params']->value);?>
;
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
                $(".fn_share").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shares: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value->sj_shares);?>

            });
        }
    <?php }?>

<?php echo '</script'; ?>
>
<?php }
}
