<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reservas'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Reserva', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nueva <small>Reserva</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>RESERVAS</small></legend>
                        <div class="controls">
                            <label for="accountAddressState" class="control-label">Cliente<span class="required">*</span></label>
                            <?php echo $this->Form->select('cliente_id', $dcliente); ?>
                        </div>
                        <!-- // form item -->
                                                
                        <div class="controls">
                            <label for="accountAddressState" class="control-label">Tipo de Evento<span class="required">*</span></label>
                            <?php echo $this->Form->select('tipoevento_id', $dct); ?>
                        </div>
                        <!-- // form item -->
                        
                        <label for="formA04">Fecha evento:</label>
                        <div class="controls">                                                             
                            <?php echo $this->Form->text('fecha', array('id'=>'datePicker', 'class' => 'span4', 'placeholder' => 'Fecha inicio Ej: 2012-05-30')); ?>                            
                            <?php //echo $this->Form->text('hora', array('class' => 'span4', 'placeholder' => 'Fecha inicio Ej: 2012-05-30')); ?>
                            <?php //echo $this->Form->input('hora', array('type' => 'time', 'interval' => 15, 'timeFormat'=>24)); ?>
                        </div>
                        <label for="formA04">Hora de Reserva:</label>
                        <div class="controls">                                                             
                            <?php echo $this->Form->text('fecha', array('id'=>'datePicker', 'class' => 'span4', 'placeholder' => 'Fecha inicio Ej: 2012-05-30')); ?>                            
                            <?php //echo $this->Form->text('hora', array('class' => 'span4', 'placeholder' => 'Fecha inicio Ej: 2012-05-30')); ?>
                            <?php echo $this->Form->input('hora', array('type' => 'time', 'interval' => 15, 'timeFormat'=>24)); ?>
                        </div>form item -->

                        <label for="formA04">Cantidad Personas</label>
                        <div class="control-label">
                            <?php echo $this->Form->text('cantidad_personas', array('class' => 'span3', 'placeholder' => 'cantidad Ej: 23', 'required')); ?>
                            <?php echo $this->Form->textarea('observaciones', array('class' => 'span3', 'placeholder' => 'Observaciones aqui')); ?>
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
