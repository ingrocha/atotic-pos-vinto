<?php $total1 = 0;
$total2 = 0;
$total3 = 0; 
$totcxc= 0;
$totac  =0;
$totchip = 0;
$totcab =0;
?>
<?php // debug($ventas);exit;?>

   
      <div class="centered">
          
         <div class="grid-1">
            <div class="title-grid"> <span>Reporte diario</span></div>
            <div class="content-gird">
            <?php if (empty($ventas)): ?>
            <div class="message2">
               No se registraron ventas de tarjetas
            </div>
                    
                <?php else: ?>
            <div id="imprime">
               <div class="logoprint">
                  
               </div>
                        
               <table class="display">
                  <thead>
                     <tr class="oculto">
                        <th colspan="7">Reporte diario</th>
                     </tr>
                    <tr>
                        <th class="name">fecha:</th>
                        <td><?php echo $fecha2; ?></td>
                        <th class="name">Nombre</th>
                        <td colspan="5"><?php echo $datosusuario['Usuario']['nombre']; ?></td>
                      </tr>
                      
                  </thead>
                      
               </table>
               <div>
                  &nbsp;
               </div>
               
               <table>
                   <thead>
                   <tr>
                      <th colspan="11" class="txtcent">tarjetas</th>
                   </tr>
                   <tr>
                        <th class="txt" rowspan="2">producto</th>
                        <th class="txt" rowspan="2">saldo ant</th>
                        <th class="txt" rowspan="2">ingreso</th>
                        <th class="txt" colspan="2">mayor</th>
                        <!--<th class="txt">precio may</th>-->
                        <th class="txt" colspan="2">distribuidor</th>
                        <!--<th class="txt">precio d</th>-->
                        <th class="txt" colspan="2">tienda</th>
                        <!--<th class="txt">precio t</th>-->
                        <th class="txt" rowspan="2">saldo</th>
                        <th class="txt" rowspan="2">Monto (Bs)</th>
                   </tr> 
                   <tr>
                     <th class="txt3">Cant</th>
                     <th class="txt3">Precio</th>
                     <th class="txt3">Cant</th>
                     <th class="txt3">Precio</th>
                     <th class="txt3">Cant</th>
                     <th class="txt3">Precio</th>
                   </tr> 
                  </thead>
                  <tbody>
                  <?php $total1 = 0; ?>
                  <?php foreach ($ventas as $v): ?>
                     <?php $total1 = $total1 + $v['0']['montobs']; ?>
                     <tr>
                        <td ><?php echo $v['Producto']['nombre']; ?></td>
                        <?php if (!empty($movs)): ?>
                           <?php foreach ($movs as $m): ?>
                              <?php if ($v['Venta']['producto_id'] == $m['Movimiento']['producto_id']): ?>
                                 <?php $saldo = $m['Movimiento']['total'] + $m['Movimiento']['venta'] - $m['Movimiento']['ingreso']; ?>
                                <td class="saldo"><?php echo $saldo; ?></td>
                                <?php $ingreso = $m['Movimiento']['ingreso']; ?>
                                <td class="ingreso"><?php echo $ingreso; ?></td>
                                <?php $newsaldo = $m['Movimiento']['total'];?>
                              <?php endif; ?>
                              
                           <?php endforeach; ?>
                        <?php endif; ?>
                        <?php $precio=0;?>
                        <?php if (!empty($v['0']['mayor'])): ?>
                        <td class="montos"><?php echo $v['0']['mayor']; ?></td>
                        <?php $precio = $v[0]['preciomayor']/$v['0']['mayor'];?>
                        <td class="montos"><?php echo number_format($precio,2,'.',','); ?></td>
                        <?php else: ?>
                        
                        <td class="montos">0</td>
                        <td class="montos">&nbsp;</td>
                        
                        <?php endif; ?>
                        
                        <?php if (!empty($v['0']['distribuidor'])): ?>
                        <?php $precio =0;?>
                        <td class="montos"><?php echo $v['0']['distribuidor']; ?></td>
                        <?php $precio = $v['0']['preciodistribuidor']/$v['0']['distribuidor'];?>
                        <td class="montos"><?php echo number_format($precio,2,'.',','); ?></td>
                        <?php else: ?>
                        <td class="montos">0</td>
                        <td class="montos">&nbsp;</td>
                        <?php endif; ?>
                        <?php if (!empty($v['0']['tienda'])): ?>
                        <?php $precio=0;?>
                        <td class="montos"><?php echo $v['0']['tienda']; ?></td>
                        <?php $precio = $v['0']['preciotienda']/$v['0']['tienda']; ?>
                       <td class="montos"><?php echo number_format($precio,2,'.',','); ?></td>
                        <?php else: ?>
                        <td class="montos">0</td>
                        <td class="montos">&nbsp;</td>
                        <?php endif; ?>
                        <td class="nsaldo">
                                    <?php echo $newsaldo; ?>
                        </td>
                        
                        
                        <?php //foreach($movs as $m): ?>
                              <?php //if($v['Venta']['producto_id'] == $m['Movimiento']['producto_id']): ?>
                                 
                                 <!--<td class="montos">
                                    <?php //echo $m['Movimiento']['total']; ?>
                                </td>-->
                                
                              <?php //endif; ?>
                              
                           <?php //endforeach; ?>
                        
                        <td class="montos"><?php echo $v['0']['montobs']; ?></td>
                      </tr>
                     
                         
                      
                   <?php endforeach; ?>  
                   <tr>
                      <td class="total" colspan="10">Total monto Bs tarjetas</td>
                      <td class="totals"><?php echo $total1; ?></td>
                   </tr>  
                  </tbody>
               </table><!--fin tabla-->
               <?php endif; ?>
               <!--mi tabal reporte--!>
                <div>
                   &nbsp;
                </div>
                <?php if(empty($recargas)):?>
                 <div class="message2">
                     No se registraron ventas de recargas
                </div>
                <?php else:?>
               <table>
                  <thead>
                   <tr>
                     <th colspan="8" class="txtcent">recargas</th>
                   </tr>
                                     
                   <tr>
                     <th class="txt">N&uacute;mero de registro</th>
                     <!--<th class="txt">Direcci&oacute;n</th>-->
                     <th class="txt">x cobrar</th>
                     <th class="txt">efectivo</th>
                     <th class="txt">%</th>
                     <th class="txt">monto</th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($recargas as $r): ?>
                     
                         <tr>
                            <td class="txt2"><?php echo $r['Recarga']['num_abonado']; ?></td>
                            <!--<td class="names"><?php echo $r['Tienda']['direccion']; ?></td>-->
                            <?php if ($r['Recarga']['tipopago_id'] == 0): ?>
                                <td class="cobrar"><?php echo $r['Recarga']['montobs']; ?></td>
                                <td class="montos">&nbsp;</td>
                             <?php else: ?>
                                <td class="cobrar">&nbsp;</td>
                                <td class="montos"><?php echo $r['Recarga']['montobs']; ?></td>
                             <?php endif; ?>
                             
                             <td><?php echo $r['Recarga']['porcentaje']; ?></td>
                             <?php if($r['Recarga']['tipopago_id']== 1):?>
                             <td class="montos"><?php echo $r['Recarga']['montobs']; ?></td>
                             <?php $total2 = $total2 + $r['Recarga']['montobs']; ?>
                             <?php else:?>
                             <td>&nbsp;</td>
                             <?php $totcxc = $totcxc + $r['Recarga']['montobs'];?>
                             <?php endif;?>
                         </tr>
                      <?php endforeach; ?>
                     
  <tr>
    <td colspan="4" class="total">Total recargas</td>
    <td class="totals"><?php echo $total2; ?></td>

  </tr>
  </table>
  <?php endif;?>
  <div>
   &nbsp;
  </div>
  <?php if (!empty($cc)):?>
  <table>
                  <thead>
                   <tr>
                     <th colspan="8" class="txtcent">Cuentas cobradas</th>
                   </tr>
                                     
                   <tr>
                      <th class="txt">Nro Recibo</th>
                      <th class="txt">Nro registro</th>
                      <th class="txt">Monto adeudado</th>
                      <th class="txt">Pago</th>
                      <th class="txt">Saldo</th>
                      <th class="txt">total</th>
                   </tr>
                  </thead>
                  <tbody>
                  
                  <?php $total3 = 0; ?>
                      <?php foreach ($cc as $c): ?>
                         <?php $total3 = $total3 + $c['Cuentascliente']['pago']; ?>
                         <tr>
                            <td class="names"><?php echo $c['Cuentascobrada']['nrecibo']; ?></td>
                            <td class="names"><?php echo $c['Cuentascobrada']['num_abonado']; ?></td>
                            <td class="montos"><?php echo $c['Cuentascliente']['deuda']; ?></td>
                            <td class="montos"><?php echo $c['Cuentascliente']['pago']; ?></td>
                            <td class="montos"><?php echo $c['Cuentascliente']['montotalbs']; ?></td>
                             <td class="montos"><?php echo $c['Cuentascliente']['pago']; ?></td>
                         </tr>
                      <?php endforeach; ?>
                     
  <tr>
    <td colspan="5" class="total">Total Cuentas Cobradas</td>
    <td class="totals"><?php echo $total3; ?></td>

  </tr>
  </table>
  <?php else:?>
    <div class="message2">
        No se registraron cobros de cuentas clientes    
    </div>
  <?php endif;?>
