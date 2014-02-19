<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reservas'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Tipoevento', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Registro de Nuevo <small>Evento</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVO EVENTO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Juan Perez', 'required', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->

                        <label for="formA04">Descripcion:</label>                            
                        <?php echo $this->Form->text('descripcion', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese la direccion Ej: Calle uno', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->
                        
                      
                        <button class="btn btn-green" type="submit">Guardar Evento</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div> 