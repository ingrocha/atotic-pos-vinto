<h1>Listado de Insumos</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Tipos Insumos Id</th>
        <th>Observaciones</th>
    </tr>
<?php foreach($insumos as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Insumo']['id'];?>
            
            <?php echo $c['Insumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['TiposInsumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Insumo']['observaciones']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Insumo', 'nuevo'); ?>
