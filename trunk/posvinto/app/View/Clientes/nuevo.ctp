<h1>Registre Nuevo Cliente</h1>
<?php echo $this->Form->create('Cliente'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Telefono</td>
	<td><?php echo $this->Form->text('telefono'); ?></td>
</tr>
<tr>
	<td>Direccion</td>
	<td><?php echo $this->Form->textarea('direccion'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>