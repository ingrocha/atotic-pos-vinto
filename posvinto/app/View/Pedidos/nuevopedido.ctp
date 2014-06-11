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
    .myButton {
        
        background-color:#44c767;
        
        -moz-border-radius:28px;
        -webkit-border-radius:28px;
        border-radius:28px;
        
        border:1px solid #18ab29;
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:17px;
        font-weight:normal;
        padding:16px 31px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #2f6627;
        
    }
    .myButton:hover {
        
        background-color:#5cbf2a;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
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
            <a class="navbar-brand" href="#">Bienvenido: <?php echo $datosMoso['User']['nombre']?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                
                <?php
                echo $this->Js->link('MIS MESAS',
                array('controller'=>'Pedidos', 'action'=>'ajaxmismesas',$idMoso), 
                array('update'=>'#contenidomoso',
                'before' => '$("#contenidomoso").hide(); $("#cargando").show(); $("#cargaPedidos").show();',
                'complete' => '$("#cargando").hide(); $("#contenidomoso").show(); '
                ));?>
                </li>
                <li style="background-color: #f00;">
                <?php 
                echo $this->Js->link('NUEVO PEDIDO', 
                array('controller'=>'Pedidos', 'action'=>'ajaxambientes',$idMoso), 
                array('update'=>'#contenidomoso',
                'before' => '$("#contenidomoso").hide(); $("#cargando").show(); $("#cargaPedidos").hide();',
                'complete' => '$("#cargando").hide(); $("#contenidomoso").show(); ',
                'style' => 'color: #fff;'
                ));?>
                </li>
                <?php if($datosMoso['User']['role'] == 'jefe'):?>
                 <li>
                <?php 
                echo $this->Js->link('TODAS LAS MESAS', 
                array('controller'=>'Pedidos', 'action'=>'ajaxtodasmesas',$idMoso), 
                array('update'=>'#contenidomoso',
                'before' => '$("#contenidomoso").hide(); $("#cargando").show(); $("#cargaPedidos").show();',
                'complete' => '$("#cargando").hide(); $("#contenidomoso").show(); '
                ));?>
                </li>
                <li>
                <?php echo $this->Html->link('NUEVO PEDIDO',array('action' => 'verificamoso',$idMoso));?>
                </li>   
                <?php endif;?>
                <li><a href="#about">Mis Datos</a></li>               
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-primary btn-large" style="color: white;" href="<?php echo $this->Html->url(array('controller'=>'Pedidos', 'action'=>'validamoso')); ?>">SALIR</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="row" style="background: #F2F2F2;">
        <div class="col-xs-12 col-sm-6 col-md-8"> 
            
            <div class="col-sm-12" style="padding-left: 15px;"> 
                <div id="cargando" style="display: none;">
                <?php echo $this->Html->image('cargando.gif');?>
                </div>  
                <div id="contenidomoso">
                    
                </div>
             
            </div>
        </div>        

        <div class="col-xs-6 col-sm-6 col-md-4">
        <div class="col-sm-12">   
            <div id="cargaPedidos" style="padding: 10px;">
                <?php //debug($datosMoso); ?>
                
            </div>
        </div>
        </div>
    </div>  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8" style="margin-left: 15px;">

            <div class="col-sm-12">
                
            </div><!-- /.col-sm-4 -->

        </div>    
    </div>
<script>
$(document).ready(function() {
    $("#contenidomoso").load("<?php echo $this->Html->url(array('controller'=>'Pedidos', 'action'=>'ajaxmismesas',$idMoso));?>");
    });

</script>

<?php echo $this->Js->writeBuffer(); ?>       