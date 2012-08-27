<?php //debug($rec); ?>
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
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Receta</h2>
						<div class="right">
							<label>filtrar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />
						</div>
					</div>
					<!-- End Box Head -->	
					<!-- Table -->

                    <?php if ($rec):?>

					<div class="table">
					<table>
    <tr>
        <th>Insumo</th>
        <th>Cantidad</th>
        <th>Acciones</th>                 
    </tr>
<?php foreach($rec as $r): ?>
    <tr>
        <td>
            <?php $id_porcione=$r['Porcione']['id'];?> 
            <?php $id_producto=$r['Porcione']['producto_id'];?>           
            <?php echo $r['Insumo']['nombre']; ?>
        </td>
        <td>
            <?php echo $r['Porcione']['cantidad']; ?>
        </td>                              
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'modificar', $id_porcione)
                ));
            ?>             
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Eliminar",
                    'url' => array('action' => 'elimporcionplato', $id_porcione, $id_producto)
                ));
            ?>       
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<h3>No se haregistrado insumos</h3>
<?php endif; ?>
					</div>
					<!-- Table -->					
				</div>
				<!-- End Box -->								
			</div>
			<!-- End Content -->			
			<!-- Sidebar -->
			<div id="sidebar">				
				<!-- Box -->
				<div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Adminsitracion</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">                    
                        <?php echo $this->Html->link("<span>Nuevo Insumo a Receta</span>", array('action'=>'nuevaporcion', $id_plato), array('class'=>"add-button", 'escape' => FALSE)); ?>
                        <div class="cl">&nbsp;</div>
                        <hr />                     
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