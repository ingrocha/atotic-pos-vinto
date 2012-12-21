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
                        <label for="formA04">Direcci&oacute;n, usuario, contrase&ntilde;a y codigo:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('direccion', array('class' => 'span3', 'placeholder' => 'Escriba la direccion')); ?>
                            <?php echo $this->Form->text('usuario', array('class' => 'span3', 'placeholder' => 'Ej.: pperez', 'required')); ?>                                
                            <?php echo $this->Form->text('pass', array('class' => 'span3', 'placeholder' => 'password Ej: p1e2r3', 'required')); ?>                                                                
                            <?php echo $this->Form->text('codigo', array('class' => 'span3', 'placeholder' => 'Codigo Ej: 8823', 'required')); ?>
                        </div>
                        <!-- // form item -->

                        <label for="accountAddressState" class="control-label">Categoria y estado<span class="required">*</span></label>
                        <div class="controls">
                            <select id="accountAddressState" class="span6" name="data[Insumo][tipo_id]" required>
                                <option value="" selected="selected">Seleccione el perfil</option>
                                
                                <?php foreach ($perfiles as $perfil): ?>                                    
                                    <option value="<?php echo $perfil['Perfile']['id']; ?>"><?php echo $perfil['Perfile']['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select id="accountAddressState" class="span6" name="data[Insumo][tipo_id]" required>
                                <option value="" selected="selected">Seleccione el estado</option>
                                
                                <?php foreach ($perfiles as $perfil): ?>                                    
                                    <option value="<?php echo $perfil['Perfile']['id']; ?>"><?php echo $perfil['Perfile']['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- // form item -->

                        <label for="formA06">Observaciones:</label>
                        <textarea id="formA06" class="input-block-level" rows="3" placeholder="Escriba las Observaciones", name="data[Insumo][observaciones]"></textarea>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Insumo</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div>  
<!-------------------------------------------------------------------------------------------------------------------------->
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<span>Registro de nuevo usuario</span>
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Registro Nuevo Usuario</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
				<?php echo $this->Form->create('Usuario'); ?>
<table>
<tr>
	<td>Nombre</td>
	<td><?php echo $this->Form->text('nombre'); ?></td>
</tr>
<tr>
	<td>Direccion</td>
	<td><?php echo $this->Form->text('direccion'); ?></td>
</tr>
<tr>
	<td>Usuario</td>
	<td><?php echo $this->Form->text('usuario'); ?></td>
</tr>
<tr>
	<td>Password</td>
	<td><?php echo $this->Form->password('pass'); ?></td>
</tr>
<tr>
	<td>Codigo</td>
	<td><?php echo $this->Form->text('codigo'); ?></td>
</tr>
<tr>
	<td>Perfile</td>
	<td><?php echo $this->Form->select('perfile_id',$dperf); ?></td>
</tr>
<!--<tr>
	<td>Sucursal</td>
    <td>
       <?php //echo $this->Form->select('sucursal_id', $sucursales);?>
    </td>
</tr>-->
<tr>
	<td>Estado</td>
    <td>
       <?php echo $this->Form->select('estado_id', $estados);?>
    </td>
</tr>
</table>
<?php $options=array('Value'=>'Guardar','class'=>'button-submit', )?>
<?php echo $this->Form->end($options); ?>
<div style="clear: both;"></div>
						
						
						<!-- Pagging -->
					
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
            <?php echo $this->element('menuusuarios') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>