<div>
     &nbsp;
  </div>
 <?php if(!empty($chips)):?>
     <table>
        <thead>
           <tr>
              <th colspan="4" class="txtcent">Ventas de chips</th>   
           </tr>
           <tr>
              <th>Producto</th>
              <th>Cliente</th>
              <th>cantidad</th>
              <th>monto</th>
           </tr>
        </thead>
        <tbody>
        <?php $totchip = 0;?>
        <?php //debug($chips);?>
           <?php foreach($chips as $chip):?>
           <?php $totchip = $totchip + $chip['0']['monto'];?>
              <tr>
                 <td><?php echo $chip['Producto']['nombre'];?></td>
                 <?php if($chip['Ventachip']['tipocliente'] == 1):?>
                    <td>ATC</td>
                 <?php else:?>
                    <td>NUevo</td>
                 <?php endif;?>
                 
                 <td><?php echo $chip['0']['cantidad'];?></td>
                 <td><?php echo $chip['0']['monto'];?></td>
              </tr>
           <?php endforeach;?>
           <tr>
             <td class="total" colspan="3">Total venta chips</td>
             <td class="totals"><?php echo $totchip;?></td>
           </tr>
        </tbody>
     </table>
  <?php else:?>
     <div class="message2">No se registraron ventas de chips</div>
  <?php endif;?>
   <div>
     &nbsp;
  </div>
   <?php //debug($cabinas);?>
  <?php if(!empty($cabinas)):?>
      <table>
         <thead>
            <tr>
               <th class="txtcent" colspan="4">Ventas cabinas</th>
            </tr>
            <tr>
               <th>Prodcuto</th>
               <th>Cantidad venta</th>
               <th>Ingreso tienda</th>
               <th>Monto total</th>
            </tr>
         </thead>
         <tbody>
           <?php foreach($cabinas as $cab):?>
           <?php $totc =0;?>
             <tr>
                <td><?php echo $cab['Producto']['nombre'];?></td>
                <td><?php echo $cab['0']['venta'];?></td>
                <td><?php echo $cab['0']['tienda'];?></td>
                <?php $totc = $cab['0']['venta'] - $cab['0']['tienda']; ?>
                <td><?php echo $totc;?></td>
             </tr>
             <?php $totcab = $totcab + $totc;?>
           <?php endforeach;?>
           <tr>
             <td colspan="3" class="total">Total venta cabinas</td>
             <td class="totals"><?php echo $totcab;?></td>
           </tr>
         </tbody>
      </table>
  <?php else:?>
     <div class="message2">
        No se registraron ventas de cabinas
     </div>
  <?php endif;?>
  <div>
     &nbsp;
  </div>
    <?php if(!empty($accesorios)):?>
     <table>
        <thead>
           <tr >
             <th colspan="3" class="txtcent">Ventas accesorios</th>
           </tr>
           <tr>
              <th>Producto</th>
              <th>cantidad</th>
              <th>Monto</th>
           </tr>
        </thead>
        <tbody>
        <?php $totac = 0;?>
           <?php foreach($accesorios as $ac):?>
           
              <?php $totac = $totac + $ac['0']['monto'];?>
              <tr>
                 <td><?php echo $ac['Producto']['nombre'];?></td>
                 <td><?php echo $ac['0']['cantidad'];?></td>
                 <td><?php echo $ac['0']['monto'];?></td>
              </tr>
           <?php endforeach;?>
           <tr>
              <td colspan="2" class="total">Total ventas accesorios</td>
              <td class="totals"><?php echo $totac;?></td>
           </tr>
        </tbody>
     </table>
  <?php else:?>
  <div class="message2">
        No se registraron ventas de accesorios   
    </div>
  <?php endif;?>
  <div>
     &nbsp;
  </div>
