
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
            REPORTE DE VENTAS POR PRODUCTO &nbsp;<br/>
            
            &nbsp;

        </h4>
        <div class="clear"></div>

    </div>
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i> Ventas de fecha <?php echo $fechaini ?> a <?php echo $fechafin?></h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <caption>
                            Reporte de ventas por Producto <span></span>
                        </caption>
                        <thead>
                            <tr>
                                <th>Nro</th>
                               <th>fecha</th>  
                                <th>Producto</th>           
                                <th scope="col">Cantidad<span class="column-sorter"></span></th>
                                <th>Prec. U.</th>
                                <th>P. Total</th>
                            </tr>
                        </thead>
                        <?php $i=0;$total = 0.00;?>
                        <tbody>
                        <?php foreach ($productos as $producto): 
                        $i++
                        ?>                      
                            <tr> 
                                <td><?php echo $i;?></td>
                                <td><?php echo $producto[0]['fecha'];?></td>
                                <td><?php echo $producto['Producto']['nombre'];?></td>           
                                <td><?php echo $producto[0]['cantidad']; ?></td>
                                <td><?php echo $producto['Item']['precio'];?></td>
                                <td><?php echo $producto[0]['precio'];?></td>
                                <?php 
                                      $total = $total + $producto[0]['precio'];
                                      $cantidad = $cantidad + $producto[0]['cantidad'];;
                                ?>
                            </tr>
                            
                        <?php endforeach; ?>  
                            <tr>
                                <td> </td>
                                <td></td>
                                <td><b>TOTALES</b></td>
                                <td><?php echo $cantidad;?></td>
                                <td><?php //echo $platos;?></td>
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
               <li>
                           <a class="btn btn-github" href="#" id="Imprimir"><i class="fontello-icon-github">
               </i> Imprimir</a>
                   <?php echo $this->Html->link('Atras',array('controller'=>'Reportes','action'=>'formularioreporteproductos'),array('class'=>'btn btn-green'));?>
                        
          
               </li>
             </ul>
          </section>
        </div>
    </section>
</div>	
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