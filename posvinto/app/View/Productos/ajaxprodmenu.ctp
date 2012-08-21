<?php //echo $this->element('combobusca'); ?>
<?php //debug($insumo); ?>
<?php if($esta == 1): ?>
    <h2>El insumo <?php echo $insumo['Insumo']['nombre']; ?> ya esta en el almacen</h2>
<?php else: ?>
    <h2><b>Insumo: <?php echo $insumo['Insumo']['nombre']; ?></b></h2><br />
<?php echo $this->Form->create('Producto'); ?>
Categoria: <?php echo $this->Form->select('categoria_id', $dcc); ?><br />
<?php echo $this->Form->hidden('insumo_id', array('value'=>$id)); ?>
<p>&nbsp;</p>
Costo: <?php echo $this->Form->text('precio', array('size'=>5)); ?>
<p>&nbsp;</p>
<?php echo $this->Form->end('Agregar a menu'); ?>
<?php endif;  ?>