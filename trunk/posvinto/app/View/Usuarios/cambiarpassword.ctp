<script>
jQuery(document).ready(function(){
// binds form submission and fields to the validation engine
jQuery("#UsuarioCambiarpasswordForm").validationEngine();
});
</script>
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<h3>
        <span>Modificar usuario</span>
		</h3>
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
						<h2 class="left">Modificar contrase&ntilde;a</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
				<?php echo $this->Form->create('Usuario'); ?>
                <table>

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

</table>

<?php $options=array('Value'=>'Cambiar','class'=>'button-submit', )?>
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
			
			<!-- Sidebar -->
			<?php echo $this->element('menuusuarios') ?>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>

