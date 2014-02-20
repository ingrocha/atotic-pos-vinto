<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/pedidos'); ?>               
<!-- // fin sidebar -->
<!-- // contenido pricipal -->                                 
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i> Ventas de fecha <?php echo $dato ?></h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <caption>
                            Reporte de ventas de <?php echo $dato ?><span></span>
                        </caption>
                        <thead>
                            <tr>
                                <th>Nro</th>
                               <th>fecha</th>  
                                <th>Mesero</th>           
                                <th scope="col">Mesa<span class="column-sorter"></span></th>
                                <th>Platos</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <?php $i=0;$total = 0.00;?>
                        <tbody>
                        <?php foreach ($pedidos as $producto): 
                        $i++
                        ?>                      
                            <tr> 
                                <td><?php echo $i;?></td>
                                <td><?php echo $producto['Pedido']['fecha'];?></td>
                                <td><?php echo $producto['User']['nombre'];?></td>           
                                <td><?php echo $producto['Pedido']['mesa']; ?></td>
                                <td><?php echo $plato = $this->requestAction(array('action' => 'cuentaItem',$producto['Pedido']['id']));?></td>
                                <td><?php echo $producto['Pedido']['total'];?></td>
                                <?php $total = $total + $producto['Pedido']['total'];
                                        $platos = $platos + $plato;
                                ?>
                            </tr>
                            
                        <?php endforeach; ?>  
                            <tr>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td><b>TOTALES</b></td>
                                <td><?php echo $platos;?></td>
                                
                                <td><?php echo $total?></td>
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
               <li><a class="btn btn-github" href="#" id="Imprimir"><i class="fontello-icon-github"></i> Imprimir</a></li>
             </ul>
          </section>
        </div>
    </section>
</div>	
<!-- // fin contenido principal --> 
</div>
<script type="text/javascript">
   $(document).ready(function() {
    
         $("#Imprimir").click(function() {
            console.log('imprime');
             //printElem({ leaveOpen: true, printMode: 'popup' });
             printElem({ overrideElementCSS: ['/pizza/css/imprime.css'] });
         });
     });
 function printElem(options){
     $('#areaImprimir').printElement(options);
 }

 </script>