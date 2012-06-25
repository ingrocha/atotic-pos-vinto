<?php //debug($movimiento);exit;?>
<div class="centered">
         <div class="grid-1">
            <div class="title-grid"> <span>Inventario</span></div>
            
            <div class="content-gird">
            <div id="imprime">
               <div class="logoprint">
                  
               </div>
                 <table>
                    <thead>
                       <tr>
                          <th>Nombre:</th>
                          <td class="txt"><?php echo $movimiento['0']['Usuario']['nombre'];?></td>
                          <th>Fecha:</th>
                          <td><?php echo  $movimiento['0']['Movimiento']['fecha'];?></td>
                       </tr>
                    </thead>
                 </table>           
               <table class="display">
                  <thead>
                     <tr class="oculto">
                        <th colspan="7">Lista de productos en inventario</th>
                     </tr>
                     <tr>
                        <th class="th_nombre">Producto</th>
                        <th class="txt">Tipo</th>
                        <th class="th_tipo">Saldo anterior</th>
                        <th class="th_usuario">Ingreso</th>
                        <th class="th_correo">Venta</th>
                        <th class="th_ci">Total</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($movimiento as $m):?>
                         <tr class="item">
                            
                            <td> <?php echo $m['Producto']['nombre'];?></td>
                            <td><?php echo $m['Producto']['tipo_producto'];?></td>
                            <td><?php echo $m['Movimiento']['venta'] + $m['Movimiento']['total'] -$m['Movimiento']['ingreso']  ;?></td>
                            <td><?php echo $m['Movimiento']['ingreso'];?></td>
                            <td class="name"><?php echo $m['Movimiento']['venta'];?></td>
                            <td><?php echo $m['Movimiento']['total'];?></td>
                           <!-- <td class="th_action">
                               <?php echo $this->Html->link($this->Html->image('/images/edit.png', array("alt"=>'Editar', 'title'=>'editar')), array('action'=>'editar', $m['Producto']['id']),array('escape' => false));?>&nbsp;
                               <?php echo $this->Html->link($this->Html->image('/images/del.png',array("alt"=>'Borrar', 'title'=>'eliminar')), array('action'=>'eliminar',$m['Producto']['id']), array('escape' => false));?>&nbsp;
                            </td>-->
                         </tr>
                     <?php endforeach;?>
                  </tbody>
               </table><!--fin tabla-->
               </div>
               
               </div>
            </div><!--fin contenido grid-->
             <div class="grid-buttons">
             <!--<div class="title-grid"><span>Acciones</span></div>-->
             <div class="content-gird">
                <!--<div class="button_user">
                   <?php echo $this->Html->link('', '/usuarios/insertar', array('title'=>'Insertar nuevo')); ?>
                </div>-->
                 
                <div class="button_print">
                   <?php echo $this->Form->button('', array('title'=>'Imprimir lista', 'id'=>'btnImprimir', 'class'=>'print')); ?>
                </div>
            <div class="clear"> </div>
             </div>
            
         </div>
         </div><!--fin contenido-->
 <script type="text/javascript">
   jQuery(document).ready(function() {

         jQuery("#btnImprimir").click(function() {
            //printElem({ leaveOpen: true, printMode: 'popup' });
            printElem({ overrideElementCSS: ['http://www.atotic.com/viva/inventario/app/webroot/css/printable.css'] });
         });


     });
 function printElem(options){
     jQuery('#imprime').printElement(options);
 }
</script>