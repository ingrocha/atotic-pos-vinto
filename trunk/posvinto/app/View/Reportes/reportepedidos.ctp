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
                               <th>fecha</th>             
                                <th scope="col">Mesa<span class="column-sorter"></span></th> 
                                <th>Total</th>
                                <th>Descuento</th>
                                <th scope="col">Costo</th> 
                                
                            </tr>
                        </thead>
                        <?php $costototal=0;?>
                        <tbody>
                        <?php foreach ($pedidos as $producto): 
                        $costodescuento += $producto['Item']['totalcondescuento'];
                        $costototal += $producto['0']['precio'];
                        ?>                      
                            <tr> 
                                <td><?php echo $producto['Item']['fecha'];?></td>           
                                <td><?php echo $producto['Pedido']['mesa']; ?></td>
                                <td><?php echo $producto['0']['precio'];?></td>
                                <td><?php echo $producto['Item']['descuento']?></td>
                                <td style="text-align: right;">
                                <?php 
                                if($producto['Item']['descuento'] == 0):
                                   echo number_format($producto['0']['precio'],2,'.',',');
                                else:
                                   $descuentos += $producto['Item']['totalcondescuento'];
                                   echo number_format($producto['Item']['totalcondescuento'],2,'.',',');
                                endif;
                                ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>  
                        <tr>
                           <td colspan="4">Ganancia Total</td>
                           <td style="text-align: right;">
                           <?php echo number_format($costototal,2,'.',',') ?>
                           </td>
                        </tr>                         
                        <tr>
                           <td colspan="4">Total descuentos</td>
                           <td style="text-align: right;">
                           <?php echo number_format($descuentos,2,'.',',') ?>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="4">Ganancia neta</td>
                           <td style="text-align: right;">
                           <?php echo number_format($costodescuento,2,'.',',') ?>
                           </td>
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