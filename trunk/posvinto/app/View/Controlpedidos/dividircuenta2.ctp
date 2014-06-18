<?php //debug($datos); ?>
<?php if($facturasw == 0 && $recibosw == 0):?>
<div id="aImprimir">
    <table class="tablafactura">
        <tr>
            <td colspan="4" align="center" style="text-transform: uppercase; font-weight: bold;"> 
            <?php //echo $sucursal['Sucursal']['nombre']; ?>
           CENTRO ECOTUR&Iacute;TICO VIVA VINTO
            </td>
        </tr>
      
    </table>
    <div class="linea">
        ....................................................
    </div> 
    <table class="tablafactura">
        <tr>
            <td style="font-weight: bold;">Fecha:</td>
            <td><?php echo $fecha; ?></td>
            <td style="font-weight: bold;">Hora:</td>
            <td><?php echo $hora; ?></td>
        </tr>
        
    </table>
    <?php if($facturasw == 1):?>
    <table class="tablafactura">
        <tr>
            <td style="font-weight: bold;">Nro Factura: </td>
            <td><?php echo $idfactura;?></td>    
        </tr>
        <tr>
            <td style="font-weight: bold;">Nro Autorizacion: </td>
            <td><?php echo $autoriza;?></td>    
        </tr>
        <tr>
            <td style="font-weight: bold;">Codigo Control: </td>
            <td><?php echo $codigo;?></td>    
        </tr>
        
    </table>
    <?php endif;?>
    <div class="linea">
        ..............................................................
    </div>
    <table class="imprimir-factura">
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio u.</th>
        </tr>
        <?php foreach ($datos as $d): ?>
        <?php if($d['Pedido']['cantidad'] != 0):?>
            <tr>
                <td>
                    <?php echo $d['Pedido']['producto']; ?>
                </td>
                <td class="cantidad">
                    <?php echo $d['Pedido']['cantidad']; ?>
                </td>
                <td>
                    <?php echo $d['Pedido']['precio']; ?>
                </td>
            </tr>
            <?php endif;?>
        <?php endforeach; ?>
        <tr>
            <td colspan="2" style="text-align: right;">Importe total</td>
            <td><?php echo $total; ?> Bs.</td>
        </tr>
       
    </table>
 
    <div class="linea">
        .......................................................
    </div>
    <div style="width: 300px; font-size: 9px; text-align: center;">
        "EXIJA SU FACTURA"
    </div>
    <table>
    <tr>
            <td  style="font-weight: bold;">Nombre: </td>
            <td colspan="3"> <?php echo $cliente;?></td>
        </tr>
        <tr>
            <td  style="font-weight: bold; text-transform: uppercase;">NIT:</td>
            <td colspan="3"> <?php echo $nitcliente;?></td>
        </tr>
    </table>
