<div id="main-content" class="main-content container-fluid">
	<?php echo $this->
		element('sidebar/usuarios'); ?>
		<div class="row-fluid page-head">
			<h2>
				<i class="aweso-icon-table">
				</i>
				Control
				<small>
					asistencias
				</small>
			</h2>
		</div>
		<div id="page-content" class="page-content tab-content">
			<section>
				<div class="row-fluid">
					<div class="span6">
						<div class="well well-box well-nice">
							<div class="navbar">
								<div class="navbar-inner no-bg">
									<h4 class="title">
										<i class="fontello-icon-window">
										</i>
										Pago correspondiente
										<small>
											int&eacute;rvalo seleccionado
										</small>
									</h4>
								</div>
							</div>
							<!-- // navbar -->
							<div class="section-content item">
								<p>
									Datos del pago
								</p>
							</div>
							<!-- // content item -->
							<table class="table table-striped table-content">
								<thead>
									<tr>
										<th>
											Nombre empleado:
										</th>
										<th>
											<?php echo $sueldoempleado[ 'Usuario'][ 'nombre'] ?>
										</th>
										<th>
											Sueldo
										</th>
										<th>
											<?php echo $sueldoempleado[ 'Contrato'][ 'sueldo'] ?>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<code>
												Total d&iacute;as trabajados
											</code>
										</td>
										<td>
											<?php echo $diastrabajados ?>
										</td>
										<td>
											Pago correspondiente
										</td>
										<td>
											<?php echo $pagar ?>
										</td>
									</tr>
									<tr>
										<td colspan="3">
											Total descuentos
										</td>
										<td>
											<code>
												<?php echo $descuento ?>
											</code>
										</td>
									</tr>
									<tr>
										<?php if($pago <=0): ?>
											<td colspan="3" style="background-color: red;">
												Deuda
											</td>
											<td style="background-color: red;">
												<?php $name=substr($pago,1); echo $name; ?>
											</td>
											<?php else: ?>
												<td colspan="3">
													Total a cancelar
												</td>
												<td>
													<?php echo $pago ?>
												</td>
												<?php endif; ?>
									</tr>
								</tbody>
							</table>
							<!-- // table-content -->
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="widget widget-simple widget-collapsible">
							<div class="widget-header">
								<h4>
									<i class="fontello-icon-window">
									</i>
									Detalle
									<small>
										asistencias
									</small>
								</h4>
								<div class="widget-tool">
									<a class="btn btn-glyph btn-link widget-toggle fontello-icon-publish" data-toggle="collapse" data-target="#demo1" href="javascript:void(0);"></a>
								</div>
							</div>
							<div id="demo1" class="widget-content collapse in">
								<div class="widget-body">
									<p>
										<?php echo $this->
		Html->link($this->Html->image("menu.png", array("title" => "ver detalle asistencias")), array( 'action' => 'verdetalle',$mozo, $fecha1, $fecha2 ), array('escape' => false));?> Ver detalle asistencias

									</p>
								</div>
								<div class="widget-footer">
									<div class="btn-toolbar padding-side">
									</div>
								</div>
							</div>
						</div>
						<!-- // Widget -->
					</div>
				</div>
			</section>
		</div>
</div>
