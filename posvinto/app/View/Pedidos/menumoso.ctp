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
<?php $idMoso = $datosMoso['User']['id']; ?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Viva Vinto</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    Bienvenido: <a href="<?php echo $this->Html->url(array('action'=>'validamoso')); ?>" class="navbar-link"><?php echo $datosMoso['User']['nombre']; ?></a>
                </p>               
                <!--<ul class="nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>-->
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">

        <div class="span9">
            <div class="hero-unit">
                <h3>Bienvenido <?php echo $datosMoso['User']['nombre']; ?></h3>  
                <h3>Tus mesas</h3>              
                <?php foreach ($mesas as $m): ?>
                    <?php $id_pedido = $m['Pedido']['id']; ?>
                    <?php $id_moso = $m['Pedido']['user_id']; ?> 
                    <?php //$idMesa = $m['Pedido']['user_id']; ?>  
                    <?php $mesa = $m['Pedido']['mesa']; ?>                    
                    <?php //echo $this->Html->link('');?>
                                <!--<button class="btn btn-large btn-danger" type="button">Mesa <?php //echo $m['Pedido']['mesa'];   ?></button>-->   
                    <?php
                    echo $this->Ajax->link(
                            "Mesa: $mesa", array(
                        'controller' => 'Pedidos',
                        'action' => 'detallemesa',
                        $id_pedido,
                            ), array(
                        'update' => 'cargaPedidos',
                        'escape' => false,
                        'class' => "btn btn-large btn-danger",
                        'style' => 'width: 150px')
                    );
                    ?>                                        
                <?php endforeach; ?>
                
            </div>                    
        </div><!--/span-->

        <div class="span3">
            <div id="cargaPedidos">
                <h2>Selecciona una Mesa</h2>  
                <?php //echo $this->Html->link('Cancelarpedido', array('controller' => 'Pedidos', 'action' => 'cancelapedido', $idPedido, $idMesa), array('class' => 'btn btn-block')) ?>  
            </div>
        </div><!--/span-->
    </div><!--/row-->
    <div class="row-fluid">
       <div class="span10">
       <h3>Acciones</h3>
          <a href="<?php echo $this->Html->url(array('action' => 'verificamoso', $idMoso)); ?>" class="btn btn-success btn-large" style="margin-top: 10px;">NUEVA MESA &raquo;</a>      
          <a href="<?php echo $this->Html->url(array('action' => 'validamoso')); ?>" class="btn btn-large">CERRAR</a>
       </div>
    </div>
    <hr/>

    <div id="footer">
        <div class="container">
            LabWare
        </div>
    </div>    

</div><!--/.fluid-container-->