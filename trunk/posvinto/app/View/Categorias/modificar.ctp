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
                        <legend>Formulario <small>MODIFICAR CATEGORIA</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese el nombre Ej.: Chicharrones', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Descripci&oacute;n y Estado(Alta o baja):</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->textarea('descripcion', array('class' => 'span3', 'placeholder' => 'Escriba una descripcion')); ?>
                            <?php $estados = array('0'=>'Baja', '1'=>'Alta') ?>
                            <?php echo $this->Form->select('estado', $estados, array('class' => 'span3', 'placeholder' => 'Seleccione estado', 'required')); ?>                                
                        </div>
                        <!-- // form item -->
                        <?php $tipos = array(
                        'Comida'=>'Comida', 
                        'Bebidas'=>'Bebida'); ?>
                        <label for="accountAddressState" class="control-label">Tipo (Comidas o bebidas)<span class="required">*</span></label>
                        <?php echo $this->Form->select('tipo', $tipos, array('class' => 'span3', 'placeholder' => 'Seleccione tipo', 'required')); ?>                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Editar Categoria</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  

