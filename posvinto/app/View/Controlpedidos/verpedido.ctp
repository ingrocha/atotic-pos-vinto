<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/sinsumos'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">  
        <section>
            <div class="row-fluid">
                <div class="span6 grider">
                    <h3><i class="aweso-icon-table"></i> table <small>caption, total</small></h3>
                    <p>This is the caption for <code>.boo-table .table-content</code></p>
                    <table class="table boo-table table-striped table-content table-hover">
                        <colgroup>
                            <col class="col20">
                            <col class="col20">
                            <col class="col45">
                            <col class="col15">
                        </colgroup>
                        <caption>
                            Boo Table Caption - Title fot table <span>Here text in span</span>
                        </caption>
                        <thead>
                            <tr id="HeadersRow0">
                                <th scope="col">Producto</th>
                                <th scope="col">Cant</th>
                                <th scope="col">P/U</th>
                                <th scope="col">Costo</th>                                       
                            </tr>                        
                        </thead>
                        <tfoot>
                            <tr class="total" id="HeadersRow0">
                                <th>Total sum</th>
                                <th></th>
                                <th></th>
                                <th class="text-right">202.46</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr id="DataRow0">
                                <td class="bold"><a href="#">10248</a></td>
                                <td>VINET</td>
                                <td>8/16/2012</td>
                                <td class="text-right">32.38</td>
                            </tr>
                            <tr id="DataRow1">
                                <td class="bold"><a href="#">10249</a></td>
                                <td>TOMSP</td>
                                <td>8/10/2012</td>
                                <td class="text-right">11.61</td>
                            </tr>                    
                        </tbody>
                    </table>
                </div>
                <!-- //tabla -->       

                <div class="span4 grider">
                    <h3><i class="aweso-icon-table"></i> table <small>caption, total</small></h3>
                    <p>This is the caption for <code>.boo-table .table-content</code></p>
                    <table class="table boo-table table-striped table-content table-hover">
                        <colgroup>
                            <col class="col20">
                            <col class="col20">
                            <col class="col45">
                            <col class="col15">
                        </colgroup>
                        <caption>
                            Boo Table Caption - Title fot table <span>Here text in span</span>
                        </caption>
                        <thead>
                            <tr id="HeadersRow0">
                                <th scope="col">Order ID</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Shipped Date</th>
                                <th scope="col">Costs</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="total" id="HeadersRow0">
                                <th>Total sum</th>
                                <th></th>
                                <th></th>
                                <th class="text-right">202.46</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr id="DataRow0">
                                <td class="bold"><a href="#">10248</a></td>
                                <td>VINET</td>
                                <td>8/16/2012</td>
                                <td class="text-right">32.38</td>
                            </tr>
                            <tr id="DataRow1">
                                <td class="bold"><a href="#">10249</a></td>
                                <td>TOMSP</td>
                                <td>8/10/2012</td>
                                <td class="text-right">11.61</td>
                            </tr>                    
                        </tbody>
                    </table>
                </div>
                <!-- //tabla --> 
            </div>
        </section>
    </div>	
    <!-- // fin contenido principal --> 
</div>		
<!-- Sidebar -->
<?php //echo $this->element('menualmacenes') ?>
<!-- End Sidebar -->
<?php //echo $this->element('menupedidos') ?>


