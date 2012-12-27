<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->
		element('sidebar/usuarios'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Detalle
						<small>
							asistencias
						</small>
					</h3>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
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
											Item
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Usuario
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
										<th scope="col">
											Observaciones
											<span class="column-sorter">
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($ingresos as $asistencia): ?>
										<?php $i=$asistencia[ 'Asistencia'][ 'id'] ?>
											<tr>
												<td>
													<?php echo $i; ?>
												</td>
												<td>
													<?php echo $asistencia[ 'Usuario'][ 'nombre'] ?>
												</td>
												<td>
													<?php echo $asistencia[ 'Asistencia'][ 'horaingreso'] ?>
												</td>
												<td>
													<?php echo $asistencia[ 'Asistencia'][ 'horasalida'] ?>
												</td>
												<td>
													<?php echo $asistencia[ 'Asistencia'][ 'fecha'] ?>
												</td>
												<td>
													<?php echo $asistencia[ 'Asistencia'][ 'observaciones'] ?>
												</td>
											</tr>
											<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!--fin contenedor de la tabla-->
					</div>
                    </div>
                    <div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-3" class="table boo-table table-striped table-content table-hover">
								<caption>
									Retrasos
									<span>
									</span>
								</caption>
								<thead>
									<tr>
										<th scope="col">
											Item
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Usuario
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Fecha
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Hora
                                            <span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Descuento
											<span class="column-sorter">
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($retrasos as $retraso): ?>
										<tr>
											<td>
												<?php echo $retraso[ 'Retraso'][ 'id'] ?>
											</td>
											<td>
												<?php echo $asistencia[ 'Usuario'][ 'nombre'] ?>
											</td>
											<td>
												<?php echo $retraso[ 'Retraso'][ 'fecha'] ?>
											</td>
											<td>
												<?php echo $retraso[ 'Retraso'][ 'horas']?>
													:
													<?php echo $retraso[ 'Retraso'][ 'minutos'] ?>
											</td>
											<td>
												<?php echo $retraso[ 'Retraso'][ 'descuento'] ?>
											</td>
										</tr>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!--fin contenedor de la tabla-->
					</div>
				</div>
			</section>
		</div>
		<!--fin contenido-->
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
<div class="boxa">
	<div class="table">
		<table>
			<thead>
				<tr>
					<th colspan="3" style="text-align: center;">
						Detalle de asistencias
					</th>
				</tr>
				<tr>
					<th>
						D&iacute;a
					</th>
					<th>
						Hora ingreso
					</th>
					<th>
						Hora salida
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($ingresos as $asistencia): ?>
					<tr>
						<td>
							<?php echo $asistencia[ 'Asistencia'][ 'fecha'] ?>
						</td>
						<td>
							<?php echo $asistencia[ 'Asistencia'][ 'horaingreso'] ?>
						</td>
						<td>
							<?php echo $asistencia[ 'Asistencia'][ 'horasalida'] ?>
						</td>
					</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="table">
		<table>
			<thead>
				<tr>
					<th colspan="3" style="text-align: center;">
						Detalle de retrasos
					</th>
				</tr>
				<tr>
					<th>
						D&iacute;a
					</th>
					<th>
						Hora ingreso
					</th>
					<th>
						Total descuento
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($retrasos as $retraso): ?>
					<tr>
						<td>
							<?php echo $retraso[ 'Retraso'][ 'fecha'] ?>
						</td>
						<td>
							<?php echo $retraso[ 'Retraso'][ 'horas']?>
								:
								<?php echo $retraso[ 'Retraso'][ 'minutos'] ?>
						</td>
						<td>
							<?php echo $retraso[ 'Retraso'][ 'descuento'] ?>
						</td>
					</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>