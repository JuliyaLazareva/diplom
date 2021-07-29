<?php
/* Smarty version 3.1.33, created on 2021-03-15 10:07:09
  from '/home/ganzaby/diplom.dod.by/backend/design/html/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_604f079dbc42f8_78755168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c26e0a7ad22d23f97de0c88988463dabdc877c1' => 
    array (
      0 => '/home/ganzaby/diplom.dod.by/backend/design/html/stats.tpl',
      1 => 1614790714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_604f079dbc42f8_78755168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->stats_stats ,false ,32);?>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_stats, ENT_QUOTES, 'UTF-8', true);?>

            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_stats_stats, ENT_QUOTES, 'UTF-8', true);?>
">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, false);
?>
            </i>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed fn_toggle_wrap">
            <div id='container'></div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    var stats_orders = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_orders, ENT_QUOTES, 'UTF-8', true);?>
';
    var stats_message = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_message, ENT_QUOTES, 'UTF-8', true);?>
';
    var stats_orders_amount =  '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_orders_amount, ENT_QUOTES, 'UTF-8', true);?>
';
<?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="design/js/highcharts/highcharts.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/js/highcharts/themes/avocado.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="design/js/highcharts/controllers/exporting.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var chart;
    $(function() {
        var options = {
            exporting: {
                chartOptions: { // specific options for the exported image
                    plotOptions: {
                        series: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    }
                },
                fallbackToExportServer: false
            },
            chart: {
                zoomType: 'x',
                renderTo: 'container',
                defaultSeriesType: 'area',
                type : "line"
            },
            title: {
                text: stats_orders
            },
            subtitle: {
                text: stats_message
            },
            xAxis: {
                type: 'datetime',
                minRange: 7 * 24 * 3600000,
                maxZoom: 7 * 24 * 3600000,
                gridLineWidth: 1,
                ordinal: true,
                showEmpty: false
            },
            yAxis: {
                title: {
                    text: '<?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
'
                }
            },


            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: true,
                    connectNulls: false
                },
                area: {
                    marker: {
                        enabled: false
                    },
                }
            },
            series: []

        };

        $.get('ajax/stat.php', function(data){
            var series = {
                data: []
            };


            var minDate = Date.UTC(data[0].year, data[0].month-1, data[0].day),
                maxDate = Date.UTC(data[data.length-1].year, data[data.length-1].month-1, data[data.length-1].day);

            var newDates = [], currentDate = minDate, d;

            while (currentDate <= maxDate) {
                d = new Date(currentDate);
                newDates.push((d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear());
                currentDate += (24 * 60 * 60 * 1000); // add one day
            }
            series.name = stats_orders_amount + '<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
';

            // Iterate over the lines and add categories or series
            $.each(data, function(lineNo, line) {
                series.data.push([Date.UTC(line.year, line.month-1, line.day), parseInt(line.y)]);
            });
            //
            options.series.push(series);

            // Create the chart
            var chart = new Highcharts.Chart(options);
        });
    });
    // Apply the theme
    var highchartsOptions = Highcharts.setOptions(Highcharts.theme);

<?php echo '</script'; ?>
>

<?php }
}
