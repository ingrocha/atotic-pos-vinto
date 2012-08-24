<div class="reservas view">
<h2><?php  echo __('Reserva'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reserva['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $reserva['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipoevento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reserva['Tipoevento']['id'], array('controller' => 'tipoeventos', 'action' => 'view', $reserva['Tipoevento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Personas'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['cantidad_personas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['observaciones']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reserva'), array('action' => 'edit', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reserva'), array('action' => 'delete', $reserva['Reserva']['id']), null, __('Are you sure you want to delete # %s?', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoeventos'), array('controller' => 'tipoeventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoevento'), array('controller' => 'tipoeventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
