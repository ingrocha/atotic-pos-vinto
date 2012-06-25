<?php $total1 = 0;
$total2 = 0;
$total3 = 0;
$totald = 0;
$totd = 0;
$totinv=0;
?>
<?//debug($ventas);?>

   
      <div class="centered">
          
         <div class="grid-1">
            <div class="title-grid"> <span>Reporte diario</span></div>
            <div class="content-gird">
            <div id="imprime">
               <div class="logoprint">
                  
               </div>
                <table class="display">
                  <thead>
                     <tr class="oculto">
                        <th colspan="7">Reporte mensual</th>
                     </tr>
                    <tr>
                        <th class="name">Reporte mensual de:</th>
                        <td><?php echo $fech1; ?> </td>
                        <td>a <?php echo $fech2;?></td>
                        <th class="name">Nombre</th>
                        <td colspan="5"><?php echo $ventas[0]['Usuario']['nombre']; ?></td>
                      </tr>
                      
                  </thead>
                      
               </table>
               <div>
                  &nbsp;
               </div>
            <?php if(empty($pedidos)):?>
               <div class="message2">No exiten pedidos</div>
            <?php else:?>
               <table class="display">
                  <thead>
                  <tr>
                     <th colspan="3">Pedidos de productos</th>
                  </tr>
                  <tr>
                     <th>Producto</th>
                     <th>cantidad</th>
                     <th>Inversion(Bs)</th>
                  </tr>
                     
                  </thead>
                  <tbody>
                  <?php foreach($pedidos as $p):?>
                  <?php $totinv = $totinv + $p['0']['montoinv'];?>
                  <tr>
                     <td><?php echo $p['Producto']['nombre'];?></td>
                     <td><?php echo $p['0']['cantidad'];?></td>
                     <td><?php echo $p['0']['montoinv'];?></td>
                  </tr>
                  <?php endforeach;?>
                  <tr>
                     <td colspan="2" class="total">Total inversi&oacute;n</td>
                     <td class="totals"><?php echo $totinv;?></td>
                  </tr>
                  </tbody>
               </table>
               <div>
                  &nbsp;
               </div>
            <?php endif;?>

            <?php if (empty($ventas)): ?>
            <div class="message2">
               No se registraron ventas de tarjetas
            </div>
                    
                <?php else: ?>
            
                        
              
               <div>
                  &nbsp;
               </div>
               
               <table>
                   <thead>
                   <tr>
                      <th colspan="10" class="txtcent">tarjetas</th>
                   </tr>
                   <tr>
                        <th class="txt" rowspan="2">producto</th>
                        <!--<th class="txt" rowspan="2">saldo</th>-->
                        <th class="txt" colspan="6">venta</th>
                        <th class="txt" rowspan="2">cantidad total</th>
                        <th class="txt" rowspan="2">Bs tot/prod</th>                     
  
                   </tr> 
                    <tr>
                       <th class="txt">CM</th>
                       <th class="txt">BSM</th>
                       <th>CT</th>
                       <th>BST</th>
                       <th>CD</th>
                       <th>BSD</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $total1 = 0; ?>
                  <?php foreach ($ventas as $v): ?>
                     <?php $total1 = $total1 + $v['0']['totalv']; ?>
                     <tr>
                        <td ><?php echo $v['Producto']['nombre']; ?></td>
                        <?php //if (!empty($movs)): ?>
                           <?php //foreach ($movs as $m): ?>
                              <?php //if ($v['Venta']['producto_id'] == $m['Movimiento']['producto_id']): ?>
                                 <?php //$saldo = $m['Movimiento']['total']; ?>
                                <!--<td class="saldo"><?php //echo $saldo; ?></td>
                                <?php //$ingreso = $m['Movimiento']['ingreso']; ?>
                                <td class="ingreso"><?php //echo $ingreso; ?></td>-->
                                
                              <?php //endif; ?>
                              <!--<td>Saldo</td>-->
                           <?php //endforeach; ?>
                        <?php //endif; ?>
                        <?php $precio=0;?>
                        <?php if (!empty($v['0']['mayor'])): ?>
                           <td class="montos"><?php echo $v['0']['mayor']; ?></td>
                           <?php $precio = $v['0']['bsmayor'];?>
                           <?php if(!empty($precio)):?>
                              <td class="montos"><?php echo number_format($precio,2,'.',','); ?></td>
                           <?php else:?>
                              <td class="montos">&nbsp;</td>
                           <?php endif;?>
                        <?php else: ?>
                        
                        <td class="montos">0</td>
                        <td class="montos">&nbsp;</td>
                        
                        <?php endif; ?>
                        
                        <?php if (!empty($v['0']['dist'])||($v['0']['dist'])!=0): ?>
                        <td class="montos"><?php echo $v['0']['dist']; ?></td>
                        <td class="montos"><?php echo $v['0']['bsdistribuidor']; ?></td>
                        <?php else: ?>
                        <td class="montos">0</td>
                        <td class="montos">&nbsp;</td>
                        <?php endif; ?>
                        <?php if (!empty($v['0']['tienda']) || ($v['0']['tienda']!=0)): ?>
                        <td class="montos"><?php echo $v['0']['tienda']; ?></td>
                        <td class="montos"><?php echo $v['0']['bst']; ?></td>
                        <?php else: ?>
                        <td class="montos">0</td>
                        <td class="montos">&nbsp;</td>
                        <?php endif; ?>
                        <td class="montos"><?php echo $v['0']['cantidadt'];?></td>
                        <td class="montos"><?php echo $v['0']['totalv']?></td>
                      </tr>
                     
                         
                      
                   <?php endforeach; ?>  
                   <tr>
                      <td class="total" colspan="8">Total monto Bs tarjetas</td>
                      <td class="totals"><?php echo number_format($total1,2,'.',','); ?></td>
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
                     
                     <th class="txt">efectivo</th>
                     
                     
                   </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($recargas as $r): ?>
                     
                         <tr>
                            <td class="txt2"><?php echo $r['Recarga']['num_abonado']; ?></td>
                            
                                
                                <td class="montos"><?php echo $r['0']['monto']; ?></td>
                             
                             
                             <?php $total2 = $total2 + $r['0']['monto'];?>
                            
                         </tr>
                      <?php endforeach; ?>
                     
  <tr>
    <td  class="total">Total recargas</td>
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
                     <th colspan="3" class="txtcent">Cuentas cobradas</th>
                   </tr>
                                     
                   <tr>
                      <th class="txt">Nro registro cli</th>
                      <th class="txt">Monto deuda</th>
                      <th class="txt">Monto Pago</th>
                      
                   </tr>
                  </thead>
                  <tbody>
                  
                  <?php $total3 = 0; ?>
                      <?php foreach ($cc as $c): ?>
                         <?php $total3 = $total3 + $c['Cuentascliente']['pago']; 
                               $totald = $totald + $c['Cuentascliente']['montotalbs'];
                         ?>
                         <tr>
                      
                            <td class="names"><?php echo $c['Cuentascliente']['num_abonado']; ?></td>
                            <td class="montos"><?php echo $c['Cuentascliente']['montotalbs']; ?></td>
                            <td class="montos"><?php echo $c['Cuentascliente']['pago']; ?></td>
                            
                      </tr>
                      <?php endforeach; ?>
                     
  <tr>
    <td class="total">Totales</td>
    <td class="totals"><?php echo $totald; ?></td>
    <td class="totals"><?php echo $total3;?></td>

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
<table>
<thead>
<tr>
	<th colspan="3" class="txtcent">Arqueo Diario</th>
	
</tr>
</thead>

<tr>
	<td rowspan="9">Observacion</td>
	
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
	<td class="saldo">Total cuentas por cobrar</td>
	<td class="saldo"><?php echo $totald; ?></td>

</tr>
<tr>
   <td class="inv">Total inversion</td>
   <td class="inv"><?php echo $totinv;?></td>
</tr>
<?php $depo = 0; ?>
<tr>
	<td class="totald">Total ingreso</td>
    <?php $depo = $total1 + $total2 + $total3; ?>
	<td class="totald"><?php echo $depo; ?></td>

</tr>
<tr>
<td class="totald">Total ganancia</td>
    <?php $gan = $depo - $totinv; ?>
	<td class="totald"><?php echo $gan; ?></td>
</tr>
</table>
               <!--fin mi tabla reporte--!>
               </div><!--fin del div de impresion--!>
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