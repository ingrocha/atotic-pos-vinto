<div class="row-fluid">
<div class="span10">

<?php echo $this->Form->create('Group'); ?>
	<h3 class="heading">INSERTAR NUEVO PERFIL</h3>
	
	<div class="formSep">
        <div class="row-fluid">
           <div class="span4">
                <label>Inserte el nombre <span class="f_req">*</span></label>
                <?php echo $this->Form->text('name', array('placeholder'=>'Inserte el nombre'));?>
            </div> 
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-success" type="submit">Guardar Perfil</button>        
    </div>   
</form>

</div>
<?php echo $this->element('sidebar/admin'); ?>
</div>
