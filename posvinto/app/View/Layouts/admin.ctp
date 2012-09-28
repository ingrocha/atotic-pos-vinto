<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php echo $this->Html->charset(); ?>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>
		Administrador Viva Vinto
		<?php echo $title_for_layout; ?>
	</title>
    <?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array(
                                    'ui-lightness/jquery-ui-1.8.21.custom', 
                                    'demo_table',                                    
                                    'style',                                    
                                    'validationEngine.jquery'));
        echo $this->Html->script(array(
                                        'jquery-1.7.2.min', 
                                        'jquery-ui-1.8.21.custom.min',
                                        'jquery.calculation', 
                                        'jquery.validationEngine',
                                        'jquery.dataTables',
                                        'languages/jquery.validationEngine-es', 
                                        'print'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');        
	?>
<script type="text/javascript">
   //jQuery.noConflict();
</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">ADMINISTRACION VIVAVINTO</a></h1>
			<div id="top-navigation">
				Bienvenido <a href="#"><strong><?php echo $this->Session->read('nombre') ?></strong></a>
				<span>|</span>
				<?php echo $this->Html->link('Cerrar Sesion', array('controller' => 'usuarios', 'action' => 'logout'));?>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li>
                <?php $url = "http://localhost/posvinto/posvinto/"?>                   
                   <?php echo $this->Html->link("<span>Inicio</span>", array('controller'=>'Panelcontrol', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>                 
                </li>
			    <li>                    
                    <?php echo $this->Html->link("<span>Usuarios</span>", array('controller'=>'Usuarios', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>
                <li>                    
                    <?php echo $this->Html->link("<span>Clientes</span>", array('controller'=>'Clientes', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>
			    <li>
                    <?php echo $this->Html->link("<span>Pedidos</span>", array('controller'=>'controlpedidos', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>                    
                </li>
                <li>
                    <?php echo $this->Html->link("<span>Menu</span>", array('controller'=>'Productos', 'action'=>'productosmenu'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>
			    <li>
                    <?php echo $this->Html->link("<span>Bodega</span>", array('controller'=>'Insumos', 'action'=>'bodega'), array('class'=>"add-button", 'escape' => FALSE)); ?>                
                </li>
                <li>
                    <?php echo $this->Html->link("<span>Almacen</span>", array('controller'=>'Insumos', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link("<span>Reservas</span>", array('controller'=>'Reservas', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>
                <li>
                    <?php echo $this->Html->link("<span>Reportes</span>", array('controller'=>'Graficos', 'action'=>'genera'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>			    
                <!--<li>
                    <?php //echo $this->Html->link("<span>Bebidas</span>", array('controller'=>'Productos', 'action'=>'bebidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>-->
			    <li>
                <?php echo $this->Html->link("<span>Configuraciones</span>", array('controller'=>'Configuraciones', 'action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                </li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
                <?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>

<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2012 - Viva Vinto derechos reservados</span>
		<span class="right">			
            Desarrollado por <a href="http://www.atotic.com" target="_blank" title="Desarrollado por ATOTIC">ATOTIC</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>