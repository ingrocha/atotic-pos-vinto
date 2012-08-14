<?php //debug($pedidos); ?>
<?php if($control != 0):?>
    
<?php else:?>


<div class="pedidomesa" style="font-size: x-large; font-weight: bolder;">
    Mesa: <?php echo $mesa; ?>
    Platos: <?php echo $cant_platos['0']['0']['cantidad']; ?>
</div>
 <table class="lista-pedidos">
    <tr>
        <td>Plato</td>
        <td>Cantidad</td>
       <!-- <td>Precio</td> -->
        <td>Acciones</td>
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
                    $("#restar_<?php echo $id_item; ?>").click(function(){
                        $("#listado").load("/posvinto/posvinto/pedidos/restarproducto/<?php echo $id_item; ?>/<?php echo $mesa; ?>");                                                                     
                    });              
                //});
            </script>
        </td>
    </tr>
    <?php endforeach; ?>                             
 </table>
 <?php //echo $total_pagar; ?>
 <?php echo $this->Html->link('Realizar Pedido', array('controller'=>'Pedidos', 'action'=>'registrarpedido', $pedido, $total_pagar), array('class'=>'button')); ?>
 <?php echo $this->Html->link('Cancelar Pedido', array('controller'=>'Pedidos', 'action'=>'listadopedidos'),array('class'=>'button')); ?>
 <?php endif;?>