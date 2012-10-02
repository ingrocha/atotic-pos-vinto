<h1>Listado de pedidos</h1>
<div class="list-pedidos">
<?php echo $this->Html->link('Nuevo pedido', array('action'=>'verificamoso'),array('class'=>'button')); ?>

<?php echo $this->Html->link('Mis Mesas', array('action'=>'mismesas'),array('class'=>'button')); ?>
<?php //echo $this->Html->link('Almacen', array('action'=>'formingresoalmacen'),array('class'=>'button')); ?>
    <div style="color: #000"><?php echo date("Y-m-d H:m:s");?></div>
