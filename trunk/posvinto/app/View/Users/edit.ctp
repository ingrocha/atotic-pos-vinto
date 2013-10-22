<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/usuarios'); ?>               
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
                        <?php echo $this->Form->text('direccion', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese la direccion Ej: Calle uno', 'required', 'title' => 'Este campo Necesario')); ?>
                        <!-- // form item -->

                        <label for="formA04">Usuario y Pass:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('username', array('class' => 'span4', 'placeholder' => 'Ingrese el Usuario. Ej jperez', 'required')); ?>
                            <?php //echo $this->Form->text('password', array('class' => 'span4', 'placeholder' => 'Ingrese el Pass Ej: 123556', 'required')); ?>                                                           
                        </div>
                        <!-- // form item -->

                        <label for="formA04">Carnet de Identidad y Celulares:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('ci', array('class' => 'span4', 'placeholder' => 'Ingrese en Doc. Identidad Ej 3241213', 'required')); ?>
                            <?php echo $this->Form->text('celular', array('class' => 'span4', 'placeholder' => 'Ingrese el celular Ej: 60234234', 'required')); ?>                                                           
                        </div>
                        <!-- // form item -->                        

                        <label for="accountAddressState" class="control-label">Perfil  y Ambiente<span class="required">*</span> </label>
                        <?php //debug($groups);?>
                        <div class="controls">                                                       
                            <?php $roles = array('0' => array('rol' => 'Administrador'), '1' => array('rol' => 'Almacenes'), '2' => array('rol' => 'Cajero'), '3' => array('rol' => 'Moso')); ?>
                            <?php $rola = $this->request->data['User']['role']; ?> 
                            <select id="accountAddressState" class="span3" name="data[User][group_id]" required>
                                <option value="" selected="selected">Selecione Perfil</option>                                                                                               
                                <?php foreach ($roles as $r): ?>  
                                <?php //debug($r); ?>
                                    <?php if($r['rol'] == $rola): ?>
                                    <option value="<?php echo $r['rol']; ?>" selected="selected"><?php echo 'aqui '.$r['rol']; ?></option>                                    
                                    <?php else: ?>                                    
                                    <option value="<?php echo $r['rol']; ?>"><?php echo $r['rol']; ?></option>                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>     
                            <?php echo $this->Form->select('ambiente_id',$ambientes, array('class' => 'span4')); ?>                           
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