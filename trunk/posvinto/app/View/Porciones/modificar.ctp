<h1>Modificar la Porcion</h1>
<?php echo $this->Form->create('Porcion'); ?>
<table>
<tr>
	<td>Producto Id</td>
	<td><?php echo $this->Form->select('producto_id',$dproducto); ?></td>
</tr>
<tr>
	<td>Insumo Id</td>
	<td><?php echo $this->Form->select('insumo_id',$dtipinsumo); ?></td>
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