<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
<!-- // fin sidebar -->
<?php 

   /* App::import('Model', 'Unidade');
    $modeloUnidades = new Unidade();
    
    App::import('Model', 'Medida');
    $modeloMedidas = new Medida();*/
 ?>
<!-- // contenido pricipal -->                                 
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i> Movimiento de insumos a la fecha</h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <caption>
                            Reporte de insumos utilizados a la fecha de hoy <?php echo date('d/m/Y') ?><span></span>
                        </caption>
                        <thead>
                            <tr>  
                                <th scope="col">Nro <span class="column-sorter"></span></th>                          
                                <th scope="col">Insumo <span class="column-sorter"></span></th>
                                <th scope="col">Ingresos <span class="column-sorter"></span></th>                                
                                <th scope="col">Salidas <span class="column-sorter"></span></th>
                                <th scope="col">Stock <span class="column-sorter"></span></th>                            
                            </tr>
                        </thead>
                        <?php $i=1;?>
                        <tbody>
                        <?php foreach ($movimientos as $insumo): ?>  
                        <?php //debug($insumo) ?>                      
                            <tr> 
                                <td><?php echo $i; $i++;?></td>                                   
                                <td><?php echo $insumo['Insumo']['nombre']; ?></td>  
                                <?php 
                                /*$unidad = $modeloUnidades->find('first', array(
                                'conditions'=>array('Unidade.id'=>$insumo['Insumo']['unidade_id']),
                                'recursive'=>-1
                                ));
                                $unidad = $unidad['Unidade']['nombre'];
                                $medida = $modeloMedidas->find('first', array(
                                'conditions'=>array('Medida.id'=>$insumo['Insumo']['medida_id']),
                                'recursive'=>-1
                                ));
                                $medida = $medida['Medida']['nombre'];
                                 */?>    
                                 <td><?php echo $insumo['Bodega']['ingreso'].' unidades';?></td>                           
                                <td><?php echo $insumo['Bodega']['salida'].' unidades';?></td>                                      
                                <td>       
                                <?php echo $insumo['Bodega']['total'] ?>&nbsp;
                                <?php //echo $insumo['Movimiento']['pesoparcial'] ?>&nbsp;
                                <?php //echo $medida ?>
                                </td>                                                                     
                                
                            </tr>
                        
                        <?php endforeach; ?>                           
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
    $("#Imprimir").mouseover(function(){
        $('#exampleDTB-2').removeAttr('class');
        console.log('remueve la clase de la tabla');
    });
         $("#Imprimir").click(function() {
            console.log('imprime');
             //printElem({ leaveOpen: true, printMode: 'popup' });
             printElem({ overrideElementCSS: ['/posvinto/posvinto/css/imprimir.css'] });
         });
     });
 function printElem(options){
     $('#areaImprimir').printElement(options);
 }

 </script>