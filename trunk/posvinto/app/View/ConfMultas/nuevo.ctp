<h1>Registre Nueva Multa</h1>
<?php echo $this->Form->create('ConfMulta'); ?>
<table>
<tr>
	<td>Hora</td>
	<td><?php echo $this->Form->text('hora'); ?></td>
</tr>
<tr>
	<td>Monto</td>
	<td><?php echo $this->Form->text('monto'); ?></td>
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