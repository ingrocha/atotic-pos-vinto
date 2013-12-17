<?php
App::import('Model', 'Almacen');
$cantidadAlmacen = new Almacen();
//debug($montos->find('all', array('recursive'=>-1, 'limit'=>3))); 
?>
<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/porciones'); ?>               
    <!-- // fin sidebar -->
    <?php //debug($insumos); ?>
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Insumos <small>listado</small></h3>
                <p>Despliega la lista de todos los insumos</p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Insumos<span></span>
                            </caption>
                            <thead>
                                <tr>  
                                    <th scope="col">Nro. <span class="column-sorter"></span></th>                          
                                    <th scope="col">Producto <span class="column-sorter"></span></th>
                                    <th scope="col">Insumo <span class="column-sorter"></span></th>
                                    <th scope="col">Cantidad <span class="column-sorter"></span></th> 
                                    <th scope="col">Acciones <span class="column-sorter"></span></th>                                                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                <?php foreach ($porciones as $porci): ?>                        
                                <tr>                                    
                                    <td><?php echo $i; $i++; ?></td>
                                    <td><?php echo $porci['Producto']['nombre']; ?></td>
                                    <td><?php echo $porci['Insumo']['nombre']; ?></td>
                                    <td><?php echo $porci['Porcione']['cantidad']; ?></td>
                                    <td>
                                        <?php echo $this->Html->image("iconos/edit.png", array("title" => "Editar la Porcion", 'url' => array('action' => 'editar', $porci['Porcione']['id']))); ?>
                                        <?php echo $this->Html->link($this->Html->image("iconos/elim.png", array("alt" => 'Eliminar', 'title' => 'Eliminar Porcion')), array('action' => 'eliminar', $porci['Porcione']['id']), array('escape' => false), ("Desea eliminar realmente??"));?>
                                            
                                    </td>                               
                                </tr>
                                <?php endforeach; ?>                           
                            </tbody>
                        </table>
                        <!-- // BOO TABLE - DTB-2 -->

                    </div>
                    <!-- // Widget -->

                </div>
                <!-- // Column -->

            </div>
            <!-- // Example row -->

        </section>
    </div>	
    <!-- // fin contenido principal --> 
</div>

<!-- Sidebar -->
<?php //echo $this->element('menualmacenes') ?>
<!-- End Sidebar -->