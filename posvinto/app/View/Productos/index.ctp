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
            <?php echo $c['Categoria']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Producto']['precio']; ?>
        </td>
        <td>
            <?php echo $c['Producto']['descripcion']; ?>
        </td>
        <td>
            <?php //echo $this->Html->link('MODIFICAR', array('action'=>'modificar', $id));?>
            <?php //echo $siht->Html->link('ANADIR MODIFICAR PORCIONES', array('action'=>'modificarporciones', $id));?>
            <?php //echo $this->Html->link('ELIMINAR',array('action'=>'eliminar',$id),array('class' => 'inner_a'),('Desea eliminar realmente?')); ?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Producto', 'nuevo'); ?>