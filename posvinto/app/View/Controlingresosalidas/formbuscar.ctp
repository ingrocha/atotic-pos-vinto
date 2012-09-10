<script type="text/javascript">
    $(function(){
        var pickerOpts = {        
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        defaultDate: "+5",
        yearRange: "-1:+2"        
    };    
        $("#date").datepicker(pickerOpts);
        $("#date1").datepicker(pickerOpts);
        $("#date2").datepicker(pickerOpts);
    });
</script>
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			Filtro para ver pago correspondiente
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				<!-- Box -->
                    <div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Pago del mes</h2>
					</div>
					<!-- End Box Head -->
                    <!-- Form -->
                    <?php echo $this->Form->create(null, array(
                            'url' => array('controller'=>'Controlingresosalidas', 'action' => 'ingresosfechas')
                            ));
                    ?>
					
             					
						
						<div class="form">
                        <p class="inline-field">
                        <label>Seleccione el mozo</label>
                        <?php echo $this->Form->select('mozo', $mozos) ?>
                        </p>
							<p class="inline-field">
                            <label>Para int&eacute;rvalos de fechas</label>
                            </p>
                            <p class="inline-field">
                                   <label>Fecha desde</label>
                                   <?php echo $this->Form->date('fecha_desde', array('size'=>10, 'class'=>'field size2', 'id'=>'date1'));?>
                            </p>
                            <p class="inline-field">
                                   <label>Fecha hasta</label>
                                   <?php echo $this->Form->date('fecha_hasta', array('size'=>10, 'class'=>'field size2', 'id'=>'date2'));?>
                                </p>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<!--<input type="button" class="button" value="preview" />-->
							<?php 
                            $options = array(
                            'label' => 'Enviar!',
                            'name' => 'Enviar',
                            'class' => 'button',
      
                            );
                            echo $this->Form->end($options);?>
						</div>
						<!-- End Form Buttons -->
					
                     
				</div>
				<!-- End Box -->
			<!-- End Content -->
			</div>
			<?php echo $this->element('menuusuarios') ?>
			
			<div class="cl">&nbsp;</div>			
		
		<!-- Main -->
	</div>


