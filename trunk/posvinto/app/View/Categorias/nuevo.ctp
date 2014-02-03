<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/categorias'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Categoria', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nueva <small>Categor&iacute;a</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>INSERTAR NUEVA CATEGORIA</small></legend>
                        <label for="formA04">Seleccione el Tipo de Menu:</label>                            
                        <?php echo $this->Form->select('clase_id',$dclase); ?>
                        <!-- // form item -->
                        <label for="formA04">Inserte el Nombre:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('nombre', array('class' => 'span3', 'placeholder' => 'Inserte un Nombre')); ?>
                        </div>
                        <label for="formA04">Inserte la Descripcion:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('descripcion', array('class' => 'span3', 'placeholder' => 'Inserte un Nombre')); ?>
                        </div>
                        <label for="formA04">Inserte el Tipo:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->select('tipo',$dtipo, array('class' => 'span3', 'placeholder' => 'Inserte un Nombre')); ?>
                        </div>
                        
                        <button class="btn btn-green" type="submit">Guardar Categoria</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  