<!-- Container -->
<?php echo $this->Html->css('imprimir', 'stylesheet', array('media' => 'print')); ?>
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <!--<div class="small-nav">
            
        <?php //echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
            <span>&gt;</span>
            Lista de Usuarios
        </div>-->
        <!-- End Small Nav -->

        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">
                <!-- Box -->
                <div class="boxa">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">PEDIDO</h2>
                        <div class="right">
                        </div>
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">  
                        <div>
                            <?php //echo $this->Html->link('Cuenta', array('action' => 'imprimecuenta')); ?>
                            <?php echo $this->Html->image('btcuenta.jpg', array('id' => "bt_imprimir", 'style' => '"float: left;"')); ?>                                                        
                            <div id="dialog" style="float: left;">
                                <?php
                                echo $this->Html->image("btpagar.jpg", array(
                                    "title" => "Pagar"
                                ));
                                ?>            
                            </div> 
                            <div id="fac" style="float: left;">
                                <?php
                                echo $this->Html->image("btfactura.jpg", array(
                                    "title" => "Facturar"
                                ));
                                ?>            
                            </div> 
                            <div id="des" style="float: left;">
                                <?php
                                echo $this->Html->image("des.jpg", array(
                                    "title" => "Facturar"
                                ));
                                ?>            
                            </div> 
                            <?php
                            echo $this->Html->image("divcuenta.jpg", array(
                                "title" => "Dividir la Cuenta",
                                'url' => array('action' => 'facturar1', $pedido['0']['Pedido']['id'])
                            ));
                            ?> 
                            <script type="text/javascript">
                                var dialogOpts = {
                                    modal: true
                                };
                                jQuery("#dialog").click(function(){
                                    jQuery("#cuadro").dialog(dialogOpts).load("../ajaxpago/<?php echo $pedido['0']['Pedido']['id']; ?>");
                           
                                });
                                
                                var dialogOpts = {
                                    modal: true
                                };
                                jQuery("#fac").click(function(){
                                    jQuery("#facturar").dialog(dialogOpts).load("../ajaxfactura/<?php echo $pedido['0']['Pedido']['id']; ?>");
                           
                                });  
                                
                                var dialogOpts = {
                                    modal: true
                                };
                                jQuery("#des").click(function(){
                                    jQuery("#descuentos").dialog(dialogOpts).load("../ajaxfactura/<?php echo $pedido['0']['Pedido']['id']; ?>");
                           
                                });                                                            
                            </script>                                                
                        </div> 
                        <div id="aImprimir"><?php //comienza impresion         ?>
                            <div style="float: left; background-color: #fff;">
                                ESTADO: 
                                <?php
                                $estado = $pedido['0']['Pedido']['estado'];
                                if ($estado < 3)
                                {
                                    echo 'Por pagar';
                                } else
                                {
                                    echo 'Pagado';
                                }
                                ?>
                                <h1 class="tituloh1">Mesa: <?php echo $pedido['0']['Pedido']['mesa']; ?></h1>
                                <h1 class="tituloh1">Mozo: <?php echo $moso['Usuario']['nombre']; ?></h1>
                                <table style="width: 744px;" class="tablafactura">
                                    <tr>
                                        <td>                                    
                                            <?php //debug($pedido);  ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td><h3>Producto</h3></td>
                                        <td><h3>Cant</h3></td>
                                        <td><h3>P/U</h3></td>
                                        <td><h3>Costo</h3></td>                                       
                                    </tr>
                                    <?php foreach ($pedido as $p): ?>
                                        <tr>
                                            <td><?php echo $p['Producto']['nombre']; ?></td>
                                            <td><?php echo round($p['Item']['cantidad']); ?></td>
                                            <td><?php echo round($p['Producto']['precio']); ?></td>
                                            <td><?php echo round($p['Item']['precio']); ?></td>                                                                                                                                     
                                        </tr>                                                         
                                    <?php endforeach; ?>
                                    <div id="cuadro" title="Cancelar Cuenta">
                                    </div>    
                                    <div id="facturar" title="Facturar Cuenta">
                                    </div> 
                                    <div id="descuentos" title="Facturar Cuenta">
                                    </div>
                                </table>
                                <table style="width: 744px;" class="tablafactura">
                                    <tr>
                                        <td colspan="4" style="background-color: #CAFEA0;">
                                            <h4 style="float: right; padding-right: 125px;">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $totalpagado; ?></h4>                                                                 
                                        </td>                                               
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="background-color: #FEF286;">
                                            <h4 style="float: right; padding-right: 125px;">Monto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo round($pedido['0']['Pedido']['monto']); ?></h4>
                                        </td>                                               
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="background-color: #FFC9C9;">
                                            <h4 style="float: right; padding-right: 125px; color: '#f00'">Cambio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                <?php
                                                $montop = $pedido['0']['Pedido']['monto'];
                                                $cambio = $montop - $totalpagado;
                                                if ($cambio <= 0)
                                                    echo '0';
                                                else
                                                    echo round($cambio);
                                                ?>
                                            </h4>
                                        </td>                                               
                                    </tr>
                                </table><?php //debug($pedido);        ?>                                                                                                                               
                                </h4>
                            </div>  
                        </div><?php //fin de la impresion        ?>                                                                                              
                    </div>
                    <!-- Table -->
                </div>
                <!-- End Box -->
            </div>
            <!-- End Content -->
            <!-- Sidebar -->
            <!-- Sidebar -->
            <?php echo $this->element('menupedidos') ?>
            <!-- End Sidebar -->
            <!-- End Sidebar -->
            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
        <script type="text/javascript">           
            jQuery("#bt_imprimir").click(function() {
                //alert('imprimir');
                // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
                printElem({ leaveOpen: true, printMode: 'popup' });             
                // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
                //printElem({ overrideElementCSS: ['http://localhost/posvinto/posvinto/app/webroot/css/imprimir.css'] });
            });
            function printElem(options){
                jQuery('#aImprimir').printElement(options);
            }
        </script>
    </div>