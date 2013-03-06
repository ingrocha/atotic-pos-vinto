<script>
    $(function() {
        $("#tabs").tabs();
    });
</script>

<div class="lista_productos">
    <div id="tabs">
        <ul>
            <?php foreach ($categorias as $c): ?>
                <li>
                    <a href="#cat_<?php echo $c['Categoria']['id']; ?>"><?php echo $c['Categoria']['nombre']; ?></a>
                </li>                  
            <?php endforeach; ?> 
        </ul>
        <?php foreach ($categorias as $c): ?>  
            <div  id="cat_<?php echo $c['Categoria']['id']; ?>">    
                <ul class="list-products">
                    <?php foreach ($productos as $p): ?>
                        <?php $id = $p['Producto']['id']; ?>
                        <?php if ($c['Categoria']['id'] == $p['Producto']['categoria_id']): ?> 
                            <?php //$num_pedido = $numero_pedido; ?>
                            <?php //$id_moso = $moso['Usuario']['id']; ?> 
                            <?php //$id = $p['Producto']['id']; ?>
                            <?php $id_prod = $p['Producto']['id']; ?>      
                            <li id="prod_<?php echo $id_prod; ?>">  
                                <span>
                                    <?php echo $p['Producto']['nombre']; ?>
                                </span><?php //echo $this->Html->image('plato.png');   ?>  
                            </li>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#prod_<?php echo $id; ?>").click(function() {
                                        $("#listado").load("<?php echo $this->Html->url(array('action'=>'ajaxlistado', $id_moso, $id_prod,$pedido,$mesa, $anadido))?>");
                                        //console.log('el id es: '+<?php //echo $prod_id;   ?>); 
                                        $("#desaparece").hide();
                                    });
                                });
                            </script>
                        <?php endif; ?> 
                    <?php endforeach; ?> 
                </ul> 
            </div>
            <?php //fin imprimir los productos ?>
        <?php endforeach; ?>                  
    </div>
</div>
<div>
    <div id="pedidos">
        <div style="font-size: x-large; font-weight: bolder;">Moso: <?php echo $moso['User']['nombre']; ?></div>
        <div id="desaparece">
            <div class="pedidomesa" style="font-size: x-large; font-weight: bolder;">
                Mesa: <?php echo $mesa; ?>
                Items: <?php echo $cant_platos['0']['0']['cant']; ?>
            </div>
        </div>
        <?php if (!empty($items_pedido)): ?>
            <div id="listado">
                <table class="lista-pedidos">
                    <thead>
                        <tr>
                            <th>Plato</th>
                            <th>Cant</th>
                           <!--  <td>Precio</td> -->
                            <th>Elim</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //echo $id_moso; ?>
                        <?php
                        $total_platos = 0;
                        $total_pagar = 0;
                        ?>
                        <?php $ce = 0; ?>
                        <?php foreach ($items_pedido as $i): ?>
                            <?php $id_item = $i['Item']['id']; ?>
                            <tr class="<?php echo fmod($ce, 2) ? 'segundo' : 'primero' ?>">
                                <td><?php echo $i['Producto']['nombre']; ?></td>
                                <td>
                                    <?php echo $i['Item']['cantidad']; ?>
                                    <?php
                                    $platos = $i['Item']['cantidad'];
                                    $total_platos += $platos;
                                    ?>
                                    <!-- </td>
                                    <td>
                                    <?php //echo $i['Item']['precio']?>
                                    <?php
                                    $precio = $i['Item']['precio'];
                                    $total_pagar += $precio;
                                    ?>
                                    </td> -->
                                <td>            
                                    <div id="restar_<?php //echo $id_item;  ?>"><?php //echo $this->Html->image('menos.jpg');  ?></div>
                                    <script type="text/javascript">
                                        //$(document).ready(function() {
                                        $("#restar_<?php echo $id_item; ?>").click(function() {
                                            $("#listado").load("/sisvinto/pedidos/restarproducto/<?php echo $id_item; ?>");
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
        <?php else: ?>
            <div id="listado"> 
                Seleccione un plato de la lista          
            </div> 
        <?php endif; ?>              
    </div>
</div>
