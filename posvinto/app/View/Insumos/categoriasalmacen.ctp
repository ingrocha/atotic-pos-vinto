<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller' =>'usuarios', 'action' => 'index')) ?>
			<span>&gt;</span>
			Lista de Insumos
		</div>
		<!-- End Small Nav -->		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>			
			<!-- Content -->
			<div id="content">				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">LISTADO DE CATEGORIAS DEL ALMACEN</h2>                        
						<div class="right">                                             
						</div>    
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
					<div class="table">  
                    <?php echo $this->element('tablagrid'); ?>                  
                	<table id="grid" style="width: 100%;"> 
                    <thead>
                    <tr>
                        <th>Nombre</th>                                                 
                        <th>Observaciones</th>
                        <th>Acciones</th>     
                    </tr>    
                    </thead>
                    <tbody>
<?php foreach ($catalmacen as $c): ?>
    <tr>
        <td>
            <?php $id = $c['Tipo']['id']; ?>            
            <?php echo $c['Tipo']['nombre']; ?>
        </td>         
        <td>
            <?php echo $c['Tipo']['descripcion']; ?>
        </td>             
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'editarcategoria', $id)
                ));
            ?>                                                            
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Eliminar Insumo",
                    'url' => array('action' => 'descat', $id)
                ));
            ?>                 
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<?php //fin de mostrar los datos ?>
</div>
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->								
			</div>
			<!-- End Content -->			
			<!-- Sidebar -->
			<?php echo $this->element('menualmacenes') ?>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
