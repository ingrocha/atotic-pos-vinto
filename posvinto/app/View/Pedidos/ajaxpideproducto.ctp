<?php
App::import('Model', 'Item');
$item = new Item();

?>
<style>
    .pintado{
        background: #DFD5F4;
    }
</style>
<div class="table-responsive">
    <h3>LISTADO DE PEDIDOS</h3>
    <?php if(!empty($productos_vector)):?>
    <table bordercolor="#8462DF"class="table">
        <thead bgcolor="#8462DF">
        <tr>
            <th>Nro</th>
            <th>Producto</th>
            <th> Cantidad</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0;?>
        <?php foreach($productos_vector as $p):?>
        <?php $i++;?>
        <tr  style="size: b4; background:#D5D5FF;" onclick="$('#fila<?php echo $p['Producto']['producto_id'];?>').toggle();">
            <td><?php echo $i;?></td>
            <td><?php echo $p['Producto']['nombre']?></td>
            <td><b><?php echo $p['Producto']['cantidad']?></b></td>
        </tr>
        <?php  $productosn = $item->find('all',array('recursive' => 0,'conditions' => array('Item.pedido_id' => $idPedido,'Item.producto_id' => $p['Producto']['producto_id'])));?>
        
        <tr id="fila<?php echo $p['Producto']['producto_id'];?>" style="display: none;">
        <td>
        </td>
            <td>
                <table>
                    <?php foreach($productosn as $pro):?>
                    <tr id="quita<?php echo $pro['Item']['id'];?>">
                    <td><?php echo $pro['Producto']['nombre'];?> </td>
                    <td>
                    <?php if($usuario['User']['role'] == 'jefe' || $pro['Item']['estado'] == 0):?>
                    <input type="button" value="Quitar" id="quitab<?php echo $pro['Item']['id'];?>"/>
                    <?php endif;?>
                    </td>
                    </tr>
                    <?php
                                            $this->Js->get('#quitab'.$pro['Item']['id'])->event(
                                            'click',
                                            $this->Js->request(
                                                array('action' => 'ajaxpideproducto',$id_moso,$idPedido,$pro['Producto']['id'],$pro['Item']['id']),
                                                array('async' => true,
                                                'before' => '$("#cargaObservaciones").hide()',
                                                'update' => '#cargaDatos',
                                                'method' => 'post','dataExpression'=>true
                                                ))
                                            );
                                            $this->Js->get('#quita'.$pro['Item']['id'])->event(
                                            'mouseover',
                                            '$("#quita'.$pro['Item']['id'].'").addClass("pintado");'
                                            );
                                            //$direccion = $this->Html->url(array('action' => 'ajaxmuestraobservaciones',$idProducto,$idPedido));
                                            
                                            if($usuario['User']['role'] == 'jefe' || $pro['Item']['estado'] == 0)
                                            {
                                                $this->Js->get('#quita'.$pro['Item']['id'])->event(
                                                'click',
                                                '
                                                $("#cargaObservaciones").show();
                                                $("#cargaObservaciones").load("'.$this->Html->url(array('action' => 'ajaxmuestraobservaciones',$id_moso,$pro['Producto']['id'],$idPedido,$pro['Item']['id'])).'");
                                                '
                                                );
                                            }
                                            
                                            
                                            
                                            $this->Js->get('#quita'.$pro['Item']['id'])->event(
                                            'mouseout',
                                            '$("#quita'.$pro['Item']['id'].'").removeClass("pintado");'
                                            );
                                            
                                            
                    ?>
                    <?php endforeach;?>
                </table>
            </td>
            <td></td>
        </tr>
        
        
        
        <?php endforeach;?>
        </tbody>
    </table>
    <?php echo $this->Html->link('REALIZAR PEDIDO',array('action' => 'confirmarpedido',$idPedido,$id_moso),array('class' => 'btn btn-warning'));?>
    <?php endif;?>
<?php if(!empty($mensaje)):?>
<h3 style="color: red;"><?php echo $mensaje?></h3>
<script>
$("#cargaObservaciones").hide();
</script>
<?php endif;?>
<?php if($sw == 1):?>
<script>
/*
$("#cargaObservaciones").show();
$("#cargaObservaciones").load("<?php echo $this->Html->url(array('action' => 'ajaxmuestraobservaciones',$idProducto,$idPedido));?>")*/
</script>
<?php endif;?>
</div>
<?php echo $this->Js->writeBuffer(); ?> 