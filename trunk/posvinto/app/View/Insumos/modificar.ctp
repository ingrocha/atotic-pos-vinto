<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Insumo', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Edici&oacute;n<small>Insumo</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>EDITAR INSUMO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Precio Compra:</label>                            
                        <?php echo $this->Form->text('preciocompra', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Precio Venta:</label>                            
                        <?php echo $this->Form->text('precioventa', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Cantidad:</label>                            
                        <?php echo $this->Form->text('total', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Observaciones:</label>                            
                        <?php echo $this->Form->text('observaciones', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        
                        
                        
                        
                        
                        
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Editar Insumo</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 