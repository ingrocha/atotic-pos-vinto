<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Ingreso de Insumo</h3>
</div>
<?php //debug($ultimoMovimiento); ?>
<?php $id = $insumo['Insumo']['id']; ?>
<?php $pc = $insumo['Insumo']['preciocompra']; ?>
<?php echo $this->Form->create('Movimiento'); ?>
<div class="modal-body">
    <?php $id = $insumo['Insumo']['id']; ?>
    <?php //debug($insumo); ?>
    <?php echo $this->Form->hidden('insumo_id', array('value' => $id)); ?>
    <?php echo $this->Form->hidden('salida', array('value' => 0)); ?>
    <fieldset>

        <legend>Insumo: <small><?php echo $insumo['Insumo']['nombre']; ?></small></legend>
        <label for="formA04">Unidades:</label>                            
        <?php echo $this->Form->text('entrada', array('id' => 'formA04', 'class' => 'span3', 'placeholder' => 'Ingrese cantidad numeral Ej: 12', 'required', 'title' => 'Este campo Necesario')); ?>
        <!-- form item -->
        <?php echo $this->Form->hidden('id_insumo', array('value' => $id)); ?>
        <?php echo $this->Form->hidden('pc', array('value' => $pc)); ?>        

    </fieldset>	
</div>

<div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-boo">Cerrar</button>
    <button type="submit" class="btn btn-blue">Ok</button>
</form>
</div>  