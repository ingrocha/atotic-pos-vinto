<div class="panel panel-danger">
    <div class="panel-heading" style="background-color: #FF2A2A; color: #fff">
        <h3 class="panel-title">Observaciones <?php echo $nombreProducto['Producto']['nombre']; ?></h3>
    </div>
    <?php echo $this->Form->create('Movi',array('action' => 'guardaobservacion'));?>
    <div class="panel-body">
    <?php $i = 0?>
        <?php foreach ($datosObs as $dObs): $i++;?>
            <label class="checkbox-inline">
            <?php //echo $dObs['Productosobservacione']['observacion']; ?>
            <?php echo $this->Form->checkbox("$i"."obs");?>
                <!--<input type="checkbox" id="inlineCheckbox<?php echo $dObs['Productosobservacione']['id']; ?>" value="<?php echo $dObs['Productosobservacione']['id']; ?>">--> <?php echo $dObs['Productosobservacione']['observacion']; ?>
            </label>    
        <?php endforeach; ?>
    </div>
 <?php
                        echo $this->Js->submit('Enviar', array('url' => "/Pedidos/guardaobservacion/$idProducto/$idPedido", 'update' => '#prueba'
                        ,'complete' => '$("#cargaObservaciones").hide()'
                        ));
                        echo $this->Form->end();
                        ?>
</div>
<div id="prueba">

</div>
<?php echo $this->Js->writeBuffer(); ?> 