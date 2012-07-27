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
						<h2 class="left">Listado de Platos</h2>
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
        <th>Categboria</th>
        <th>Precio</th>        
    </tr>
<?php foreach($platos as $p): ?>
    <tr>
        <td>
            <?php $id=$p['Producto']['id'];?>            
            <?php echo $p['Producto']['nombre']; ?>
        </td>
        <td>
            <?php echo $p['Categoria']['nombre']; ?>
        </td>
        <td>
            <?php echo $p['Producto']['precio']; ?>
        </td>                       
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'modificar', $id)
                ));
            ?>             
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Eliminar",
                    'url' => array('action' => 'modificar', $id)
                ));
            ?>       
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
						<h2>Adminsitracion</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">                     
					<?php echo $this->element("menucarta"); ?>																												
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>