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
<?php //debug($vector_insumos[0]['nombre']);exit;?>
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
                

        },
        chartBar_A: function () {
                
                
                var data = [
                <?php foreach($vector_insumos as $ins):?>
                      ["<?php echo $ins['nombre'];?>",<?php echo $ins['total'];?>],  
                <?php endforeach;?>
                    ];
                $.plot("#reporteinventario", [ data ], {
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
				bars: {
					show: true,
					barWidth: 0.2,
					align: "center"
				}
                                //,color: "#4b8df8"
			},
            
			xaxis: {
				mode: "categories",
				tickLength: 0
			},
            colors: ["#edc240", "#5EB95E"],
                        shadowSize: 1
		});

                
        }
}
</script>