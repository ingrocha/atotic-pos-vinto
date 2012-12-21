<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
<!-- // fin sidebar -->

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
                                <th scope="col">ID <span class="column-sorter"></span></th>                          
                                <th scope="col">Nombre <span class="column-sorter"></span></th>
                                <th scope="col">Categoria <span class="column-sorter"></span></th>
                                <th scope="col">Categoria <span class="column-sorter"></span></th>
                                <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($insumos as $i): ?>
                        <?php $id = $i['Almacen']['insumo_id'] ?>                        
                            <tr>                               
                                <td><?php echo $id; ?></td>
                                <td><?php echo $i['Insumo']['nombre']; ?></td>
                                <td> <?php echo $i['Insumo']['Tipo']['nombre']; ?></td>
                                 <td> <?php echo $i['Insumo']['Tipo']['nombre']; ?></td>                                
                                <td>
                                <?php
                                        echo $this->Html->image("edit.png", array(
                                            "title" => "Editar",
                                            'url' => array('action' => 'modificar', $id)
                                        ));
                                        ?>

                                        <div id="dialog_<?php echo $id; ?>" style="float: left;">
                                            <?php
                                            echo $this->Html->image("in.png", array("title" => "Ingreso Almacen"));
                                            ?>
                                        </div>

                                        <div id="dialog2_<?php echo $id; ?>" style="float: left;">
                                            <?php
                                            echo $this->Html->image("out.png", array(
                                                "title" => "Salida Almacen"
                                            ));
                                            ?>            
                                        </div>  

                                        <?php
                                        echo $this->Html->image("elim.png", array(
                                            "title" => "Eliminar Insumo",
                                            'url' => array('action' => 'deshabilitar', $id)
                                        ));
                                        ?>            
                                        <script type="text/javascript">
                                            var dialogOpts = {
                                                modal: true
                                            };
                                            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                                                jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("insumos/ingresoalmacen/<?php echo $id; ?>");
                               
                                            });   
                            
                                            jQuery("#dialog2_<?php echo $id; ?>").click(function(){
                                                jQuery("#cuadro2_<?php echo $id; ?>").dialog(dialogOpts).load("insumos/salidalmacen/<?php echo $id; ?>");
                                                //alert("click");
                                            });  
                                        </script>        
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