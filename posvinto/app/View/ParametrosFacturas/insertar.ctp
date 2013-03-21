<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/configuraciones'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Parametrosfactura'); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Registro de un Nuevo Parametro Factura</h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>REGISTROS DE PARAMETROS FACTURA</small></legend>
                        <label for="formA04">Nit:</label>                            
                        <?php echo $this->Form->text('nit', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese su Numero de NIT', 'required', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->                        
                        <label for="formA04">Numero de Autorizacion:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('numero_autorizacion', array('class' => 'span3', 'placeholder' => 'Ingrese su Numero de Autorizacion')); ?>
                        </div>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Factura</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div> 