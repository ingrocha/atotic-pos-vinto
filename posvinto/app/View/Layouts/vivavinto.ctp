<?php 
App::import('Model', 'Ambiente');
$modeloAmbiente = new Ambiente();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>
            Viva Vinto: <?php echo $title_for_layout; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Le styles -->
        <?php
        echo $this->Html->css(array(
            'lib/bootstrap',
            'lib/bootstrap-responsive',
            'extension',
            'boo',
            'style',
            'boo-coloring',
            'boo-utility',    
        ));
        ?>     
        <?php echo $this->Html->css(
        array('imprimir'),'stylesheet',array('media'=>'print')); ?>
        <?php
        echo $this->Html->script(array(
            'jquery-1.9.1.min',
            'jquery-ui-1.10.3.custom.min',
            //'jquery-ui',            
            'lib/jquery',
            'plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min',
            'lib/jquery-ui',
            'lib/bootstrap',
            'lib/jquery.cookie',
            'print'
        ));
        ?>    
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->fetch('css'); ?>                      
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
            <script src="assets/plugins/flot/excanvas.min.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.html">
    </head>

    <body class="sidebar-left panel-side">
        <div class="page-container">
            <div id="header-container">
                <div id="header">
                    <div class="navbar navbar-inverse navbar-fixed-top">
                        <div class="navbar-inner">
                            <div class="container-fluid">
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a class="brand" href="<?php echo $this->Html->url(array('controller'=>'Panelcontrol', 'action'=>'admin'))?>"><?php echo $this->Html->image('logo-brand.png') ?></a>
                                <div class="search-global">
                                    <a class="search-button" href="javascript:void(0);"><i class="fontello-icon-search-5"></i></a> </div>
                                <div class="nav-collapse collapse">
                                <?php $rol = $this->Session->read('Auth.User.role'); ?>
                                <?php if($rol == 'Administrador'): ?>
                                    <ul class="nav">
                                        <li><?php echo $this->Html->link('INICIO', array('controller' => 'Insumos', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link('USUARIOS', array('controller' => 'Users', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link('CLIENTES', array('controller' => 'Clientes', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link('RESERVAS', array('controller' => 'Reservas', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link('PEDIDOS', array('controller' => 'controlpedidos', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link('MENU', array('controller' => 'Productos', 'action' => 'productosmenu')) ?></li>
                                        <li><?php echo $this->Html->link('BODEGA', array('controller' => 'Insumos', 'action' => 'Bodega')) ?></li>
                                        <li><?php echo $this->Html->link('ALMACEN', array('controller' => 'Insumos', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link('REPORTES', array('controller' => 'Graficos', 'action' => 'genera')) ?></li>
                                        <li><?php echo $this->Html->link('CONFIGURACIONES', array('controller' => 'Configuraciones', 'action' => 'index')) ?></li>
                                        <!--<li><?php //echo $this->Html->link('MESAS', array('controller' => 'Mesas', 'action' => 'index')) ?></li>-->
                                        <li class="dropdown"> 
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span class="fontello-icon-list-1"></span>Ambientes <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            <?php $ambientes = $modeloAmbiente->find('all');?>
                                            <?php if(!empty($ambientes)):  ?>
                                            <?php foreach($ambientes as$amb):?>
                                                <li><a href="<?php echo $this->Html->url(array('controller' => 'Mesas' , 'action' => 'index',$amb['Ambiente']['id']));?>"><?php echo 'Ambiente '.$amb['Ambiente']['numero'].' M('.$amb['Ambiente']['mesas'].')'?></a></li>
                                                
                                            <?php endforeach;?>
                                            <?php endif;?>
                                            <li><?php echo $this->Html->link('AMBIENTES', array('controller' => 'Mesas', 'action' => 'ambientes')) ?></li>
                                            </ul>
                                        </li>
                                        <li><?php echo $this->Html->link('SALIR', array('controller' => 'Users', 'action' => 'logout')) ?></li>
                                        <!--<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span class="fontello-icon-list-1"></span>Customize <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="component-form-demo.html">Demo Form</a></li>
                                                <li><a href="component-widgets-remember.html">Remember</a></li>
                                                <li><a href="component-widgets-users.html">User List</a></li>
                                                <li class="divider"></li>
                                                <li class="nav-header">Next Update</li>
                                                <li><a href="javascript:void(0);">Contacts</a></li>
                                                <li><a href="javascript:void(0);">Email</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                <?php elseif($rol == 'Cajero'): ?>
                                    <ul class="nav">                                        
                                        <li><?php echo $this->Html->link('PEDIDOS', array('controller' => 'controlpedidos', 'action' => 'index')) ?></li>                                                                                                                        
                                        <li><?php echo $this->Html->link('SALIR', array('controller' => 'Users', 'action' => 'logout')) ?></li>
                                        <!--<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span class="fontello-icon-list-1"></span>Customize <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="component-form-demo.html">Demo Form</a></li>
                                                <li><a href="component-widgets-remember.html">Remember</a></li>
                                                <li><a href="component-widgets-users.html">User List</a></li>
                                                <li class="divider"></li>
                                                <li class="nav-header">Next Update</li>
                                                <li><a href="javascript:void(0);">Contacts</a></li>
                                                <li><a href="javascript:void(0);">Email</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                <?php elseif($rol == 'Almacenes'): ?>
                                <ul class="nav">
                                    <li><?php echo $this->Html->link('BODEGA', array('controller' => 'Insumos', 'action' => 'Bodega')) ?></li>
                                    <li><?php echo $this->Html->link('ALMACEN', array('controller' => 'Insumos', 'action' => 'index')) ?></li>
                                    <li><?php echo $this->Html->link('SALIR', array('controller' => 'Users', 'action' => 'logout')) ?></li>
                                </ul>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // navbar -->

                    <div class="header-drawer">
                        <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Components</a> </div>
                        <!-- // Resposive navigation -->
                        <div class="breadcrumbs-nav hidden-phone">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a><i class="fontello-icon-home f12"></i>Restaurante</a> <span class="divider">/</span></li>
                                <li class="active">Viva Vinto</li>
                            </ul>
                        </div>
                        <!-- // breadcrumbs --> 
                    </div>
                    <!-- // drawer --> 
                </div>
            </div>
            <!-- // header-container -->

            <div id="main-container">                                                                                
                <!-- //contenido Principal -->
                <?php echo $this->Session->flash(); ?>                
                <?php echo $this->fetch('content'); ?>
                
                <div style="text-align: center; color:gray;">
                <p class="f-left">&copy; 2013 <a href="http://www.labware.com.bo/">Centro Ecoturistico Viva Vinto </a>, Todos Los Derechos Reservados &reg;</p>

                <p class="f-right">Creado por <a href="http://www.labware.com.bo/">LabWare</a></p>
                </div>
                <!-- // fin del contenido principal -->                
            </div>
            
            
            <!-- // main-container  -->

            <!-- // footer-fix  --> 

        </div>
        <!-- // page-container  --> 

        <!-- hide inject elements-->
        <div class="hide"> 
            <!-- inject to DTB Table -->
            <div class="DTB_toolBar">
                <ul class="btn-toolbar pull-right">
                    <li><a class="btn btn-glyph"><i class="fugue-table"></i></a></li>
                    <li><a class="btn btn-glyph"><i class="fugue-table-pencil"></i> Table</a></li>
                    <li><a class="btn btn-glyph"><i class="fugue-table-plus"></i></a></li>
                    <li class="divider-vertical"></li>
                    <li><a class="btn btn-glyph"><i class="fugue-table-export"></i></a></li>
                    <li><a class="btn btn-glyph"><i class="fugue-table-excel"></i></a></li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
            <!-- // inject -->

            <div class="DTB_resetTable">
                <ul class="btn-toolbar pull-right">
                    <li class="divider-vertical"></li>
                    <li><a href="javascript:void(0)" class="btn"><i class="fugue-arrow-circle"></i></a></li>
                </ul>
            </div>
            <!-- // inject -->            

        </div>

        <!-- Le javascript --> 
        <!-- Placed at the end of the document so the pages load faster -->              

        <!-- Plugins Bootstrap -->          
        <?php echo $this->element('js/bootstrap') ?>

        <!-- Plugins Custom -->
        <?php echo $this->element('js/custom') ?>          

        <!-- Plugins Forms -->         
        <?php echo $this->element('js/formularios') ?> 

        <!-- Charts -->  
        <?php echo $this->element('js/charts'); ?>       

        <!-- Plugins Tables --> 
        <?php echo $this->element('js/tablas') ?>         

        <!-- main js -->
        <?php echo $this->Html->script('application'); ?>        

        <!-- Only This Demo Page --> 
        <?php echo $this->Html->script('demo/demo-jquery.dataTables'); ?>        

    </body>
</html>
