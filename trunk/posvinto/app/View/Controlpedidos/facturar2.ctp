<div id="aImprimir">

<table class="tablafactura">
   <tr>
      <td colspan="4" align="center" style="text-transform: uppercase; font-weight: bold;"> 
            SUCURSAL <?php echo $sucursal['Sucursal']['nombre'];?>
      </td>
   </tr>
   <tr>
     <td align="center" style="text-transform: uppercase;">
        <?php echo $sucursal['Sucursal']['direccion'];?>
     </td>
   </tr>
   <tr>
      <td align="center" style="text-align: center; text-transform: uppercase;"> 
      <?php echo $sucursal['Departamento']['nombre'];?> - BOLIVIA 
      </td>
   </tr>
 </table>
<div class="linea">
.........................................................................................
</div>     
  <table class="tablafactura">
   <tr>
      <td style="font-weight: bold;">NIT</td>
      <td><?php echo $datosfactura[0]['Parametrosfactura']['nit']?></td>
      <td style="font-weight: bold;">#Factura</td>
      <td><?php echo  $idfactura;?></td>
   </tr>
   <tr>
      <td colspan="2" style="font-weight: bold;">#Autorizaci&oacute;n Nro.</td>
      <td colspan="2"><?php echo $datosfactura[0]['Parametrosfactura']['numero_autorizacion']?></td>
   </tr>
</table>
<div class="linea">
.........................................................................................
</div> 
<table class="tablafactura">
   <tr>
      <td style="font-weight: bold;">Fecha:</td>
      <td><?php echo $fecha;?></td>
      <td style="font-weight: bold;">Hora:</td>
      <td><?php echo $hora;?></td>
   </tr>
   <tr>
      <td  style="font-weight: bold;">Nombre: </td>
      <td colspan="3"><?php echo $cliente;?></td>
   </tr>
   <tr>
      <td  style="font-weight: bold; text-transform: uppercase;">NIT:</td>
      <td colspan="3"><?php echo $nitcliente;?></td>
   </tr>
</table>
<div class="linea">
.........................................................................................
</div>
<table style="border: none;">
   <tr>
      <th>Producto</th>
      <th>Cantidad</th>
      <th>Precio u.</th>
   </tr>
    <?php foreach($datos as $d):?>
    <tr>
       <td>
          <?php echo $d['Pedido']['producto'];?>
       </td>
       <td>
          1
       </td>
       <td>
          <?php echo $d['Pedido']['preciou'];?>
       </td>
    </tr>
    <?php endforeach;?>
    <tr>
      <td colspan="2" style="text-align: right;">Importe total</td>
      <td><?php echo $total;?> Bs.</td>
    </tr>
    <tr>
       <td>Son</td>
       <td><?php echo $totalliteral;?> <?php echo $monto[1];?>/100 Bs.</td>
    </tr>
</table>
<div class="linea">
.........................................................................................
</div>
<table style="border: none;">
   <tr>
      <td style="font-weight: bold;">C&oacute;digo de control:</td>
      <td style="font-weight: bold; text-transform: uppercase;"><?php echo $codigo;?></td>
   </tr>
   <tr>
      <td>Fecha l&iacute;mite de emisi&oacute;n:</td>
      <td>06/Oct/2012</td>
   </tr>
</table>
<div class="linea">
.........................................................................................
</div>
<div style="width: 80px; font-size: 9px;">
   "La reproducci&oacute;n total o parcial y/o el uso no
   autorizado de esta Nota Fiscal, constituye un delito a sersancionado
   conforme a Ley"
</div>

</div>


<table>
   <tr>
      
<?php  if(!empty($newdata)):?>

<?php echo $this->Form->create('Factura', array('controller'=>'controlpedidos', 'action'=>'facturar3'));?>
   <?php foreach($newdata as $data):?>
      <?php
         echo $this->Form->hidden('producto', array('value'=>$data['Pedido']['producto']));
         echo $this->Form->hidden('cantidad', array('value'=>$data['Pedido']['cantidad']));
         echo $this->Form->hidden('preciou', array('value'=>$data['Pedido']['preciou']));
      ?>
   <?php endforeach;?>
<td>
   <?php echo $this->Form->end("volver");?>
</td>
<?php endif;?>
<?php //echo $this->Html->link('volver',array('action'=>'listamateriastomadas', $materias[0]['Materia']['semestre'], $gest1, $gest2), array('class'=>'aboton'));?></td>
      <td><?php echo $this->Form->button('Imprimir', array('id'=>"imprimir")); ?></td>
   </tr>
</table>
 <script type="text/javascript">
   jQuery(document).ready(function() {

         jQuery("#imprimir").click(function() {
             printElem({ leaveOpen: true, printMode: 'popup' });
            // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
         });


     });
 function printElem(options){
     jQuery('#aImprimir').printElement(options);
 }

    </script>