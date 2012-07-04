<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Pedidos</a>
			<span>&gt;</span>
			Filtro para ver pedidos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				<!-- Box -->
                    <?php if(empty($pedidos)):?>
                    <div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Buscar pedido</h2>
					</div>
					<!-- End Box Head -->
                    <!-- Form -->
                    <?php echo $this->Form->create(null, array(
                            'url' => array('controller' => 'controlpedidos', 'action' => 'formbuscar')
                            ));
                    ?>
					
             					
						
						<div class="form">
							    <p class="inline-field">
                                   <label>Fecha</label>
                                   <?php echo $this->Form->text('fecha', array('size'=>10, 'class'=>'field size2'));?>
                                </p>	
								<p class="inline-field">
									<label>Mesa</label>
									<?php echo $this->Form->text('mesa', array('size'=>10, 'class'=>'field size2'));?>
								</p>
								<p class="inline-field">
									<label>Mozo</label>
									<?php echo $this->Form->select('mozos', $mozos);?>
								</p>
								<!--<p>
									<span class="req">max 100 symbols</span>
									<label>Content <span>(Required Field)</span></label>
									<textarea class="field size1" rows="10" cols="30"></textarea>
								</p>	-->
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<!--<input type="button" class="button" value="preview" />-->
							<?php 
                            $options = array(
                            'label' => 'Enviar!',
                            'name' => 'Enviar',
                            'class' => 'button',
      
                            );
                            echo $this->Form->end($options);?>
						</div>
						<!-- End Form Buttons -->
					
                     
				</div>
				<!-- End Box -->
                <?php else:?>
                <div class="box">
                <div class="box-head">
					<h2>Listado pedidos</h2>
				</div>
                <!-- listado de pedidos -->
                <!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
								<th>Ped.#</th>
								<th>Mesa</th>
								<th>Mozo</th>
                                <th>Fecha hora</th>
                                <th>Cuenta</th>
                                <th>Acciones</th>
							</tr>
                            <?php $i=0;?>
                            <?php foreach($pedidos as $data):?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
    							<tr class="<?php echo $clase;?>">
							   	 	<td><h3><?php echo $data['Pedido']['id'];?></h3></td>
    								<td><?php echo $data['Pedido']['mesa'];?></td>
    								<td><?php echo $data['Usuario']['nombre'];?></td></td>
                                    <td><?php echo $data['Pedido']['fecha'];?></td></td>
                                    <td><?php echo $data['Pedido']['total'];?></td></td>
    								<td><a href="#" class="ico del">Borrar</a><a href="verdetallepedido/<?php echo $data['Pedido']['id'];?>" class="ico edit">Ver detalle</a></td>
    							</tr>
							<?php endforeach;?>
						</table>
               
		              </div>
                </div>
             <?php endif;?>
			<!-- End Content -->
			</div>
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
						<a href="#" class="add-button"><span>Ingresar nuevo item</span></a>
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
		
		<!-- Main -->
	</div>


