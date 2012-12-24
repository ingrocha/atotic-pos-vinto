<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/categorias'); ?>
		<!-- // fin sidebar -->
		<!--contenido-->
		<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Categorias
						<small>
							listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos las categorias registradas en el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Categor&iacute;as
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
											Descripcion
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Tipo 
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
									<?php foreach ($categorias as $c): ?>
										<?php $id=$c['Categoria']['id']; ?>
											<tr>
												<td>
													<?php echo $id ?>
												</td>
												<td>
													<?php echo $c['Categoria'][ 'nombre']; ?>
												</td>
												<td>
													<?php echo $c['Categoria']['descripcion']; ?>
												</td>
												<td>
													<?php echo $c['Categoria']['tipo']; ?>
												</td>
												<td>
													<?php if($c['Categoria']['estado'] == 1):?>
                                                        Alta
                                                    <?php else: ?>
                                                        Baja    
                                                    <?php endif; ?>
												</td>
												<td>
													<?php echo $this->Html->image("edit.png", array( "title" => "Editar Usuario", 'url' => array('action' => 'modificar', $id) )); ?>
													<?php echo $this->Html->image("elim.png", array( "title" => "Dar de baja", 'url' => array('action' => 'eliminar', $id) )); ?>
												</td>
											</tr>
											<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!--fin contenedor de la tabla-->
					</div>
					<!-- widget identificacion de los iconos-->
                    <?php echo $this->element('widget_footer_actions1'); ?>
                    <!--fin widget footer-->
				</div>
			</section>
		</div>
		<!--fin contenido-->
</div>
<!--------------------------------------------------------------------------------------------------------------------------->
<h1>Listado de Categorias</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
   </tr>
<?php foreach($categorias as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Categoria']['id'];?>
            
            <?php echo $c['Categoria']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Categoria']['descripcion']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Pedido', 'nuevo'); ?>