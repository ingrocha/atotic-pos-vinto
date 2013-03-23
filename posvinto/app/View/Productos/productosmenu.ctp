<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/productosmenu'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Productos
						<small>
						Listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los Productos registrados en el sistema
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
											Nombre
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
									<?php foreach ($prod as $p): ?>
										<?php $id=$p['Producto'][ 'id']; ?>
											<tr>
												<td>
													<?php echo $id ?>
												</td>
												<td>
													<?php echo $p[ 'Producto'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $p[ 'Categoria'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $p[ 'Producto'][ 'precio']; ?>
												</td>
												<td>
													<?php echo $p[ 'Producto'][ 'estado']; ?>
												</td>
												<td>
												<?php if ($p['Producto']['estado']): ?>        
                                          
                                            <?php
                                            echo $this->Html->image("show.png", array("title" => "Ocultar",
                                                'url' => array('action' => 'desprodmenu', $id)));
                                            ?>
                                        <?php else: ?>
                                            <?php
                                            echo $this->Html->image("hide.png", array("title" => "Mostrar",
                                                'url' => array('action' => 'habprodmenu', $id)));
                                            ?>            
                                            <?php //echo $this->Html->image('elim.png'); ?>
                                        <?php endif; ?>   
                                        <?php
                                        echo $this->Html->image("receta.png", array("title" =>
                                            "Receta", 'url' => array('action' => 'receta', $id)));
                                        ?> 
                                        <?php
                                        echo $this->Html->image("edit.png", array("title" => "Editar",
                                            'url' => array('action' => 'editaprodmenu', $id)));
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