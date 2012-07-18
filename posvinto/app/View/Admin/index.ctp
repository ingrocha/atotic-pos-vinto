
<?php echo $this->Html->css(array('login')); ?>
    <section id="form">
    <div id="banner">
       <?php echo $this->Html->link('', array('title'=>'Sistema de control Viva Vinto')); ?>
    </div>
    <?php echo $this->Form->create('Usuarios', array('url' => array('controller' =>
'admin', 'action' => 'login'), 'id' => 'form-login', 'class' => 'formular')); ?>
    
     <div id="content-header">

				  <p id="logologin">Panel de control Administrativo</p>
     </div> 
    	
     		<div id="content">
            
                 <!--<input type="text" name="username" id="req" class="validate[required] text-input" placeholder="Username"><br><br>-->
                 <?php echo $this->Form->text('usuario', array('placeholder' =>
'Usuario', 'id' => 'req')); ?><br/><br/>
                <!-- <input type="text" name="pass" id="pass" class="validate[required] text-input" placeholder="Password"><br><br>-->
                 <?php echo $this->Form->password('contrasena', array('placeholder' =>
'Password', 'id' => 'pass')); ?><br/><br/>
                 
                 <?php echo $this->Form->end('Ingresar'); ?>
            </div>
		
     
    </section>
 