<?php 
App::uses('Item', 'Model');
$modeloitem = new Item();
?>

<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reportes'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            
            <div class="row-fluid">  
            <div class="span12 well well-nice">
                <div class="span12 widget well well-black">
                            <div class="widget-header">
                                <h4><i class="fontello-icon-chart"></i>Reporte de Ventas</h4>
                            </div>
                            <div class="widget-content">
                                <div class="widget-body">
                                    <div id="statChartFlotLineB" style="width:100%; height:300px"> </div>
                                    <!-- // Chart 1 --> 
                                </div>
                            </div>
                </div>
            </div>  
                        
            </div>
            <div class="row-fluid">  
            <div class="span12 well well-nice">
                <div class="span12 widget well well-black">
                            <div class="widget-header">
                                <h4><i class="fontello-icon-chart"></i>Inventario Actual</h4>
                            </div>
                            <div class="widget-content">
                                <div class="widget-body">
                                    <div id="reporteinventario" style="width:100%; height:250px"> </div>
                                    <!-- // Chart 1 --> 
                                </div>
                            </div>
                </div>
            </div>  
                        
            </div>
        </section>
    </div>  
</div> 

<script src="<?php echo $this->webroot;?>js/plugins/sparkline/jquery.sparkline.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.categories.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.grow.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.orderBars.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.pie.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.resize.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.selection.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.stack.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.stackpercent.js"></script> 
<script src="<?php echo $this->webroot;?>js/plugins/flot/jquery.flot.time.js"></script> 
<script>

$(document).ready(function () {
        demo_statistic_chart.chartLines_B();
        demo_statistic_chart.chartBar_A();
});

