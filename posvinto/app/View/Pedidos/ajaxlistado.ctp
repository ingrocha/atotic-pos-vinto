 <?php //debug($pedidos); ?>
<span>Mesa: <br/><?php echo $mesa; ?></span>
<span>Cantidad:<br/> <?php echo $cant_platos['0']['0']['cantidad']; ?></span>	
 <table class="lista-pedidos">
    <tr>
        <th>Plato</th>
        <th>Cantidad</th>
       <!-- <td>Precio</td> -->
        <th></th>
    </tr>
    <?php //echo $id_moso; ?>
    <?php 
        $total_platos = 0;
        $total_pagar = 0; 
    ?>
    <?php foreach($items as $i): ?>
    <?php $id_item = $i['Item']['id']; ?>
    <tr>
        <td><?php echo $i['Producto']['nombre']; ?></td>
        <td>
            <?php echo $i['Item']['cantidad']; ?>
            <?php 
                $platos = $i['Item']['cantidad'];
                $total_platos += $platos;  
            ?>
        </td>
       <!-- <td>
            <?php echo $i['Item']['precio']?>
            <?php 
                $precio = $i['Item']['precio'];
                $total_pagar += $precio;  
            ?>
        </td> -->
        <td>            
            <div id="restar_<?php echo $id_item; ?>"> <?php echo $this->Html->image('rest.png')?> </div>
            <script type="text/javascript">                                           
                //$(document).ready(function() {
                    $("#restar_<?php echo $id_item; ?>").click(function(){
                        $("#listado").load("/sisvinto/pedidos/restarproducto/<?php echo $id_item; ?>");                                                                     
                    });              
                //});
            </script>
        </td>
    </tr>
    <?php endforeach; ?>                             
 </table>
 Cantidad de Platos: <?php echo $total_platos; ?><br />
 <?php //echo $total_pagar; ?>
 <?php echo $this->Html->link('Realizar Pedido', array('controller'=>'Pedidos', 'action'=>'registrarpedido', $pedido, $total_pagar), array('class'=>'button-listado')); ?>
 <?php echo $this->Html->link('Cancelar Pedido', array('controller'=>'Pedidos', 'action'=>'listadopedidos'),array('class'=>'button-listado')); ?>