</div> 
<?php endif;?>    
<?php if($facturasw == 1):?>
<div id="aImprimir">
    <div style="text-align: center; width: 329px;">
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 17px;">
    <b>OH COCHABAMBA QUERIDA</b></br>
    <b>RESTAURANTE</b><br />
    Av.Martin de la Rocha Nro.01531<br />
    Zona Cala Cala </br>
    telf: 4411943</br>
    <b>Cochabamba - Bolivia</b>
    </span>
    </div>
    <div class="linea">
        ..............................................................
    </div> 
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 14px;">     
    <?php $fecha = date('Y-m-d'); ?>
    <?php $hora = date('H:m:s'); ?>   
    <table style="width: 355px;">
        <tr>
            <td style="font-weight: bold;">NIT</td>
            <td><?php echo $nit ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Factura:</td>
            <td><?php echo $idfactura; ?></td>
        </tr>
        <tr>
            <td colspan="2" style="font-weight: bold;">Nro.Autorizaci&oacute;n:</td>
            <td colspan="2"><?php echo $autoriza ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Fecha:</td>
            <td><?php echo $fecha; ?></td>
        </tr>
    </table>
    </span>
    <div class="linea">
        ..............................................................
    </div> 
    <?php $fecha = date('Y-m-d'); ?>
    <?php $hora = date('H:m:i'); ?>
    <table class="tablafactura">
        <tr>
            <td  style="font-weight: bold;">Nombre: </td>
            <td colspan="3"><?php echo $cliente; ?></td>
        </tr>
        <tr>
            <td  style="font-weight: bold; text-transform: uppercase;">NIT:</td>
            <td colspan="3"><?php echo $nitcliente; ?></td>
        </tr>
    </table>
    <div class="linea">
        ..............................................................
    </div>
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 14px;">
    <table style="text-align: left; width: 327px;">    <tr>
            <th style="text-align: left;">Producto</th>
            <th>Cant.</th>
            <th>P/U</th>
            <th>P/Total</th>
        </tr>
        <?php foreach ($datos as $i): ?>
        <?php if($i['Pedido']['precio'] != 0 && $i['Pedido']['cantidad'] != 0):?>
            <tr>
                <td>
                    <?php echo $i['Pedido']['producto']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $i['Pedido']['cantidad']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $i['Pedido']['precio']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $i['Pedido']['precio'] * $i['Pedido']['cantidad'];; ?>
                </td>
            </tr>
            <?php endif;?>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="text-align: right;">Importe total <strong>Bs.</strong></td>
            <td><strong><?php echo number_format($total, 2, '.', ','); ?></strong></td>
        </tr>
        
    </table>
    </span>
    
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 13px;">
    <table style="text-align: left; width: 327px;">	<tr>
			<td colspan="4" style="text-align: right;">
				&nbsp;&nbsp;--------------
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				TOTAL A PAGAR: Bs.
			</td>
			<td style="text-align: right;">
				<?php echo number_format($total, 2, '.', ','); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				TOTAL FACTURAR: Bs.
			</td>
			<td style="text-align: right;">
				<?php echo number_format($total, 2, '.', ','); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				Efectivo Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $efectivo ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				CAMBIO Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $cambio ?>
			</td>
		</tr>
	</table>
    </span>
    <div class="linea">
        ..............................................................
    </div>
     
    <table style="width: 339px;">
       <tr>
          <td colspan="2"><b>SON:</b>&nbsp;
          <?php echo $totalliteral ?>&nbsp;con&nbsp;<?php echo $monto[1] ?>/100</td>
       </tr>
        <tr>
            <td style="font-weight: bold;">C&oacute;digo de control:</td>
            <td style="font-weight: bold; text-transform: uppercase;"><?php echo $codigo; ?></td>
        </tr>
        <tr>
            <td><strong>Fecha l&iacute;mite de emisi&oacute;n:</strong></td>
            <td><?php echo $fechalimite ?></td>
        </tr>
    </table>
     <div class="linea">
        ..............................................................
    </div>
    <div style="width: 355px; font-size: 14px; text-align: center;">
        "La reproducci&oacute;n total o parcial y/o el uso no
        autorizado de esta Nota Fiscal, constituye un delito a sersancionado
        conforme a Ley"
    </div>

