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
        <th>Nombre</th>
        
        <th>Usuario</th>        
        <th>Codigo</th>
        <th>Perfile</th>
        
        <th>Estado</th>
        <th>Aciones</th>
    </tr>
</thead>
<tbody>
<?php foreach($usuarios as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Usuario']['id'];?>
            
            <?php echo $c['Usuario']['nombre']; ?>
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
        <?php echo $c['Estado']['nombre']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Dara baja', array('action'=>'baja', $id));?>
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
			<?php echo $this->element('menuusuarios') ?>
			<!-- End Sidebar -->
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>