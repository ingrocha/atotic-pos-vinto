<h4>Cantidad Total: <?php echo $cant_platos['0']['0']['cantidad']; ?> Mesa: <?php echo $mesa; ?></h4>
<div class="well sidebar-nav">
    <table class="table table-striped">
        <thead>
            <tr>              
                <th>Producto</th>
                <th>Cant.</th>                 
                <th>Quitar</th>                 
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
                    <td>            
                        <div id="restar_<?php echo $id_item; ?>"><?php echo $this->Html->image('menos.jpg'); ?></div>
                        <script type="text/javascript">
                            //$(document).ready(function() {
                            $("#restar_<?php echo $id_item; ?>").click(function() {
                                $("#cargaPedidos").load("<?php echo $this->Html->url(array('controller' => 'Pedidos', 'action' => 'restarproducto', $id_item, $mesa)) ?>");
                            });
                            //});
                        </script>
                    </td>
                </tr>
                <?php $ce++; ?>
            <?php endforeach; ?>                 
        </tbody>
    </table>    
</div>        
<?php echo $this->Html->link('Realizar Pedido', array('controller'=>'Pedidos', 'action'=>'registrarpedido', $pedido, $total_pagar), array('class'=>'button')); ?>
