<h1>Modificar la Categoria</h1>
<?php echo $this->Form->create('Categoria'); ?>
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