</div>  
<?php endif;?>
<?php if($facturasw != 1 && $recibosw == 1):?>
<div id="aImprimir">
    <div style="text-align: center; width: 329px;">
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 17px;">
    <b>OH COCHABAMBA QUERIDA</b></br>
    <b>RESTAURANTE</b><br />
    Av.Martin de la Rocha Nro.01531<br />
    Zona Cala Cala </br>
    telf: 4411943</br>
    <b>Cochabamba - Bolivia</b>
    </span>
    </div>
    <div class="linea">
        ..............................................................
    </div> 
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 14px;">     
    <?php $fecha = date('Y-m-d'); ?>
    <?php $hora = date('H:m:s'); ?>   
    <table style="width: 355px;">
        <tr>
            <td style="font-weight: bold;">Nro: Recibo</td>
            <td><?php echo $nrorecibo ?></td>
        </tr>
        
    </table>
    </span>
    <div class="linea">
        ..............................................................
    </div> 
    <?php $fecha = date('Y-m-d'); ?>
    <?php $hora = date('H:m:i'); ?>
    <table class="tablafactura">
        <tr>
            <td  style="font-weight: bold;">Nombre: </td>
            <td colspan="3"><?php echo $cliente; ?></td>
        </tr>
    </table>
    <div class="linea">
        ..............................................................
    </div>
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 14px;">
    <table style="text-align: left; width: 327px;">    <tr>
            <th style="text-align: left;">Producto</th>
            <th>Cant.</th>
            <th>P/U</th>
            <th>P/Total</th>
        </tr>
        <?php foreach ($datos as $i): ?>
        <?php if($i['Pedido']['precio'] != 0 && $i['Pedido']['cantidad'] != 0):?>
            <tr>
                <td>
                    <?php echo $i['Pedido']['producto']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $i['Pedido']['cantidad']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $i['Pedido']['precio']; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo $i['Pedido']['precio'] * $i['Pedido']['cantidad'];; ?>
                </td>
            </tr>
            <?php endif;?>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="text-align: right;">Importe total <strong>Bs.</strong></td>
            <td><strong><?php echo number_format($total, 2, '.', ','); ?></strong></td>
        </tr>
        
    </table>
    </span>
    
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 13px;">
    <table style="text-align: left; width: 327px;">	<tr>
			<td colspan="4" style="text-align: right;">
				&nbsp;&nbsp;--------------
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				TOTAL A PAGAR: Bs.
			</td>
			<td style="text-align: right;">
				<?php echo number_format($total, 2, '.', ','); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				TOTAL RECIBO: Bs.
			</td>
			<td style="text-align: right;">
				<?php echo number_format($total, 2, '.', ','); ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				Efectivo Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $efectivo ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				CAMBIO Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $cambio ?>
			</td>
		</tr>
	</table>
    </span>
    <div class="linea">
        ..............................................................
    </div>
     
    <table style="width: 339px;">
       <tr>
          <td colspan="2"><b>SON:</b>&nbsp;
          <?php echo $totalliteral ?>&nbsp;con&nbsp;<?php echo $monto[1] ?>/100</td>
       </tr>
        
        
    </table>
     <div class="linea">
        ..............................................................
    </div>
    <div style="width: 355px; font-size: 14px; text-align: center;">
        "La reproducci&oacute;n total o parcial y/o el uso no
        autorizado de esta Nota Fiscal, constituye un delito a sersancionado
        conforme a Ley"
    </div>

</div>  
<?php endif;?>
<?php if (!empty($newdata)): ?>
    <?php echo $this->Form->create('Detalle', array('url' => array('controller' => 'controlpedidos', 'action' => 'dividircuenta3'))); ?>
    <table>

        <?php $i = 0; ?>
        <?php foreach ($newdata as $data): ?>
            <?php //debug($data);?>
            <?php echo $this->Form->hidden("$i.Detalle.pedido_id", array('value' => $data['Pedido']['pedido_id'])) ?>
            <tr>
                <td>
                    <?php echo $this->Form->hidden("$i.Detalle.producto_id", array('value' => $data['Pedido']['producto_id'])); ?>
                    <?php echo $this->Form->hidden("$i.Detalle.producto", array('value' => $data['Pedido']['producto'])); ?>
                </td>
                <td>
                    <?php echo $this->Form->hidden("$i.Detalle.cantidad", array('value' => $data['Pedido']['cantidad'])); ?>
                </td>
                <td>
                    <?php echo $this->Form->hidden("$i.Detalle.preciou", array('value' => $data['Pedido']['precio'])); ?>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <td>
            <?php $opt = array('Value' => 'Imprimir', 'class' => "boton", 'id' => "imprimir"); ?>
            <?php echo $this->Form->end($opt); ?>
        </td>
    <?php else: ?>
        <?php echo $this->Form->create('Detalle', array('url' => array('controller' => 'controlpedidos', 'action' => 'index'))); ?>
        <td>
            <?php //echo $this->Form->button('Imprimir', array('id'=>"imprimir")); ?>
            <?php $opt = array('Value' => 'imprimir', 'class' => "boton", 'id' => "imprimir"); ?>
            <?php echo $this->Form->end($opt); ?>  
        </td>
    <?php endif; ?>
    <?php //echo $this->Html->link('volver',array('action'=>'listamateriastomadas', $materias[0]['Materia']['semestre'], $gest1, $gest2), array('class'=>'aboton'));?></td>

</tr>
</table>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#imprimir").click(function() {
            // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
            printElem({ leaveOpen: true, printMode: 'popup' });
            // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
        });
    });
    function printElem(options){
        jQuery('#aImprimir').printElement(options);
    }
</script>