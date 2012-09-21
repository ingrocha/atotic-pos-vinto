<h1>
    insumo de almacen
</h1>
<?php foreach ($insumos as $item): ?>
    <?php $id = $item['Insumo']['id']; ?>
    <?php
    echo $this->Form->create('Pedido', array('action' =>
        'guardapedidoinsumo'));
    ?>
    <?php
        echo $this->Form->hidden('insumo_id', array('value' => $item['Insumo']['id']));
        echo $this->Form->hidden('moso', array('value' => $moso));
        echo $item['Insumo']['nombre'];
    ?>
   
    <?php echo $item['Tipo']['nombre'] ?>
    
    <?php echo $item['Insumo']['total'] ?>

    <?php
        echo $this->Form->text('cantidad', array('id' =>
        "tecladonumerico_$id", 'size' => 3));
    ?>
    <script type="text/javascript">
        jQuery(function() {
            jQuery('#tecladonumerico_<?php echo $id; ?>').keypad();
        });
    </script>        
    <?php echo $this->Form->end('sacar') ?>     
<?php endforeach; ?>