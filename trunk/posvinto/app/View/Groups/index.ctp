<div class="row-fluid">
  <div class="span12">
  <h3 class="heading"> Listado de perfiles</h3>
  <table class="table table-striped table-bordered dTableR" id="dt_a">
     <thead>
     <th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
     </thead>
     <tbody>
     <?php
	foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
            <?php echo $this->Html->image(
            "iconos/edit.png", array( 
                "title" => "Editar", 'url' => array('action' => 'edit', $group['Group']['id']) 
            )); ?>
            <?php echo $this->Html->link($this->Html->image(
            "iconos/elim.png"), array( 
                "title" => "Eliminar", 'url' => array('action' => 'delete', $group['Group']['id']) 
            ), array('escape'=>false), 'Desea eliminar?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
     </tbody>
  </table>
  </div>
<?php echo $this->element('sidebar/admin'); ?>

</div>
	<?php echo $this->element('jstablas'); ?>
