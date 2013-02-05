<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Salida almacen </h3>
</div>
<?php echo $this->Form->create('Movimiento'); ?>
<div class="modal-body">
<p><?php echo $insumo['Insumo']['nombre']; ?></p>
<?php if($ce['Almacen']['total'] >= 1): ?>
<?php $id=$insumo['Insumo']['id']; ?>
<?php $pc=$insumo['Insumo']['preciocompra']; ?>
	<?php echo $this->Form->text('entrada', array('placeholder'=>'Introduzca la cantidad Ej: 2')); ?>Unidades
            <?php echo $this->Form->hidden('id_insumo', array('value'=>$id)); ?>
            <?php echo $this->Form->hidden('pc', array('value'=>$pc)); ?>	
</div>
<?php else: ?>
    Tienes 0 productos para entregar
<?php endif; ?>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn btn-boo">Cerrar</button>
	<button type="submit" class="btn btn-blue">Ok</button>
    </form>
</div>

<?php //debug($ce); ?>
<div style="font-size: larger;">
<b>Salida almacen </b><p>&nbsp;</p>
<?php //debug($insumo); ?>
<b>Producto </b><?php echo $insumo['Insumo']['nombre']; ?><p>&nbsp;</p>
<?php $id=$insumo['Insumo']['id']; ?>
<?php $pc=$insumo['Insumo']['preciocompra']; ?>
<?php echo $this->Form->create('Movimiento'); ?>
<?php if($ce['Almacen']['total'] >= 1): ?>
Tienes <b><?php echo $ce['Almacen']['total']; ?></b> unidades en almacen.
<table>
    <tr>
        <td>Cantidad</td> 
        <td>            
            <?php echo $this->Form->text('salida', array('size'=>5, 'value'=>0)); ?>Unidades                                    
            <?php echo $this->Form->hidden('id_insumo', array('value'=>$id)); ?>
            <?php echo $this->Form->hidden('pc', array('value'=>$pc)); ?>
        </td>    
    </tr>    
</table>
<?php else: ?>
    Tienes 0 productos para entregar
<?php endif; ?>
<?php if($ce['Almacen']['total'] >= 1): ?>
    <?php echo $this->Form->end('Guardar'); ?>
<?php else: ?>
<?php endif; ?>
</div>