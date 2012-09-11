<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<span>Registro de nuevo usuario</span>
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
						<h2 class="left">Registro Nuevo Usuario</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
				<?php echo $this->Form->create('Usuario'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Direccion</td>
	<td><?php echo $this->Form->text('direccion'); ?></td>
</tr>
<tr>
	<td>Usuario</td>
	<td><?php echo $this->Form->text('usuario'); ?></td>
</tr>
<tr>
	<td>Password</td>
	<td><?php echo $this->Form->password('pass'); ?></td>
</tr>
<tr>
	<td>Codigo</td>
	<td><?php echo $this->Form->text('codigo'); ?></td>
</tr>
<tr>
	<td>Perfile</td>
	<td><?php echo $this->Form->select('perfile_id',$dperf); ?></td>
</tr>
<!--<tr>
	<td>Sucursal</td>
    <td>
       <?php //echo $this->Form->select('sucursal_id', $sucursales);?>
    </td>
</tr>-->
<tr>
	<td>Estado</td>
    <td>
       <?php echo $this->Form->select('estado_id', $estados);?>
    </td>
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
            <?php echo $this->element('menuusuarios') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>