<?php //debug($pedido); ?>
<?php //debug($moso); ?>
<div class="tituloh1" style="padding-left: 80px;">Viva Vinto</div>
<div class="tituloh1" style="padding-left: 90px;">Recibo</div>
<table class="tablafactura">
  <tr>
    <td colspan="4"><div class="tituloh3">Mesa: </div><div class="tituloh3">&nbsp;<div class="tituloh3">&nbsp;<?php echo $moso['Pedido']['mesa']; ?></div></div></td>    
  </tr>
  <tr>
    <td colspan="4"><div class="tituloh3">Moso: </div><div class="tituloh3">&nbsp;<?php echo $moso['Usuario']['nombre']; ?></div></td>   
  </tr>
  <tr class="contenido">
    <td><div class="tituloh5">Producto</div></td>
    <td><div class="tituloh5">Cant</div></td>
    <td><div class="tituloh5">P.Unitario</div></td>
    <td><div class="tituloh5">Costo</div></td>
  </tr>
  <?php foreach($pedido as $p): ?>
  <tr class="contenido">
    <td><?php echo $p['Producto']['nombre']; ?></td>
    <td><?php echo $p['Item']['cantidad']; ?></td>
    <td><?php echo $p['Producto']['precio']; ?></td>
    <td><?php echo $p['Item']['precio']; ?></td>
  </tr>
  <?php endforeach; ?>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><div class="tituloh5">Total</div></td>
    <td><div class="tituloh5"><?php echo $p['Pedido']['total']; ?></div></td>
  </tr>
</table>
<br />
<div class="tituloh5">Nombre: .....................</div><br />
<br />
<div class="tituloh5">Nit: .....................</div>
