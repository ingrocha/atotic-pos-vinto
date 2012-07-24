<?php echo $this->Html->script("jquery.sheepItPlugin-1.0.0.min"); ?>
<script>
jQuery(document).ready(function() {
     
    var sheepItForm = jQuery('#sheepItForm').sheepIt({
        separator: '',
        allowRemoveLast: true,
        allowRemoveCurrent: true,
        allowRemoveAll: true,
        allowAdd: true,
        allowAddN: true,
        maxFormsCount: 10,
        minFormsCount: 0,
        iniFormsCount: 2
    });
 
});
</script>
<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
			<span>&gt;</span>
			Registro de Ingresos
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
						<h2 class="left">Ingreso almacen</h2>						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
<?php echo $this->Form->create('Movimiento'); ?>                    
                    
                    <!-- sheepIt Form -->
<div id="sheepItForm">
 
  <!-- Form template-->
  <div id="sheepItForm_template">
    <label for="sheepItForm_#index#_phone">Insumos <span id="sheepItForm_label"></span></label>
    <!--<input id="sheepItForm_#index#_phone" name="person[phones][#index#][phone]" type="text"/>-->
    <?php echo $this->Form->select('.#index#.Movimiento.insumo_id', $dci); ?> 
    <?php echo $this->Form->text('salida'); ?>       
    <a id="sheepItForm_remove_current">    
      <?php echo $this->Html->image('cross.png', array('class'=>'delete')); ?>      
      <!--<img class="delete" src="img/cross.png" width="16" height="16" border="0">-->
    </a>
  </div>
  <!-- /Form template-->
   
  <!-- No forms template -->
  <div id="sheepItForm_noforms_template">No phones</div>
  <!-- /No forms template-->
   
  <!-- Controls -->
  <div id="sheepItForm_controls">
    <div id="sheepItForm_add"><a><span>Mas Insumos</span></a></div>
    <div id="sheepItForm_remove_last"><a><span>Quitar</span></a></div>
    <div id="sheepItForm_remove_all"><a><span>Quitar Todos</span></a></div>
    <div id="sheepItForm_add_n">
      <input id="sheepItForm_add_n_input" type="text" size="4" />
      <div id="sheepItForm_add_n_button"><a><span>Add</span></a></div></div>
  </div>
  <!-- /Controls -->
   
</div>
<!-- /sheepIt Form -->				
<table>
<tr>
	<td>Insumo</td>	
    <td>Cantidad (Unidades)</td>	
</tr>
<tr>
    <td><?php //echo $this->Form->select('insumo_id', $dci); ?></td>
    <td><?php //echo $this->Form->text('direccion'); ?></td>
</tr>
</table>
<?php $options=array('Value'=>'Guardar','class'=>'button-submit', )?>
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
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
                    <?php //echo $this->Html->link('Nuevo Usuario', 'nuevo'); ?> 
						<a href="nuevo" class="add-button"><span>Nuevo Usuario</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>seleccionar todos</label></p>
						<p><a href="#">Deseleccionar todos</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Ordenar por</label>
							<select class="field">
								<option value="">T&iacute;tulo</option>
							</select>
							<select class="field">
								<option value="">Fecha</option>
							</select>
							<select class="field">
								<option value="">Persona</option>
							</select>
						</div>
						<!-- End Sort -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>