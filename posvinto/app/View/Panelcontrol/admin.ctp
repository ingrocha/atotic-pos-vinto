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

                    <div class="widget widget-box">
                        <div class="tabbable tabs-top">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#TabBestsellers" data-toggle="tab"><i class="fontello-icon-award-1"></i> <span class="hidden-phone">Bestsellers</span></a></li>
                                <li><a href="#TabMostViewedProduct" data-toggle="tab"><i class="fontello-icon-eye-2"></i> <span class="hidden-phone">Most Viewed Product</span></a></li>
                                <li><a href="#TabNewCustomers" data-toggle="tab"><i class="fontello-icon-user-add"></i> <span class="hidden-phone">New Customers</span></a></li>
                                <li><a href="#TabCustomers" data-toggle="tab"><i class="fontello-icon-user"></i> <span class="hidden-phone">Customers</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="TabBestsellers">
                                    <table class="table table-condensed table-striped no-margin">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="60%">Product Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity Ordered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kindle Fire, Full Color 7" Multi-touch Display, Wi-Fi</td>
                                                <td class="text-right">$89.99</td>
                                                <td class="text-right bold">264</td>
                                            </tr>
                                            <tr>
                                                <td>Brother HL-2270DW Compact Laser Printer with Wireless Networking and Duplex</td>
                                                <td class="text-right">$1,579.50</td>
                                                <td class="text-right bold">215</td>
                                            </tr>
                                            <tr>
                                                <td>Apple TV MD199LL/A</td>
                                                <td class="text-right">$96.99</td>
                                                <td class="text-right bold">204</td>
                                            </tr>
                                            <tr>
                                                <td>Apple iPod touch 8GB (4th Generation)</td>
                                                <td class="text-right">$174.99</td>
                                                <td class="text-right bold">173</td>
                                            </tr>
                                            <tr>
                                                <td>Panasonic Lumix TS20 16.1 MP TOUGH Waterproof Digital Camera with 4x Optical Zoom</td>
                                                <td class="text-right">$130.62</td>
                                                <td class="text-right bold">157</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="TabMostViewedProduct">
                                    <table class="table table-condensed no-margin">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="60%">Product Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Number of Views</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John Doe</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$118.00</td>
                                            </tr>
                                            <tr>
                                                <td>Paula Gates</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right bold">$1,579.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tony Rogers</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$26.00</td>
                                            </tr>
                                            <tr>
                                                <td>Leona Nulla</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$312.13</td>
                                            </tr>
                                            <tr>
                                                <td>Peter Johanson</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right bold">$814.20</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="TabNewCustomers">
                                    <table class="table table-condensed no-margin">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="60%"> Customer Name</th>
                                                <th scope="col">Number of Orders</th>
                                                <th scope="col">Average Order Amount</th>
                                                <th scope="col">Total Order Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John Doe</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$118.00</td>
                                            </tr>
                                            <tr>
                                                <td>Paula Gates</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right bold">$1,579.50</td>
                                                <td class="text-right bold">$1,579.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tony Rogers</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$26.00</td>
                                                <td class="text-right bold">$1,579.50</td>
                                            </tr>
                                            <tr>
                                                <td>Leona Nulla</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$312.13</td>
                                                <td class="text-right bold">$1,579.50</td>
                                            </tr>
                                            <tr>
                                                <td>Peter Johanson</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right bold">$814.20</td>
                                                <td class="text-right bold">$1,579.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="TabCustomers">
                                    <table class="table table-condensed no-margin">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="60%"> Customer</th>
                                                <th scope="col">Items</th>
                                                <th scope="col">Grand Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>John Doe</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$118.00</td>
                                            </tr>
                                            <tr>
                                                <td>Paula Gates</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right bold">$1,579.50</td>
                                            </tr>
                                            <tr>
                                                <td>Tony Rogers</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$26.00</td>
                                            </tr>
                                            <tr>
                                                <td>Leona Nulla</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right bold">$312.13</td>
                                            </tr>
                                            <tr>
                                                <td>Peter Johanson</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right bold">$814.20</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- // tab content --> 

                        </div>
                        <!-- // Tabable --> 
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
                            <h2 class="statistic-values">$79,524.33 <span class="positive"><i class="fontello-icon-up-dir"></i> <sup>+10,966.08</sup></span></h2>
                            <span class="info-block">Total Sales Previous 30 days: 68,558.25</span> </div>
                    </div>
                    <!-- // Statistic Box -->

                    <div class="statistic-box well well-black">
                        <div class="section-title">
                            <h6><i class="fontello-icon-back-in-time"></i> Average Orders</h6>
                        </div>
                        <div class="section-content">
                            <h2 class="statistic-values">$2,644.42</h2>
                        </div>
                    </div>
                    <!-- // Statistic Box -->

                    <div class="widget widget-simple">
                        <div class="widget-header header-small"> <a class="btn btn-mini btn-success pull-right" href="#">Show All</a>
                            <h6><i class="fontello-icon-back-in-time"></i> Last 5 Orders</h6>
                        </div>
                        <div class="widget-content">
                            <div class="widget-body">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="60%"> Customer</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Grand Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right bold">$118.00</td>
                                        </tr>
                                        <tr>
                                            <td>Paula Gates</td>
                                            <td class="text-right">2</td>
                                            <td class="text-right bold">$1,579.50</td>
                                        </tr>
                                        <tr>
                                            <td>Tony Rogers</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right bold">$26.00</td>
                                        </tr>
                                        <tr>
                                            <td>Leona Nulla</td>
                                            <td class="text-right">1</td>
                                            <td class="text-right bold">$312.13</td>
                                        </tr>
                                        <tr>
                                            <td>Peter Johanson</td>
                                            <td class="text-right">3</td>
                                            <td class="text-right bold">$814.20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- // Widget -->                    

                    <div class="widget widget-simple">
                        <div class="widget-header header-small"> <a class="btn btn-mini btn-success pull-right" href="#">Show All</a>
                            <h6><i class="fontello-icon-search-2"></i> Top 5 Search Terms</h6>
                        </div>
                        <div class="widget-content">
                            <div class="widget-body">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="60%">Search Term</th>
                                            <th scope="col">Results</th>
                                            <th scope="col">Number of Uses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>iPhone</td>
                                            <td class="text-right">36</td>
                                            <td class="text-right bold">2458</td>
                                        </tr>
                                        <tr>
                                            <td>Apple</td>
                                            <td class="text-right">265</td>
                                            <td class="text-right bold">2165</td>
                                        </tr>
                                        <tr>
                                            <td>Computer</td>
                                            <td class="text-right">184</td>
                                            <td class="text-right bold">1278</td>
                                        </tr>
                                        <tr>
                                            <td>camera</td>
                                            <td class="text-right">19</td>
                                            <td class="text-right bold">1065</td>
                                        </tr>
                                        <tr>
                                            <td>blue</td>
                                            <td class="text-right">27</td>
                                            <td class="text-right bold">865</td>
                                        </tr>
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
<?php echo $this->Html->script('demo/demo-dashboard2'); ?>