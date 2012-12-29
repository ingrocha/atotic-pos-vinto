<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/contratos'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Contrato', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nuevo <small>Contrato</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>CONTRATO</small></legend>
                        <label for="accountAddressState" class="control-label">Empleado<span class="required">*</span></label>
                        <div class="controls">
                            <select id="accountAddressState" class="span6" name="data[Contrato][usuario_id]" required>
                                <option value="" selected="selected">Seleccione el empleado</option>
                                
                                <?php foreach ($empleados as $empleado): ?>                                    
                                    <option value="<?php echo $empleado['Usuario']['id']; ?>"><?php echo $empleado['Usuario']['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- // form item -->
                        <label for="formA04">Fechas contrato:</label>
                        <div class="controls">                                                             
                            <?php echo $this->Form->text('fechainicio', array('class' => 'span4', 'placeholder' => 'Fecha inicio Ej: 2012-05-30')); ?>
                            <?php echo $this->Form->text('fechafin', array('class' => 'span4', 'placeholder' => 'Fecha fin Ej: 2013-12-31')); ?>                                
                        </div>
                        <!-- // form item -->
                        
                        <label for="formA04">Sueldo y Observaciones</label>
                        <div class="control-label">
                        <?php echo $this->Form->text('sueldo', array('class' => 'span3', 'placeholder' => 'sueldo Ej: 2000', 'required')); ?>
                        <?php echo $this->Form->textarea('observaciones',array('class' => 'span3', 'placeholder' => 'Observaciones aqui'));?>
                        </div>               
                        <button class="btn btn-green" type="submit">Guardar contrato</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  


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