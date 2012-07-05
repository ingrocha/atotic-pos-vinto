<h1>Listado de usuarios Registrados</h1>
<table>
    <tr>
        <th>Nombre</th>
    </tr>
<?php foreach($departamentos as $depa): ?>
    <tr>
        <td>
            <?php $id=$depa['Departamento']['id'];?>
            
            <?php echo $depa['Departamento']['nombre']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Departamento', 'nuevo'); ?> 