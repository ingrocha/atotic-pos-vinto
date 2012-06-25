<h1>Registre Nueva Multa</h1>
<?php echo $this->Form->create('Multa'); ?>
<table>
<tr>
	<td>Usuario Id</td>
	<td><?php echo $this->Form->select('usuario_id',$dmulta); ?></td>
</tr>
<tr>
	<td>Conf Multa Id</td>
	<td><?php echo $this->Form->text('conf_multa_id'); ?></td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->textarea('observaciones'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>