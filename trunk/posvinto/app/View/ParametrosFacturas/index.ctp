<!-- Container -->
<div id="container">
	<div class="shell">		
			
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
						<h2 class="left">PARAMETROS PARA GENERACION DE FACTURAS</h2>
						<div class="right">					
						</div>
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
        <?php echo $this->element('tablagrid'); ?>  
	<div class="table">
	<table id="grid">
    <thead>
    <tr>
        <th style="width: 90px;">NIT</th>
        <th style="width: 90px;">NUMERO DE AUTORIZACION</th>      
        <th>Acciones</th>     
    </tr>
    </thead>
    <tbody>    
    <?php foreach($parametrosfacturas as $par): ?>
    <tr>
        <td>
            <?php $id=$par['ParametrosFactura']['id'];?>
            
            <?php echo $par['ParametrosFactura']['nit']; ?>
        </td>
        <td>
            <?php echo $par['ParametrosFactura']['numero_autorizacion']; ?>
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
                    'url' => array('action' => 'eliminar', $id)
                ));
            ?>                           
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
			<?php echo $this->element('menuconfiguraciones') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
</div> 
