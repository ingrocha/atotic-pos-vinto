<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/clases'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Elementos del Menu</h3>
                <p>Despliega la lista de todos los Elementos del Menu</p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Categorias del Menu<span></span>
                            </caption>
                            <thead>
                                <tr>  
                                    <th scope="col">Nombre <span class="column-sorter"></span></th>
                                    <th scope="col">Descripcion <span class="column-sorter"></span></th>                               
                                    <th scope="col">Estado <span class="column-sorter"></span></th>                               
                                    <th scope="col">Orden <span class="column-sorter"></span></th>                               
                                    <th scope="col">Color <span class="column-sorter"></span></th>
                                    <th scope="col">Accion <span class="column-sorter"></span></th>                                
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php foreach ($clases as $clas): ?>                        
                                    <tr>                                         
                                       <td><?php echo $clas['Clase']['nombre']; ?></td>
                                        <td><?php echo $clas['Clase']['descripcion']; ?></td>
                                        <td><?php echo $clas['Clase']['estado']; ?></td>                                   
                                        <td><?php echo $clas['Clase']['orden']; ?></td>
                                        <td><?php echo $clas['Clase']['color']; ?></td>
                                        <td>
                                            <?php echo $this->Html->image("iconos/edit.png", array("title" => "Editar", 'url' => array('action' => 'editar', $clas['Clase']['id']))); ?>
                                            <?php echo $this->Html->image("iconos/elim.png", array("title" => "Eliminar", 'url' => array('action' => 'delete', $clas['Clase']['id']))); ?>
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