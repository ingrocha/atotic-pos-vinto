<!-- registro insumo -->
<!-- Container -->
<?php //echo $this->element('combobusca'); ?>
<div id="container">
	<div class="shell">
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
						<h2 class="left">NUEVO TIPO DE EVENTO</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
<div class="table">
	<?php echo $this->Form->create('Tipoevento'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre', array('size'=>30)); ?></td>
</tr> 
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->textarea('descripcion'); ?></td>
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
			
		<?php echo $this->element('menureservas') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>