<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reservas'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Listado de las Reservas</h3>
                <p>Despliega la lista de todas las Reservas</p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Reserva<span></span>
                            </caption>
                            <thead>
                                <tr>  
                                    <th scope="col">Nro. <span class="column-sorter"></span></th>                                
                                    <th scope="col">Cliente <span class="column-sorter"></span></th>
                                    <th scope="col">Evento <span class="column-sorter"></span></th>                               
                                    <th scope="col">Personas <span class="column-sorter"></span></th>                               
                                    <th scope="col">Fecha <span class="column-sorter"></span></th>                               
                                    <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                                <?php foreach ($reservas as $reser): ?>                        
                                    <tr>                                         
                                        <td><?php echo $i; $i++; ?></td>
                                        <td><?php echo $reser['Cliente']['nombre']; ?></td>
                                        <td><?php echo $reser['Tipoevento']['nombre']; ?></td>
                                        <td><?php echo $reser['Reserva']['cantidad_personas']; ?></td>                                   
                                        <td><?php $fecha = $r['Reserva']['fecha'];
                                            echo $this->Utilidades->fechahoraes($fecha); ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $this->Html->image("edit.png", array("title" => "Salida Almacen", 'url' => array('action' => 'edit', $id)));
                                            ?>
                                            <?php
                                            echo $this->Html->image("elim.png", array("title" => "Salida Almacen", 'url' => array('action' => 'delete', $id)));
                                            ?>
                                            <?php
                                            echo $this->Html->image("recibo.png", array("title" => "Ver Detalle", 'url' => array('action' => 'ver', $id)));
                                            ?>
                                            
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