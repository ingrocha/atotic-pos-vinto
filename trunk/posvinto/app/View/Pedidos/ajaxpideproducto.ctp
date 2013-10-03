<style>
    .pintado{
        background: #DFD5F4;
    }
</style>
<div class="table-responsive">
    <h3>LISTADO DE PEDIDOS</h3>
    <?php if(!empty($productos)):?>
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
        <?php foreach($productos as $p):?>
        <?php $i++;?>
        <tr id="quita<?php echo $p['Item']['id'];?>" style="size: b4;">
            <td><?php echo $i;?></td>
            <td><?php echo $p['Producto']['nombre']?></td>
            <td><b><?php echo $p['Item']['cantidad']?></b></td>
        </tr>
        
        <?php
                                            $this->Js->get('#quita'.$p['Item']['id'])->event(
                                            'click',
                                            $this->Js->request(
                                                array('action' => 'ajaxpideproducto',$idPedido,$p['Producto']['id'],$p['Item']['id']),
                                                array('async' => true,
                                                'before' => '$("#cargaObservaciones").hide()',
                                                'update' => '#cargaDatos',
                                                'method' => 'post','dataExpression'=>true
                                                ))
                                            );
                                            
                                            $this->Js->get('#quita'.$p['Item']['id'])->event(
                                            'mouseover',
                                            '$("#quita'.$p['Item']['id'].'").addClass("pintado");'
                                            );
                                            $this->Js->get('#quita'.$p['Item']['id'])->event(
                                            'mouseout',
                                            '$("#quita'.$p['Item']['id'].'").removeClass("pintado");'
                                            );
                                            
                    ?>
        
        <?php endforeach;?>
        </tbody>
    </table>
    <?php endif;?>
<?php if(!empty($mensaje)):?>
<h3 style="color: red;"><?php echo $mensaje?></h3>
<script>
$("#cargaObservaciones").hide();
</script>
<?php endif;?>
<?php if($sw == 1):?>
<script>
$("#cargaObservaciones").show();
$("#cargaObservaciones").load("<?php echo $this->Html->url(array('action' => 'ajaxmuestraobservaciones',$idProducto,$idPedido));?>")
</script>
<?php endif;?>
</div>
<?php echo $this->Js->writeBuffer(); ?> 