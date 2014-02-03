<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/productos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Producto', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nuevo <small>Producto</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>INSERTAR NUEVO PRODUCTO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Juan Perez', 'required', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->

                        <label for="formA04">Descripcion:</label>                            
                        <?php echo $this->Form->text('descripcion', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese la direccion Ej: Calle uno', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->

                        <!-- // form item -->

                        <label for="formA04">Precio:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('precio', array('class' => 'span5', 'placeholder' => 'Ingrese en Doc. Identidad Ej 3241213 CBBA', 'required')); ?>
                        </div>
                        <!-- // form item --> 
                        <label for="formA04">Categoria:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->select('categoria_id',$dcategoria,  array('class' => 'span4', 'placeholder' => 'Ingrese el Usuario. Ej jperez', 'required')); ?>
                        </div> 
                        <label for="formA04">Insumo:</label>
                        <div class="controls controls-row">
                            <?php echo $this->Form->select('insumo_id',$dinsumo, array('class' => 'span4', 'placeholder' => 'Ingrese el Pass Ej: 123556', 'required')); ?>                                                           
                        </div>                       
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Nuevo Producto</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 