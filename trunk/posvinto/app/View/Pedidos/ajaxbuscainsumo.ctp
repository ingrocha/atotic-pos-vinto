<h1>insumo de almacen</h1>
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
            <?php foreach ($insumos as $item): ?>
                <?php $id = $item['Insumo']['id']; ?>
                <?php echo $this->Form->create('Pedido'); ?>
                <tr>
                    <td>
                        <?php
                        echo $this->Form->hidden('insumo_id', array('value' => $item['Insumo']['id']));
                        echo $item['Insumo']['nombre'];
                        ?>
                    </td>
                    <td>
                        <?php echo $item['Tipo']['nombre'] ?>
                    </td>
                    <td>
                        <?php echo $item['Insumo']['total'] ?>
                    </td>
                    <td>
                        <?php echo $this->Form->text('cantidad', array('id' => "tecladonumerico_$id")); ?>
                        <script type="text/javascript">
                            jQuery(function () {
                                jQuery('#tecladonumerico_<?php echo $id; ?>').keypad();
                            });
                        </script>
                    </td>
                    <td>
                        <?php echo $this->Form->end('sacar') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>