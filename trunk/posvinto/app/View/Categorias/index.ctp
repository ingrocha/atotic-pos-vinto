<h1>Listado de Categorias</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
   </tr>
<?php foreach($categorias as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Categoria']['id'];?>
            
            <?php echo $c['Categoria']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Categoria']['descripcion']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Pedido', 'nuevo'); ?>