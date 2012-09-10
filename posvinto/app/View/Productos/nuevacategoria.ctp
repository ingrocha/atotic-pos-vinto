<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index')); ?>
			<span>&gt;</span>
			Registro de Platos
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
						<h2 class="left">REGISTRO DE NUEVA CATEGORIA MENU</h2>						
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
					<div class="table">
<?php echo $this->Form->create('Categoria'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
	<td>Tipo</td>
	<td><?php echo $this->Form->select('tipo', $dct); ?></td>
</tr>
</tr>
	<td>Descripcion</td>
	<td><?php echo $this->Form->textarea('descripcion'); ?></td>
</tr>
</table>
<?php $options=array('Value'=>'Guardar','class'=>'button-submit', )?>
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
						<h2>Administraci&oacute;n</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
                        <?php echo $this->element("menucarta"); ?>
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>