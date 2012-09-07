<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
			<div class="small-nav">
			<span>Nuevo Cliente</span>
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
						<h2 class="left">Registro Nuevo Cliente</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
				<?php echo $this->Form->create('Usuario'); ?>
<?php echo $this->Form->create('Cliente'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Telefono</td>
	<td><?php echo $this->Form->text('telefono'); ?></td>
</tr>
<tr>
	<td>Direccion</td>
	<td><?php echo $this->Form->textarea('direccion'); ?></td>
</tr>
<tr>
	<td></td>
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
			
		<?php echo $this->element('menuclientes') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>

