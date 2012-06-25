<h1>Listado de Multas</h1>
<table>
    <tr>
        <th>Usuario Id</th>
        <th>Conf Multa Id</th>
        <th>Observaciones</th>
   </tr>
<?php foreach($multas as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Multa']['id'];?>
            
            <?php echo $c['Usuario']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['ConfMulta']['monto']; ?>
        </td>
        <td>
            <?php echo $c['Multa']['observaciones']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nueva Multa', 'nuevo'); ?> 
<?php echo $this->Html->link('Lista de Multas', 'nuevo'); ?>
