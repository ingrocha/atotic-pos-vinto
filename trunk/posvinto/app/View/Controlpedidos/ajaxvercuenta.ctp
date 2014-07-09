<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Formulario de Cuenta</h4>
    </div>
<?php $fecha = date('Y-m-d'); ?>
<?php $hora = date('H:m:s'); ?>
<div class="modal-body">
        <div class="row-fluid">
            <div class="span12 form-dark">
            <div class="row-fluid">
            <div class="span12">
            <div class="span4">
            <label>Nombre del Mozo:</label>
            </div>
            <div class="span8">
            <?php echo $mozo ?>
            </div>
            </div>
            </div>
            <div class="row-fluid">
            <div class="span12">
            <div class="span4">
            <label>Meza:</label>
            </div>
            <div class="span8">
            <?php echo $mesa ?>
            </div>
            </div>
            </div>
            <div class="row-fluid">
            <div class="span12">
            <div class="span4">
            <label>Fecha:</label>
            </div>
            <div class="span8">
            <?php echo $fecha; ?>
            </div>
            </div>
            </div>
            <div class="row-fluid">
            <div class="span12">
            <div class="span4">
            <label>Hora:</label>
            </div>
            <div class="span8">
            <?php echo $hora; ?>
            </div>
            </div>
            </div>
            
            </div>
        </div>
    <span style="padding: 0 30px 0 2px; text-align: left; font-size: 20px;">
    <table class="imprimir-factura">
            <tr>
                <th style="text-align: left; font-size: 18px;">Producto</th>
                <th>&nbsp;&nbsp;&nbsp;</th>
                <th style="text-align: left; font-size: 18px;">Cant.</th>
                <th>&nbsp;&nbsp;&nbsp;</th>
                <th style="text-align: left; font-size: 18px;">P/U</th>
                <th>&nbsp;&nbsp;&nbsp;</th>
                <th style="text-align: left; font-size: 18px;">P/Total</th>
            </tr>

            <?php
            $montoTotal = 0;
            foreach ($productos_vector as $i):
                ?>
    <?php if ($i['Producto']['precio'] != 0): ?>
                    <tr>
                        <td style="font-size: 18px;">
        <?php echo $i['Producto']['nombre']; ?>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td style="text-align: center; font-size: 18px;">
        <?php echo $i['Producto']['cantidad']; ?>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td style="font-size: 18px;">
        <?php echo $i['Producto']['precio']; ?>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td style="font-size: 18px;">
                            <?php
                            $precio = $i['Producto']['precio'] * $i['Producto']['cantidad'];
                            echo number_format($precio, 2, '.', ',');
                            $montoTotal += $precio;
                            ?>
                        </td>
                    </tr>
                <?php endif; ?>
<?php endforeach; ?>
            <tr>
                <td colspan="3" style="text-align: right; font-size: 20px;">Importe total BS.</td>
                <td style="font-size: 20px; font-weight: bold;"><?php echo number_format($montoTotal, 2, '.', ','); ?></td>
            </tr>

        </table>
    </span>
    </div>