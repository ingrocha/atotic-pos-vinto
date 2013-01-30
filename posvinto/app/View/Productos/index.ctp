<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/productos'); ?>               
<!-- // fin sidebar -->
<!-- // contenido pricipal -->                                 
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i> Productos <small>Listado</small></h3>
            <p>Despliega la lista de todos los Productos</p>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table">
                    <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                        <caption>
                            Productos<span></span>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col">Numero <span class="column-sorter"></span></th>
                                <th scope="col">Nombre <span class="column-sorter"></span></th>
                                <th scope="col">Producto <span class="column-sorter"></span></th>
                                <th scope="col">Precio <span class="column-sorter"></span></th>
                                <th scope="col">Observaciones<span class="column-sorter"></span></th>
                                <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($productos as $p): ?>                        
                        <?php $idProducto = $p['Producto']['id'] ?>                        
                            <tr>                                    
                                <td>
                                    <?php echo $idProducto; ?>
                                    <div id="cuadro_<?php echo $idProducto; ?>"></div>                         
                                    <div id="cuadro2_<?php echo $idProducto; ?>"></div>
                                    <div id="ajax-modal_<?php echo $idProducto; ?>" class="modal hide fade" tabindex="-1"></div>
                                </td>
                                <td><?php echo $p['Producto']['nombre']; ?></td>
                                <td> <?php echo $p['Categoria']['nombre']; ?></td>
                                <td><?php echo $p['Producto']['precio']; ?></td>
                                <td><?php echo $p['Producto']['descripcion']; ?></td>                               
                                <td>
                                        <?php echo $this->Html->link('MODIFICAR', array('action' => 'modificar', $idProducto)); ?>
                                        <?php echo $this->Html->link('ANADIR MODIFICAR PORCIONES', array('action' => 'modificarporciones', $idProducto)); ?>
                                        <?php echo $this->Html->link('ELIMINAR', array('action' => 'eliminar', $idProducto), array('class' => 'inner_a'), ('Desea eliminar realmente?')); ?>        
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