<h3>Mesa:&nbsp;<span style="font-size: 60px; font-weight: bold;" ><?php echo $mesa ?></span></h3>

<div class="well sidebar-nav">
    <table class="table table-striped">
        <thead>
            <tr>              
                <th>Producto</th>
                <th>Cant.</th> 
                <th>Precio</th>
                <th>Acci&oacute;n</th>                                            
            </tr>
        </thead>
        <tbody>
            <?php
            $total_platos = 0;
            $total_pagar = 0;
            ?>
            <?php $ce = 0; ?>
            
            <?php foreach ($items as $i): ?>
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
                   <td>
                    <?php echo $i['Item']['precio']?>
                    <?php
                    $precio = $i['Item']['precio'];
                    $total_pagar += $precio;
                    ?>
                    </td>
                    <td>
                    <div id="restar_<?php echo $id_item; ?>"><?php echo $this->Html->image('menos.jpg'); ?></div>
                    <script type="text/javascript">
                            //$(document).ready(function() {
                            $("#restar_<?php echo $id_item; ?>").click(function() {
                                $("#cargaPedidos").load("<?php echo $this->Html->url(array('controller' => 'Pedidos', 'action' => 'restarproductojefe', $id_item, $mesa)) ?>");
                            });
                            //});
                    </script>
                    </td>                   
                </tr>
                <?php $ce++; ?>
            <?php endforeach; ?> 
            <tr>
              <td colspan="2">Total a cancelar</td>
              <td><?php echo $total_pagar ?></td>
              <td>&nbsp;</td>
            </tr>                
        </tbody>
    </table>    
</div>        

<?php echo $this->Html->link('Aumentar sobre el Pedido', array('controller'=>'Pedidos', 'action'=>'pedidomoso', $datosPedido['Pedido']['user_id'], $datosPedido['Pedido']['id'], $datosPedido['Pedido']['mesa'], 1), array('class'=>'btn btn-success btn-large')); ?>