<table>
<thead>
<tr>
	<th colspan="3" class="txtcent">Arqueo Diario</th>
	
</tr>
</thead>

<tr>
	<td rowspan="8">Observacion</td>
	
</tr>
<tr>
	<td>Total Tarjetas</td>
	<td class="montos"><?php echo $total1; ?></td>
	
</tr>
<tr>
   <td>Total recargas</td>
	<td class="montos"><?php echo $total2; ?></td>
</tr>
<tr>
	<td>Total Cuentas cobradas</td>
	<td class="montos"><?php echo $total3; ?></td>
	
</tr>
<tr>
	<td>Total cuentas por cobrar</td>
	<td class="montos"><?php echo $totcxc; ?></td>

</tr>
<tr>
  <td>Total chips</td>
  <td><?php echo $totchip;?></td>
</tr>
<tr>
  <td>Total cabinas</td>
  <td><?php echo $totcab;?></td>
</tr>
<tr>
  <td>Total accesorios</td>
  <td><?php echo $totac;?></td>
</tr>
<?php $depo = 0; ?>
<tr>
	<td colspan="2" class="totald">Total deposito</td>
    <?php $depo = $total1 + $total2 + $total3 + $totchip + $totac; ?>
	<td class="totald"><?php echo $depo; ?></td>

