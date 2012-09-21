<?php echo $this->Html->css('keypad/jquery.keypad'); ?>
<?php echo $this->Html->script(array('keypad/jquery.keypad.min', 'keypad/jquery.keypad-es')); ?>
<script type="text/javascript">
    var qwertyLayout = [ 
        jQuery.keypad.qwertyAlphabetic[0] + $.keypad.CLOSE, 
        jQuery.keypad.HALF_SPACE + $.keypad.qwertyAlphabetic[1] + 
        jQuery.keypad.HALF_SPACE + $.keypad.CLEAR, 
        jQuery.keypad.SPACE + $.keypad.qwertyAlphabetic[2] + 
            jQuery.keypad.SHIFT + $.keypad.BACK]; 

    jQuery(function () {
        jQuery('#tecladobuscar').keypad({keypadOnly: false, layout: qwertyLayout});
    });
</script>
<div class="formbuscainsumo">

    <h1>Busque el insumo a sacar</h1>
    <?php
    echo $this->Ajax->form(array('type' => 'post',
        'options' => array(
            'model' => 'Pedidos',
            'update' => 'aqui',
            'url' => array(
                'controller' => 'pedidos',
                'action' => 'ajaxbuscainsumo'
            ),
        )
    ));
    ?>
    <?php echo $this->Form->hidden('moso', array('value' => $moso)); ?>
    <?php echo $this->Form->text('buscar', array('id' => 'tecladobuscar')); ?>
    <?php echo $this->Form->end('Buscar'); ?>
    <div class="resultadoinsumo">
        <div id="aqui">           
        </div>
    </div>
    </div>