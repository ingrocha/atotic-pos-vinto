<h1 class="tituloh1">Plato: <?php echo $receta['Producto']['nombre']; ?></h1>
<p>&nbsp;</p>
<h2 class="tituloh3">Insumo: <?php echo $receta['Insumo']['nombre']; ?></h2>
<?php //debug($receta); ?>
<br />
<p>&nbsp;</p>
<?php echo $this->Form->create('Receta'); ?>
<?php echo $this->Form->hidden('id', array('size'=>5, 'value'=>$receta['Porcione']['id'])); ?>
<b>Cantidad: </b><?php echo $this->Form->text('cantidad', array('size'=>5, 'value'=>$receta['Porcione']['cantidad'])); ?>
<p>&nbsp;</p>
<?php echo $this->Form->end('Modificar'); ?>