</tr>
</table>
               <!--fin mi tabla reporte--!>
               </div>
               <div>
                  <?php //echo $this->Paginator->prev('<< Anterior', array(), null,array('class' => 'disabled')); ?>  
                  <?php //echo $this->Paginator->numbers(); ?>  
                  <?php //echo $this->Paginator->next('Siguiente >>',    array(), null, array('class' => 'disabled')); ?>
               </div>
               </div>
            </div><!--fin contenido grid-->
             <div class="grid-buttons">
             <!--<div class="title-grid"><span>Acciones</span></div>-->
             <div class="content-gird">
                <!--<div class="button_user">
                   <?php //echo $this->Html->link('', '/usuarios/insertar', array('title' => 'Insertar nuevo')); ?>
                </div>-->
                 
                <div class="button_print">
                   <?php echo $this->Form->button('', array('title' =>
                            'Imprimir lista', 'id' => 'btnImprimir', 'class' => 'print')); ?>
                </div>
            <div class="clear"> </div>
             </div>
            
         </div>
         </div><!--fin contenido-->
        
        
            

      </div><!--End div centered-->
   

 <script type="text/javascript">
   jQuery(document).ready(function() {

         jQuery("#btnImprimir").click(function() {
            //printElem({ leaveOpen: true, printMode: 'popup' });
            printElem({ overrideElementCSS: ['http://www.atotic.com/viva/inventario/app/webroot/css/printable.css'] });
         });


     });
 function printElem(options){
     jQuery('#imprime').printElement(options);
 }
</script>