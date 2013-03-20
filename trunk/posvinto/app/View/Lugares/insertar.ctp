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
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Registro de Nuevo Lugar</h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>REGISTROS DE LUGARES</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en un Nombre', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        
                        <label for="formA06">Descripcion:</label>
                        <textarea id="formA06" class="input-block-level" rows="3" placeholder="Escriba las Observaciones", name="data[Lugare][descripcion]"></textarea>



<!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Lugar</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 