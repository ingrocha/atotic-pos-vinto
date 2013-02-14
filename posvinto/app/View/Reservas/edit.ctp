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
<div id="main-content" class="main-content container-fluid">
<?php echo $this->element('sidebar/reservas'); ?>
<div id="page-content" class="page-content">
<section>            
            <div class="row-fluid">
                <?php echo $this->Form->create('Reserva'); ?>                
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Nuevo Tipo <small>Evento</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>TIPO DE EVENTO</small></legend>


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

<button class="btn btn-green" type="submit">Editar Evento</button>
</form>
						
						
						<!-- Pagging -->
					
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
		<?php //echo $this->element('menureservas') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>