<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Salida almacen </h3>
</div>
<?php echo $this->Form->create('Movimiento'); ?>
<div class="modal-body">
<?php if($ce['Almacen']['total'] >= 1): ?>
<?php $id=$insumo['Insumo']['id']; ?>
<?php $pc=$insumo['Insumo']['preciocompra']; ?>
    <fieldset>
    <legend>Insumo: <small><?php echo $insumo['Insumo']['nombre']; ?></small></legend>
    <p>Existen <?php echo $ce['Almacen']['total']; ?> Unidades</p>
	<?php echo $this->Form->text('salida', array('placeholder'=>'Introduzca la cantidad a sacar Ej: 2')); ?> Unidades
    
    <?php echo $this->Form->hidden('id_insumo', array('value'=>$id)); ?>
    <?php echo $this->Form->hidden('pc', array('value'=>$pc)); ?>
    <legend>Lugar:</legend>
    <p>
    <?php echo $this->Form->select('lugar',$lugares)  ?>
    </p>
    </fieldset>	
</div>
<?php else: ?>
    <h4>Tienes 0 productos para entregar del insumo <?php echo $insumo['Insumo']['nombre']; ?></h4>
<?php endif; ?>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn btn-boo">Cerrar</button>
	<button type="submit" class="btn btn-blue">Ok</button>
    </form>
</div>