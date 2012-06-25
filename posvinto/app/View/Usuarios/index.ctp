<h1>Listado de usuarios Registrados</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Usuario</th>
        <th>Password</th>
        <th>Codigo</th>
        <th>Perfile Id</th>
    </tr>
<?php foreach($usuarios as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Usuario']['id'];?>
            
            <?php echo $c['Usuario']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['usuario']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['pass']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['codigo']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['perfile_id']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Usuario', 'nuevo'); ?> 