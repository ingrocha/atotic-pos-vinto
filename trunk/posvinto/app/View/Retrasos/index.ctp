<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/usuarios'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Retrasos</h3>
                <p>Despliega la lista de todos los Retrasos</p>
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
                                    <th scope="col">Horas <span class="column-sorter"></span></th>                               
                                    <th scope="col">Minutos <span class="column-sorter"></span></th>                               
                                    <th scope="col">Descuento <span class="column-sorter"></span></th>                               
                                    <th scope="col">Fecha <span class="column-sorter"></span></th>                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                                <?php foreach ($retrasos as $retra): ?>                        
                                    <tr>                                         
                                        <td><?php echo $i; $i++; ?></td>
                                        <td><?php echo $retra['User']['nombre']; ?></td>
                                        <td><?php echo $retra['Retraso']['horas']; ?></td>
                                        <td><?php echo $retra['Retraso']['minutos']; ?></td>                                   
                                        <td><?php echo $retra['Retraso']['descuento']; ?></td>
                                        <td><?php echo $retra['Retraso']['fecha']; ?></td>
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