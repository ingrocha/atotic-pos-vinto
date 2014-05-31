<?php echo $this->Form->create('Controlpedidos', array('url' => array('controller' => 'Controlpedidos', 'action' => 'index'))); ?>
            <?php //echo $this->Form->button('Imprimir', array('id'=>"imprimir")); ?>
            <?php $opt = array('Value' => 'IMPRIMIR', 'class' => "oculto", 'id' => "btnImprimir"); ?>
            <?php echo $this->Form->end($opt); ?>  
<?php //debug($datos); ?>
<div id="aImprimir">

    <div style="text-align: center; width: 380px;">
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 19px;">
    
    <b>Cochabamba - Bolivia</b>
    </span>
     <div class="linea">
        ..............................................................
    </div>
<div style="text-align: center; width: 380px;">
    <table style="width: 355px;">
        <tr>
            <td style="font-weight: bold;">MOZO:</td>
            <td><?php echo $mozo ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">MESA:</td>
            <td><?php echo $mesa ?></td>
        </tr>
       
    </table>
</div>
    </div>
    
    
    <div class="linea">
        ..............................................................
    </div>     
 
   
    <?php $fecha = date('Y-m-d'); ?>
    <?php $hora = date('H:m:s'); ?>
    <table style="width: 355px;">
        <tr>
            <td style="text-align: center;">Fecha:</td>
            <td style="text-align: center;"><?php echo $fecha; ?></td>
        </tr>
        <tr>
            <td style="text-align: center;">Hora:</td>
            <td style="text-align: center;"><?php echo $hora; ?></td>
        </tr>
       
    </table>
    <div class="linea">
        ..............................................................
    </div>
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 20px;">
    <table class="imprimir-factura">
        <tr>
            <th style="text-align: left; font-size: 18px;">Producto</th>
            <th style="text-align: left; font-size: 18px;">Cant.</th>
            <th style="text-align: left; font-size: 18px;">P/U</th>
            <th style="text-align: left; font-size: 18px;">P/Total</th>
        </tr>
        
        <?php 
        $montoTotal=0;
        foreach ($productos_vector as $i): ?>
        <?php if($i['Producto']['precio'] != 0):?>
            <tr>
                <td style="font-size: 18px;">
                    <?php echo $i['Producto']['nombre']; ?>
                </td>
                <td style="text-align: center; font-size: 18px;">
                    <?php echo $i['Producto']['cantidad']; ?>
                </td>
                <td style="font-size: 18px;">
                    <?php echo $i['Producto']['precio']; ?>
                </td>
                <td style="font-size: 18px;">
                    <?php 
                    $precio = $i['Producto']['precio'] * $i['Producto']['cantidad'];
                    echo number_format($precio, 2, '.', ','); 
                    $montoTotal += $precio;
                     ?>
                </td>
            </tr>
            <?php endif;?>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" style="text-align: right; font-size: 20px;">Importe total BS.</td>
            <td style="font-size: 20px; font-weight: bold;"><?php echo number_format($montoTotal, 2, '.', ','); ?></td>
        </tr>
        
    </table>
    </span>
   
    <div class="linea">
        ..............................................................
    </div>
  
     <div class="linea">
        ..............................................................
    </div>
    <div style="width: 355px; font-size: 18px; text-align: center;">
        <b>"Exija su factura"</b>
    </div>
    <table>
     <tr></tr>
     <tr></tr>
     <tr></tr>
     <tr></tr>
     <tr></tr>
     <tr>
       
            <td  style="padding: 0 30px 0 2px; text-align: left; font-size: 20px;">Nombre: </td>
            <td colspan="3">
            .................................
            </td>
     </tr>
     <tr></tr>
     <tr></tr>
     <tr></tr>
     <tr></tr>
     <tr>
            <td  style="padding: 0 30px 0 2px; text-align: left; font-size: 20px;">NIT:</td>
            <td colspan="3">
            .................................
            </td>
     </tr>
    </table>

</div>
<?php echo $this->Form->create('Detalle', array('url' => array('controller' => 'controlpedidos', 'action' => 'index'))); ?>
<?php echo $this->Form->button('IMPRIMIR', array('name'=>'btnImprimir', 'id'=>'btnImprimir', 'class'=>'btn')) ?>
<?php echo $this->Html->link('VOLVER',array('action'=>'verpedido', $idPedido), array('class'=>'btn'));?></td>

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