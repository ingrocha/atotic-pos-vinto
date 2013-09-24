<div class="panel panel-danger">
    <div class="panel-heading" style="background-color: #FF2A2A; color: #fff">
        <h3 class="panel-title">Observaciones <?php echo $nombreProducto['Producto']['nombre']; ?></h3>
    </div>
    <div class="panel-body">
        <?php foreach ($datosObs as $dObs): ?>
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox<?php echo $dObs['Productosobservacione']['id']; ?>" value="<?php echo $dObs['Productosobservacione']['id']; ?>"> <?php echo $dObs['Productosobservacione']['observacion']; ?>
            </label>    
        <?php endforeach; ?>
    </div>
</div>
