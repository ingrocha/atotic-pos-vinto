<div id="main-content" class="main-content container-fluid">
     <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
    <!-- // fin sidebar -->
    <div class="row-fluid page-head">
        <h2 class="page-title"><i class="fontello-icon-monitor"></i> Viva Vinto <small>Panel de Control del sistema</small></h2>
        <p class="pagedesc">Estadisticas principales  </p>
        <div class="page-bar">
            <div class="btn-toolbar"> </div>
        </div>
    </div>
    <!-- // page head -->
    <div id="page-content" class="page-content">
        <section>
            <div class="row-fluid margin-top20">
                <div class="span8 grider">
                    <div class="widget widget-simple">
                        <div class="widget-header">
                            <h4 class="pull-left"><i class="fontello-icon-chart"></i> Estadisticas</h4>
                            <ul class="nav nav-pills pull-right">
                                <li class="active" id="orders-tab"> <a href="#TabOrders" data-toggle="tab">Ordenes</a> </li>
                                <li class="" id="sales-tab"> <a href="#TabAmounts" data-toggle="tab">Amounts</a> </li>
                            </ul>
                            <!-- // widget tabs--> 
                        </div>
                        <!-- // widget-head-->

                        <div class="widget-content">
                            <div class="widget-body tab-content">
                                <div class="tab-pane active" id="TabOrders">
                                    <h3 class="no-margin"><i class="fontello-icon-money"></i> Ordenes en 31/08/2012 <small>Timeline for sale</small></h3>
                                    <p class="pagedesc">The content below are loaded using inline data</p>
                                    <div id="ordersChart" style="width:100%; height:225px;"> </div>
                                </div>
                                <!-- // Chart Tabs - Orders chart -->

                                <div class="tab-pane" id="TabAmounts">
                                    <h3 class="no-margin"><i class="fontello-icon-money"></i> Amounts in 31/08/2012 <small>Timeline for sale</small></h3>
                                    <p class="pagedesc">The content below are loaded using inline data</p>
                                    <div id="amountsChart" style="width:100%; height:225px"> </div>
                                </div>
                                <!-- // Chart Tabs - Amounts chart -->

                                <div class="tab-pane" id="TabVisitors">
                                    <div id="ppplaceholder" style="width: 400px; height: 225px;"> </div>
                                </div>
                                <!-- // Chart Tabs - Amounts chart --> 
                            </div>
                        </div>

                        <!-- ? Content-inner - content without adding padding border - Adds padding content without border - for any content -->
                        <div class="widget-content">
                            <div class="well well-impressed bg-green-light"> 
                                <!-- Use Bootstrap list - thumbnails -->
                                <ul class="thumbnails no-margin">
                                    <li class="span3">
                                        <h4 class="simple-header"><i class="fontello-icon-dollar"></i> Revenue</h4>
                                        <div class="well well-nice bg-green-strong no-padding">
                                            <h2 class="text-center text-size">$1,983.43</h2>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <h4 class="simple-header"><i class="fontello-icon-back-in-time"></i> Tax</h4>
                                        <div class="well well-nice bg-green-strong no-padding">
                                            <h2 class="text-center text-size">$396.69</h2>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <h4 class="simple-header"><i class="fontello-icon-road"></i> Shipping</h4>
                                        <div class="well well-nice bg-green-strong no-padding">
                                            <h2 class="text-center text-size">$75.00</h2>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <h4 class="simple-header"><i class="fontello-icon-list-alt"></i> Quantity</h4>
                                        <div class="well well-nice bg-green-strong no-padding">
                                            <h2 class="text-center text-size">18</h2>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- // Info to daily sales --> 
                        </div>
                    </div>
                    <!-- // Widget -->
                   
                </div>
                <!-- // Column -->

                <div class="span4 grider">
                    <div class="statistic-box well well-black">
                        <div class="section-title">
                            <h4><i class="fontello-icon-back-in-time"></i> Ventas Totales</h4>
                        </div>
                        <div class="section-content">
                            <h2 class="statistic-values">Bs. <?php echo $ventasTotales['0']['0']['total']; ?> <span class="positive"><i class="fontello-icon-up-dir"></i> <sup></sup></span></h2>
                            <span class="info-block">Total recaudado del dia de hoy</span> </div>
                    </div>
                    <!-- // Statistic Box -->

                    <div class="statistic-box well well-black">
                        <div class="section-title">
                            <h6><i class="fontello-icon-back-in-time"></i> Cantidad Mesas Atendidas</h6>
                        </div>
                        <div class="section-content">
                            <h2 class="statistic-values">Atendidas: <?php echo $cantidadMesas['Pedido']['mesa']; ?> Mesas</h2>
                        </div>
                    </div>
                    <!-- // Statistic Box -->

                    <div class="widget widget-simple">
                        <div class="widget-header header-small"> 
                            <a class="btn btn-mini btn-success pull-right" href="<?php echo $this->Html->url(array('controller'=>'Controlpedidos', 'action'=>'index')); ?>">Mostrar Todos</a>
                            <h6><i class="fontello-icon-back-in-time"></i> Ultimos 5 Mesas Atendidas</h6>
                        </div>
                        <div class="widget-content">
                            <div class="widget-body">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="60%"> Moso</th>
                                            <th scope="col">Mesa</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($ultimosCincoPedidos as $ucp): ?>
                                        <tr>
                                            <td><?php echo $ucp['Usuario']['nombre']; ?></td>
                                            <td class="text-right"><?php echo $ucp['Pedido']['mesa']; ?></td>
                                            <td class="text-right bold">Bs.<?php echo $ucp['Pedido']['total']; ?></td>
                                        </tr>                                     
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- // Widget -->                    
                    
                </div>
            </div>
            <!-- // Example row --> 

        </section>
    </div>
