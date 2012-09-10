	<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Control de pedidos</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">  
                    <?php echo $this->Html->link("<span>Lista pedidos</span>", array('action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>filtro de busquedas</span>", array('action'=>'formbuscar'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>												
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->