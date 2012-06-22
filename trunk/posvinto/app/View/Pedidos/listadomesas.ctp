<h1>Listado de mesas</h1>
<ul>
<?php foreach($mesas as $m): ?>
    <?php $id_pedido=$m['Pedido']['id']; ?>
    <?php $mesa=$m['Pedido']['mesa']; ?>
    <li>
        <div id="pedido_<?php echo $id_pedido; ?>">
            <?php echo $this->Html->link($mesa, array('controller'=>'mesa')); ?>
            <?php echo $m['Pedido']['mesa']; ?>&nbsp;&nbsp;
        </div>
    </li>
<?php endforeach ?>
</ul>