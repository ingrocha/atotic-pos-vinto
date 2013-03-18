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
                    if($datosMoso['User']['role'] == "Jefe"){
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
                    }else{
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
                <h2>Selecciona una Mesa</h2>  
                <?php //echo $this->Html->link('Cancelarpedido', array('controller' => 'Pedidos', 'action' => 'cancelapedido', $idPedido, $idMesa), array('class' => 'btn btn-block')) ?>  
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