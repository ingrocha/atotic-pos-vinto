<?php
App::import('Model', 'Producto');
$modeloProducto = new Producto();

App::import('Model', 'Categoria');
$modeloCategoria = new Categoria();

App::import('Model', 'Productosobservacione');
$modeloproductosobservaciones = new Productosobservacione();
?>

<style>
    ul.tabs li{
        float:left; 
        list-style-type: none;
        padding: 0 0 5px 5px;
    }
    
    ul.productos li{
        list-style-type: none;
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
            <a class="navbar-brand" href="#">Bienvenido: <?php echo $datosMoso['User']['nombre']?> --- MESA: <?php echo $mesa?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                
                <?php
                /*echo $this->Js->link('MIS MESAS',
                array('controller'=>'Pedidos', 'action'=>'ajaxmismesas',$idMoso), 
                array('update'=>'#contenidomoso',
                'before' => '$("#contenidomoso").hide(); $("#cargando").show(); $("#cargaPedidos").show();',
                'complete' => '$("#cargando").hide(); $("#contenidomoso").show(); '
                ));*/
                $role = $this->Session->read('Auth.User.role');
                if($role == 'Administrador')
                {
                    echo  $this->Html->link('REGRESAR',array('controller'=>'Controlpedidos','action' => 'verpedido',$pedido));
                }
                else{
                    echo  $this->Html->link('MIS MESAS',array('controller'=>'Pedidos','action' => 'nuevopedido',$datosMoso['User']['id']));
                }
                
                ?>
                </li>
                
                <li><a href="#about">Mis Datos</a></li>               
            </ul>
            <ul class="nav navbar-nav navbar-right">               
                <li class="active"><a href="<?php echo $this->Html->url(array('controller'=>'Pedidos', 'action'=>'validamoso')); ?>">SALIR</a></li>
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
                <div class="c">
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
                                            
                                                <button type="button" id="#producto<?php echo $dc['Clase']['id'].$dCat['Categoria']['id']; ?>" class="btn btn-default" style="text-transform: uppercase; background-color: #<?php echo $dc['Clase']['color']; ?>; color: #fff;"><?php echo $dCat['Categoria']['nombre']; ?></button>   
                                              
                                            <?php endforeach; ?> 
                                            
                                        </div>
                                    </div>
                                    <div style="float: left; padding-left: 10px; width: 615px;">
                                        <div class="contenedor_productos">
                                        <?php foreach ($datosCategorias as $dCat): ?>    
                                                <div id="producto<?php echo $dc['Clase']['id'].$dCat['Categoria']['id']; ?>" class="contenido_producto">
                                                <?php
                                                $datosProductos = $modeloProducto->find('all', array(
                                                    'recursive' => -1,
                                                    'conditions' => array('Producto.categoria_id' => $dCat['Categoria']['id'],'Producto.estado' => 1)
                                                )); 
                                                ?>
                                                
                                                <div class="div-observaciones">
                                                <?php foreach ($datosProductos as $dP): ?>
                                                <?php //debug($dP); ?>
                                                
                                                <button  type="button" style="border: solid #<?php echo $dc['Clase']['color']; ?>; font-size: larger; margin: 2px; width: 185px; height: 80px; text-transform: uppercase;" id="observacion<?php echo $dP['Producto']['id'].$dc['Clase']['id'].$dCat['Categoria']['id']; ?>">
                                                    <div>
                                                        <?php echo $dP['Producto']['nombre']; ?>
                                                    </div>
                                                </button>
                                              <?php 
                                            $this->Js->get('#observacion'.$dP['Producto']['id'].$dc['Clase']['id'].$dCat['Categoria']['id'])->event(
                                            'click',
                                            $this->Js->request(
                                                array('action' => 'ajaxpideproducto',$id_moso,$pedido,$dP['Producto']['id']),
                                                array('async' => true,
                                                //'before' => $this->Js->get('#divobservacion'.$dP['Producto']['id'].$dc['Clase']['id'].$dCat['Categoria']['id'])->effect('fadeIn', array('buffer' => false)),
                                                //'before' => '$("'.'#divobservacion'.$dP['Producto']['id'].$dc['Clase']['id'].$dCat['Categoria']['id'].'").fadeIn()',
                                                'update' => '#cargaDatos',
                                                /*'complete' => 
                                                $this->Js->request(
                                                    array('action' => 'ajaxmuestraobservaciones',$dP['Producto']['id']),
                                                    array('async' => true,
                                                    'update' => '#cargaObservaciones')
                                                )
                                                ,*/
                                                'method' => 'post'
                                                //'dataExpression'=>true,
                                                //'data'=> $this->Js->serializeForm(array('isForm' => true,'inline' => true))
                                                ))
                                            );?>
                                            <?php endforeach; ?>
                                                </div>
                                                
                                                </div>  
                                            <?php endforeach; ?>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div>    
                    <?php endforeach; ?>
                </div>  
                <div class="row"> 
                <style type="text/css">
                .active{
                   background-color: #ff8800;
                }
                .desactive{
                    background-color: blue;
                }
                </style>                 
                    <script type='text/javascript'>
                        $(document).ready(function() {
                            $("#cargaDatos").load("<?php echo $this->Html->url(array('action' => 'ajaxpideproducto',$id_moso,$pedido,null,null));?>");
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
                           
                           $(".contenido_producto").hide(); //Ocultar capas
                            $(".contenido_producto:first").show(); //Mostrar contenido primera pestaña
                            <?php foreach ($datosClases as $dc): ?>
                                <?php
                                    $datosCategorias = $modeloCategoria->find('first', array(
                                        'recursive' => -1,
                                        'conditions' => array('Categoria.clase_id' => $dc['Clase']['id']),
                                    ));
                                    ?>
                                    //alert("#producto<?php echo $dc['Clase']['id'].$datosCategorias['Categoria']['id']; ?>");
                                     $("#producto<?php echo $dc['Clase']['id'].$datosCategorias['Categoria']['id']; ?>").show(); 
                            <?php endforeach;?>
                           // $("#producto210").show(); //Mostrar contenido primera pestaña
                            $("div.btn-group-vertical button").click(function() {
                                $(".contenido_producto").hide(); //Ocultar todo el contenido de la pestaña
                                $(this.id).fadeIn(); //Visibilidad con efecto fade del contenido activo
                                return false;
                            });
                            
                            $(".contenido_observacion").hide(); //Ocultar capas
                            $("div.div-observaciones button").click(function() {
                                $(".contenido_observacion").hide(); //Ocultar todo el contenido de la pestaña
                                //alert("#"+this.id);
                                //$(this.id).fadeIn(); //Visibilidad con efecto fade del contenido activo
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
                <?php foreach ($datosClases as $dc): ?>
                <?php
                                    $datosCategorias = $modeloCategoria->find('all', array(
                                        'recursive' => -1,
                                        'conditions' => array('Categoria.clase_id' => $dc['Clase']['id']),
                                    ));
                                    //debug($datosCategorias);
                                    ?> 
                <?php foreach ($datosCategorias as $dCat): ?> 
                <?php
                                            $datosProductos = $modeloProducto->find('all', array(
                                                'recursive' => -1,
                                                'conditions' => array('Producto.categoria_id' => $dCat['Categoria']['id'])
                                            )); 
                                            ?>
                <?php foreach ($datosProductos as $dP): ?>
                
                <?php
                $datosObs = $modeloproductosobservaciones->find('all', array(
                    'recursive'=>-1,
                    'conditions'=>array('Productosobservacione.producto_id'=>$dP['Producto']['id'])
                )); 
                //debug($datosObs);
                ?>
                <div class="contenido_observacion" id="divobservacion<?php echo $dP['Producto']['id'].$dc['Clase']['id'].$dCat['Categoria']['id']; ?>">
                <div class="panel panel-danger">
                        <div class="panel-heading" style="background-color: #FF2A2A; color: #fff">
                            <h3 class="panel-title">Observaciones <?php echo $dP['Producto']['nombre']; ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php foreach ($datosObs as $dObs): ?>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox<?php echo $dObs['Productosobservacione']['id']; ?>" value="<?php echo $dObs['Productosobservacione']['id']; ?>"> <?php echo $dObs['Productosobservacione']['observacion']; ?>
                                </label>  
                                
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                    
                    <?php endforeach;?>
                 <?php endforeach;?> 
                 <?php endforeach;?>   
                </div>
            </div><!-- /.col-sm-4 -->

        </div>    
    </div>

</div> <!-- /container --> 
<?php echo $this->Js->writeBuffer(); ?>       