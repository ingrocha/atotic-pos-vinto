<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Tipo', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Editar <small>Categoria de almacen</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>EDITAR CATEGOR&Iacute;A</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese el nombre Ej.: Legumbres', 'required', 'title'=>'Este campo es Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Descripci&oacute;n:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->textarea('descripcion', array('class' => 'span10', 'placeholder' => 'Escriba la descripcion de la categoria')); ?>                                    
                        </div>
                        <!-- // form item -->
                        <button class="btn btn-green" type="submit">Editar Categor&iacute;a</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  

