<h1>Modificar al usuario</h1>
<?php echo $this->Form->create('Usuario'); ?>
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
	<td>Usuario</td>
	<td><?php echo $this->Form->text('usuario'); ?></td>
</tr>
<tr>
	<td>Password</td>
	<td><?php echo $this->Form->text('pass'); ?></td>
</tr>
<tr>
	<td>Perfile Id</td>
	<td><?php echo $this->Form->select('perfile_id',$dperf); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>