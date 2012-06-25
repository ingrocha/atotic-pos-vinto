<h1>Registre Nuevo Inicio de Ventas</h1>
<?php echo $this->Form->create('Inicioventa'); ?>
<table>
<tr>
	<td>Insumo Id</td>
	<td><?php echo $this->Form->select('insumo_id',$dinsumo); ?></td>
</tr>
<tr>
	<td>Cantidad</td>
	<td><?php echo $this->Form->text('cantidad'); ?></td>
</tr>
<tr>
	<td>Fecha</td>
	<td><?php echo $this->Form->text('fecha'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar'); ?>