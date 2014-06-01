<?php 
App::import('Model', 'Mesa');
$mmesa = new Mesa();
?>
<div class="span9" style="background: #EFEFEF;">
            <div class="hero-unit" style="background: #F7F7F7;">    
            <br />
            <br />            
                                                           
                <?php foreach ($mesas as $m): ?>
                    <?php $id_pedido = $m['Pedido']['id']; ?>
                    <?php $id_moso = $m['Pedido']['user_id']; ?> 
                    <?php //$idMesa = $m['Pedido']['user_id']; ?>  
                    <?php 
                    
                    $objmesa = $mmesa->find('first',array('recursive' => -1,'conditions' => array('Mesa.pedido_id' => $m['Pedido']['id'])));
                    $mesa = $objmesa['Mesa']['nombre']; 
                    ?>                    
                    <?php //echo $this->Html->link('');?>
                                    <!--<button class="btn btn-large btn-danger" type="button">Mesa <?php //echo $m['Pedido']['mesa'];        ?></button>-->   
                    <?php
                    if ($datosMoso['User']['role'] == "Jefe")
                    {
                        echo $this->Ajax->link(
                            //$this->Html->image('mesa.png')."MESA : $mesa", array(
                            "<h2>MESA : <b>$mesa</b></h2>", array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesajefe',
                            $id_pedido, $datosMoso['User']['id']
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "myButton",
                            'style' => 'width: 150px')
                        );
                    } else
                    {
                        echo $this->Ajax->link(
                            //"MESA : $mesa".$this->Html->image('iconos/mesa.png', array('style'=>"padding-top: 10px;")), array(
                            "<h2>MESA : <b>$mesa</b></h2>", array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesa',
                            $id_pedido,
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "myButton"                            )
                        );
                    }
                    ?>                                         
                <?php endforeach; ?>
            <br />
            <br /> 
            </div>                    
        </div><!--/span-->
