<?php echo $this->Html->css('keypad/jquery.keypad'); ?>
<?php echo $this->Html->script(array('keypad/jquery.keypad.min',
    'keypad/jquery.keypad-es')); ?>
<script type="text/javascript">
jQuery(function () {
	jQuery('#tecladonumerico').keypad();
});
</script>
<h1>Ingrese el codigo de mesero</h1>
<div class="formverificacodigo">
<?php 
    echo $this->Form->create('Asistencia');
    echo $this->Form->input('codigo', array('id' => 'tecladonumerico', 'size' => 5));
    $options = array('id' => 'button-login', 'Value' => 'Ingresar');
    echo $this->Form->end($options); 
?>
</div>