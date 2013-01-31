<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/configuraciones'); ?>
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
					    Listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los Clientes registrados en el Sistema
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
											Numero
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Porcentaje
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Observaci&oacute;nes
											<span class="column-sorter">
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($descuentos as $desc): ?>
										<?php $id=$desc['Descuento'][ 'id']; ?>
											<tr>
												<td>
													<?php echo $id ?>
												</td>
												<td>
													<?php echo $desc['Descuento']['porcentaje']; ?>
												</td>
												<td>
													<?php echo $desc['Descuento']['observacion']; ?>
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