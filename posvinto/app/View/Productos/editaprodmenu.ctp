<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/productosmenu'); ?>
		<!-- // fin sidebar -->
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
					<div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Registro<small>Nuevo Plato</small></h3>
                </div>
                <div class="span10 well well-nice">
                        <legend>Formulario <small>REGISTRO DE NUEVO PLATO</small></legend>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
<?php echo $this->Form->create('Producto'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Precio</td>
	<td><?php echo $this->Form->text('precio', array('size'=>4)); ?></td>
</tr>
<tr>
	<td>Categoria</td>
	<td><?php echo $this->Form->select('categoria_id', $dcc); ?></td>
</tr>
<tr>
	<td>Descripcion</td>
	<td><?php echo $this->Form->textarea('descripcion'); ?></td>
</tr>
</table>
 <button class="btn btn-green" type="submit">Guardar Plato</button>
 </form>
						
						
						<!-- Pagging -->
					
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>