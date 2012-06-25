<h1>Registre Nueva Asistencia</h1>
<?php echo $this->Form->create('Asistencia'); ?>
<table>
<tr>
	<td>Usuario Id</td>
	<td>
    <?php echo $this->Form->select('usuario_id',$dcu); ?></td>  
    </td>
</tr>
<tr>
	<td>Hora del Ingreso</td>
	<td><?php echo $this->Form->text('horaingreso'); ?></td>
</tr>
<tr>
	<td>Hora de la Salida</td>
	<td><?php echo $this->Form->text('horasalida'); ?></td>
</tr>
<tr>
	<td>Fecha</td>
	<td><?php echo $this->Form->text('fecha'); ?></td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->text('observaciones'); ?></td>
</tr>

<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar'); ?>
