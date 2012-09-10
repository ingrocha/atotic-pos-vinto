<?php echo $this->Html->script('jquery.ui.datepicker-es'); ?>
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
    });
</script>
<!-- Container -->
<?php echo $this->element('combobusca'); ?>
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			Registro de nueva reserva
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
						<h2 class="left">NUEVO TIPO DE EVENTO</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
<div class="table">
	<?php echo $this->Form->create('Reserva'); ?>
<table>
<tr>
	<td>Cliente</td>
	<td><?php echo $this->Form->select('cliente_id', $dcc, array('id'=>'combobox')); ?></td>
</tr> 
<tr>
	<td>Evento</td>
	<td><?php echo $this->Form->select('tipoevento_id', $dct); ?></td>
</tr>
<tr>
	<td>Cantidad Personas</td>
	<td><?php echo $this->Form->text('cantidad_personas', array('size'=>5)); ?></td>
</tr>
<tr>
	<td>Fecha</td>
	<td>
        <?php 
            echo $this->Form->text('fecha', array('size'=>10, 'id'=>'date'));
            $options = array(
                'label' => '',
                'type' => 'time',
                'timeFormat'=>'24',
                'separator'=>':',
                'interval'=>15
            );
            echo $this->Form->input('Hora',$options);           
        ?>        
    </td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->textarea('observaciones'); ?></td>
</tr>
</table>
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
			
		<?php echo $this->element('menureservas') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>