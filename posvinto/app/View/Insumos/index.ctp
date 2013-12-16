<?php //uses('model/connection_manager');  ?>
<?php
App::import('Model', 'Almacen');
$cantidadAlmacen = new Almacen();
//debug($montos->find('all', array('recursive'=>-1, 'limit'=>3))); 
?>
<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
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
                                    <th scope="col">Nombre <span class="column-sorter"></span></th>
                                    <th scope="col">Categoria <span class="column-sorter"></span></th>
                                    <th scope="col">Descripci&oacute;n <span class="column-sorter"></span></th>
                                    <th scope="col">Stock almacen<span class="column-sorter"></span></th>
                                    <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; ?>
                                <?php foreach ($insumos as $i): ?>                        
                                    <?php $idInsumo = $i['Insumo']['id'] ?>                        
                                    <tr>                                    
                                        <td>
                                            <?php echo $idInsumo; ?>
                                            <div id="cuadro_<?php echo $idInsumo; ?>"></div>                         
                                            <div id="cuadro2_<?php echo $idInsumo; ?>"></div>
                                            <div id="ajax-modal_<?php echo $idInsumo; ?>" class="modal hide fade" tabindex="-1"></div>
                                        </td>
                                        <td><?php echo $i['Insumo']['nombre']; ?></td>
                                        <td> <?php echo $i['Tipo']['nombre']; ?></td>  
                                        <td><?php echo $i['Insumo']['observaciones'] ?></td>                              
                                        <td> 
                                            <?php
                                            $enAlmacen = $cantidadAlmacen->find('first', array(
                                                'recursive' => -1,
                                                'fields' => array('MAX(id) as cod'),
                                                'conditions' => array('Almacen.insumo_id' => $idInsumo)
                                                    ));
                                            $idAlmacenInsumo = $enAlmacen['0']['cod'];
                                            $total = $cantidadAlmacen->find('first', array(
                                                'recursive' => -1,
                                                'conditions' => array('Almacen.id' => $idAlmacenInsumo)
                                                    ));
                                            //debug($total);
                                            echo $total['Almacen']['total'];
                                            //debug($enAlmacen); 
                                            //echo $enAlmacen['0']['cod'];
                                            //echo $i['Tipo']['nombre']; 
                                            ?>
                                        </td>                                
                                        <td>
                                            <?php
                                            echo $this->Html->image("edit.png", array(
                                                "title" => "Editar",
                                                'url' => array('action' => 'modificar', $idInsumo)
                                            ));
                                            ?>

                                            <div id="ajaxModal_<?php echo $idInsumo; ?>" style="float: left;">
                                                <?php
                                                echo $this->Html->image("in.png", array("title" => "Ingreso Almacen"));
                                                ?>
                                            </div>

                                            <div id="dialog2_<?php echo $idInsumo; ?>" style="float: left;">
                                                <?php
                                                echo $this->Html->image("out.png", array(
                                                    "title" => "Salida Almacen"
                                                ));
                                                ?>            
                                            </div>  

                                            <?php //echo $this->Html->link($this->Html->image("elim.png"), array('controller' => 'insumos', 'action' => 'eliminar', $idInsumo), array('escape' => false), "Esta seguro de eliminar el insumo?");?>
                                            
                                            <?php echo $this->Html->image("elim.png", array("title" => "Eliminar Insumo",'url' => array('action' => 'deshabilitar', $idInsumo)));?>            
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    
                                                    var $modal = $('#ajax-modal_<?php echo $idInsumo; ?>');
                                                    $('#ajaxModal_<?php echo $idInsumo; ?>').on('click', function () {
                                                        // create the backdrop and wait for next modal to be triggered
                                                        GlobalModalManager.loading();
                                            	
                                                        setTimeout(function () {
                                                            $modal.load("insumos/ingresoalmacen/<?php echo $idInsumo; ?>", '', function () {
                                                                $modal.modal();
                                                            });
                                                        }, 500);
                                                    });
                                                                                                                                                    
                                                    var $modal2 = $('#ajax-modal_<?php echo $idInsumo; ?>');
                                                    $('#dialog2_<?php echo $idInsumo; ?>').on('click', function () {
                                                        // create the backdrop and wait for next modal to be triggered
                                                        GlobalModalManager.loading();
                                                        setTimeout(function () {
                                                            $modal2.load("insumos/salidalmacen/<?php echo $idInsumo; ?>", '', function () {
                                                                $modal2.modal();
                                                            });
                                                        }, 500);
                                                    });
                                                
                                                    /*var dialogOpts = {
                                                        modal: true
                                                    };
                                                    $("#dialog_<?php //echo $idInsumo; ?>").click(function(){
                                                        $("#cuadro_<?php //echo $idInsumo; ?>").dialog(dialogOpts).load("insumos/ingresoalmacen/<?php //echo $idInsumo; ?>");
                                                        console.log('Hizo click');
                                                    });   
                                
                                                    $("#dialog2_<?php //echo $idInsumo; ?>").click(function(){
                                                        $("#cuadro2_<?php //echo $idInsumo; ?>").dialog(dialogOpts).load("insumos/salidalmacen/<?php //echo $idInsumo; ?>");
                                                        //alert("click");
                                                    });*/  
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