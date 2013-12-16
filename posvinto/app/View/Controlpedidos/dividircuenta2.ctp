<?php //debug($datos); ?>
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
            <td colspan="3">......................................</td>
        </tr>
        <tr>
            <td  style="font-weight: bold; text-transform: uppercase;">NIT:</td>
            <td colspan="3">......................................</td>
        </tr>
    </table>
</div>      
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
            <?php $opt = array('Value' => 'imprimir', 'class' => "boton", 'id' => "imprimir"); ?>
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