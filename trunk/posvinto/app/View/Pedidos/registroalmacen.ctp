<?php echo $this->Html->css('keypad/jquery.keypad'); ?>
<?php echo $this->Html->script(array('keypad/jquery.keypad.min', 'keypad/jquery.keypad-es')); ?>
<script type="text/javascript">
var qwertyLayout = [ 
    jQuery.keypad.qwertyAlphabetic[0] + $.keypad.CLOSE, 
    jQuery.keypad.HALF_SPACE + $.keypad.qwertyAlphabetic[1] + 
    jQuery.keypad.HALF_SPACE + $.keypad.CLEAR, 
    jQuery.keypad.SPACE + $.keypad.qwertyAlphabetic[2] + 
    jQuery.keypad.SHIFT + $.keypad.BACK]; 

jQuery(function () {
	jQuery('#tecladobuscar').keypad({keypadOnly: false, layout: qwertyLayout});
});
</script>
<table>

   <tr>
      <td>Buscar</td>
      <td>
      <?php //echo $this->ajaxLayout('buscar')?>
      </td>
   </tr>
</table>
<table>
   <thead>
       <tr>
         <th>Insumo</th>
         <th>Categor&iacute;a</th>
         <th>Cantidad en almacen</th>
         <th>Cantidad</th>
         <th>Sacar</th>
       </tr>
   </thead>
   <tbody>
      <?php foreach($insumos as $item): ?>
          <?php echo $this->Form->create('Pedido');?>
          <tr>
             <td>
             <?php 
             echo $this->Form->hidden('insumo_id', array('value'=>$item['Insumo']['id']));
             echo $item['Insumo']['nombre'];
             ?>
             </td>
             <td>
             <?php echo $item['Tipo']['nombre']?>
             </td>
             <td>
             <?php echo $item['Insumo']['total']?>
             </td>
             <td>
             <?php echo $this->Form->text('cantidad', array('id'=>'teclado')); ?>
             </td>
             <td>
             <?php echo $this->Form->end('sacar') ?>
             </td>
          </tr>
      <?php endforeach; ?>
   </tbody>
</table>