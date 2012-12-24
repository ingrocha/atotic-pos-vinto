<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/usuarios'); ?>
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Ingesos salidas
						<small>
							listado
						</small>
					</h3>
					<p>
						Despliega el listado de todos los registros de ingresos y salidas de los mozos
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Asistencias
									<span>
									</span>
								</caption>
								<thead>
									<tr>
										<th scope="col">
											Nombre
											<span class="column-sorter">
											</span>
										</th>
                                        <th scope="col">
											C&oacute;digo
											<span class="column-sorter">
											</span>
										</th>
                                        <th scope="col">
											Hora ingreso
											<span class="column-sorter">
											</span>
										</th>
                                        <th scope="col">
											Hora salida
											<span class="column-sorter">
											</span>
										</th>
                                        <th scope="col">
											Fecha
											<span class="column-sorter">
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
                                <?php foreach($datos as $c): ?>
										<tr>
											<td>
												<?php echo $c[ 'Usuario'][ 'nombre']; ?>
											</td>
											<td>
												<?php echo $c[ 'Usuario'][ 'codigo']; ?>
											</td>
											<td>
												<?php echo $c[ 'Asistencia'][ 'horaingreso']; ?>
											</td>
											<td>
												<?php echo $c[ 'Asistencia'][ 'horasalida']; ?>
											</td>
											<td>
												<?php echo $c[ 'Asistencia'][ 'fecha']; ?>
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
