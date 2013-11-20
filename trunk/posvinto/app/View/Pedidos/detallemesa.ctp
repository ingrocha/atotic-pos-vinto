<h3>Mesa:&nbsp;<span style="font-size: 60px; font-weight: bold;" ><?php echo $datosPedido['Pedido']['mesa'] ?></span></h3>

<div class="well sidebar-nav">
    <table class="table">
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
            <?php foreach ($productos_vector as $i): ?>
                <?php $id_item = $i['Producto']['id']; ?>
                <tr class="<?php echo fmod($ce, 2) ? 'segundo' : 'primero' ?>">                    
                    <td style="font-size: 20px;"><?php echo $i['Producto']['nombre']; ?></td>
                    <td style="font-size: 20px;">
                        <?php echo $i['Producto']['cantidad']; ?>
                        <?php
                        $platos = $i['Producto']['cantidad'];
                        $total_platos += $platos;
                        ?>
                    </td>
                   <!-- <td>
                    <?php //echo $i['Item']['precio']?>
                    <?php
                    $precio = $i['Producto']['precio'];
                    $total_pagar += $precio;
                    ?>
                    </td> -->                    
                </tr>
                <?php $ce++; ?>
            <?php endforeach; ?>                 
        </tbody>
    </table>    
</div>        

<?php echo $this->Html->link('Aumentar sobre el Pedido', array('controller'=>'Pedidos', 'action'=>'pedidomoso', $datosPedido['Pedido']['user_id'], $datosPedido['Pedido']['id'], $datosPedido['Pedido']['mesa'], 1), array('class'=>'btn btn-success btn-large')); ?>
<br />
<br />
<?php echo $this->Html->link('Desocupar Mesa', array('controller'=>'Pedidos', 'action'=>'desocupamesa', $datosPedido['Pedido']['user_id'], $datosPedido['Pedido']['id']), array('class'=>'btn btn-success btn-large')); ?>