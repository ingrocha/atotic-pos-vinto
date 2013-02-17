<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar -->
	<?php echo $this->element('sidebar/configuraciones'); ?>
		<!-- // fin sidebar -->
        <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid"> 
            	<?php echo $this->Form->create('Descuento'); ?>
             <div class="page-header">
             <h3><i class="fontello-icon-article-alt opaci35"></i>Editar Descuento<small>descuentos</small></h3>
             </div>
             
             <div class="span10 well well-nice">
             <fieldset>
             <legend>Formulario <small>EDITAR DESCUENTOS</small></legend>
	<label for="formA04">Nombre:</label> 
	<td><?php echo $this->Form->text('observacion'); ?></td>

    <label for="formA04">Porcentaje:</label> 
	<td><?php echo $this->Form->text('porcentaje'); ?></td>
<p></p>
<button class="btn btn-green" type="submit">Editar Descuento</button>
    </form>
</fieldset>

    </div>
						
</div>
	</section>				
</div>
				
</div>	