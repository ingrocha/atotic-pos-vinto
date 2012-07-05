<h1>Modificar el Departamento</h1>
<?php echo $this->Form->create('Departamento'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>