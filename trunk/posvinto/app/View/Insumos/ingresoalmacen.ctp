<div style="font-size: larger;">
<b>Ingreso almacen </b><p>&nbsp;</p>
<?php //debug($insumo); ?>
<b>Producto </b><?php echo $insumo['Insumo']['nombre']; ?><p>&nbsp;</p>
<?php $id=$insumo['Insumo']['id']; ?>
<?php $pc=$insumo['Insumo']['preciocompra']; ?>
<?php echo $this->Form->create('Movimiento'); ?>
<table>
    <tr>
        <td>Cantidad</td> 
        <td>
            <?php echo $this->Form->text('entrada', array('size'=>5)); ?>Unidades
            <?php echo $this->Form->hidden('id_insumo', array('value'=>$id)); ?>
            <?php echo $this->Form->hidden('pc', array('value'=>$pc)); ?>
        </td>    
    </tr>    
</table>
<?php echo $this->Form->end('Guardar'); ?>
</div>