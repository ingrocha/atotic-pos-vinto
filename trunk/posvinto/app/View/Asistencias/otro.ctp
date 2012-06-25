<h1>Listado de la Asistencia Registrados</h1>
<table>
    <tr>
        <th>Usuario_id</th>
        <th>hora Ingreso</th>
        <th>hora Salida</th>
        <th>Fecha</th>
        <th>Observaciones</th>
    </tr>
<?php foreach($asistencias as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Asistencia']['id'];?>
        
            <?php echo $c['Usuario']['nombre']; ?>
        </td>     
        <td>
            <?php echo $c['Asistencia']['horaingreso']; ?>
        </td>
        <td>
            <?php echo $c['Asistencia']['horasalida']; ?>
        </td>
        <td>
            <?php echo $c['Asistencia']['fecha']; ?>
        </td>
        <td>
            <?php echo $c['Asistencia']['observaciones']; ?>
        </td>
        
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Asistencia por Registrar', 'nuevo'); ?> 