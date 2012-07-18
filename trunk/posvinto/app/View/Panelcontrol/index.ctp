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
						<h2 class="left">&Uacute;ltimos 20 ingresos</h2>
						<div class="right">
							<label>filtrar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />
						</div>
					</div>
					<!-- End Box Head -->	
                    
					<!-- Panel de control -->
                   <!-- <form>-->
					<div class="buttons">
                       <?php //echo $this->Html->link('control pedidos', array('url'=>array('controller'=>'controlpedidos', 'action'=>'formbuscar', 'class'=>'add-button')));?>
                      <div style="float: left; margin: 5px;">
                         <a href="controlpedidos/formbuscar" class="add-button"><span>control pedidos</span></a>
                      </div>
						
                        <div style="float: left; margin: 5px;">
                           <a href="controlingresos/ingresar" class="add-button"><span>control Insumos</span></a>
                        </div>
						
                        <div style="float: left; margin: 5px;">
                           <a href="crearfacturas/index" class="add-button"><span>facturaci&oacute;n</span></a>
                        </div>
                       <input class="button" type="button" value="preview"/>
                       <input class="button" type="submit" value="submit"/>
                    </div>
                    <!--</form>-->
                    
					<!-- panel control fin -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Add New Article</h2>
					</div>
					<!-- End Box Head -->
					
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

