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
            <h3><i class="aweso-icon-table opaci35"></i>Reporte de Inventario <?php echo ' - '.$lugar['Lugare']['nombre'];?> / De Fecha <?php echo $fechaini.' y '.$fechafin;?></h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <caption>
                             REPORTE DE INVENTARIOS
                        </caption>
                        <thead>
                            <tr>
                                <th>Nro</th>
                               <th>fecha</th>  
                                <th>Insumo</th>  
                                <th>Cantidad</th>         
                                <th>Precio Compra</th>
                                
                            </tr>
                        </thead>
                        <?php $i=0;$total = 0.00;?>
                        <tbody>
                        <?php foreach ($insumos as $in): 
                        $i++
                        ?>                      
                            <tr> 
                                <td><?php echo $i;?></td>
                                <td><?php echo $in['Bodega']['fecha'];?></td>
                                <td><?php echo $in['Insumo']['nombre'];?></td>  
                                <td><?php echo $in['Bodega']['ingreso']; ?></td>         
                                <td><?php echo $in['Bodega']['preciocompra']; ?></td>
                                
                                <?php $total = $total + $in['Bodega']['preciocompra'];
                                        $tinsumos = $tinsumos + $in['Bodega']['ingreso']; 
                                ?>
                            </tr>
                            
                        <?php endforeach; ?>  
                            <tr>
                                <td> </td>
                                <td></td>
                                <td><b>TOTAL</b></td>
                                <td><?php echo $tinsumos?></td>
                                <td><?php echo $total;?></td>
                                
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