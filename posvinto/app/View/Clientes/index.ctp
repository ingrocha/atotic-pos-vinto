<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/usuarios'); ?>
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Clientes
						<small>
							listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los clientes registrados en el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Clientes
									<span>
									</span>
								</caption>
								<thead>
                                <th scope="col">
											ID
											<span class="column-sorter">
											</span>
										</th>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
		</div>
</div>
<!-- Container -->
<div id="container">
	<div class="shell">
		<!-- Small Nav -->
		<div class="small-nav">
			<span>
				Lista de Clientes
			</span>
		</div>
		<!-- End Small Nav -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">
				&nbsp;
			</div>
			<!-- Content -->
			<div id="content">
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">
							LISTADO DE CLIENTES
						</h2>
					</div>
					<!-- End Box Head -->
					<!-- Table -->
					<div class="table">
						<?php echo $this->
							element('tablagrid'); ?>
							<table id="grid" style="width: 740px;">
								<thead>
									<tr>
										<th>
											Nombre
										</th>
										<th>
											Direccion
										</th>
										<th>
											Telefono
										</th>
										<th>
											Estado
										</th>
										<th>
											Acciones
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($clientes as $c): ?>
										<tr>
											<td>
												<?php $id=$c[ 'Cliente'][ 'id']; ?>
													<?php echo $c[ 'Cliente'][ 'nombre']; ?>
											</td>
											<td>
												<?php echo $c[ 'Cliente'][ 'direccion']; ?>
											</td>
											<td>
												<?php echo $c[ 'Cliente'][ 'telefono']; ?>
											</td>
											<td>
												<?php if ($c[ 'Cliente'][ 'estado']==1): ?>
													Alta
													<?php else: ?>
														Baja
														<?php endif; ?>
											</td>
											<td>
												<?php echo $this->
													Html->image("edit.png", array( "title" => "Editar Cliente", 'url' => array('action' => 'modificar', $id) )); ?>
													<?php echo $this->
														Html->image("elim.png", array( "title" => "Dar de baja", 'url' => array('action' => 'baja', $id) )); ?>
														<?php //echo $this->
															Html->link('Modificar', array('action' => 'modificar', $id)); ?>
															<?php //echo $this->
																Html->link('Dar de Baja', array('action' => 'baja', $id)); ?>
											</td>
										</tr>
										<?php endforeach; ?>
								</tbody>
							</table>
							<!-- Pagging -->
							<!-- End Pagging -->
					</div>
					<!-- Table -->
				</div>
				<!-- End Box -->
			</div>
			<!-- End Content -->
			<?php echo $this->
				element('menuclientes') ?>
				<div class="cl">
					&nbsp;
				</div>
		</div>
		<!-- Main -->
	</div>