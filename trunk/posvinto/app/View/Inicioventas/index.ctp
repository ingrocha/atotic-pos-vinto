<h1>Listado del Inicio de Ventas</h1>
<table>
    <tr>
        <th>Insumo Id</th>
        <th>Cantidad</th>
        <th>Fecha</th>
    </tr>
<?php foreach($inicioventas as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Inicioventa']['id'];?>
            
            <?php echo $c['Insumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Inicioventa']['cantidad']; ?>
        </td>
        <td>
            <?php echo $c['Inicioventa']['fecha']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nueva Venta', 'nuevo'); ?> 