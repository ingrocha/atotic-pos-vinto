<h1>Listado de Productos</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Productos Id</th>
        <th>Observaciones</th>
        <th>Acciones</th>
    </tr>
<?php foreach($productos as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Producto']['id'];?>
            
            <?php echo $c['Producto']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Producto']['tipoproductos_id']; ?>
        </td>
        <td>
            <?php echo $c['Producto']['observaciones']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Producto', 'nuevo'); ?>