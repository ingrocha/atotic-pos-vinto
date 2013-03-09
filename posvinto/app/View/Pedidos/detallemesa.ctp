<h4>Cantidad Total: <?php //echo $cant_platos['0']['0']['cantidad']; ?> Mesa: <?php echo $mesa; ?></h4>
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
                    <td><?php echo $i['Producto']['nombre']; ?></td>
                    <td>
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
<?php echo $this->Html->link('Realizar Pedido', array('controller'=>'Pedidos', 'action'=>'registrarpedido', $pedido, $total_pagar), array('class'=>'button')); ?>