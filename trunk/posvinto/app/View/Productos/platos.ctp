<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/platos'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Platos
						<small>
						Listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los platos registrados en el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Platos
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
											Categoria
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Precio
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
                                <?php $i=1;?>
								<tbody>
									<?php foreach ($platos as $p): ?>
										<?php $id=$p['Producto'][ 'id']; ?>
											<tr>
												<td><?php echo $i; $i++;?></td>
												<td>
													<?php echo $p['Producto']['nombre']; ?>
												</td>
												<td>
													<?php echo $p['Categoria']['nombre']; ?>
												</td>
												<td>
													<?php echo $p[ 'Producto']['precio']; ?>
												</td>
												<td>
												            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'modificar', $id)
                ));
            ?>             
            <?php 
                echo $this->Html->image("receta.png", array(
                    "title" => "Receta",
                    'url' => array('action' => 'receta', $id)
                ));
            ?>    
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Eliminar",
                    'url' => array('action' => 'eliminarplato', $id)
                ));
            ?> 
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