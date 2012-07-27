<!-- registro insumo -->
<?php echo $this->Html->script('jquery.sheepItPlugin-1.0.0.min'); ?>
<script type="text/javascript">
jQuery(document).ready(function() {     
    var sheepItForm = jQuery('#sheepItForm').sheepIt({
        separator: '',
        allowRemoveLast: true,
        allowRemoveCurrent: true,
        allowRemoveAll: true,
        allowAdd: true,
        allowAddN: true,
        maxFormsCount: 20,
        minFormsCount: 1,
        iniFormsCount: 1
    });
 
});
</script>
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller' => 'usuarios', 'action' => 'index')) ?>
			<span>&gt;</span>
			Registro de Salidas
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Registro Nuevo Insumo</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
<div class="table">
	<?php echo $this->Form->create('Salidas'); ?>
    <!-- sheepIt Form -->
<div id="sheepItForm"> 
  <!-- Form template-->
  <div id="sheepItForm_template">    
  
    Insumo:<?php echo $this->Form->select('Salidas.#index#.insumo_id', $dci); ?>
    Cantidad:<?php echo $this->Form->text('Salidas.#index#.cantidad', array('size' => 5)); ?><p>&nbsp;</p>   
                                
    <!--<input id="sheepItForm_#index#_phone" name="person[phones][#index#][phone]" type="text"/>-->
    <a id="sheepItForm_remove_current">
      <img class="delete" src="images/cross.png" width="16" height="16" border="0">
    </a>
  </div>
  <!-- /Form template-->
   
  <!-- No forms template -->
  <div id="sheepItForm_noforms_template">No phones</div>
  <!-- /No forms template-->
   
  <!-- Controls -->
  <div id="sheepItForm_controls">
    <div id="sheepItForm_add"><a><span>Mas Insumos</span></a></div>
    <div id="sheepItForm_remove_last"><a><span>Menos Insumos</span></a></div>
    <div id="sheepItForm_remove_all"><a><span>Quitar Todos</span></a></div>
    <div id="sheepItForm_add_n">
      <input id="sheepItForm_add_n_input" type="text" size="4" />
      <div id="sheepItForm_add_n_button"><a><span>Agregar</span></a></div></div>
  </div>
  <!-- /Controls -->
   
</div>
<!-- /sheepIt Form -->

<?php $options = array(
    'Value' => 'Guardar',
    'class' => 'button-submit',
    ) ?>
<?php echo $this->Form->end($options); ?>
<div style="clear: both;"></div>
						
						
						<!-- Pagging -->
					
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                    <?php echo $this->Html->link("<span>Listado Insumos</span>",
array('action' => 'index'), array('class' => "add-button", 'escape' => false)); ?>						
						<div class="cl">&nbsp;</div>																	
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>