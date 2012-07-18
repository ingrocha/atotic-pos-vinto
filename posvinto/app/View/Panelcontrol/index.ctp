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
                       <?php //echo $this->Html->link('control pedidos', array('url'=>array('controller'=>'controlpedidos', 'action'=>'formbuscar', 'class'=>'add-button')));?>
                       <div style="float: left; margin: 5px;">
                         <a href="usuarios" class="add-button"><span>Usuarios</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="asistencias/" class="add-button"><span>control asistencias</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="categorias" class="add-button"><span>categorias</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="clientes" class="add-button"><span>clientes</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="ConfMultas" class="add-button"><span>configuraci&oacute;n multas</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Contratos" class="add-button"><span>contratos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Controlingresos" class="add-button"><span>control ingresos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="ParametrosFacturas" class="add-button"><span>configuraci&oacute;n par&aacute;metros facturas</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Departamentos" class="add-button"><span>Departamentos</span></a>
                      </div>
   
                      <div style="float: left; margin: 5px;">
                         <a href="Inicioventas" class="add-button"><span>Ingresos diarios</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Insumos" class="add-button"><span>Control insumos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Inventario" class="add-button"><span>Control inventario</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Items" class="add-button"><span>Control items</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Movimientos" class="add-button"><span>Control movimientos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Multas" class="add-button"><span>Control multas</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Porciones" class="add-button"><span>Control porciones</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Productos" class="add-button"><span>Control productos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Sucursales" class="add-button"><span>Sucursales</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="TiposInsumos" class="add-button"><span>Tipos insumos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Tiposproductos" class="add-button"><span>Tipos productos</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="Tiposusuarios" class="add-button"><span>Tipos usuarios</span></a>
                      </div>
                      <div style="float: left; margin: 5px;">
                         <a href="controlpedidos/formbuscar" class="add-button"><span>control pedidos</span></a>
                      </div>
						
                        <div style="float: left; margin: 5px;">
                           <a href="controlingresos/ingresar" class="add-button"><span>control Insumos</span></a>
                        </div>
						
                        <div style="float: left; margin: 5px;">
                           <a href="controlpedidos" class="add-button"><span>Facturar</span></a>
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

