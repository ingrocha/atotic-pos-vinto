<div class="login">
    
    
    <?php echo $this->Form->create('Usuarios', array('url' => array('controller' =>
'admin', 'action' => 'login'), 'id' => 'form-login', 'class' => 'formular')); ?>
    
     <div id="content-header">

				  <h1>Panel de control Administrativo<br /> VIVA VINTO</h1>
     </div> 
    	
     	
            
                 <!--<input type="text" name="username" id="req" class="validate[required] text-input" placeholder="Username"><br><br>-->
                 <?php echo $this->Form->text('usuario', array('placeholder' =>
'Usuario', 'id' => 'req')); ?><br/><br/>
                <!-- <input type="text" name="pass" id="pass" class="validate[required] text-input" placeholder="Password"><br><br>-->
                 <?php echo $this->Form->password('contrasena', array('placeholder' =>
'Password', 'id' => 'pass')); ?><br/><br/>
                 
                 <?php echo $this->Form->end('Ingresar'); ?>
        
     
    
 </div>
 
 