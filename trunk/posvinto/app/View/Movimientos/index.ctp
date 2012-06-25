<h1>Listado de Movimientos</h1>
<table>
    <tr>
        <th>Producto Id</th>
        <th>Carne Id</th>
        <th>Cantidad</th>
    </tr>
<?php foreach($movimientos as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Movimiento']['id'];?>
            
            <?php echo $c['Producto']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Insumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Movimiento']['cantidad']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Movimiento', 'nuevo'); ?>