   <div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Almacen</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">  
                    <?php echo $this->Html->link("<span>Insumos</span>", array('controller'=>'Insumos', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    </div>
				</div>
				<!-- End Box -->
                <!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Bodega</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">  
                    <?php echo $this->Html->link("<span>Insumos</span>", array('controller'=>'Insumos', 'action'=>'bodega'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    </div>
				</div>
				<!-- End Box -->
                <!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Categorias e insumos</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content"> 
                     <?php echo $this->Html->link("<span>Nuevo insumo</span>", array('controller'=>'Insumos', 'action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Categorias</span>", array('controller'=>'Insumos', 'action'=>'categoriasalmacen'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>nueva categoria</span>", array('controller'=>'Insumos', 'action'=>'nuevacategoria'), array('class'=>"add-button", 'escape' => FALSE)); ?>                  
                    <div class="cl">&nbsp;</div>
                    </div>
				</div>
				<!-- End Box -->
    </div>