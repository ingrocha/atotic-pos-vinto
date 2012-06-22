<h1>Registre Nuevo Tipo Usuario</h1>
<?php echo $this->Form->create('Tiposusuario'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Descripcion</td>
	<td><?php echo $this->Form->text('descripcion'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>