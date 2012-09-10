
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
		<h3><span>Lista de asistencias</span></h3>
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
						<h2 class="left">LISTADO DE MULTAS</h2>
						<div class="right">
							
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
<?php echo $this->element('tablagrid'); ?>  
<table>
    <tr>
        <th>Nro</th>
        <th>Horas</th>
        <th>Minutos</th>
        <th>Monto</th>
        <th>Observaciones</th>
        <th>Acciones</th>
   </tr>
<?php foreach($conf_multas as $c): ?>
    <tr>
        <td>
            <?php echo $id=$c['ConfMulta']['id'];?>
         </td>
         <td>
            <?php echo $c['ConfMulta']['horas']; ?>
        </td>
         <td>
            <?php echo $c['ConfMulta']['minutos']; ?>
        </td>
        <td>
            <?php echo $c['ConfMulta']['monto']; ?>
        </td>
        <td>
            <?php echo $c['ConfMulta']['observaciones']; ?>
        </td>
        <td>
           <?php echo $this->Html->link('Editar', array('action'=>'editar', $id));?> 
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
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
