<style>
    .hero-unit a.btn-danger{
        text-transform: uppercase;
        background-color: #f00;
    }    
    .hero-unit a.btn-danger a{
        background-color: #f00;
    }    
</style>
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
                        <!--<button class="btn btn-large btn-danger" type="button">Mesa <?php //echo $m['Pedido']['mesa'];     ?></button>-->   
                    <?php
                    if ($datosMoso['User']['role'] == "Jefe")
                    {
                        echo $this->Ajax->link(
                                "Mesa: $mesa", array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesajefe',
                            $id_pedido, $datosMoso['User']['id']
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "btn btn-large btn-danger",
                            'style' => 'width: 150px')
                        );
                    } else
                    {
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
                    }
                    ?>                                        
                <?php endforeach; ?>

            </div>                    
        </div><!--/span-->

        <div class="span3">
            <div id="cargaPedidos">
                <!--contenido del pedido-->
                <h3>Mesa:&nbsp;<span style="font-size: 60px; font-weight: bold;" ><?php echo $datosPedido['Pedido']['mesa'] ?></span></h3>

                <div class="well sidebar-nav">
                    <table class="table table-striped">
                        <thead>
                            <tr>              
                                <th>Producto</th>
                                <th>Cant.</th>                                             
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total_platos = 0;
                            $total_pagar = 0;
                            ?>
                            <?php $ce = 0; ?>
                            <?php foreach ($itemsPedido as $i): ?>
                                <?php $id_item = $i['Item']['id']; ?>
                                <tr class="<?php echo fmod($ce, 2) ? 'segundo' : 'primero' ?>">                    
                                    <td style="font-size: 20px;"><?php echo $i['Producto']['nombre']; ?></td>
                                    <td style="font-size: 20px;">
                                        <?php echo $i['Item']['cantidad']; ?>
                                        <?php
                                        $platos = $i['Item']['cantidad'];
                                        $total_platos += $platos;
                                        ?>
                                    </td>
                                   <!-- <td>
                                    <?php //echo $i['Item']['precio']?>
                                    <?php
                                    $precio = $i['Item']['precio'];
                                    $total_pagar += $precio;
                                    ?>
                                    </td> -->                    
                                </tr>
                                <?php $ce++; ?>
                            <?php endforeach; ?>                 
                        </tbody>
                    </table>    
                </div>        

                <?php echo $this->Html->link('Aumentar sobre el Pedido', array('controller' => 'Pedidos', 'action' => 'pedidomoso', $datosPedido['Pedido']['user_id'], $datosPedido['Pedido']['id'], $datosPedido['Pedido']['mesa'], 1), array('class' => 'btn btn-success btn-large')); ?>
                <!--fin del contenido del pedido-->
            </div>
        </div><!--/span-->
    </div><!--/row-->
    <div class="row-fluid">
        <div class="span10">
            <h3>Acciones</h3>
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
