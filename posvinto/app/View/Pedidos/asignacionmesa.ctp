<?php //debug($pedidos); ?>
<table>
<tr>
    <td>Pedido</td>
    <td>Moso</td>
    <td>Fecha</td>
    <td>Mesa</td>
    <td>Acciones</td>
</tr>
<?php foreach($pedidos as $p): ?>
<?php $id_ped = $p['Pedido']['id'] ;?>
<tr>
    <td><?php echo $p['Pedido']['id'] ;?></td>
    <td><?php echo $p['User']['nombre'] ;?></td>
    <td><?php echo $p['Pedido']['fecha'] ;?></td>
    <td><?php echo $p['Pedido']['mesa'] ;?></td>
    <td>
        <?php echo $this->Html->link('ver detalle', array('action'=>'verdetalle', $id_ped)); ?>
        <?php echo $this->Html->link('Entregar No. mesa', array('action'=>'entregarmesa', $id_ped)); ?>
    </td>
</tr>    
<?php endforeach; ?>
</table>