<style>
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
    /*botones principales de las mesas*/
    .btn-primary {
        background-color: #006DC;
        background-image: linear-gradient(to bottom, #FFD47F, #FFD47F);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #000;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }
    /*letras de los botones*/
    .hero-unit a.btn-primary{
        text-transform: uppercase;   
        font-weight: bold;
        font-size: 22pt;
        padding-bottom: 20px;
        padding-top: 25px;
        width: 150px;        
        margin-bottom: 10px;
        margin-right: 10px;       
    }   

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary.disabled,
    .btn-primary[disabled] {
        color: #000;
        background-color: #FFD47F;
        background-color: #003bb3;
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
        </ul>
    </div>            
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">           
            <div class="col-sm-12">                     
                <div class="c">
                    Aqui las mesas

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
                </div><!-- /.col-sm-4 -->
            </div>
        </div>        

        <div class="col-xs-6 col-sm-6 col-md-4">
            <div class="col-sm-12">
                <div id="cargaDatos">
                    Carga datos aqui crt
                </div>
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
                                    'recursive' => -1,
                                    'conditions' => array('Productosobservacione.producto_id' => $dP['Producto']['id'])
                                ));
                                //debug($datosObs);
                                ?>

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

                        <?php endforeach; ?>
                    <?php endforeach; ?> 
                <?php endforeach; ?>   
            </div>
        </div><!-- /.col-sm-4 -->

    </div>    
</div>

</div> <!-- /container --> 
<?php echo $this->Js->writeBuffer(); ?>       