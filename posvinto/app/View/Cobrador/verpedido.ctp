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
                        <div id="aImprimir"><?php //comienza impresion    ?>
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
                                <h1 class="tituloh1">Mozo: <?php echo $moso['User']['nombre']; ?></h1>
                                <table style="width: 300px;" class="tablafactura">
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
                                    <table style="width: 300px;" class="tablafactura">
                                    <tr>
                                        <td colspan="4" style="background-color: #CAFEA0;">
                                            <h4 style="float: right; padding-right: 35px;">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $totalpagado; ?></h4>                                                                 
                                        </td>                                               
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="background-color: #FEF286;">
                                            <h4 style="float: right; padding-right: 35px;">Monto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo round($pedido['0']['Pedido']['monto']); ?></h4>
                                        </td>                                               
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="background-color: #FFC9C9;">
                                            <h4 style="float: right; padding-right: 35px; color: '#f00'">Cambio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                <?php
                                                $montop = $pedido['0']['Pedido']['monto'];
                                                $cambio = $montop - $totalpagado;
                                                if($cambio<=0)
                                                    echo '0';
                                                else
                                                    echo round($cambio);                                                
                                                ?>
                                            </h4>
                                        </td>                                               
                                    </tr>
                                </table><?php //debug($pedido);   ?>                                                                                                                               
                                </h4>
                            </div>  
                        </div><?php //fin de la impresion   ?>
                        <div>
                            <?php //echo $this->Html->link('Cuenta', array('action' => 'imprimecuenta')); ?>
                            <?php echo $this->Html->image('btcuenta.jpg', array('id' => "bt_imprimir", 'style'=>'"float: left;"')); ?>                                                        
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