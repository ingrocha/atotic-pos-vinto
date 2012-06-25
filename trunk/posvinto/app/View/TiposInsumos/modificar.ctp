<h1>Modificar el Tipo Insumo</h1>
<?php echo $this->Form->create('TiposInsumo'); ?>
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