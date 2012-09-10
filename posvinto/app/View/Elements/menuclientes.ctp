	<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">  
                    <?php echo $this->Html->link("<span>Lista Clientes</span>", array('action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Nuevo Cliente</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>												
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->