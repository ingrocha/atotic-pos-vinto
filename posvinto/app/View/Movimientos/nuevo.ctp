<h1>Registre Nuevo Movimiento</h1>
<?php echo $this->Form->create('Movimiento'); ?>
<table>
<tr>
	<td>Producto Id</td>
	<td><?php echo $this->Form->select('producto_id',$dproducto); ?></td>
</tr>
<tr>
	<td>Carne Id</td>
	<td><?php echo $this->Form->select('carne_id',$dinsumo); ?></td>
</tr>
<tr>
	<td>Cantidad</td>
	<td><?php echo $this->Form->textarea('cantidad'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>
