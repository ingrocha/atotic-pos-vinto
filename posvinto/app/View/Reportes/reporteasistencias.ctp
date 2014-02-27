<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/pedidos'); ?>               
<!-- // fin sidebar -->
<!-- // contenido pricipal -->                                 
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i>Reporte de Asistencias</h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <caption>
                             Descuentos desde <?php echo $fechaini?> hasta <?php echo $fechafin;?>
                        </caption>
                        <thead>
                            <tr>
                                <th>Nro</th>
                               <th>fecha</th>  
                                <th>Usuario</th>  
                                <th>Minutos</th>
                                <th>Descuento</th>
                                
                            </tr>
                        </thead>
                        <?php $i=0;$total = 0.00;?>
                        <tbody>
                        <?php foreach ($asistencias as $as): 
                        $i++
                        ?>                      
                            <tr> 
                                <td><?php echo $i;?></td>
                                <td><?php echo $as['Retraso']['fecha'];?></td>
                                <td><?php echo $as['User']['nombre'];?></td>  
                                <td><?php echo $as['Retraso']['minutos']; ?></td>         
                                <td><?php echo $as['Retraso']['descuento']; ?></td>
                                <?php $total = $total + $as['Retraso']['descuento'];
                                        
                                ?>
                            </tr>
                            
                        <?php endforeach; ?>  
                            <tr>
                                <td> </td>
                                <td></td>
                                <td></td>
                                
                                <td><b>TOTAL</b></td>
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