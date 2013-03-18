
<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/configuraciones'); ?>               
<!-- // fin sidebar -->
<!-- // contenido pricipal -->                                 
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i> Parametros para la Factura</h3>           
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-simple widget-table">
                    <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                        <caption>
                            Facturas<span></span>
                        </caption>
                        <thead>
                            <tr>  
                                <th scope="col">Nro <span class="column-sorter"></span></th>                          
                                <th scope="col">Nit <span class="column-sorter"></span></th>                                
                                <th scope="col">Nro. de Autorizacion <span class="column-sorter"></span></th>                             
                                <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                            </tr>
                        </thead>
                        <?php $i=1;?>
                        <tbody>
                        <?php foreach ($pfacturas as $pfact): ?>                        
                            <tr> 
                                <td><?php echo $i; $i++;?></td>                                   
                                <td><?php echo $pfact['Parametrosfactura']['nit']; ?></td>                                 
                                <td><?php echo $pfact['Parametrosfactura']['numero_autorizacion'];?></td>                                                                     
                                <td>
                                <?php echo $this->Html->image("edit.png", array("title" => "Editar la Factura",'url' => array('action' => 'editar', $pfact['Parametrosfactura']['id'])));?>
                                <?php echo $this->Html->link($this->Html->image("elim.png"),array('action' => 'eliminar', $pfact['Parametrosfactura']['id']),array('escape' => false),"Esta seguro de eliminar este Producto...??");?>
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