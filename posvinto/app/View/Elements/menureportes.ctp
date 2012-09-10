
            <!-- Sidebar -->
			<div id="sidebar">				
				<!-- Box -->
				<div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Reportes</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                       <?php echo $this->Html->link("<span>Insumos general</span>", array('action'=>'insumoshoy'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                       <?php echo $this->Html->link("<span>Insumos por fecha</span>", array('action'=>'forminsumos'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                       <?php echo $this->Html->link("<span>Ventas del Dia</span>", array('action'=>'ventashoy'), array('class'=>"add-button", 'escape' => FALSE)); ?> 
                        <div class="cl">&nbsp;</div>					
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->