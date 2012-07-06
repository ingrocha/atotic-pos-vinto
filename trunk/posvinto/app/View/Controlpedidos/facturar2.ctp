<div id="imprimir">
<div class="tablafactura">
   <table>
      <thead>
         <th class="titulo1"><?php echo $datosfactura['Parametrosfactura']['nit']?></th>
      </thead>
   </table>
</div>
</div>
<?php if(!empty($newdata)):?>
   <?php
   echo $this->Form->create('Pedido', array('controller'=>'controlpedidos', 'action'=>'facturar3')); 
   $i=0;
   foreach($newdata as $n){
       echo $this->Form->hidden("$i.Pedido.producto", array('value'=>$n['Pedido']['producto']));
       echo $this->Form->hidden("$i.Pedido.cantidad", array('value'=>$n['Pedido']['cantidad']));
       echo $this->Form->hidden("$i.Pedido.preciou", array('value'=>$n['Pedido']['preciou']));
       $i++;
   }
   ?>
   <div class="buttons">
      <?php echo $this->Form->end('Volver');?>
   </div>    
<?php endif;?>
