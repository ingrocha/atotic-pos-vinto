<?php echo $this->Html->css('keypad/jquery.keypad'); ?>
<?php echo $this->Html->script(array('keypad/jquery.keypad.min', 'keypad/jquery.keypad-es')); ?>
<script type="text/javascript">
    jQuery(function () {
        jQuery('#tecladonumerico').keypad();
    });
</script>
<h1>Ingrese su codigo</h1>
<div class="formverificacodigo">
    <?php echo $this->Form->create('Pedidos', array('action' => 'validamoso')); ?>
    <?php echo $this->Form->password('numero', array('id' => 'tecladonumerico', 'size' => 5)); ?>
    <?php $options = array('id' => 'button-login', 'Value' => 'Ingresar') ?>
    <?php echo $this->Form->end($options); ?>
</div>