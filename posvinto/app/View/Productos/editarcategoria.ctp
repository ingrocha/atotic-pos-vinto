<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/productosmenu'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Categoria', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Editar <small>Categoria</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>edicion de datos</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre'); ?>
                        <label for="formA04">Tipo:</label>                            
                        <?php echo $this->Form->select('tipo',$dct); ?>
                        <label for="formA04">Clase:</label> 
                        <?php echo $this->Form->select('clase_id',$clases,array('required'));?>
                        <label for="formA04">Descripci&oacute;n:</label>
                        <?php echo $this->Form->text('descripcion'); ?>                                                            
                
                        <!-- // form item -->
                        <!-- // form item -->
                        <p></p>
                        <button class="btn btn-green" type="submit">Guardar</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  
