<?php //debug($pedido);  ?>
<div id="aImprimir">
    <?php echo $this->Form->create('Recibo') ?>
    <div class="tituloh1" style="padding-left: 80px;">Viva Vinto</div>
    <p>&nbsp;</p>
    <div class="tituloh1" style="padding-left: 90px;">Recibo</div>
    <table class="recibo">
        <tr>
            <td colspan="4"><div class="tituloh3">Mesa: </div><div class="tituloh3">&nbsp;<div class="tituloh3">&nbsp;<?php echo $moso['Pedido']['mesa']; ?></div></div></td>    
        </tr>
        <tr>
            <td colspan="4"><div class="tituloh3">Moso: </div><div class="tituloh3">&nbsp;<?php echo $moso['User']['nombre']; ?></div></td>   
        </tr>
        <tr class="contenido">
            <td><div class="tituloh5">Producto</div></td>
            <td><div class="tituloh5">Cant</div></td>
            <td><div class="tituloh5">P.Unitario</div></td>
            <td><div class="tituloh5">Costo</div></td>
        </tr>
        <?php foreach ($pedido as $p): ?>
            <tr class="contenido">
                <td><?php echo $p['Producto']['nombre']; ?></td>
                <td><?php echo $p['Item']['cantidad']; ?></td>
                <td><?php echo $p['Producto']['precio']; ?></td>
                <td><?php echo $p['Item']['precio']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table id="total" class="tablafactura">
        <tr>
            <td colspan="2">&nbsp;</td>
            <td><div class="tituloh5">Total</div></td>
            <td>
                <div class="tituloh5" ><?php echo $totalpagado; ?></div>
            </td>
        </tr>
    </table>                                                      
</div><!--fin imprimir-->                                                                                            
<?php echo $this->Html->image('print.png', array('id' => "bt_imprimir")); ?> Imprimir el Pedido&nbsp;&nbsp;&nbsp;&nbsp;            
<script type="text/javascript">
    jQuery("#descuento").change(function(){
        //alert(this.value);
        jQuery("#total").load("http://localhost/posvinto/posvinto/controlpedidos/totalcondescuento/<?php echo $totalpagado; ?>/"+this.value);
               
    });   
    jQuery("#bt_imprimir").click(function() {
        //alert('imprimir');
        // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
        printElem({ leaveOpen: true, printMode: 'popup' });             
        // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
    });
    function printElem(options){
        jQuery('#aImprimir').printElement(options);
    }
</script>
</div>