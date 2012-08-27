<!-- registro insumo -->
<!-- Container -->
<?php echo $this->element('combobusca'); ?>
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action' => 'index')) ?>
			<span>&gt;</span>
			Registro de Insumos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">REGISTRO DE NUEVO INSUMO</h2>						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
<div class="table">
	<?php echo $this->Form->create('Insumo'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre', array('size'=>30)); ?></td>
</tr> 
<tr>
	<td>Precio Compra</td>
	<td><?php echo $this->Form->text('preciocompra', array('size'=>5, 'value'=>0)); ?></td>
</tr>
<tr>
	<td>Precio Venta</td>
	<td><?php echo $this->Form->text('precioventa', array('size'=>5, 'value'=>0)); ?></td>
</tr>
<tr>
	<td>Cantidad</td>
	<td><?php echo $this->Form->text('total', array('size'=>5, 'value'=>0)); ?></td>
</tr>
<tr>
	<td>Categoria</td>
	<td> 
    <div class="ui-widget">           
        <?php echo $this->Form->select('tipo_id', $dct, array('id'=>'combobox')); ?>
    </div>
</td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->textarea('observaciones'); ?></td>
</tr>
</table>
<?php $options = array(
    'Value' => 'Guardar',
    'class' => 'button-submit',
    ) ?>
<?php echo $this->Form->end($options); ?>
<div style="clear: both;"></div>
						
						
						<!-- Pagging -->
					
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                            <?php echo $this->Html->link("<span>Listado Insumos</span>", array('action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>						
    						<div class="cl">&nbsp;</div>		
                            <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                            <?php //echo $this->Html->link("<span>Registrar Salida</span>", array('action'=>'salidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                            <div class="cl">&nbsp;</div>
                            <div class="cl">&nbsp;</div>
                            <?php echo $this->Html->link("<span>Categorias Almacen</span>", array('action'=>'categoriasalmacen'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                            <div class="cl">&nbsp;</div>
                            <?php echo $this->Html->link("<span>Nueva Categoria</span>", array('action'=>'nuevacategoria'), array('class'=>"add-button", 'escape' => FALSE)); ?>
        					<div class="cl">&nbsp;</div>															
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>