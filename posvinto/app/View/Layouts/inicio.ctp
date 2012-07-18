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

		echo $this->Html->css(array('sisvinto', 'template', 'redmond/jquery-ui-1.8.20.custom', 'style', 'validationEngine.jquery'));
        echo $this->Html->script(array('jquery-1.7.2.min', 'jquery-1.6.min','jquery-ui-1.8.20.custom.min','jquery.validationEngine', 'languages/jquery.validationEngine-es'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        
	?>

</head>
<body>
   <div id="border-top" class="h_blue">
     <span class="title"><a href="#">Administraci&oacute;n</a></span>
   </div>
<!-- Container -->
                <?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>

<!-- End Container -->
	<div id="footer">
		<p class="copyright">
			<a href="http://www.joomla.org">Joomla!&#174;</a> is free software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU General Public License</a>.		</p>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>