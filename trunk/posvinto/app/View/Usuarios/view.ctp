<div class="usuarios view">
<h2><?php  echo __('Usuario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perfile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Perfile']['id'], array('controller' => 'perfiles', 'action' => 'view', $usuario['Perfile']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Perfiles'), array('controller' => 'perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perfile'), array('controller' => 'perfiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asistencias'), array('controller' => 'asistencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asistencia'), array('controller' => 'asistencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Multas'), array('controller' => 'multas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multa'), array('controller' => 'multas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asistencias');?></h3>
	<?php if (!empty($usuario['Asistencia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Horaingreso'); ?></th>
		<th><?php echo __('Horasalida'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Asistencia'] as $asistencia): ?>
		<tr>
			<td><?php echo $asistencia['id'];?></td>
			<td><?php echo $asistencia['usuario_id'];?></td>
			<td><?php echo $asistencia['horaingreso'];?></td>
			<td><?php echo $asistencia['horasalida'];?></td>
			<td><?php echo $asistencia['fecha'];?></td>
			<td><?php echo $asistencia['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asistencias', 'action' => 'view', $asistencia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asistencias', 'action' => 'edit', $asistencia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asistencias', 'action' => 'delete', $asistencia['id']), null, __('Are you sure you want to delete # %s?', $asistencia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asistencia'), array('controller' => 'asistencias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contratos');?></h3>
	<?php if (!empty($usuario['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Fechainicio'); ?></th>
		<th><?php echo __('Fechafin'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Contrato'] as $contrato): ?>
		<tr>
			<td><?php echo $contrato['id'];?></td>
			<td><?php echo $contrato['usuario_id'];?></td>
			<td><?php echo $contrato['fechainicio'];?></td>
			<td><?php echo $contrato['fechafin'];?></td>
			<td><?php echo $contrato['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contratos', 'action' => 'view', $contrato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contratos', 'action' => 'edit', $contrato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']), null, __('Are you sure you want to delete # %s?', $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contrato'), array('controller' => 'contratos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Multas');?></h3>
	<?php if (!empty($usuario['Multa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Conf Multa Id'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Multa'] as $multa): ?>
		<tr>
			<td><?php echo $multa['id'];?></td>
			<td><?php echo $multa['usuario_id'];?></td>
			<td><?php echo $multa['conf_multa_id'];?></td>
			<td><?php echo $multa['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'multas', 'action' => 'view', $multa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'multas', 'action' => 'edit', $multa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'multas', 'action' => 'delete', $multa['id']), null, __('Are you sure you want to delete # %s?', $multa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Multa'), array('controller' => 'multas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos');?></h3>
	<?php if (!empty($usuario['Pedido'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['id'];?></td>
			<td><?php echo $pedido['numero'];?></td>
			<td><?php echo $pedido['producto_id'];?></td>
			<td><?php echo $pedido['cantidad'];?></td>
			<td><?php echo $pedido['precio'];?></td>
			<td><?php echo $pedido['usuario_id'];?></td>
			<td><?php echo $pedido['fecha'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['id']), null, __('Are you sure you want to delete # %s?', $pedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
