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
                    <?php echo $this->Html->link("<span>Lista Reservas</span>", array('controller'=>'Reservas', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <?php echo $this->Html->link("<span>Nueva Reserva</span>", array('controller'=>'Reservas', 'action'=>'add'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <div class="cl">&nbsp;</div>
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Nuevo Tipo de Evento</span>", array('controller'=>'Tipoeventos', 'action'=>'add'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php echo $this->Html->link("<span>Lista de tipos de Evento</span>", array('controller'=>'Tipoeventos', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
						<div class="cl">&nbsp;</div>																		
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->