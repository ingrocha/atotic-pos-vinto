<?php //debug($datos); ?>
<div id="aImprimir">

    <div style="text-align: center; width: 380px;">
    <b>CENTRO ECOTUR&Iacute;STICO VIVA VINTO</b><br />
     <div class="linea">
        ..............................................................
    </div>

   
    <div style="padding: 0 20px 0 0;">
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 20px;"> MOZO: <?php echo $mozo ?></span>
    &nbsp; MESA: <span style="font-size: 29px;"><?php echo $mesa ?></span></div>
    </div>
    
    
    <div class="linea">
        ..............................................................
    </div>     
 
   
    <?php $fecha = date('Y-m-d'); ?>
    <?php $hora = date('H:m:s'); ?>
    <table class="tablafactura">
        <tr>
            <td style="font-weight: bold;">Fecha:</td>
            <td><?php echo $fecha; ?></td>
            <td style="font-weight: bold;">Hora:</td>
            <td><?php echo $hora; ?></td>
        </tr>
       
    </table>
    <div class="linea">
        ..............................................................
    </div>
    <table class="imprimir-factura">
        <tr>
            <th>Producto</th>
            <th>Cant.</th>
            <th>P/U</th>
            <th>P/Total</th>
        </tr>
        
        <?php 
        $montoTotal=0;
        foreach ($productos_vector as $i): ?>
            <tr>
                <td>
                    <?php echo $i['Producto']['nombre']; ?>
                </td>
                <td style="margin-right: 6px; padding-right: 18px; width: 6px; height: 14px; padding-left: 25px;">
                    <?php echo $i['Producto']['cantidad']; ?>
                </td>
                <td>
                    <?php echo $i['Producto']['precio']; ?>
                </td>
                <td>
                    <?php 
                    $precio = $i['Producto']['precio'] * $i['Producto']['cantidad'];
                    echo number_format($precio, 2, '.', ','); 
                    $montoTotal += $precio;
                     ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="text-align: right;">Importe total BS.</td>
            <td style="font-size: 20px; font-weight: bold;"><?php echo number_format($montoTotal, 2, '.', ','); ?></td>
        </tr>
        
    </table>
   
    <div class="linea">
        ..............................................................
    </div>
  
     <div class="linea">
        ..............................................................
    </div>
    <div style="width: 355px; font-size: 14px; text-align: center;">
        "Exija su factura"
    </div>
    <table>
     <tr>
            <td  style="font-weight: bold;">Nombre: </td>
            <td colspan="3">
            .........................
            </td>
        </tr>
        <tr>
            <td  style="font-weight: bold; text-transform: uppercase;">NIT:</td>
            <td colspan="3">
            .........................
            </td>
        </tr>
    </table>

</div>
<?php echo $this->Form->button('Imprimir', array('name'=>'btnImprimir', 'id'=>'btnImprimir', 'class'=>'btn')) ?>
<?php echo $this->Html->link('volver',array('action'=>'verpedido', $idPedido), array('class'=>'btn'));?></td>

<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery("#btnImprimir").click(function() {
            //jQuery("#btnImprimir").hide();
            // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
            printElem({ leaveOpen: true, printMode: 'popup' });
             
            // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
        });


    });
    function printElem(options){
        jQuery('#aImprimir').printElement(options);
    }

</script>