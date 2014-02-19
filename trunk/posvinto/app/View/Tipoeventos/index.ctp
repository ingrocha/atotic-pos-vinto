<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reservas'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Eventos</h3>
                <p>Despliega la lista de todas las categorias</p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Categorias<span></span>
                            </caption>
                            <thead>
                                <tr>  
                                    <th scope="col">Nro. <span class="column-sorter"></span></th>                                
                                    <th scope="col">Nombre <span class="column-sorter"></span></th>                     
                                    <th scope="col">Descripcion <span class="column-sorter"></span></th> 
                                    <th scope="col">Acciones <span class="column-sorter"></span></th>                               
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                                <?php foreach ($tipoeventos as $tipo): ?>                        
                                    <tr>                                         
                                        <td><?php echo $i; $i++; ?></td>
                                        <td><?php echo $tipo['Tipoevento']['nombre']; ?></td>
                                        <td><?php echo $tipo['Tipoevento']['descripcion']; ?></td>
                                        <td>
                                            <?php echo $this->Html->image("iconos/edit.png", array("title" => "Editar", 'url' => array('action' => 'edit', $tipo['Tipoevento']['id']))); ?>
                                            <?php echo $this->Html->link($this->Html->image("iconos/elim.png", array("alt" => 'Eliminar', 'title' => 'Eliminar Usuario')), array('action' => 'delete', $tipo['Tipoevento']['id']), array('escape' => false), ("Desea eliminar realmente??"));?>
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