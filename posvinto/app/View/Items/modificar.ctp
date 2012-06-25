<h1>Modificar un Item</h1>
<?php echo $this->Form->create('Item'); ?>
<table>
<tr>
	<td>Pedido Id</td>
	<td><?php echo $this->Form->text('pedido_id'); ?></td>
</tr>
<tr>
	<td>Producto Id</td>
	<td><?php echo $this->Form->select('producto_id',$dproducto); ?></td>
</tr>
<tr>
	<td>Cantidad</td>
	<td><?php echo $this->Form->text('cantidad'); ?></td>
</tr>
<tr>
	<td>Precio</td>
	<td><?php echo $this->Form->text('precio'); ?></td>
</tr>
<tr>
	<td>Fecha</td>
	<td><?php echo $this->Form->text('fecha'); ?></td>
</tr>

<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>