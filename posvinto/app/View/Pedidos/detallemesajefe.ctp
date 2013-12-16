<h3>Mesa:&nbsp;<?php echo $datosPedido['Pedido']['mesa'] ?></h3>
<div id="nombremoso">
<h4>Mozo: <?php echo $datosMoso['User']['nombre'] ?></h4>
</div>

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
            <?php foreach ($itemsPedido as $i): ?>
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
                                $("#cargaPedidos").load("<?php echo $this->Html->url(array('controller' => 'Pedidos', 'action' => 'restarproductojefe', $id_item, $datosPedido['Pedido']['mesa'])) ?>");
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

<?php echo $this->Html->link('Aumentar sobre el Pedido', array('controller'=>'Pedidos', 'action'=>'pedidomoso', $id_moso, $datosPedido['Pedido']['id'], $datosPedido['Pedido']['mesa'], 1), array('class'=>'btn btn-success btn-large')); ?>

<div class="span10">
&nbsp;
</div>
<div class="span10">
   <?php echo $this->Form->create('Pedidos', array('action'=>'reasignamesero')) ?>
   <?php echo $this->Form->select('moso', $mosos,array('class' => 'form-control input-lg')) ?>
   <?php echo $this->Form->hidden('pedido', array('value'=>$datosPedido['Pedido']['id'])) ?>
   <?php echo $this->Form->hidden('id_moso', array('value'=>$id_moso)) ?>
   <br />
   <?php 
   //echo $this->Form->submit('ASIGNAR MOSO >>',array('class' => 'btn btn-primary'));
   echo $this->Js->submit('ASIGNAR MOSO >>', array('url' => array('action' => 'ajaxreasignamoso'), 'update' => '#nombremoso','class' => 'btn btn-primary'
                        ,'before' => '$("#nombremoso").hide(400)'
                        ,'complete' => '$("#nombremoso").show(400)'
                        ));
   ?>
   <?php echo $this->Form->end() ?>
</div>
<div class="span10">
<br />
<?php
    echo $this->Html->link('Cancelarpedido', array(
    'controller' => 'Pedidos', 'action' => 'cancelapedido', $id_moso, $datosPedido['Pedido']['id'], $datosPedido['Pedido']['mesa']), array('class' => 'btn btn-danger'), 'Esta seguro de cancelar el pedido?, se eliminara todo el pedido y numero de mesa');    
?>
</div>
<?php echo $this->Js->writeBuffer();?>