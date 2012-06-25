<h1>Listado de clientes</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
    </tr>
<?php foreach($clientes as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Cliente']['id'];?>
            
            <?php echo $c['Cliente']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Cliente']['direccion']; ?>
        </td>
        <td>
            <?php echo $c['Cliente']['telefono']; ?>
        </td>
        
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
               
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Cliente', 'nuevo'); ?>