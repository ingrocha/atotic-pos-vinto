<div class="widget widget-simple widget-notes">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-edit"></i>Observacion</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <?php echo $this->Form->create('Producto',array('action' => 'guardaobservacion'));?>
                                        <div id="formNotes" class="form-dark">
                                            <fieldset>
                                                <label for="accountTaxVat" class="control-label"> Observacion</label>
                                                <?php echo $this->Form->hidden('Productosobservacione.id');?>
                                                <?php echo $this->Form->text('Productosobservacione.observacion',array('class' => 'input-block-level'));?>
                                            </fieldset>
                                            <!-- // fieldset Input -->
                                            <?php echo $this->Form->submit('Guardar',array('class' => 'btn btn-yellow btn-block'));?>
                                            <?php echo $this->Form->end();?>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>