var coloursChart = ["#edc240", "#61ba61", "#1083c7", "#db6464", "#ff9933", "#009999"]
demo_statistic_chart = {
    chartLines_B: function () {
                var elem = $('#statChartFlotLineB');
                
                
                <?php foreach($productos as $pro):?>
                <?php
                            $itemsventa = $modeloitem->find('all',array('recursive' => 0,
                                'fields' => array('date(Item.fecha) fecha','SUM(Item.cantidad) cantidad'),
                                'group' => array('date(Item.fecha)'),
                                'conditions' => array('Item.producto_id' => $pro['Producto']['id'],
                                'Item.estado' => 1)));
                            ?>
                var d<?php echo $pro['Producto']['id'];?> = [
                    <?php foreach($itemsventa as $it):?>
                    <?php $fecha = split('-', $it[0]['fecha']);
                            $fecha = $fecha[1].'-'.$fecha[2].'-'.$fecha[0];?>
                    [new Date("<?php echo $it[0]['fecha']?>").getTime(),<?php echo $it[0]['cantidad'];?>],
                    <?php endforeach;?>
                ];
                <?php endforeach;?>
                

                var options = {
                        legend: {
                                position: "nw",
                                margin: [5, 5],
                                noColumns: 1,
                                labelBoxBorderColor: null,
                                backgroundColor: false,
                        },
                        grid: {
                                show: true,
                                aboveData: true,
                                color: "#ccc",
                                labelMargin: 5,
                                axisMargin: 0,
                                borderWidth: 0,
                                borderColor: true,
                                minBorderMargin: 5,
                                clickable: true,
                                hoverable: true,
                                autoHighlight: true,
                                mouseActiveRadius: 20
                        },
                        series: {
                                lines: {
                                        show: true,
                                        lineWidth: 3.5,
                                        fill: true,
                                        steps: false
                                },
                                points: {
                                        show: true,
                                        radius: 4,
                                        fill: true,
                                        fillColor: "#333",
                                        symbol: "circle"
                                },
                                grow: {
                                        active: true,
                                        stepMode: "linear",
                                        steps: 5,
                                        stepDelay: true
                                }
                        },
                        yaxis: {
                                min: 0,
                                font: {
                                        weight: "bold"
                                },
                                tickColor: "rgba(255,255,255,0.1)",
                        },
                        xaxis: {
                                mode: "time",
                                //ticks: 11,
                                //tickDecimals: 0,
                                font: {
                                        weight: "bold"
                                },
                                tickColor: "rgba(255,255,255,0.1)",
                        },
                        //xaxes: [ { mode: "time" } ],
                        colors: ["#edc240", "#5EB95E"],
                        shadowSize: 1
                };

                $.plot(elem, [
                <?php foreach($productos as $pro):?>
                {
                        label: "<?php echo $pro['Producto']['nombre'];?>",
                        data: d<?php echo $pro['Producto']['id'];?>
                },
                <?php endforeach;?>
                
                ], options);
                // Create a tooltip on our chart
                /*elem.qtip({
                        prerender: true,
                        content: 'Loading...',
                        position: {
                                viewport: $(window),
                                target: 'mouse',
                                adjust: {
                                        x: 7
                                }
                        },
                        show: false,
                        style: {
                                classes: 'ui-tooltip-shadow ui-tooltip-tipsy',
                                tip: false
                        }
                });*/

                // Bind the plot hover
                /*elem.bind("plothover", function (event, coords, item) {
                        var self = $(this),
                                api = $(this).qtip(),
                                previousPoint, content,
                                round = function (x) {
                                };
                        if(!item) {
                                api.cache.point = false;
                                return api.hide(event);
                        }
                        previousPoint = api.cache.point;
                        if(previousPoint !== item.dataIndex) {
                                api.cache.point = item.dataIndex;
                                content = item.series.label + ' = ' + round(item.datapoint[1]);
                                api.set('content.text', content);
                                api.elements.tooltip.stop(1, 1);
                                api.show(coords);
                        }
                });*/

        },
        chartBar_A: function () {
                var elem = $('#reporteinventario');
                
                

                var d1 = [];
                for(var i = 0; i <= 10; i += 1)
                d1.push([i, parseInt(Math.random() * 30)]);

                var d2 = [];
                for(var i = 0; i <= 10; i += 1)
                d2.push([i, parseInt(Math.random() * 30)]);

                var d3 = [];
                for(var i = 0; i <= 10; i += 1)
                d3.push([i, parseInt(Math.random() * 30)]);

                var data = new Array();

                data.push({
                        label: "Data One",
                        data: d1,
                        bars: {
                                order: 1
                        }
                });
                data.push({
                        label: "Data Two",
                        data: d2,
                        bars: {
                                order: 2
                        }
                });
                data.push({
                        label: "Data Three",
                        data: d3,
                        bars: {
                                order: 3
                        }
                });

                var options = {
                        bars: {
                                show: true,
                                barWidth: 0.2,
                                fill: 1
                        },
                        grid: {
                                show: true,
                                aboveData: false,
                                color: "#333",
                                labelMargin: 5,
                                axisMargin: 0,
                                borderWidth: 0,
                                borderColor: null,
                                minBorderMargin: 5,
                                clickable: true,
                                hoverable: true,
                                autoHighlight: false,
                                mouseActiveRadius: 20
                        },
                        series: {
                                grow: {
                                        active: false
                                }
                        },
                        legend: {
                                position: "ne"
                        },
                        yaxis: {
                                font: {
                                        weight: "bold"
                                },
                                color: "#333",
                                tickColor: "rgba(0,0,0,0.05)",
                        },
                        xaxis: {
                                font: {
                                        weight: "bold"
                                },
                                color: "#333",
                                tickColor: "rgba(0,0,0,0.05)",
                        },
                        colors: ["#9cd89d", "#5EB95E", "#499347", "#2c672a", "#174616"]
                };

                $.plot(elem, data, options);

                // Create a tooltip on our chart
                elem.qtip({
                        prerender: true,
                        content: 'Loading...',
                        position: {
                                viewport: $(window),
                                target: 'mouse',
                                adjust: {
                                        x: 7
                                }
                        },
                        show: false,
                        style: {
                                classes: 'ui-tooltip-shadow ui-tooltip-tipsy',
                                tip: false
                        }
                });

                // Bind the plot hover
                elem.bind("plothover", function (event, coords, item) {
                        var self = $(this),
                                api = $(this).qtip(),
                                previousPoint, content,
                                round = function (x) {
                                        return Math.round(x * 1000) / 1000;
                                };
                        if(!item) {
                                api.cache.point = false;
                                return api.hide(event);
                        }
                        previousPoint = api.cache.point;
                        if(previousPoint !== item.dataIndex) {
                                api.cache.point = item.dataIndex;
                                content = item.series.label + ' = ' + round(item.datapoint[1]);
                                api.set('content.text', content);
                                api.elements.tooltip.stop(1, 1);
                                api.show(coords);
                        }
                });
        }
}
</script>