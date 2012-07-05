<h1>Listado de usuarios Registrados</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Usuario</th>
        
        <th>Codigo</th>
        <th>Perfile</th>
        <th>Sucursal</th>
        <th>Estado</th>
    </tr>
<?php foreach($usuarios as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Usuario']['id'];?>
            
            <?php echo $c['Usuario']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['direccion']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['usuario']; ?>
        </td>
       
        <td>
            <?php echo $c['Usuario']['codigo']; ?>
        </td>
        <td>
            <?php echo $c['Perfile']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Sucursal']['nombre']; ?>
        </td>
        <td>
        <?php echo $c['Estado']['nombre']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Dara baja', array('action'=>'baja', $id));?>
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>    
            <?php echo $this->Html->link('Eliminar',array('action'=>'eliminar',$id),null,('Desea aliminar a este usuario?')); ?>       
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Usuario', 'nuevo'); ?> 