<h1>Modificar el parametro de Facturas</h1>
<?php echo $this->Form->create('ParametrosFactura'); ?>
<table>
<tr>
	<td>Nit</td>
	<td><?php echo $this->Form->text('nit'); ?></td>
</tr>
<tr>
	<td>Numero de Autorizacion</td>
	<td><?php echo $this->Form->text('numero_autorizacion'); ?></td>
</tr>
<tr>
	<td>Otro 1</td>
	<td><?php echo $this->Form->text('otro1'); ?></td>
</tr>
<tr>
	<td>Otro 2</td>
	<td><?php echo $this->Form->text('otro2'); ?></td>
</tr>
<tr>
	<td>Otro 3</td>
	<td><?php echo $this->Form->text('otro3'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>