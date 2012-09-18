<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			Lista de Insumos en bodega
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
	<table id="grid" style="width: 100%;">
    <thead>
    <tr>
        <th>Nombre</th>     
        <th>Total</th>
        <th>Fecha</th> 
    </tr>  
    </thead>
    <tbody> 
    <?php foreach ($bodega as $b): ?>
    <tr>
        <td>
            <?php $id = $b['Insumo']['id']; ?>            
            <?php echo $b['Insumo']['nombre']; ?>
        </td>        
        
        <td>
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
			<?php echo $this->element('menualmacenes') ?>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>