<!-- Container -->
<div id="container">
    <div class="shell">		
        <!-- Small Nav -->
        <div class="small-nav">
            Detalle del pedido
        </div>
        <!-- End Small Nav -->		
        <br />
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>			
            <!-- Content -->
            <div id="content">				
                <!-- Box -->
                <div class="boxa">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">LISTADO DE PEDIDOS</h2>						
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">
                        <div id="aImprimir">
                            <?php echo $this->Form->create('Recibo') ?>
                            <div class="tituloh1" style="padding-left: 80px;">Viva Vinto</div>
                            <div class="tituloh1" style="padding-left: 90px;">Recibo</div>
                            <table class="tablafactura">
                                <tr>
                                    <td colspan="4"><div class="tituloh3">Mesa: </div><div class="tituloh3">&nbsp;<div class="tituloh3">&nbsp;<?php echo $moso['Pedido']['mesa']; ?></div></div></td>    
                                </tr>
                                <tr>
                                    <td colspan="4"><div class="tituloh3">Moso: </div><div class="tituloh3">&nbsp;<?php echo $moso['Usuario']['nombre']; ?></div></td>   
                                </tr>
                                <tr class="contenido">
                                    <td><div class="tituloh5">Producto</div></td>
                                    <td><div class="tituloh5">Cant</div></td>
                                    <td><div class="tituloh5">P.Unitario</div></td>
                                    <td><div class="tituloh5">Costo</div></td>
                                </tr>
                                <?php foreach ($pedido as $p): ?>
                                    <tr class="contenido">
                                        <td><?php echo $p['Producto']['nombre']; ?></td>
                                        <td><?php echo $p['Item']['cantidad']; ?></td>
                                        <td><?php echo $p['Producto']['precio']; ?></td>
                                        <td><?php echo $p['Item']['precio']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <table id="total" class="tablafactura">
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td><div class="tituloh5">Total</div></td>
                                    <td>
                                        <div class="tituloh5" ><?php echo $totalpagado; ?></div>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <table>
                                <tr>
                                    <td>
                                        Nombre:
                                    </td>
                                    <td>
                                        <?php echo $this->Form->text('nombre'); ?>
                                    </td>
                                </tr>

                        </div><!--fin imprimir-->  
                        <tr>
                            <td colspan="4">

                                <?php echo $this->Form->end('Guardar') ?>

                            </td>
                        </tr>
                        </table>   	                       					
                    </div>
                    <div class="cl">&nbsp;</div>
                    <div class="ayuda">
                        <?php echo $this->Html->image('recibo.png'); ?> Aplicar descuento
                        <?php echo $this->Form->select('descuento', $descuentos, array('id' => 'descuento')) ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $this->Html->image('print.png', array('id' => "bt_imprimir")); ?> Imprimir el Pedido&nbsp;&nbsp;&nbsp;&nbsp;

                    </div>
                    <div class="cl">&nbsp;</div>
                    <!-- Table -->					
                </div>
                <!-- End Box -->								
            </div>
            <!-- End Content -->
            <?php echo $this->element('menupedidos') ?>
            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
    </div>
    <script type="text/javascript">
        jQuery("#descuento").change(function(){
            //alert(this.value);
            jQuery("#total").load("http://localhost/posvinto/posvinto/controlpedidos/totalcondescuento/<?php echo $totalpagado; ?>/"+this.value);
               
        });   
        jQuery("#bt_imprimir").click(function() {
            //alert('imprimir');
            // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
            printElem({ leaveOpen: true, 
                        printMode: 'popup'
                       });             
            //printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
        });
        function printElem(options){
            jQuery('#aImprimir').printElement(options);
        }
    </script>
</div>