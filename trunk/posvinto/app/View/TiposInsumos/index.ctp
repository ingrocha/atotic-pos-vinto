<h1>Listado de Tipos de Insumos</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>
<?php foreach($tipos_insumos as $c): ?>
    <tr>
        <td>
            <?php $id=$c['TiposInsumo']['id'];?>
            
            <?php echo $c['TiposInsumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['TiposInsumo']['descripcion']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Tipo Insumo', 'nuevo'); ?>