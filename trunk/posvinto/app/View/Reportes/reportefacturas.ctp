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
            <h3><i class="aweso-icon-table opaci35"></i><p align="center">Reporte de Facturas <?php echo $fechaini?> hasta <?php echo $fechafin;?></p></h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table" id="areaImprimir">
                    <table id="table" class="table table-striped table-bordered  table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Fecha</th>  
                                <th ><p align="center">Nro.de NIT <br>del Comprador</p></th>  
                                <th><p align="center">Nombre o Razon Social del Comprador</p></th>
                                <th><p align="center">Nro. de Factura</p></th>
                                <th><p align="center">Nro. de Autorizacion</p></th>
                                <th><p align="center">Codigo de Control</p></th>
                                <th><p align="center">Total Factura<br>(A)</p></th>
                                <th><p align="center">Total I.C.E.<br>(B)</p></th>
                                <th><p align="center">Importes Externos<br>(C)</p></th>
                                <th><p align="center">Importe Neto<br>(A-B-C)</p></th>
                                <th><p align="center">Debito Fiscal IVA</p></th>
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
                                <td><p align="center">4413687 CB.</p></td>
                                <td><p align="center">Alejandro Roberto Guillen Vargas </p></td>
                                <td><strong>TOTALES PARCIALES</strong></td>
                                <td>,00</td>
                                <td></td>
                                <td></td>
                                <td>,00</td>
                                <td>,00</td>
                            </tr>
                            </tr>
                            <tr>
                                <td><strong><p align="center">Carnet de Identidad</strong></p></td>
                                <td><strong><p align="center">Nombre Completo del Responsable</strong></p></td>
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