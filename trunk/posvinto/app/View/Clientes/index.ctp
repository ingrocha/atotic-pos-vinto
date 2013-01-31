<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/clientes'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
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
									<tr>
										<th scope="col">
											Nro.
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Nombre
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Direcci&oacute;n
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Tel&eacute;fono
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Estado
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Acciones
											<span class="column-sorter">
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($clientes as $cli): ?>
										<?php $id=$cli['Cliente'][ 'id']; ?>
											<tr>
								
												<td>
													<?php echo $cli[ 'Cliente'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $cli[ 'Cliente'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $cli[ 'Cliente'][ 'direccion']; ?>
												</td>
												<td>
													<?php echo $cli[ 'Cliente'][ 'telefono']; ?>
												</td>
												<td>
													<?php echo $cli[ 'Cliente'][ 'estado']; ?>
												</td>
												<td>
													<?php echo $this->
														Html->image("edit.png", array( "title" => "Editar Usuario", 'url' => array('action' => 'modificar', $id) )); ?>
														<?php echo $this->
															Html->image("elim.png", array( "title" => "Insertar Nuevo Usuario", 'url' => array('action' => 'nuevo', $id) )); ?>
												</td>
											</tr>
											<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!--fin contenedor de la tabla-->
					</div>
					<!-- widget identificacion de los iconos-->
                    
                    <!--fin widget footer-->
				</div>
			</section>
		</div>
		<!--fin contenido-->
</div>