<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
<!-- // fin sidebar -->
<?php 

    App::import('Model', 'Unidade');
    $modeloUnidades = new Unidade();
    
    App::import('Model', 'Medida');
    $modeloMedidas = new Medida();
 ?>
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
                                                       
                                <th scope="col">Producto<span class="column-sorter"></span></th>                                
                                <th scope="col">Cantidad<span class="column-sorter"></span></th>
                                <th>Precio unitario</th>
                                <th scope="col">Costo</th> 
                                
                            </tr>
                        </thead>
                        <?php $costototal=0;?>
                        <tbody>
                        <?php foreach ($pedidos as $producto): ?>  
                        <?php 
                        $precio = $producto['0']['cantidad'] *$producto['Producto']['precio'];
                        $costototal += $precio;
                        ?>                      
                            <tr> 
                                <td><?php echo $producto['Item']['fecha'];?></td> 
                                                                 
                                <td><?php echo $producto['Producto']['nombre']; ?></td>
                                <td><?php echo $producto['0']['cantidad']; ?></td>    
                                <td><?php echo $producto['Producto']['precio'];?></td>  
                                <td><?php echo $precio;?></td>  
                                
                            </tr>
                        
                        <?php endforeach; ?>  
                        <tr>
                           <td colspan="4">Costo Total</td>
                           <td><?php echo $costototal ?></td>
                        </tr>                         
                        </tbody>
                    </table>
                    <!-- // BOO TABLE - DTB-2 -->
                     <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <caption>
                            Reporte de descuentos de <?php echo $dato ?><span></span>
                        </caption>
                        <thead>
                            <tr>
                               <th>fecha</th>  
                                                         
                                <th scope="col">Producto<span class="column-sorter"></span></th> 
                                <th>Insumo</th>                               
                                <th scope="col">Cantidad<span class="column-sorter"></span></th>
                                <th>Precio unitario descuento</th>
                                <th scope="col">Costo total</th> 
                                
                            </tr>
                        </thead>
                        <?php $costototal=0;?>
                        <tbody>
                        <?php foreach ($descuentos as $producto): ?>  
                        <?php 
                        $precio = $producto['0']['cantidad'] * $producto['Item']['precio'];
                        $costototal += $precio;
                        ?>                      
                            <tr> 
                                <td><?php echo $producto['Item']['fecha'];?></td> 
                                                                  
                                <td><?php echo $producto['Producto']['nombre']; ?></td>
                                <td><?php echo $producto['Insumo']['nombre']; ?></td>
                                <td><?php echo $producto['0']['cantidad']; ?></td>    
                                <td><?php echo $producto['Item']['precio'];?></td>  
                                <td><?php echo $precio;?></td>  
                                
                            </tr>
                        
                        <?php endforeach; ?>  
                        <tr>
                           <td colspan="5">Total descuentos</td>
                           <td><?php echo $costototal ?></td>
                        </tr>                         
                        </tbody>
                    </table>
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
             printElem({ overrideElementCSS: ['/pizza/css/printable.css'] });
         });
     });
 function printElem(options){
     $('#areaImprimir').printElement(options);
 }

 </script>