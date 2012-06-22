Platos pedidos
<table border="1">
    <tr>
        <td>
            Pedido
        </td>
        <td>
            Plato
        </td>
        <td>
            Cantidad
        </td>
    </tr>
    <?php foreach($pedidos as $p): ?>
        <tr>
        <td>
            <?php echo $p['Pedido']['id']; ?>
        </td>
        <td>
            <?php echo $p['Producto']['nombre']; ?>
        </td>
        <td>
            <?php echo $p['Item']['cantidad']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>