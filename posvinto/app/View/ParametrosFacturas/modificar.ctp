
<!-- Container -->
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
						<h2 class="left">FORMULARIO DE EDICION DE DATOS</h2>
						<div class="right">					
						</div>
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
        <?php echo $this->element('tablagrid'); ?>  
	<div class="table">
    <?php echo $this->Form->create('ParametrosFactura'); ?>
<table>
<tr>
	<td>Nit</td>
	<td><?php echo $this->Form->text('nit'); ?></td>
</tr>
<tr>
	<td>Numero de Autorizacion</td>
	<td><?php echo $this->Form->text('numero_autorizacion'); ?></td>
</tr>
<tr>
	<td>Llave</td>
	<td><?php echo $this->Form->text('llave', array('size'=>60)); ?></td>
</tr>
<tr>
	<td>Otro 2</td>
	<td><?php echo $this->Form->text('otro2'); ?></td>
</tr>
<tr>
	<td>Otro 3</td>
	<td><?php echo $this->Form->text('otro3'); ?></td>
</tr>
<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('Editar');?>
    </div>
</div>											
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