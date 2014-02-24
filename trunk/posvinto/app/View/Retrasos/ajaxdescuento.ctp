<div class="widget widget-simple widget-notes">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-edit"></i> Nueva Descuento</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <?php echo $this->Form->create('Retraso',array('action' => 'guardadescuento'));?>
                                        <div id="formNotes" class="form-dark">
                                            <fieldset>
                                            <div class="row-fluid">
                                            <div class="span12">
                                            <div class="span6">
                                            <label for="accountTaxVat" class="control-label">Minutos</label>
                                            <?php echo $this->Form->hidden('ConfMulta.id');?>
                                            <?php echo $this->Form->number('ConfMulta.minutos',array('class' => 'input-block-level'));?>
                                            </div>
                                            <div class="span6">
                                            <label class="control-label">Valor</label>
                                            <?php echo $this->Form->number('ConfMulta.valor',array('class' => 'input-block-level','step' => 0.01,'min' => 0.00));?>
                                            </div>
                                            </div>
                                            </div>
                                            <label class="control-label">Observacion</label>
                                            <?php echo $this->Form->text('ConfMulta.observacion',array('class' => 'input-block-level'));?>
                                                
                                                
                                            </fieldset>
                                            <!-- // fieldset Input -->
                                            <?php echo $this->Form->submit('Guardar',array('class' => 'btn btn-yellow btn-block'));?>
                                            <?php echo $this->Form->end();?>
                                        </div>
                                    </div>
                                </div>
                                
                                
</div>