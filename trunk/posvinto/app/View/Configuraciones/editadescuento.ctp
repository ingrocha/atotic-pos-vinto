<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<span>Registro de nuevo descuento</span>
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
						<h2 class="left">Registrar datos</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
				<?php echo $this->Form->create('Descuento'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('observacion'); ?></td>
</tr>
<tr>
	<td>Porcentaje</td>
	<td><?php echo $this->Form->text('porcentaje'); ?></td>
</tr>

</table>
<?php $options=array('Value'=>'Editar','class'=>'button-submit', )?>
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
            <?php echo $this->element('menuconfiguraciones') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>