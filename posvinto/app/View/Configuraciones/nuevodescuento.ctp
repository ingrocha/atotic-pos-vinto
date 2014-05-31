<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar -->
	<?php echo $this->element('sidebar/configuraciones'); ?>
	<!-- // fin sidebar -->
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">   
            <?php echo $this->Form->create('Descuento'); ?>
            <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Registro de Nuevo Descuento</h3>
                </div>
                <div class="span10 well well-nice">
            <fieldset>
    <legend>Formulario <small>INSERTAR NUEVO DESCUENTO</small></legend>
        <label for="formA04">Porcentaje:</label> 
	<td><?php echo $this->Form->text('porcentaje',array('placeholder' => 'Ingrese el % Ejem:0.10')); ?></td>
	<label for="formA04">Observacion:</label> 
	<td><?php echo $this->Form->text('observacion'); ?></td>
<p></p>
<button class="btn btn-green" type="submit">Guardar Descuento</button>
    </form>
</fieldset>
    </div>
						
</div>
	</section>				
</div>
				
</div>	