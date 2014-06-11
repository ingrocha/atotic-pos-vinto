<div class="row-fluid">
                        <div class="span12 form-dark">
                        <fieldset>
                        <ul class="form-list label-left list-bordered dotted">
                        
                        <li class="section-form">
                            <h4>Adicionar Nueva Clase</h4>
                        </li>
                        <?php echo $this->Form->create('Producto',array('action' => 'adiclase'));?>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Nombre de la Clase</label>
                            <div class="controls">
                            <?php echo $this->Form->hidden('Clase.id');?>
                            <?php echo $this->Form->text('Clase.nombre',array('class' => 'span6','required'));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label class="control-label">Descripcion</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.descripcion',array('class' => 'span6'));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Color de la Clse</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.color',array('class' => 'input-medium colorpicker margin-00','required'))?>
                            
                            </div>
                        </li>
                        <li class="control-group">
                            <div class="controls">
                            <?php echo $this->Form->submit('GUARDAR',array('class' => 'btn btn-success span6'));?>
                            </div>
                        </li>
                        <?php echo $this->Form->end();?>
                        </ul>
                        </fieldset>
                        </div>
                        </div>