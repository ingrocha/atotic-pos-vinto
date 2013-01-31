<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/reservas'); ?>
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Listado de Resrvas
						<small>
							reservas
						</small>
					</h3>
					<p>
						Despliega la lista de todas las reservas para eventos registradas en el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Reservas
									<span>
									</span>
								</caption>
								<thead>
									<th scope="col">
										ID
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Cliente
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Evento
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Cantidad personas
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Fecha y hora
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Acciones
										<span class="column-sorter">
										</span>
									</th>
								</thead>
								<tbody>
									<?php foreach ($reservas as $r): ?>
										<?php $id=$r[ 'Reserva'][ 'id']; ?>
											<tr>
												<td>
													<?php echo $id ?>
												</td>
												<td>
													<?php echo $r[ 'Cliente'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $r[ 'Tipoevento'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $r[ 'Reserva'][ 'cantidad_personas']; ?>
												</td>
												<td>
													<?php $fecha=$r[ 'Reserva'][ 'fecha']; echo $this->
														Utilidades->fechahoraes($fecha); ?>
												</td>
												<td>
													<?php echo $this->
														Html->image("edit.png", array( "title" => "Salida Almacen", 'url' => array('action' => 'edit', $id) )); ?>
														<?php echo $this->
															Html->image("elim.png", array( "title" => "Salida Almacen", 'url' => array('action' => 'delete', $id) )); ?>
												</td>
											</tr>
											<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
		</div>
</div>