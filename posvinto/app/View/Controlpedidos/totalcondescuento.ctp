<tr>
<td colspan="2">&nbsp;</td>
    <td><div class="tituloh5">Total</div></td>
    <td><div class="tituloh5"><?php echo $total?></div></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
    <td><div class="tituloh5">Descuento</div></td>
    <td><div class="tituloh5"><?php echo $totalpagar ?></div></td>

</tr>
<?php echo $this->Form->hidden('Recibo.total', array('value'=>$totalpagar)) ?>
<?php echo $this->Form->hidden('Recibo.descuento', array('value'=>$descuento)) ?>