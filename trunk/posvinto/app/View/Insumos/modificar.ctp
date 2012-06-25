<h1>Modificar el Insumo</h1>
<?php echo $this->Form->create('Insumo'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Tipos Insumos Id</td>
	<td><?php echo $this->Form->select('tipos_insumo_id',$dct); ?></td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->text('observaciones'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>