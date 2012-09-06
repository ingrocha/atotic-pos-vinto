<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
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
                        <?php $hoy=date('Y-m-d'); ?>
						<h2 class="left">REPORTE DE LAS VENTAS DE HOY (<?php echo $this->Utilidades->fechaes($hoy); ?>) </h2>                        
						<div class="right">                                                
						</div>    
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
                    <?php //debug($ventas); ?>
					<div class="table">   
                    <div class="tituloh1">Producto Vendidos</div>                                                     
                	<table style="width: 100%;"> 
                    <tr>
                        <th>Producto</th>                                                 
                        <th>Cantidad</th>                                  
                    </tr>    
<?php 
    $total=0;
    //debug($insumos);
    //$preciou=0; 
?>                    
<?php foreach ($insumos as $i): ?>
    <tr>
        <td>                   
            <?php echo $i['Insumo']['nombre']; ?>
        </td>         
        <td>
            <?php echo $i['Bodega']['total']; ?>
        </td>                    
    </tr>
<?php endforeach; ?>
<tr>
                        <th></th>                                                 
                        <th>TOTAL</th>        
                        <th><?php echo $total; ?> Bs.</th>                     
                    </tr>
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
			<div id="sidebar">				
				<!-- Box -->
				<div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
                    <?php echo $this->Html->link("<span>Listado Insumos</span>", array('action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>						
					<div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php //echo $this->Html->link("<span>Registrar Salida</span>", array('action'=>'salidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <div class="cl">&nbsp;</div>
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Categorias Almacen</span>", array('action'=>'categoriasalmacen'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Registrar Categoria</span>", array('action'=>'nuevacategoria'), array('class'=>"add-button", 'escape' => FALSE)); ?>
					<div class="cl">&nbsp;</div>																		
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->