<?php echo $this->Form->create('User', array('action'=>'login')); ?>
<?php //echo $this->Form->create('Usuarios', array('action'=>'admin')); ?>
<div class="form-horizontal well well-nice">    
	<h4 class="simple-header">
		Ingrese su usuario y contrasena
	</h4>
	<div class="control-group">
		<label for="inputEmail" class="control-label">
			Usuario
		</label>
		<div class="controls">
            <?php echo $this->Form->text('username', array('placeholder'=>'Usuario')); ?>
			<!--<input type="text" placeholder="Usuario" id="inputEmail">-->
		</div>
	</div>
	<div class="control-group">
		<label for="inputPassword" class="control-label">
			Password
		</label>
		<div class="controls">
            <?php echo $this->Form->password('password', array('placeholder'=>'Password')); ?>
			<!--<input type="password" placeholder="Password" id="inputPassword">-->
		</div>
	</div>
	<div class="control-group">
		<div class="controls">			
			<button class="btn" type="submit">
				Ingresar
			</button>
		</div>
	</div>
	<hr class="margin-mx" />	
</div>
</form>