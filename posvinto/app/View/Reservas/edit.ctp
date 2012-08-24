<div class="reservas form">
<?php echo $this->Form->create('Reserva'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reserva'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('tipoevento_id');
		echo $this->Form->input('cantidad_personas');
		echo $this->Form->input('fecha');
		echo $this->Form->input('observaciones');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reserva.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Reserva.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoeventos'), array('controller' => 'tipoeventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoevento'), array('controller' => 'tipoeventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
