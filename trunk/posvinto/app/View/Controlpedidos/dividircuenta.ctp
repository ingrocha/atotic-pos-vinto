<!-- Container -->
<div id="container">
	<div class="shell">
		<!-- Small Nav -->
		<div class="small-nav">
			Dividir cuenta paso 1
		</div>
		<!-- End Small Nav -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">
				&nbsp;
			</div>
			<!-- Content -->
			<div id="content">
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2>
							Dividir cuenta
						</h2>
					</div>
					<!-- End Box Head -->
					<!-- Form -->
					<?php echo $this->
						Form->create(null, array( 'url' => array('controller' => 'controlpedidos', 'action' => 'dividircuenta2') )); ?>
						<div class="form">
							<!-- Table -->
							<?php //debug($pedido); ?>
								<div class="table">
									<table>
										<?php echo $this->
											Form->hidden("1.Pedido.idpedido", array('value' => $idpedido)); ?>
											<tr>
												<td>
													NOMBRE:
												</td>
												<td>
													<?php echo $this->
														Form->text("1.Pedido.nombre", array('size' => 20)); ?>
												</td>
											</tr>
											<tr>
												<td>
													NIT:
												</td>
												<td>
													<?php echo $this->
														Form->text("1.Pedido.nit", array('size' => 20)); ?>
														<?php //echo $ajax->autoComplete('1.Pedido.nit', '/autoComplete') ?>
												</td>
											</tr>
									</table>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<th width="13">
												<input type="checkbox" class="checkbox" />
											</th>
											<th>
												Item
											</th>
											<th>
												cantidad
											</th>
											<th>
												precio
											</th>
											<th align="center">
												subtotal
											</th>
										</tr>
										<?php $i=0; ?>
											<?php $total=0; ?>
												<?php foreach ($pedido as $data): ?>
                                                <?php //debug($data); ?>
															<?php $precio=0; ?>
																<?php 
                                                                $precio = $data[ 'Detalle'][ 'precio']; 
                                                                  $total += $precio;
                                                                ?>
																	<?php if ((fmod($i, 2)==1) ? $clase="odd" : $clase="") ; ?>
																		<?php $i++; ?>
																			<tr class="<?php echo $clase; ?>">
																				<td>
																					<?php echo $this->
																						Form->checkbox("$i.Pedido.chk", array('class' => 'checkbox', 'id' => "chk$i", 'value' => $data['Detalle']['producto_id'], 'checked' => 'checked')); ?>
																						<?php echo $this->
																							Form->hidden("$i.Pedido.producto_id", array('value' => $data['Detalle']['producto_id'])); ?>
																				</td>
																				<td>
																					<?php echo $this->
																						Form->hidden("$i.Pedido.producto", array('value' => $data['Detalle']['producto'])); ?>
																						<?php echo $data[ 'Detalle'][ 'producto']; ?>
																				</td>
																				<td>
																					<h3>
																						<?php echo $this->Form->hidden("$i.Pedido.cantidad", array('value' => 1, "id" => "qty_item_$i")); ?>
																							1
																					</h3>
																				</td>
																				<td>
																					<?php echo $this->
																						Form->hidden("$i.Pedido.preciou", array('value' => $precio, "id" => "price_item_$i")); ?>
																						<?php echo "$ " . number_format($precio, 2, '.', ','); ?>
																				</td>
																				<td align="left" id="total_item_<?php echo $i; ?>">
																					$ 0
																				</td>
																			</tr>
																				<?php endforeach; ?>
																					<tr>
																						<td colspan="4">
																							<b style="margin-left: 27px;">
																								Total
																							</b>
																						</td>
																						<td align="left">
																							$
																							<?php echo number_format($total, 2, '.', ','); ?>
																						</td>
																					</tr>
																					<!--<tr>
																					<td colspan="5" style="float: left;">
																					</td>
																					</tr>-->
									</table>
									<!-- end table-->
								</div>
								<!-- End Form -->
								<!-- Form Buttons -->
								<div class="buttons">
									<!--<input type="button" class="button" value="preview" />
									-->
									<div style="float: left;">
										<?php $options=array( 'label'=>'continuar!', 'name' => "data[$i][Pedido][enviar]", 'class' => 'button', ); echo $this->Form->end($options); ?>
									</div>
									<div style="float: left;">
										<?php //echo $this->Html->link('dividir cuenta', array('controller' => 'controlpedidos', 'action' => 'dividir', $idpedido), array('class' => 'buttona')); ?>
									</div>
								</div>
								<!-- End Form Buttons -->
						</div>
						<!-- End Box -->
				</div>
				<!-- Table -->
			</div>
			<!-- End Box -->
		</div>
		<!-- End Content -->
		<?php echo $this->
			element('menupedidos') ?>
			<div class="cl">
				&nbsp;
			</div>
	</div>
	<!-- Main -->
</div>