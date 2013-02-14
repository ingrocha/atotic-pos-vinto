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
	<?php echo $this->Form->text('salida', array('placeholder'=>'Introduzca la cantidad Ej: 2')); ?>Unidades
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