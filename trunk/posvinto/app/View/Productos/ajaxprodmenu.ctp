<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Producto a Menu</h3>
</div>
<?php //debug($ultimoMovimiento); ?>
<?php $id = $insumo['Insumo']['id']; ?>
<?php $pc = $insumo['Insumo']['preciocompra']; ?>
<?php echo $this->Form->create('Movimiento'); ?>
<div class="modal-body">
    <?php if ($esta == 1): ?>
        <h1 class="tituloh1">El insumo <?php echo $insumo['Insumo']['nombre']; ?> ya esta en el MENU</h1>
    <?php else: ?>
        <fieldset>
            <legend>Insumo: <small><?php echo $insumo['Insumo']['nombre']; ?></small></legend>            
            <?php echo $this->Form->create('Producto'); ?>
            Categoria: <?php echo $this->Form->select('categoria_id', $dcc); ?><br />
            <?php echo $this->Form->hidden('insumo_id', array('value' => $id)); ?>
            <p>&nbsp;</p>
            Costo para Menu: <?php echo $this->Form->text('precio', array('size' => 5)); ?>
            <p>&nbsp;</p>            
        </fieldset>
    <?php endif; ?>        
</div>
<div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-boo">Cerrar</button>
    <button type="submit" class="btn btn-blue">Ok</button>
</form>
</div>  