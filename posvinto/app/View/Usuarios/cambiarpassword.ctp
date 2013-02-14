<script>
jQuery(document).ready(function(){
// binds form submission and fields to the validation engine
jQuery("#UsuarioCambiarpasswordForm").validationEngine();
});
</script>
<!-- Container -->
<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/cambiopassword'); ?>               
    <!-- // fin sidebar -->
    <div id="page-content" class="page-content">
	<section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Usuarios <small>Modificar Password</small></h3>
                <p>Cambia el Password del Usuario</p>
            </div>
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Modificar contrase&ntilde;a</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
				<?php echo $this->Form->create('Usuario'); ?>
<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
<caption>
Usuario<span></span>
</caption>
<thead>
<fieldset>
<tr>
   <td>Nuevo c&oacute;digo</td>
   <td>
   <?php echo $this->Form->password('password', array('id'=>'password', 'class'=>"validate[required] text-input"))?>
   </td>
</tr>
<tr>
   <td>Confirmar c&oacute;digo</td>
   <td>
   <?php echo $this->Form->password('pass', array('id'=>'password2','class'=>"validate[required,equals[password]] text-input"))?>
   </td>
</tr>
</fieldset>
</thead>
</table>

<button class="btn btn-green" type="submit">Cambiar Password</button>
</form>							
</div>
</div>
</div>
<div class="cl">&nbsp;</div>
            </section>			
		</div>
		<!-- Main -->
	</div>

