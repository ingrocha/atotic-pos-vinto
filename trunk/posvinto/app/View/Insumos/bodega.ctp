<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller' => 'usuarios', 'action' => 'index')) ?>
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
						<h2 class="left">MOVIMIENTOS DE LA BODEGA</h2>
						<div class="right">					
						</div>
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
	<div class="table">
    <?php echo $this->element('tablagrid'); ?>
	<table id="grid">
    <thead>
    <tr>
        <th style="width: 250px;">Nombre</th>     
        <th style="width: 80px;">Ingreso</th>         
        <th style="width: 80px;">Vendidos</th>
        <th style="width: 70px;">Total</th>
        <th>Fecha</th> 
    </tr>  
    </thead>
    <tbody> 
    <?php foreach ($bodega as $b): ?>
    <tr>
        <td style="width: 250px;">
            <?php $id = $b['Insumo']['id']; ?>            
            <?php echo $b['Insumo']['nombre']; ?>
        </td>        
        <td style="width: 80px;">
            <?php echo $b['Bodega']['ingreso']; ?>
        </td> 
        <td style="width: 80px;">
            <?php echo $b['Bodega']['salida']; ?>
        </td>
        <td style="width: 70px;">
            <?php echo $b['Bodega']['total']; ?>
        </td>
        <td>
            <?php echo $b['Bodega']['fecha']; ?>
        </td>          
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
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
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
                    <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php echo $this->Html->link("<span>Registrar Salida</span>", array('action'=>'salidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
						<div class="cl">&nbsp;</div>																		
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>