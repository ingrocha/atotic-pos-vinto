<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('User', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Registro de Nuevo <small>Usuario</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVO USUARIO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Juan Perez', 'required', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->

                        <label for="formA04">Direccion:</label>                            
                        <?php echo $this->Form->text('direccion', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese la direccion Ej: Calle uno', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->

                        <label for="formA04">Usuario y Pass:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('username', array('class' => 'span4', 'placeholder' => 'Ingrese el Usuario. Ej jperez', 'required')); ?>
                            <?php echo $this->Form->text('password', array('class' => 'span4', 'placeholder' => 'Ingrese el Pass Ej: 123556')); ?>                                                           
                        </div>
                        <!-- // form item -->

                        <label for="formA04">Carnet de Identidad y Celulares:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('ci', array('class' => 'span4', 'placeholder' => 'Ingrese en Doc. Identidad Ej 3241213')); ?>
                            <?php echo $this->Form->text('celular', array('class' => 'span4', 'placeholder' => 'Ingrese el celular Ej: 60234234')); ?>                                                           
                        </div>
                        <!-- // form item -->                        

                        <label for="accountAddressState" class="control-label">Perfil <span class="required">*</span> </label>
                        <div class="controls">
                            <select id="accountAddressState" class="span3" name="data[User][role]" required>
                                <option value="" selected="selected">Selecione Perfil</option>                                                                    
                                <option value="Administrador">Administrador</option>
                                <option value="Almacenes">Almacenes</option>
                                <option value="Cajero">Cajero</option>                                
                                <option value="Moso">Moso</option>                                
                            </select>                            
                        </div>
                        <!-- // form item -->    

                        <label for="formA04">Codigo de Moso:</label>
                        <div class="controls controls-row">                                                                                           
                            <?php echo $this->Form->text('codigo', array('class' => 'span4', 'placeholder' => 'Ingrese el codigo Ej: 2233')); ?>                                                           
                        </div>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Usuario</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div> 