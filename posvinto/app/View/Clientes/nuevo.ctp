<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/clientes'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Cliente', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nuevo <small>Cliente</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVO CLIENTE</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese el nombre Ej.: Juan  Pepito Perez', 'required', 'title'=>'Este campo Necesario')); ?>
                        <label for="formA06">Nit</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('nit', array('class' => 'span3', 'placeholder' => 'Escriba el Nit')); ?>
                            <?php //echo $this->Form->text('telefono', array('class' => 'span3', 'placeholder' => 'Telefono Ej.: 2210325', 'required')); ?>                                
                        </div>
                        <!-- // form item -->
                        <label for="formA06">Direcci&oacute;n</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->textarea('direccion', array('class' => 'span3', 'placeholder' => 'Escriba la direccion')); ?>
                            <?php //echo $this->Form->text('telefono', array('class' => 'span3', 'placeholder' => 'Telefono Ej.: 2210325', 'required')); ?>                                
                        </div>
                        <label for="formA06sisip ">Tel&eacute;fono:</label>
                        <div class="controls controls-row">                                                               
                            <?php //echo $this->Form->textarea('direccion', array('class' => 'span3', 'placeholder' => 'Escriba la direccion')); ?>
                            <?php echo $this->Form->text('telefono', array('class' => 'span3', 'placeholder' => 'Telefono Ej.: 2210325', 'required')); ?>                                
                        </div>
                        <!-- // form item -->

                        

                        <button class="btn btn-green" type="submit">Guardar Usuario</button>
                        </form>
                        <td class="low-padding align-center">
            <?php echo $this->Html->link('Atras',array('controller'=>'Clientes','action'=>'index'),array('class'=>'btn btn-green'));?>
            </td>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  
