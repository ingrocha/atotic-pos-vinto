<?php if(!empty($cliente)):?>
<?php echo $this->Form->text("1.Pedido.nombre", array('size' => 20,'id' => 'nombrecli','value' => $cliente['Cliente']['nombre'])); ?>
<?php else:?>
<?php echo $this->Form->text("1.Pedido.nombre", array('size' => 20,'id' => 'nombrecli','placeholder' => 'Ingrese el Nombre')); ?>
<?php endif;?>