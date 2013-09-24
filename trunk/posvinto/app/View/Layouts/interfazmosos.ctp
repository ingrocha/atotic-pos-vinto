<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>Viva Vinto Mosos</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo $this->webroot; ?>css/mosos/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="navbar-static-top.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo $this->webroot; ?>js/mosos/jquery.js"></script>
        <script src="<?php echo $this->webroot; ?>js/mosos/bootstrap.min.js"></script>        
        <script>
            $(document).ready(function() {
                console.log('Hizo Click');
            });
            /*$('#myTab').click(function(e) {
             //e.preventDefault();
             $(this).tab('show');
             });*/

        </script>

    </head>

    <body>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </body>
</html> 