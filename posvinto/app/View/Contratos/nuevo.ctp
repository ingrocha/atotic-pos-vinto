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
