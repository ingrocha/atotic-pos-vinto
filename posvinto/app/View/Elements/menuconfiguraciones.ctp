	<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Descuentos</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">  
                    <?php echo $this->Html->link("<span>Descuentos</span>", array('action'=>'descuentos'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Nuevo descuento</span>", array('action'=>'nuevodescuento'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    												
					</div>
				</div>
				<!-- End Box -->
                <!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Facturas</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">  
                    <?php echo $this->Html->link("<span>Parametros</span>", array('controller'=>'parametrosfacturas', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Editar</span>", array('controller'=>'parametrosfacturas','action'=>'modificar', 1), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    												
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->