<h1>Listado de Tipos Usuarios</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>
<?php foreach($tiposusuarios as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Tiposusuario']['id'];?>
            
            <?php echo $c['Tiposusuario']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Tiposusuario']['descripcion']; ?>
        </td>
        
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Tipousuario', 'nuevo'); ?>