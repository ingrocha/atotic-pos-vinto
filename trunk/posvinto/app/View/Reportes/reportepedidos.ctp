<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/pedidos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->   
    <div class="widget" id="areaImprimir">
    <div class="whead">
            <?php echo $this->Html->image('vinto/vinto.png') ?> 
            <FONT FACE="Monotype Corsiva" ><h2  style="color: #A64949">RESTAURANTE VIVA VINTO</h2></FONT>
            <h4 style="text-align: center">
                REPORTE DE INVENTARIO &nbsp;<br/>

                &nbsp;

            </h4>
            <div class="clear"></div>

    </div>
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Atenciones en fecha <?php echo $fechaini . ' a ' . $fechafin ?></h3>           
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget widget-simple widget-table" id="areaImprimir">
                        <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                            <caption>
                                REPORTE POR ATENCION<span></span>
                            </caption>
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>fecha</th>  
                                    <th>Mesero</th>           
                                    <th scope="col">Mesa<span class="column-sorter"></span></th>
                                    <th># Productos</th>                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <?php $i = 0; $total = 0.00; ?>
                            <tbody>
                                <?php foreach ($pedidos as $producto):$i++ ?>                      
                                <?php $idProducto = $producto['Pedido']['id'] ?>    
                                <tr>
                                        <td>
                                            <?php echo $i; ?>
                                            
                                        </td>
                                        <td><?php echo $producto['Pedido']['fecha']; ?></td>
                                        <td><?php echo $producto['User']['nombre']; ?></td>           
                                        <td><?php echo $producto['Pedido']['mesa']; ?></td>
                                        <td><?php echo $plato = $this->requestAction(array('action' => 'cuentaItem', $producto['Pedido']['id'])); ?></td>                                        
                                        <?php
                                        $total = $total + $producto['Pedido']['total'];
                                        $platos = $platos + $plato;
                                        ?>
                                        <td>
                                            
                                            <a onclick="cargarmodal('<?php echo $this->Html->url(array('controller'=>'controlpedidos','action' => 'ajaxvercuenta',$producto['Pedido']['id']));?>');" class="btn btn-glyph btn-sky" href="javascript:" >VER</a>
                                            
                                            <?php //echo $this->Html->link('Detalle', array('controller' => 'controlpedidos', 'action' => 'imprimircuenta', $idProducto, 'reporte')); ?>
                                        </td>
                                    </tr>

                            <?php endforeach; ?>  
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><b>TOTALES</b></td>
                                    <td><?php echo $platos; ?></td>                                    
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- // BOO TABLE - DTB-2 -->
                    </div>
                    <!-- // Widget -->

                </div>
                <!-- // Column -->

            </div>
            <!-- // Example row -->
            <div class="row-fluid">
                <section class="span12 margin-bottom30">
                    <ul class="btn-toolbar btn-demo">
                        <li><a class="btn btn-github" href="<?php echo $this->Html->url(array('action' => 'formularioreporteproductos')) ?>" id="Imprimir"><i class="fontello-icon-github"></i> Imprimir</a>
                            <?php echo $this->Html->link('Atras', array('controller' => 'Reportes', 'action' => 'formularioreporteproductos'), array('class' => 'btn btn-green')); ?>


                        </li>
                    </ul>
                </section>
            </div>
        </section>
    </div>
    </div>
    <!-- // fin contenido principal --> 
</div>
