<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/porciones'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Porcione'); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nueva <small>Porcion</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVO DE REGISTRO DE PORCIONES</small></legend>
                        <label for="formA04">Inserte el Producto</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->select('producto_id', $dproducto, array('class' => 'span5', 'placeholder' => 'Ingrese en Doc. Identidad Ej 3241213 CBBA', 'required')); ?>
                        </div>
                        
                        <label for="formA04">Inserte el Insumo</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->select('insumo_id',$dtipinsumo, array('class' => 'span5', 'placeholder' => 'Ingrese en Doc. Identidad Ej 3241213 CBBA', 'required')); ?>
                        </div>
                        <label for="formA04">Inserte la Cantidad</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('cantidad', array('class' => 'span5', 'placeholder' => 'Ingrese en Doc. Identidad Ej 3241213 CBBA', 'required')); ?>
                        </div>
                        <button class="btn btn-green" type="submit">Guardar Insumo</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 