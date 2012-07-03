<h1>Ingrese su codigo</h1>
<?php echo $this->Form->create('Pedidos', array('action'=>'mismesas')); ?>
<?php echo $this->Form->text('numero', array('size'=>5)); ?>
<?php echo $this->Form->end('Verficar'); ?>