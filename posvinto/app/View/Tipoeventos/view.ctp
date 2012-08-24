<div class="tipoeventos view">
<h2><?php  echo __('Tipoevento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoevento['Tipoevento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tipoevento['Tipoevento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($tipoevento['Tipoevento']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($tipoevento['Tipoevento']['estado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipoevento'), array('action' => 'edit', $tipoevento['Tipoevento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipoevento'), array('action' => 'delete', $tipoevento['Tipoevento']['id']), null, __('Are you sure you want to delete # %s?', $tipoevento['Tipoevento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoeventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoevento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservas'); ?></h3>
	<?php if (!empty($tipoevento['Reserva'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Tipoevento Id'); ?></th>
		<th><?php echo __('Cantidad Personas'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoevento['Reserva'] as $reserva): ?>
		<tr>
			<td><?php echo $reserva['id']; ?></td>
			<td><?php echo $reserva['cliente_id']; ?></td>
			<td><?php echo $reserva['tipoevento_id']; ?></td>
			<td><?php echo $reserva['cantidad_personas']; ?></td>
			<td><?php echo $reserva['fecha']; ?></td>
			<td><?php echo $reserva['observaciones']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservas', 'action' => 'view', $reserva['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservas', 'action' => 'edit', $reserva['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservas', 'action' => 'delete', $reserva['id']), null, __('Are you sure you want to delete # %s?', $reserva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
