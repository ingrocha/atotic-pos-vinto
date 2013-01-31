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
						Pedidos
						<small>
							Listado
						</small>
					</h3>
					<p>
						Despliega la lista de todos los Pedidos registrados en el sistema
					</p>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Pedidos
									<span>
									</span>
								</caption>
								<thead>
									<tr>
										<th scope="col">
				                            Mesa
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Mozo
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Hora
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Total
											<span class="column-sorter">
											</span>
										</th>
										<th scope="col">
											Hora
											<span class="column-sorter">
											</span>
										</th>
                                        <th scope="col">
											Estado
											<span class="column-sorter">
											</span>
										</th>
                                        <th scope="col">
											Pagar
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
									<?php foreach ($data as $d): ?>
										<?php $id=$d['Pedido'][ 'id']; ?>
											<tr>
												<td>
													<?php echo $d[ 'Pedido'][ 'mesa']; ?>
												</td>
												<td>
													<?php echo $d[ 'Usuario'][ 'nombre']; ?>
												</td>
                                                <?php $hora = split(' ', $d['Pedido']['fecha']);?>
												<td>
													<h4 class="statistic-values"><?php echo $hora[1]; ?></h4>
                                                    <?php if ($d['Pedido']['estado'] != 3): ?>
                                        <td style="background-color: #FFC9C9;">
                                            <h4 class="statistic-values">POR PAGAR</h4>
                                        </td>
                                            <?php elseif ($d['Pedido']['estado'] == 3): ?>
                                        <td style="background-color: #CAFEA0;;">
                                            <h4 class="statistic-values">PAGADO</h4>
                                        </td>
                                        <?php endif; ?> 
												</td>
												<td>
													<?php echo $d[ 'Pedido'][ 'total']; ?>
												</td>
												<td>
													<?php echo $this->Html->image("candado.png", array( "title" => "Cambiar password", 'url' => array('action' => 'cambiarpassword', $id) )); ?>
												    
                                                     <div id="dialog_<?php echo $id; ?>" style="float: left;">
                                            <?php
                                            /* echo $this->Html->image("print.png", array(
                                              "title" => "Ver Recibo"
                                              )); */
                                            ?>            
                                        </div>  
                                        &nbsp;
                                        <script type="text/javascript">
                                            var dialogOpts = {
                                                modal: true
                                            };
                                            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                                                jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("controlpedidos/ajaxverecibo/<?php echo $id; ?>");
                                    
                                            });                                                                        
                                        </script> 
                                        <?php
                                        echo $this->Html->image("facturar.png", array(
                                            "title" => "Ver Pedido",
                                            'url' => array('action' => 'verpedido', $id)
                                        ));
                                        ?>
                                        <?php
                                        /* echo $this->Html->image("facturar.png", array(
                                          "title" => "Facturar Pedido",
                                          'url' => array('action' => 'facturar1', $id)
                                          )); */
                                        ?>
                                        <?php
                                        /* echo $this->Html->image("recibo.png", array(
                                          "title" => "Imprimir recibo",
                                          'url' => array('action' => 'imprecibo', $id)
                                          )); */
                                        ?>                                        
                                        <?php //echo $this->Html->link('',array('controller' => 'controlpedidos', 'action' => 'facturar1', $d['Pedido']['id']), array('class' => 'ico edit')); ?>
                                        <?php //echo $this->Html->link('',array('controller' => 'controlpedidos', 'action' => 'Recibo', $d['Pedido']['id']), array('class' => 'ico edit')); ?>
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