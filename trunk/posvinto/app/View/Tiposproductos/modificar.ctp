<h1>Registre Nuevo Tiposproducto</h1>
<?php echo $this->Form->create('Tiposproducto'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>descripcion</td>
	<td><?php echo $this->Form->text('descripcion'); ?></td>
</tr>

<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Guardar');?>