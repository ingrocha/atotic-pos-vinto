<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
			<span>&gt;</span>
			Lista de Usuarios
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
						<h2 class="left">Listado de usuarios Registrados</h2>
						<div class="right">
							<label>filtrar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
					<table>
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Usuario</th>
        
        <th>Codigo</th>
        <th>Perfile</th>
        <th>Sucursal</th>
        <th>Estado</th>
    </tr>
<?php foreach($usuarios as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Usuario']['id'];?>
            
            <?php echo $c['Usuario']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['direccion']; ?>
        </td>
        <td>
            <?php echo $c['Usuario']['usuario']; ?>
        </td>
       
        <td>
            <?php echo $c['Usuario']['codigo']; ?>
        </td>
        <td>
            <?php echo $c['Perfile']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Sucursal']['nombre']; ?>
        </td>
        <td>
        <?php echo $c['Estado']['nombre']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Dara baja', array('action'=>'baja', $id));?>
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>    
            <?php echo $this->Html->link('Eliminar',array('action'=>'eliminar',$id),null,('Desea aliminar a este usuario?')); ?>       
        </td>
    </tr>
<?php endforeach; ?>
</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"><?php 
                        echo $this->Paginator->counter(
                                    'Mostrando {:current} - {:end}  de {:pages}, total
                                     {:count}'
                                );
                        ?></div>
							<div class="right">
                            
                            <?php echo $this->Paginator->prev('<< Anterior', array(), null, array('class'=>'disabled'));?>  
                            <?php echo $this->Paginator->numbers( ); ?>  
                            <?php echo $this->Paginator->next('Siguiente >>', array(), null, array('class'=>'disabled'));?>
								
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
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
                    <?php //echo $this->Html->link('Nuevo Usuario', 'nuevo'); ?> 
						<a href="nuevo" class="add-button"><span>Nuevo Usuario</span></a>
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