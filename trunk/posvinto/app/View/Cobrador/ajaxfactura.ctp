<?php echo $this->Form->create('Controlpedidos', array('action'=>'facturar')); ?>
<h1>Nombre <?php echo $this->Form->text('apellido', array('size'=>25)); ?></h1>
<h1>Nit <?php echo $this->Form->text('nit', array('size'=>25)); ?></h1>
<?php echo $this->Form->hidden('id_pedido', array('value'=>$id_pedido)); ?>
<?php echo $this->Form->end('Imprimir Factura'); ?>