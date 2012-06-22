<h1>Listado de Tiposproductos</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Observaciones</th>
    </tr>
<?php foreach($tiposproductos as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Tiposproducto']['id'];?>
            
            <?php echo $c['Tiposproducto']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Tiposproducto']['descripcion']; ?>
        </td>
        
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Tiposproducto', 'nuevo'); ?>