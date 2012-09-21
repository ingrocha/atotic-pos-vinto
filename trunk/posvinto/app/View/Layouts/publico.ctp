<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Viva Vinto        
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('sisvinto', 'ui-lightness/jquery-ui-1.8.21.custom'));
        echo $this->Html->script(array('jquery-1.7.2.min', 'jquery-ui-1.8.21.custom.min'));
        
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        
	?>
</head>
<body>
    <?php define("DIR_WEB", "http://localhost/posvinto/posvinto/"); ?>
	<div id="container">
		<div id="header">
			<h1><a href="#"><?php echo $this->Html->image('logo.jpg')?></a></h1>
		<div class="navigation">
				
				<ul>
					<li>
                        <?php //echo DIR_WEB; ?>
                        <?php echo $this->Html->link("PEDIDOS", array('controller'=>'Pedidos', 'action'=>'listadopedidos')); ?>                        
                    </li>                    
					<li>
                        <?php echo $this->Html->link("ALMACEN", array('controller'=>'Pedidos', 'action'=>'formingresoalmacen')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link("ASISTENCIAS", array('controller'=>'Asistencias', 'action'=>'entradas')); ?>
                    </li>
				</ul>
			</div>
		</div>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
