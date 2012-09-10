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
						<h2 class="left">LISTADO DE EVENTOS RESERVADOS</h2>
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
        <th style="width: 180px;">Cliente</th>
        <th style="width: 90px;">Evento</th>
        <th style="width: 90px;">Cantidad Personas</th>
        <th style="width: 120px;">Fecha y Hora</th>        
        <th>Acciones</th>     
    </tr>
    </thead>
    <tbody>    
    <?php foreach ($reservas as $r): ?>
    <tr>
        <td style="width: 180px;">
            <?php $id = $r['Reserva']['id']; ?>            
            <?php echo $r['Cliente']['nombre']; ?>
        </td>
        <td style="width: 90px;">
            <?php echo $r['Tipoevento']['nombre']; ?>
        </td>  
        <td style="width: 90px;">
            <?php echo $r['Reserva']['cantidad_personas']; ?>
        </td>
        <td style="width: 120px;">
            <?php 
                $fecha = $r['Reserva']['fecha']; 
                echo  $this->Utilidades->fechahoraes($fecha); 
            ?>
        </td>   
        <td>  
         <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'edit', $id)
                ));
            ?>      
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'delete', $id)
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
			<?php echo $this->element('menureservas') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div> 