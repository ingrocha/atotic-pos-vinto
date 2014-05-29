<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reservas'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Usuarios</h3>
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
                                    <th scope="col">Cliente <span class="column-sorter"></span></th>
                                    <th scope="col">Tipo de Evento <span class="column-sorter"></span></th>                               
                                    <th scope="col">Cantidad de Personas <span class="column-sorter"></span></th>                               
                                    <th scope="col">Fecha <span class="column-sorter"></span></th>  
                                    <th scope="col">Observaciones <span class="column-sorter"></span></th>                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                                <?php foreach ($reservas as $res): ?>                        
                                    <tr>                                         
                                        <td><?php echo $i; $i++; ?></td>
                                        <td><?php echo $res['Cliente']['nombre']; ?></td>
                                        <td><?php echo $res['Tipoevento']['nombre']; ?></td>
                                        <td><?php echo $res['Reserva']['cantidad_personas']; ?></td>                                   
                                        <td><?php echo $res['Reserva']['fecha']; ?></td>
                                        <td><?php echo $res['Reserva']['observaciones']; ?></td>
                                        
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
<div class="content-gird">
                    <div style="float: left;">
                        <input type="button" class="button" value="Atras" onclick="javascript:history.back();" /> 
                    </div>
                <div class="clear"> </div>
            </div>