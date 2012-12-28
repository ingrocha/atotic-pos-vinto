<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/clientes'); ?>
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
								</thead>
								<tbody>
									<?php foreach ($clientes as $c): ?>
                                    <?php $id = $c['Cliente']['id'] ?>
										<tr>
                                        <td>
                                        <?php echo $id ?>
                                        </td>
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