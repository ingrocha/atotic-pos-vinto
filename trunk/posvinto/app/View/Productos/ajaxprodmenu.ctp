<?php if($esta==0): ?>
<?php //echo $this->element('combobusca'); ?>
<?php //debug($insumo); ?>
<h2><b>Insumo: <?php echo $insumo['Insumo']['nombre']; ?></b></h2><br />
<?php echo $this->Form->create('Producto'); ?>
Categoria: <?php echo $this->Form->select('categoria_id', $dcc); ?><br />
<?php echo $this->Form->hidden('insumo_id', array('value'=>$id)); ?>
<p>&nbsp;</p>
Costo: <?php echo $this->Form->text('precio', array('size'=>5)); ?>
<p>&nbsp;</p>
<?php echo $this->Form->end('Agregar a menu'); ?>
<?php else: ?>
<h2>Este insumo ya esta en el menu</h2>
<?php endif; ?>