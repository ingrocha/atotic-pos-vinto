<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<!--<div class="small-nav">
			
            <?php //echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
			<span>&gt;</span>
			Lista de Usuarios
		</div>-->
		<!-- End Small Nav -->
		<h3><span>Lista de Usuarios</span></h3>
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
						<h2 class="left">LISTADO DE USUARIOS DEL SISTEMA</h2>
						<div class="right">
							
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
<?php echo $this->element('tablagrid'); ?>  
<table id="grid" style="width: 740px;">
<thead>
    <tr>
        <th>Descuento</th>
        <th>Aciones</th>
    </tr>
</thead>
<tbody>
<?php foreach($descuentos as $descuento): ?>
     <?php $id = $descuento['Descuento']['id'] ?>
    <tr>
       
        <td>
        <?php echo $descuento['Descuento']['observacion']; ?>
        </td>
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'editadescuento', $id)
                ));
            ?>
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'eliminardescuento', $id)
                ),
                'Esta seguro que desea eliminar?');
            ?>
           
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>    
            <?php //echo $this->Html->link('Eliminar',array('action'=>'eliminar',$id),null,('Desea aliminar a este usuario?')); ?>       
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"></div>
							<div class="right">                            								
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
			<!-- Sidebar -->
			<?php echo $this->element('menuconfiguraciones') ?>
			<!-- End Sidebar -->
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>