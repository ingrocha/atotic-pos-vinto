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
        <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.png">-->
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
    <style type="text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .sidebar-nav {
        padding: 9px 0;
    }

    @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    .hero-unit h3.nombre{
        color: #4D0F04;        
    }

    /* Set the fixed height of the footer here */
    #push,
    #footer {
        height: 60px;
    }
    #footer {
        background-color: #f5f5f5;
    }
    
    .keypad-popup .keypad-row button.keypad-key{
        padding: 10px;
        line-height: 40px;
    }
    textarea {
    font-size: 14px;
    font-weight: normal;
    line-height: 62px;
    }

</style>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="span4" style="padding-left: 20%">
        <?php echo $this->Session->flash(); ?>
    </div>
    <div class="span10">
    <?php echo $this->fetch('content'); ?>
    </div>
       
   
</div>
        
		
        <!-- container -->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->        
    </body>
</html>