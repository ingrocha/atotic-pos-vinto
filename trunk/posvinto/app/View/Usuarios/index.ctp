<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/usuarios'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Usuarios
						<small>
							listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los usuarios registrados en el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Insumos
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
											Nombre
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Usuario
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											C&oacute;digo
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Perfil
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
									<?php foreach ($usuarios as $c): ?>
										<?php $id=$c[ 'Usuario'][ 'id']; ?>
											<tr>
												<td>
													<?php echo $id ?>
												</td>
												<td>
													<?php echo $c[ 'Usuario'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $c[ 'Usuario'][ 'usuario']; ?>
												</td>
												<td>
													<?php echo $c[ 'Usuario'][ 'codigo']; ?>
												</td>
												<td>
													<?php echo $c[ 'Perfile'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $c[ 'Estado'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $this->
														Html->image("edit.png", array( "title" => "Editar Usuario", 'url' => array('action' => 'modificar', $id) )); ?>
														<?php echo $this->
															Html->image("elim.png", array( "title" => "Dar de baja", 'url' => array('action' => 'baja', $id) )); ?>
															<?php echo $this->
																Html->image("candado.png", array( "title" => "Cambiar password", 'url' => array('action' => 'cambiarpassword', $id) )); ?>
												</td>
											</tr>
											<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!--fin contenedor de la tabla-->
					</div>
					<!-- widget identificacion de los iconos-->
                    <?php echo $this->element('widget_footer_actions'); ?>
                    <!--fin widget footer-->
				</div>
			</section>
		</div>
		<!--fin contenido-->
</div>