<h1>Listado de usuarios Registrados</h1>
<table>
    <tr>
        <th>Horas</th>
        <th>Monto</th>
        <th>Observaciones</th>
   </tr>
<?php foreach($conf_multas as $c): ?>
    <tr>
        <td>
            <?php $id=$c['ConfMulta']['id'];?>
            
            <?php echo $c['ConfMulta']['horas']; ?>
        </td>
        <td>
            <?php echo $c['ConfMulta']['monto']; ?>
        </td>
        <td>
            <?php echo $c['ConfMulta']['observaciones']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nueva Multa', 'nuevo'); ?> 