
            <!-- Sidebar -->
			<div id="sidebar">				
				<!-- Box -->
				<div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Reportes Almacen</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                    <?php echo $this->Html->link("<span>General</span>", array('action'=>'almacenhoy'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    
                    <?php echo $this->Html->link("<span>Por fechas</span>", array('action'=>'formalmacen'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                       <div class="cl">&nbsp;</div>					
					</div>
				</div>
				<!-- End Box -->
                <div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Reportes Bodega</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                       <?php echo $this->Html->link("<span>General</span>", array('action'=>'insumoshoy'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                       <?php echo $this->Html->link("<span>Por Fechas</span>", array('action'=>'forminsumos'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                        <div class="cl">&nbsp;</div>					
					</div>
				</div>
                <!-- Box -->
                <div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Reportes Ventas</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                     <?php echo $this->Html->link("<span>diario</span>", array('action'=>'ventashoy'), array('class'=>"add-button", 'escape' => FALSE)); ?> 
                       <?php echo $this->Html->link("<span>Por Fechas</span>", array('controller'=>'Graficos','action'=>'formreporte'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                        <div class="cl">&nbsp;</div>					
					</div>
				</div>
                <!-- End Box -->
			</div>
			<!-- End Sidebar -->