<h1>Listado de Porciones</h1>
<table>
    <tr>
        <th>Producto_Id</th>
        <th>Insumo Id</th>
        <th>Cantidad</th>
    </tr>
<?php foreach($porciones as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Porcion']['id'];?>
            
            <?php echo $c['Producto']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Tipos_insumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Porcion']['cantidad']; ?>
        </td>
                   
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Pedido', 'nuevo'); ?>