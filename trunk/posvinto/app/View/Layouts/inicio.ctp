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

		echo $this->Html->css(array('template', 'redmond/jquery-ui-1.8.20.custom', 'style', 'validationEngine.jquery','login'));
        echo $this->Html->script(array('jquery-1.7.2.min', 'jquery-1.6.min','jquery-ui-1.8.20.custom.min','jquery.validationEngine', 'languages/jquery.validationEngine-es'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        
	?>

</head>
<body>
   <!-- Container -->
                <?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>

<!-- End Container -->
	<div id="footer">
		<p class="copyright">
			Centro Ecoturistico VIVA VINTO Derechos Reservados 2012
          <span style="float: right;"> Desarrollado por <a href="http://www.atotic.com">ATOTIC&#174;</a></span> 		</p>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>