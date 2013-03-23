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
    .btn-primary {
        background-color: #006DC;
        background-image: linear-gradient(to bottom, #0088CC, #000);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #FFFFFF;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }
    /*botones principales de las mesas*/
    .hero-unit a.btn-primary{
        text-transform: uppercase;   
        font-weight: bold;
        font-size: 25pt;
        padding-bottom: 20px;
        padding-top: 25px;
        width: 150px;        
        margin-bottom: 10px;
        margin-right: 10px;       
    }   

    .btn-success {
        background-color: #5BB75B;
        background-image: linear-gradient(to bottom, #008000, #005500);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #FFFFFF;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }    
</style>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="hero-unit">                
                <h2>MOSO: <?php echo $datosMoso['User']['nombre']; ?> &nbsp;&nbsp;&nbsp; TUS MESAS </h2>                             
                <?php foreach ($mesas as $m): ?>
                    <?php $id_pedido = $m['Pedido']['id']; ?>
                    <?php $id_moso = $m['Pedido']['user_id']; ?> 
                    <?php //$idMesa = $m['Pedido']['user_id']; ?>  
                    <?php $mesa = $m['Pedido']['mesa']; ?>                    
                    <?php //echo $this->Html->link('');?>
                                    <!--<button class="btn btn-large btn-danger" type="button">Mesa <?php //echo $m['Pedido']['mesa'];        ?></button>-->   
                    <?php
                    if ($datosMoso['User']['role'] == "Jefe")
                    {
                        echo $this->Ajax->link(
                            $this->Html->image('mesa.png')."MESA : $mesa", array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesajefe',
                            $id_pedido, $datosMoso['User']['id']
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "btn btn-large btn-primary",
                            'style' => 'width: 150px')
                        );
                    } else
                    {
                        echo $this->Ajax->link(
                            "MESA : $mesa".$this->Html->image('iconos/mesa.png', array('style'=>"padding-top: 10px;")), array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesa',
                            $id_pedido,
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "btn btn-large btn-primary"                            )
                        );
                    }
                    ?>                                        
                <?php endforeach; ?>

            </div>                    
        </div><!--/span-->

        <div class="span3">
            <div id="cargaPedidos">
                <h2>Selecciona una Mesa</h2>  
                <?php //echo $this->Html->link('Cancelarpedido', array('controller' => 'Pedidos', 'action' => 'cancelapedido', $idPedido, $idMesa), array('class' => 'btn btn-block'))  ?>  
            </div>
        </div><!--/span-->
    </div><!--/row-->
    <div class="row-fluid">
        <div class="span10">            
            <a href="<?php echo $this->Html->url(array('action' => 'verificamoso', $datosMoso['User']['id'])); ?>" class="btn btn-success btn-large" style="margin-top: 10px;">NUEVA MESA &raquo;</a>      
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