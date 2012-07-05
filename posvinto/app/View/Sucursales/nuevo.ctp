<h1>Registre Una Nueva Sucursal</h1>
<?php echo $this->Form->create('Sucursal'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Direccion</td>
	<td><?php echo $this->Form->text('direccion'); ?></td>
</tr>
<tr>
	<td>Departamento</td>
	<td><?php echo $this->Form->select('departamento_id',$dpart); ?></td>
</tr>

<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar'); ?>