<h1>Registre Nuevo Conrato</h1>
<?php echo $this->Form->create('Contrato'); ?>
<table>
<tr>
	<td>Usuario Id</td>
	<td><?php echo $this->Form->select('usuario_id',$dct); ?></td>
</tr>
<tr>
	<td>Fecha Incio</td>
	<td><?php echo $this->Form->text('fechainicio'); ?></td>
</tr>
<tr>
	<td>Fecha Fin</td>
	<td><?php echo $this->Form->text('fechafin'); ?></td>
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