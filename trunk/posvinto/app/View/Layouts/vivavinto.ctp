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
        <title>Viva Vinto</title>
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
                'boo-utility'    
            )); 
        ?>     
         <?php 
            echo $this->Html->script(array(
                'plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min',
                'lib/jquery',
                'lib/jquery-ui',
                'lib/bootstrap',
                'lib/jquery.cookie'
            )); 
        ?>                          
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
                                <a class="brand" href="javascript:void(0);"><?php echo $this->Html->image('logo-brand.png') ?></a>
                                <div class="search-global">
                                    <input id="globalSearch" class="search search-query input-medium" type="search">
                                    <a class="search-button" href="javascript:void(0);"><i class="fontello-icon-search-5"></i></a> </div>
                                <div class="nav-collapse collapse">
                                    <ul class="nav user-menu visible-desktop">
                                        <li><a class="btn-glyph fontello-icon-edit tip-bc" href="javascript:void(0);" title="Messages"><span class="badge badge-important">8</span></a></li>
                                        <li><a class="btn-glyph fontello-icon-mail-1 tip-bc" href="javascript:void(0);" title="Emails"></a></li>
                                        <li><a class="btn-glyph fontello-icon-lifebuoy tip-bc" href="javascript:void(0);" title="Support"><span class="badge badge-important">4</span></a></li>
                                    </ul>
                                    <ul class="nav">
                                        <li> <a href="dashboard-one.html">Dashboard</a> </li>
                                        <li class="active"> <a href="javascript:void(0);">Components</a> </li>
                                        <li> <a href="component-fullcalendar-demo.html"><span class="fontello-icon-calendar"></span>Calendar</a> </li>
                                        <li> <a href="javascript:void(0);"><span class="fontello-icon-users"></span>Contacts</a> </li>
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><span class="fontello-icon-list-1"></span>Customize <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="component-form-demo.html">Demo Form</a></li>
                                                <li><a href="component-widgets-remember.html">Remember</a></li>
                                                <li><a href="component-widgets-users.html">User List</a></li>
                                                <li class="divider"></li>
                                                <li class="nav-header">Next Update</li>
                                                <li><a href="javascript:void(0);">Contacts</a></li>
                                                <li><a href="javascript:void(0);">Email</a></li>
                                            </ul>
                                        </li>
                                    </ul>
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
                                <li><a href="javascript:void(0);"><i class="fontello-icon-home f12"></i> Dashboard</a> <span class="divider">/</span></li>
                                <li class="dropdown"><a href="javascript:void(0);">Table </a> <span class="divider">/</span>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Table</a></li>
                                        <li><a href="javascript:void(0);">Elements</a></li>
                                        <li><a href="javascript:void(0);">Elements</a></li>
                                        <li><a href="javascript:void(0);">Elements</a></li>
                                    </ul>
                                </li>
                                <li class="active">Boo Admin </li>
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
