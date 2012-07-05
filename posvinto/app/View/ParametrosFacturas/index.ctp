<h1>Listado de Numeros de Autorizacion</h1>
<table>
    <tr>
        <th>Nit</th>
        <th>Numero de Autorizacion</th>
        <th>Otro 1</th>
        <th>Otro 2</th>
        <th>Otro 3</th>
        </tr>
<?php foreach($parametrosfacturas as $par): ?>
    <tr>
        <td>
            <?php $id=$par['ParametrosFactura']['id'];?>
            
            <?php echo $par['ParametrosFactura']['nit']; ?>
        </td>
        <td>
            <?php echo $par['ParametrosFactura']['numero_autorizacion']; ?>
        </td>
        <td>
            <?php echo $par['ParametrosFactura']['otro1']; ?>
        </td>
        <td>
            <?php echo $par['ParametrosFactura']['otro2']; ?>
        </td>
        <td>
            <?php echo $par['ParametrosFactura']['otro3']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Parametro de Factura', 'nuevo'); ?> 