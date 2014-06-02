<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/lugares'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Lugare'); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Editar el Lugar</h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>EDITAR EL LUGAR</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en un Nombre', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Descripcion:</label>
                        <div class="controls controls-row">                                                               
                        <?php echo $this->Form->text('descripcion', array('class' => 'span3', 'placeholder' => 'Ingrese una descripcion', 'required', 'title'=>'Este campo Necesario')); ?>
                        </div>
<!-- // form item -->
                    <button class="btn btn-green" type="submit">Editar Lugar</button>
                        </form>
                        <td class="low-padding align-center">
            <?php echo $this->Html->link('Atras',array('controller'=>'Lugares','action'=>'index'),array('class'=>'btn btn-green'));?>
            </td>
                    </fieldset>
                    
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div> 
  </div> 