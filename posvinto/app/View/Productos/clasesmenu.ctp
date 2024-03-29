<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/categoriasmenu'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Clases del Menu
						<small>
							Listado
						</small>
					</h3>
					<p>
						Muestra todas las clases del Menu
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Categorias del Almacen
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
											Nombre
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Tipo
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
									<?php foreach ($clases as $cla): ?>
										<?php $id=$cla[ 'Clase'][ 'id']; ?>
											<tr>
                                                <td><?php echo $i; $i++;?></td>
												<td>
													<?php echo $cla[ 'Clase'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $cla[ 'Clase'][ 'descripcion']; ?>
												</td>
												<td>
													<?php echo $this->Html->image("edit.png", array( "title" => "Editar datos", 'url' => array('action' => 'editarcategoria', $id) )); ?>
								                    <?php echo $this->Html->link($this->Html->image("elim.png", array("alt" => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'eliminacategoria', $id), array('escape' => false), ("Desea eliminar realmente??"));?>
                                                    
                                                    <?php //echo $this->Html->image("elim.png", array( "title" => "Eliminar", 'url' => array('action' => 'eliminacategoria', $id) )); ?>
                                                    <?php if ($c['Categoria']['estado'] == 1):
                                                            echo $this->Html->image("hide.png", array("title" => "Ocultar",
                                                                            'url' => array('action' => 'oculta', $id)));
                                                            else: 
                                                            echo $this->Html->image("show.png", array("title" => "Mostrar",
                                                                            'url' => array('action' => 'muestra', $id)));
                                                    endif; ?> 
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