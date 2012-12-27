<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/usuarios'); ?>
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Multas
						<small>
							listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos las multas calculadas por el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Multas
									<span>
									</span>
								</caption>
								<thead>
									<tr>
										<th scope="col">
											ID
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Horas
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Minutos
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Monto
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
									</tr>
								</thead>
								<tbody>
									<?php foreach($conf_multas as $c): ?>
										<tr>
											<td>
												<?php echo $id=$c[ 'ConfMulta'][ 'id'];?>
											</td>
											<td>
												<?php echo $c[ 'ConfMulta'][ 'horas']; ?>
											</td>
											<td>
												<?php echo $c[ 'ConfMulta'][ 'minutos']; ?>
											</td>
											<td>
												<?php echo $c[ 'ConfMulta'][ 'monto']; ?>
											</td>
											<td>
												<?php echo $c[ 'ConfMulta'][ 'observaciones']; ?>
											</td>
											<td>
												<?php echo $this->
													Html->image("edit.png", array( "title" => "Editar", 'url' => array('action' => 'editar', $id) )); ?>
													<?php echo $this->
														Html->image("elim.png", array( "title" => "Dar de baja", 'url' => array('action' => 'eliminar', $id) )); ?>
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
</div>
