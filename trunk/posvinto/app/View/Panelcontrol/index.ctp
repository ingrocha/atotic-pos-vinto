<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Ingresos</a>
			<span>&gt;</span>
			Listado &uacute;ltimos ingresos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Panel de control</h2>
						
					</div>
					<!-- End Box Head -->	
                    
					<!-- Panel de control -->
                   <!-- <form>-->
					<div class="buttons-control">
                    <?php $url = "http://localhost/sistemaVintoCV/posvinto/"?>
                       <?php //echo $this->Html->link('control pedidos', array('url'=>array('controller'=>'controlpedidos', 'action'=>'formbuscar', 'class'=>'add-button')));?>
                       <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>usuarios" class="add-button"><span>Usuarios</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>asistencias/" class="add-button"><span>control asistencias</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>categorias" class="add-button"><span>categorias</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>clientes" class="add-button"><span>clientes</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>ConfMultas" class="add-button"><span>configuraci&oacute;n multas</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>contratos" class="add-button"><span>contratos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Controlingresos" class="add-button"><span>control ingresos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>ParametrosFacturas" class="add-button"><span>configuraci&oacute;n par&aacute;metros facturas</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Departamentos" class="add-button"><span>Departamentos</span></a>
                      </div>
   
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Inicioventas" class="add-button"><span>Ingresos diarios</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Insumos" class="add-button"><span>Control insumos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Inventario" class="add-button"><span>Control inventario</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Items" class="add-button"><span>Control items</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Movimientos" class="add-button"><span>Control movimientos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Multas" class="add-button"><span>Control multas</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Porciones" class="add-button"><span>Control porciones</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Productos" class="add-button"><span>Control productos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Sucursales" class="add-button"><span>Sucursales</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>TiposInsumos" class="add-button"><span>Tipos insumos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Tiposproductos" class="add-button"><span>Tipos productos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>Tiposusuarios" class="add-button"><span>Tipos usuarios</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="<?php echo $url?>controlpedidos/formbuscar" class="add-button"><span>control pedidos</span></a>
                      </div>
						
                        <div style="float: left; margin: 5px;">
                           <a href="<?php echo $url?>controlingresos/ingresar" class="add-button"><span>control Insumos</span></a>
                        </div>
						
                        <div style="float: left; margin: 5px;">
                           <a href="<?php echo $url?>controlpedidos" class="add-button"><span>Facturar</span></a>
                        </div>
   
                    </div>
                    <!--</form>-->
                    
					<!-- panel control fin -->
					
				</div>
				<!-- End Box -->
			

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="controlingresos/ingresar" class="add-button"><span>Ingresar nuevo item</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>seleccionar todos</label></p>
						<p><a href="#">Deseleccionar todos</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Ordenar por</label>
							<select class="field">
								<option value="">T&iacute;tulo</option>
							</select>
							<select class="field">
								<option value="">Fecha</option>
							</select>
							<select class="field">
								<option value="">Persona</option>
							</select>
						</div>
						<!-- End Sort -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>

