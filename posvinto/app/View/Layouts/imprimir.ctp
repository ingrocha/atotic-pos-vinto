<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<html>
<head>
    <title>Viva Vinto</title>
</head>
<body>
<?php echo $this->Html->css('imprimir', 'stylesheet', array('media' => 'print')); ?>
<?php echo $this->Html->css(array('imprimir', 'redmond/jquery-ui-1.8.20.custom','validationEngine.jquery'));
echo $this->Html->script(array('jquery-1.7.2.min','jquery-ui', 'print'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
?>
<?php echo $this->fetch('content'); ?>
</body>
</html>