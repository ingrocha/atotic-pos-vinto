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

		echo $this->Html->css(array('sisvinto', 'redmond/jquery-ui-1.8.20.custom', 'style', 'validationEngine.jquery'));
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
			<h1><a href="#">SpringTime</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="#">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active"><span>Dashboard</span></a></li>
			    <li><a href="#"><span>New Articles</span></a></li>
			    <li><a href="#"><span>User Management</span></a></li>
			    <li><a href="#"><span>Photo Gallery</span></a></li>
			    <li><a href="#"><span>Products</span></a></li>
			    <li><a href="#"><span>Services Control</span></a></li>
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
			Hecho por <a href="http://atotic.com" target="_blank" title="Hecho por ATOTIC">atotic.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>