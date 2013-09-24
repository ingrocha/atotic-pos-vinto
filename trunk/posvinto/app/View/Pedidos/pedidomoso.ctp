<?php
App::import('Model', 'Producto');
$modeloProducto = new Producto();

App::import('Model', 'Categoria');
$modeloCategoria = new Categoria();
?>

<style>
    ul.tabs li{
        float:left; 
        list-style-type: none;
        padding: 0 0 5px 5px;
    }

    .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
        background-color: #EBEBEB;
        border-color: #ADADAD;
        color: #f00;
    }
    .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
        background-image: none;
        color: #f00;
    }

    /* CSS Tabs jQuery */
    /*contenedor_tab{float:left;clear:both;width:600px;padding:0px;margin:0 auto;display:block;background:#ccc;border:1px solid #333;-moz-border-radius:0 0 7px 7px;-webkit-border-radius:0 0 7pc 7px;border-radius: 0 0 7px 7px;}*/
    /*contenedor_tab{float:left;clear:both;width:600px;padding:0px;margin:0 auto;display:block;background:#ccc;border:1px solid #333;-moz-border-radius:0 0 7px 7px;-webkit-border-radius:0 0 7pc 7px;border-radius: 0 0 7px 7px;}*/
    /*ul.tabs{float:left;margin:0;padding:0;list-style:none;margin-top:-7px;}*/
    /*ul.tabs li{float:left;margin:0;padding:0;height:31px;line-height:31px;border:1px solid #333;margin-bottom:-1px;background:#333;overflow:hidden;position:relative;border:1px solid #333;-moz-border-radius:7px 7px 0 0;-webkit-border-radius:7px 7px 0 0;border-radius: 7px 7px 0 0;}*/
    /*ul.tabs li a{text-decoration:none;color:#fff;display:block;font-size:13px;padding:0 20px;border:1px solid #fff;outline:none;-moz-border-radius:7px 7px 0 0;-webkit-border-radius:7px 7px 0 0;border-radius: 7px 7px 0 0;}*/
    /*ul.tabs li a:hover{background:#666;}*/
    /*ul.tabs li.activa,ul.tabs li.activa a,ul.tabs li.activa a:hover {color:#333;font-weight:bold;background:#ccc;border-bottom:1px solid #ccc;}*/
    /*.contenido_tab{padding:10px;font-size:1.2em;width:580px;}*/
    /*.contenido_tab img{margin:0 20px 20px 0;border:1px solid #ddd;padding:5px}*/
</style>
<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bienvenido: Cristiam Herrera Daza</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">MIS MESAS</a></li>
                <li><a href="#about">Mis Datos</a></li>               
            </ul>
            <ul class="nav navbar-nav navbar-right">               
                <li class="active"><a href="../navbar-fixed-top/">SALIR</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<div class="container-fluid">
    <div class="col-lg-12"> 
        <ul class="tabs" style="padding-left: 10px;">
            <?php foreach ($datosClases as $dc): ?>
                <li>
                    <a href="#tab<?php echo $dc['Clase']['id']; ?>">
                        <button type="button" id="bt_<?php echo $dc['Clase']['id']; ?>" class="btn btn-lg btn-info" style="text-transform: uppercase; background-color: #<?php echo $dc['Clase']['color']; ?>;">
                            <?php echo $dc['Clase']['nombre']; ?></button>
                    </a>                        
                </li>
            <?php endforeach; ?>
        </ul>
    </div>            
    <p></p>
    <div class="row" style="padding-left: 15px;">
        <div class="col-xs-12 col-sm-6 col-md-8">           
            <div class="col-sm-12">                     
                <div class="contenedor_tab">
                    <?php foreach ($datosClases as $dc): ?>
                        <div id="tab<?php echo $dc['Clase']['id']; ?>" class="contenido_tab">
                            <div class="panel panel-primary" style="margin-top: -7px; width: 807px;" >
                                <div class="panel-heading" style="text-transform: uppercase; background-color: #<?php echo $dc['Clase']['color']; ?>;">
                                    <h3 class="panel-title"><?php //echo $dc['Clase']['nombre'];        ?></h3>
                                </div>
                                <div class="panel-body">                                    
                                    <?php
                                    $datosCategorias = $modeloCategoria->find('all', array(
                                        'recursive' => -1,
                                        'conditions' => array('Categoria.clase_id' => $dc['Clase']['id']),
                                    ));
                                    //debug($datosCategorias);
                                    ?>                                      
                                    <div style="float: left;">
                                        <div class="btn-group-vertical">
                                            <?php foreach ($datosCategorias as $dCat): ?>                                        
                                                <button type="button" id="btCat<?php echo $dCat['Categoria']['id']; ?>" class="btn btn-default" style="text-transform: uppercase; background-color: #<?php echo $dc['Clase']['color']; ?>; color: #fff;"><?php echo $dCat['Categoria']['nombre']; ?></button>                                                                            
                                                <script>
                                                    $(document).ready(function() {
                                                        //$("#cargaProductos_<?php //echo $dc['Clase']['id'];      ?>").load("<?php //echo $this->Html->url(array('action' => 'ajaxmuestraproductos', $dCat['Categoria']['id']));      ?>"); 
                                                    });

                                                    $("#btCat<?php echo $dCat['Categoria']['id']; ?>").click(function() {
                                                        //console.log();
                                                        $("#imgCargando_<?php echo $dc['Clase']['id']; ?>").toggle();
                                                        $("#cargaProductos_<?php echo $dc['Clase']['id']; ?>").load("<?php echo $this->Html->url(array('action' => 'ajaxmuestraproductos', $dCat['Categoria']['id'],)); ?>")
                                                    });
                                                </script>
                                            <?php endforeach; ?>    
                                        </div>
                                    </div>
                                    <div style="float: left; padding-left: 10px; width: 620px;">
                                        <div id="cargaProductos_<?php echo $dc['Clase']['id']; ?>">
                                            <?php //echo $dc['Clase']['id']; ?>
                                            <div id="imgCargando_<?php echo $dc['Clase']['id']; ?>" style="display: none;">
                                                <?php echo $this->Html->image('iconos/cargando.gif'); ?>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>    
                    <?php endforeach; ?>
                </div>  
                <div class="row">                  
                    <script type='text/javascript'>
                        $(document).ready(function() {
                            $(".contenido_tab").hide(); //Ocultar capas
                            $("ul.tabs li:first").addClass("activa").show(); //Activar primera pestaña
                            $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

                            // Sucesos al hacer click en una pestaña
                            $("ul.tabs li").click(function() {
                                $("ul.tabs li").removeClass("activa"); //Borrar todas las clases "activa"
                                $(this).addClass("activa"); //Añadir clase "activa" a la pestaña seleccionada
                                $(".contenido_tab").hide(); //Ocultar todo el contenido de la pestaña
                                var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa 
                                $(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
                                return false;
                            });
                        });
                    </script>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>        

        <div class="col-xs-6 col-sm-6 col-md-4">
            <div id="cargaDatos">
                Carga datos
            </div>
        </div>
    </div>  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8" style="margin-left: 15px;">

            <div class="col-sm-12">
                <div id="cargaObservaciones">

                </div>
            </div><!-- /.col-sm-4 -->

        </div>    
    </div>

</div> <!-- /container -->        