</div>
<script>
    $(document).ready(function () {
		dashboard_B_chart.chartOrders ();
		dashboard_B_chart.chartAmounts ();
});

// CHARTS SETTINGS
// ------------------------------------------------------------------------------------------------ * -->
dashboard_B_chart = {
        // Dashboard 2 Orders
        chartOrders: function () {
				var elem = $('#ordersChart');
				
				var data = [{
						label: "Plato",
						color: "#4da74d",
						data: [
								[1341014400000, 1],
								[1341018000000, 2],
								[1341021600000, 3],
								[1341025200000, 4],
								[1341028800000, 5],
								[1341032400000, 6],
								[1341036000000, 1],
								[1341039600000, 0],
								[1341043200000, 2],
								[1341046800000, 0],
								[1341050400000, 0],
								[1341054000000, 1],
								[1341057600000, 3],
								[1341059400000, 2], //12:30
								[1341061200000, 1],
								[1341064800000, 2],
								[1341065700000, 2], //14:15
								[1341068400000, 0],
								[1341072000000, 1],
								[1341073500000, 1], //16:25
								[1341073800000, 1], //16:30
								[1341075600000, 3],
								[1341079200000, 4],
								[1341082800000, 1],
								[1341083800000, 1], //19:10
								[1341086400000, 0],
								[1341090000000, 0],
								[1341093600000, 0]							
						]
				}];
		
				var options = {
						series: {
								lines: {
										show: true,
										lineWidth: 3,
										fill: true
								},
								points: {
										show: false,
										radius: 3.5,
										lineWidth: 3
								},
								shadowSize: 3,
						},
						legend: {
								show: false,
						},
						xaxis: {
								mode: "time",
								font: {
										weight: "bold",
										size: 11
								},
								color: "#333",
								tickColor: "rgba(237,194,64,0.25)",
								tickLength: 5
						},
						yaxis: {
								color: "#333333",
								font: {
										weight: "bold",
										size: 11
								}
						},
						grid: {
								color: "#333333",
								tickColor: "rgba(0,0,0,0.03)",
								borderWidth: 0,
								// interactive stuff
								clickable: true,
								hoverable: true
						}
				};
		
				chartOrders_plot = $.plot(elem, data, options);
		
				// Create a tooltip on our chart
				elem.qtip({
						prerender: true,
						content: 'Loading...', // Use a loading message primarily
						position: {
								viewport: $(window), // Keep it visible within the window if possible
								target: 'mouse', // Position it in relation to the mouse
								adjust: {
										x: 7
								} // ...but adjust it a bit so it doesn't overlap it.
						},
						show: false, // We'll show it programatically, so no show event is needed
						style: {
								classes: 'ui-tooltip-shadow ui-tooltip-tipsy',
								tip: false // Remove the default tip.
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
		},
		// Dashboard 2 Amounts
		chartAmounts: function () {
				var elem = $('#amountsChart');
				
				var d3 = [
						[1341014400000, 0.00],
						[1341018000000, 0.00],
						[1341021600000, 0.00],
						[1341025200000, 0.00],
						[1341028800000, 0.00],
						[1341032400000, 0.00],
						[1341036000000, 0.00],
						[1341039600000, 0.00],
						[1341043200000, 158.70],
						[1341046800000, 0.00],
						[1341050400000, 0.00],
						[1341054000000, 245.30],
						[1341057600000, 78.00],
						[1341061200000, 169.20],
						[1341064800000, 357.33],
						[1341068400000, 0.00],
						[1341072000000, 49.50],
						[1341075600000, 576.60],
						[1341079200000, 237.00],
						[1341082800000, 111.80],
						[1341086400000, 0.00],
						[1341090000000, 0.00],
						[1341093600000, 0.00]
		
				];
				
				function dolarFormatter(v, axis) {
						return v.toFixed(axis.tickDecimals) +"$";
				}
		
				$.plot(elem, [d3], {
						legend: {
								show: false
						},
						series: {
								label: "Revenue",
								lines: {
										show: true,
										fill: true
								}
						},
						xaxis: {
								mode: "time",
								font: {
										weight: "bold",
										size:11
								},
								color: "#333333",
								tickColor: "rgba(237,194,64,0.25)",
								tickLength: 5
						},
						yaxis: {
								tickFormatter: dolarFormatter,
								color: "#333333",
								font: {
										weight: "bold",
										size:11
								}
						},
						grid: {
								color: "#333333",
								tickColor: "rgba(0,0,0,0.03)",
								borderWidth: 0,
								// interactive stuff
								clickable: true,
								hoverable: true
						},
				});
				
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
								content = item.series.label + ' = $' + round(item.datapoint[1]); 
								api.set('content.text', content);
								api.elements.tooltip.stop(1, 1);
								api.show(coords);
						}
				});
		}
};

</script>
<?php //echo $this->Html->script('demo/demo-dashboard2'); ?>