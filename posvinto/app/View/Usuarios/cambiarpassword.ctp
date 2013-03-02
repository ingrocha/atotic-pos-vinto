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
            <div class="row-fluid"> 
            <?php echo $this->Form->create('Usuario'); ?>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Usuarios <small>Modificar Password</small></h3>
                <p>Cambia el Password del Usuario</p>
            </div>
            <div class="span10 well well-nice">
            <fieldset>
            <legend>Formulario <small>Modificar su Password</small></legend> 	
<table>
<tr>
   <td>Nuevo c&oacute;digo</td>
   <td>
   <?php echo $this->Form->password('password', array('id'=>'password', 'class'=>"validate[required] text-input"))?>
   </td>
</tr>
</fieldset>
</table>

<button class="btn btn-green" type="submit">Cambiar Password</button>
</form>							
</div>
</div>
</div>			
		</div>

