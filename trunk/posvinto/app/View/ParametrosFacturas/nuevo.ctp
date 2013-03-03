<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar -->
	<?php echo $this->element('sidebar/configuraciones'); ?>
		<!-- // fin sidebar -->
        <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid"> 
            	<?php echo $this->Form->create('ParametrosFactura'); ?>
             <div class="page-header">
             <h3><i class="fontello-icon-article-alt opaci35"></i>Nuevos <small>par&aacute;metros factura</small></h3>
             </div>
             
             <div class="span10 well well-nice">
             <fieldset>
             <legend>Formulario <small>datos</small></legend>
	<label for="formA04">Nit:</label> 
	<td><?php echo $this->Form->text('nit'); ?></td>

    <label for="formA04">N&uacute;mero de autorizaci&oacute;n:</label> 
	<td><?php echo $this->Form->text('numero_autorizacion'); ?></td>
    <label for="formA04">Llave de dosificaci&oacute;n:</label> 
	<td><?php echo $this->Form->text('llave', array('size'=>60)); ?></td>
    <label>Fecha l&iacute;mite de emisi&oacute;n: </label>
    <td><?php echo $this->Form->text('fechalimite', array('placeholder'=>'aaaa-mm-dd')); ?></td>
<p></p>
<button class="btn btn-green" type="submit">Guardar datos</button>
    </form>
</fieldset>

    </div>
						
</div>
	</section>				
</div>
				
</div> 