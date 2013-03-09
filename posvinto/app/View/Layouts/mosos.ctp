<!DOCTYPE html>
<!-- saved from url=(0056)http://twitter.github.com/bootstrap/examples/signin.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Viva Vinto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <?php echo $this->Html->css(array('bootstrap', 'bootstrap-responsive', 'keypad/jquery.keypad')); ?>
        <!--<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">-->
        
        <!--<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">-->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.png">
        <?php 
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
        <?php echo $this->Html->script(array(
            'jquery-1.9.1.min', 
            'jquery-ui-1.8.21.custom.min',              
            'keypad/jquery.keypad.min', 
            'keypad/jquery.keypad-es',
            'bootstrap'
            )); 
        ?>
    </head>

    <body>
        <?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
        <!-- container -->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->        
    </body>
</html>