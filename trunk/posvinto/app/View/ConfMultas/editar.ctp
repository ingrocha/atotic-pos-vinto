<?php echo $this->
	Html->script('jquery.ui.datepicker-es'); ?>
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
	<div id="main-content" class="main-content container-fluid">
		<?php echo $this->
			element('sidebar/usuarios'); ?>
			<div id="page-content" class="page-content">
				<section>
					<div class="row-fluid">
						<?php echo $this->
							Form->create('ConfMulta'); ?>
							<div class="page-header">
								<h3>
									<i class="fontello-icon-article-alt opaci35">
									</i>
									Registro
									<small>
										nueva multa
									</small>
								</h3>
							</div>
							<div class="span10 well well-nice">
								<fieldset>
									<legend>
										Formulario
										<small>
											nueva multa
										</small>
									</legend>
									<label for="formA04">
										Hora
									</label>
                                    <label>Hora actual</label>
    
                                    <?php echo $hora ?>:<?php echo $minuto ?>
   
									<?php $options=array( 'label'=>
										'', 'type' => 'time', 'timeFormat'=>'24', 'separator'=>':', 'interval'=>15 ); 
                                        echo $this->Form->input('Hora',$options); ?>
										<label for="formA04">
											Monto
										</label>
										<?php echo $this->
											Form->text('monto'); ?>
											<label for="formA04">
												Observaciones
											</label>
											<?php echo $this->
												Form->textarea('observaciones'); ?>
												<button class="btn btn-green" type="submit">
													Editar
												</button>
												</form>
								</fieldset>
							</div>
					</div>
				</section>
			</div>
	</div>

