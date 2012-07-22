<?php echo $this->Html->css('keypad/jquery.keypad'); ?>
<?php echo $this->Html->script('keypad/jquery.keypad.min'); ?>
<script type="text/javascript">
jQuery(function () {
	jQuery('#tecladonumerico').keypad();
});
</script>
<h1>Ingrese su codigo</h1>
<?php echo $this->Form->create('Pedidos', array('action'=>'verificamoso')); ?>
<?php echo $this->Form->text('numero', array('id'=>'tecladonumerico','size'=>5)); ?>
<?php echo $this->Form->end('Ingresar'); ?>