<div id="sidebar">
<!-- Box -->
   <div class="boxa">				
	<!-- Box Head -->
      <div class="box-head">
	     <h2>Management</h2>
	  </div>
	  <!-- End Box Head-->
      <div class="box-content">
      <?php echo $this->Html->link("<span>Lista usuarios</span>", array('action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
		 <div class="cl">&nbsp;</div> 
         <?php echo $this->Html->link("<span>Nuevo Usuario</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>
         <div class="cl">&nbsp;</div> 
         <?php echo $this->Html->link("<span>Control asistencias</span>", array('controller'=>'Controlingresosalidas', 'action'=>'formbuscar'), array('class'=>"add-button", 'escape' => FALSE)); ?>
		 <div class="cl">&nbsp;</div> 
         <?php echo $this->Html->link("<span>lista asistencias</span>", array('controller'=>'Controlingresosalidas', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
      <div class="cl">&nbsp;</div>
      <?php echo $this->Html->link("<span>lista multas</span>", array('controller'=>'ConfMultas', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
      <div class="cl"></div>
      <?php echo $this->Html->link("<span>nueva multa</span>", array('controller'=>'ConfMultas', 'action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>
      <div class="cl"></div>						
      </div>
   </div>
				<!-- End Box -->
</div>