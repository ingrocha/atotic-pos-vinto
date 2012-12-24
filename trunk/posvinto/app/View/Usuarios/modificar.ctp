<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/usuarios'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Usuario', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nuevo <small>Usuario</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVO USUARIO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese el nombre Ej.: Juan  Pepito Perez', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Direcci&oacute;n, usuario y codigo:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('direccion', array('class' => 'span3', 'placeholder' => 'Escriba la direccion')); ?>
                            <?php echo $this->Form->text('usuario', array('class' => 'span3', 'placeholder' => 'Ej.: pperez', 'required')); ?>                                
                                                                                    
                            <?php echo $this->Form->text('codigo', array('class' => 'span3', 'placeholder' => 'Codigo Ej: 8823', 'required')); ?>
                        </div>
                        <!-- // form item -->

                        <label for="accountAddressState" class="control-label">Perfil y estado<span class="required">*</span></label>
                        <div class="controls">
                           <?php echo $this->Form->select('perfile_id', $perfiles, array('class'=>'span6', 'required'))?>
                           <?php echo $this->Form->select('estado_id', $estados, array('class'=>'span6', 'required'))?>
                        </div>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Modificar Usuario</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div>  
