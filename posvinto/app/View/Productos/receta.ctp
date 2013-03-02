<?php
//App::import('Model', 'Insumo');
//$Modelo = new Insumo;
?>
<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/platos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3>
                    <i class="aweso-icon-table opaci35">
                    </i>
                    Producto
                    <small>
                        <?php echo $platoreceta['Producto']['nombre']; ?>
                    </small>
                </h3>             
            </div>
            <div class="row-fluid">
                <div class="span6 grider">
                    <div class="widget widget-simple widget-table">                        
                        <?php if (!empty($rec)): ?>
                            <table class="table boo-table table-striped table-condensed table-content bg-blue-light">
                                <colgroup>
                                    <col class="col20" />
                                    <col class="col20" />
                                    <col class="col45" />
                                </colgroup>
                                <caption>
                                    Insumos del producto                                    
                                </caption>
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php $c = 0; ?>
                                    <?php foreach ($rec as $r): ?>                                       
                                        <tr id="DataRow<?php echo $c; $c++; ?>">
                                            <td class="bold">                                                
                                                <?php $id_porcione = $r['Porcione']['id']; ?> 
                                                <?php $id_producto = $r['Porcione']['producto_id']; ?>           
                                                <?php echo $r['Insumo']['nombre']; ?>
                                            </td>
                                            <td>                                                
                                                <?php echo $r['Porcione']['cantidad']; ?>
                                            </td>
                                            <td>                                                
                                                <?php
                                                echo $this->Ajax->link($this->Html->image("edit.png"), array(
                                                    'action' => 'ajaxmodificareceta', 
                                                    $id_porcione
                                                ), 
                                                        array(
                                                            'update' => 'cargaDatos',
                                                            'title' => 'Editar datos del insumo del producto',
                                                            'escape' => false
                                                ));
                                                ?>
                                                &nbsp;
                                                <?php 
                                                    echo $this->Html->link($this->Html->image("elim.png"), 
                                                        array('action' => 'elimporcionplato', $id_porcione, $id_producto), 
                                                        array('escape'=>false), 
                                                        "Esta seguro de quitar este insumo?"
                                                   ) 
                                                ?>
                                            </td>
                                        </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- // BOO TABLE - DTB-2 -->
<?php endif; ?>
                    </div>
                    <!-- // Widget -->
                    <div class="span4">
                        <?php
                         echo $this->Ajax->link('Asignar Insumo', array(
                          'action' => 'ajaxinsertarinsumo',
                          $platoreceta['Producto']['id']), array(
                          'update' => 'cargaDatos',
                          'class' => 'btn btn-green'
                          ))
                        ?>
                    </div>
                </div>
                <!-- // Column -->
                <div class="span6 grider" id="cargaDatos">

                </div>
                <!-- // Example row -->
            </div>
        </section>
        <!-- // fin contenido principal -->

    </div>
</div>
