<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/contratos'); ?>
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Contratos por empleado
						<small>
							listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los contratos por empleado registrados en el sistema
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
									<th scope="col">
										Nombre
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Fecha Inicio
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Fecha fin
										<span class="column-sorter">
										</span>
									</th>
                                    <th scope="col">
										Sueldo
										<span class="column-sorter">
										</span>
									</th>
									<th scope="col">
										Observaciones
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
									<?php foreach($contratos as $c): ?>
										<tr>
											<td>
												<?php $id=$c['Contrato']['id']; echo $id; ?>
											</td>
											<td>
												<?php echo $c['User']['nombre']; ?>
											</td>
											<td>
												<?php echo $c['Contrato']['fechainicio']; ?>
											</td>
											<td>
												<?php echo $c['Contrato']['fechafin']; ?>
											</td>
                                            <td>
                                            <?php echo $c['Contrato']['sueldo']; ?>
                                            </td>
											<td>
												<?php echo $c[ 'Contrato'][ 'observaciones']; ?>
											</td>
											<td>
												<?php echo $this->
													Html->image("edit.png", array( "title" => "Editar Cliente", 'url' => array('action' => 'modificar', $id) )); ?>
													<?php echo $this->
														Html->image("elim.png", array( "title" => "Eliminar", 'url' => array('action' => 'eliminar', $id) )); ?>
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