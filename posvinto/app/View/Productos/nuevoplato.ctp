<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/platos'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Producto', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nuevo <small>Plato</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVA PLATO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre'); ?>
                        <label for="formA04">Precio:</label>                            
                        <?php echo $this->Form->text('precio'); ?>
                        <tr>
                        <label for="formA04">Categoria:</label>
                        <?php echo $this->Form->select('categoria_id', $dcc); ?>                                                            
                        </tr>
                        <tr>
                        <label for="formA04">Descripci&oacute;n:</label>
                        <?php echo $this->Form->text('descripcion'); ?>                                                            
                        </tr>
                        <!-- // form item -->
                        <!-- // form item -->
                        <p></p>
                        <button class="btn btn-green" type="submit">Guardar Plato</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  
