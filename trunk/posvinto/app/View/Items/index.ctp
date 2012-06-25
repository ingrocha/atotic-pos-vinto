<h1>Listado de Items Registrados</h1>
<table>
    <tr>
        <th>Pedido Id</th>
        <th>Producto Id</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Fecha</th>
    </tr>
<?php foreach($items as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Item']['id'];?>
            
            <?php echo $c['Item']['pedido_id']; ?>
        </td>
        <td>
            <?php echo $c['Producto']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Item']['cantidad']; ?>
        </td>
        <td>
            <?php echo $c['Item']['precio']; ?>
        </td>
        <td>
            <?php echo $c['Item']['fecha']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Item', 'nuevo'); ?> 