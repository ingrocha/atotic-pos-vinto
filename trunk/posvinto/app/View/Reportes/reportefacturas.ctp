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
                LIBRO DE VENTAS - IVA &nbsp;<br/>

                PERDIODO FISCAL :

            </h4>
            <div class="clear"> 
                <table>
                    <tr>
                        <td><strong>Nonmbre o Razon Social:</strong>ALEJANDRO ROBERTO GUILLEN VARGAS</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><strong>NIT:</strong>4413687010</td>
                    </tr>
                    <tr>
                        <td><strong>Nro.SUCURSAL:</strong>0</d>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><strong>DIRECCION:</strong>Av.Martin de la Rocha Nro. 01531</td>
                    </tr>
                    
                </table>
            </div>

        </div>
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i>Reporte de Facturas <?php echo $fechaini?> hasta <?php echo $fechafin;?></h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Fecha</th>  
                                <th>Nro.de NIT <br>del Comprador</th>  
                                <th>Nombre o Razon Social del Comprador</th>
                                <th>Nro. de Factura</th>
                                <th>Nro. de Autorizacion</th>
                                <th>Codigo de Control</th>
                                <th>Total Factura<br>(A)</th>
                                <th>Total I.C.E.<br>(B)</th>
                                <th>Importes Externos<br>(C)</th>
                                <th>Importe Neto<br>(A-B-C)</th>
                                <th>Debito Fiscal IVA</th>
                            </tr>
                        </thead>
                        <?php $i=0;$total = 0.00;?>
                        <tbody>
                        <?php foreach ($facturas as $fac): 
                        $i++
                        ?>                      
                            <tr> 
                                <td><?php echo $fac['Factura']['created'];?></td>
                                <td><?php echo $fac['Factura']['nit'];?></td>  
                                <td><?php echo $fac['Factura']['cliente']; ?></td>         
                                <td><?php echo $fac['Factura']['numero_factura']; ?></td>
                                <td><?php echo $fac['Factura']['numero_autorizacion']; ?></td>
                                <td><?php echo $fac['Factura']['cod_control']; ?></td>
                                <td><?php $total = $total + $fac['Factura']['importetotal'];?></td>
                                <td><?php echo $fac['Factura']['ice']; ?></td>
                                <td><?php echo $fac['Factura']['externo']; ?></td>
                                <td><?php echo $fac['Factura']['neto']; ?></td>
                                <td><?php echo $fac['Factura']['iva']; ?></td>
                            </tr>
                            
                        <?php endforeach; ?>  
                            <tr>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <thead>
                            <tr>
                                <td>4413687 CB.</td>
                                <td>Alejandro Roberto Guillen Vargas </td>
                                <td><strong>TOTALES PARCIALES</strong></td>
                                <td>,00</td>
                                <td></td>
                                <td></td>
                                <td>,00</td>
                                <td>,00</td>
                            </tr>
                            </tr>
                            <tr>
                                <td><strong>C.I.</strong></td>
                                <td><strong>Nombre Completo del Responsable</strong></td>
                                <td><strong>TOTALES GENERALES</strong></td>
                                <td>,00</td>
                                <td></td>
                                <td></td>
                                <td>,00</td>
                                <td>,00</td>
                            </tr>
                        </thead>
                    </table>
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