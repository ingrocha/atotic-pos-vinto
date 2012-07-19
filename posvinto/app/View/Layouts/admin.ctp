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

<<<<<<< .mine
		echo $this->Html->css(array( 'redmond/jquery-ui-1.8.20.custom', 'style', 'validationEngine.jquery'));
=======
		echo $this->Html->css(array('redmond/jquery-ui-1.8.20.custom', 'style', 'validationEngine.jquery'));
>>>>>>> .r145
        echo $this->Html->script(array('jquery-1.7.2.min', 'jquery-1.6.min','jquery-ui-1.8.20.custom.min','jquery.calculation', 'jquery.validationEngine', 'languages/jquery.validationEngine-es'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        
	?>

</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">CENTRO ECOTURISTICO VIVAVINTO</a></h1>
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
                   <a href="<?php echo $url?>panelcontrol/" class="active"><span>Inicio</span></a>                 
                </li>
			    <li><a href="<?php echo $url?>usuarios/"><span>Usuarios</span></a></li>
                <li><a href="<?php echo $url?>clientes/"><span>Clientes</span></a></li>
			    <li><a href="<?php echo $url?>controlpedidos/"><span>Pedidos</span></a></li>
			    <li><a href="<?php echo $url?>reportes/"><span>Reportes</span></a></li>
			    <li><a href="<?php echo $url?>productos/"><span>Productos</span></a></li>
			    <li><a href="<?php echo $url?>panelcontrol/config"><span>Configuraciones</span></a></li>
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