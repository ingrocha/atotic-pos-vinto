<h1>Listado de las Sucursales</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Departamento id</th>
    </tr>
<?php foreach($sucursales as $suc): ?>
    <tr>
        <td>
            <?php $id=$suc['Sucursal']['id'];?>
            
            <?php echo $suc['Sucursal']['nombre']; ?>
        </td>
        <td>
            <?php echo $suc['Sucursal']['direccion']; ?>
        </td>
        <td>
            <?php echo $suc['Departamento']['nombre']; ?>
        </td>
         <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nueva Sucursal', 'nuevo'); ?> 
