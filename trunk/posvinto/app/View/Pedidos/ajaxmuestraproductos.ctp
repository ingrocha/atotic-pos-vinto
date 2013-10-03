<?php //debug($datosProductos);     ?>
<?php
App::import('Model', 'Categoria');
$modeloCategoria = new Categoria();
?>

<?php foreach ($datosProductos as $dP): ?>
    <?php //debug($dP); ?>
    <?php
    $resultadoColor = $modeloCategoria->find('first', array(
        'recursive' => 1,
        'conditions' => array('Categoria.id' => $dP['Producto']['categoria_id'])
    ));
    //debug($resultadoColor);
    ?>
    <button onclick="cargaObs<?php echo $dP['Producto']['id']; ?>()" type="button" style="border: solid #<?php echo $resultadoColor['Clase']['color']; ?>; font-size: larger; margin: 2px; width: 185px; height: 80px; text-transform: uppercase;">
        <div>
            <?php echo $dP['Producto']['nombre']; ?>
        </div>
    </button>
    <script>
        function cargaObs<?php echo $dP['Producto']['id']; ?>() {
            //console.log("hizo click <?php //echo $dP['Producto']['id']; ?>");
            $("#cargaObservaciones").load("<?php echo $this->Html->url(array('action' => 'ajaxmuestraobservaciones', $dP['Producto']['id'])); ?>");
            $("#cargaObservaciones").load("<?php echo $this->Html->url(array('action' => 'ajaxmuestraobservaciones', $dP['Producto']['id'])); ?>");
            //$("#cargaDatos").load("<?php echo $this->Html->url(array('action' => 'ajaxmuestraobservaciones', $dP['Producto']['id'])); ?>");
        }
    </script>
<?php endforeach; ?>
