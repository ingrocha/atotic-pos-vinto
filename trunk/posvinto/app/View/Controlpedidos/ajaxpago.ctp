<?php echo $this->Form->create(); ?>
<H1>Monto <?php echo $this->Form->text('monto', array('size'=>5)); ?></H1>
<?php echo $this->Form->hidden('id_pedido', array('value'=>$id_pedido)); ?>
<?php echo $this->Form->end('Pagar'); ?>
