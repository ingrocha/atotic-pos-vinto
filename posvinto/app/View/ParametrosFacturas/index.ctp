<!-- Container -->
<div id="main-content" class="main-content container-fluid">
<?php echo $this->element('sidebar/configuraciones'); ?>
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
	<div class="widget widget-simple widget-table">
	<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
    <thead>
    <tr>
        <th scope="col">NIT</th>
        <th scope="col">NUMERO DE AUTORIZACION</th>      
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
        <?php echo $this->Html->link($this->Html->image("elim.png"), array('controller' => 'insumos', 'action' => 'eliminar', $id), array('escape' => false), "Esta seguro de eliminar el parametro de Factura..??");?>         
        <?php //echo $this->Html->image("elim.png", array("title" => "Eliminar",'url' => array('action' => 'eliminar', $id)));?>                           
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
			<?php //echo $this->element('menuconfiguraciones') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
</div> 
