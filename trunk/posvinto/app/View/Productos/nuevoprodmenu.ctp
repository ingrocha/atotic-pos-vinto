<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar -->
    <?php echo $this->element('sidebar/nuevoprod'); ?>
    <!-- // fin sidebar -->
    <!--contenido-->
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3>
                    <i class="aweso-icon-table opaci35">
                    </i>
                    Productos en Almacen para Colocar en Menu
                    <small>
                        Listado
                    </small>
                </h3>
                <p>
                    Despliega la lista de todos los productos en Almacen registrados en el sistema
                </p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!--contenedor de la tabla-->
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Productos en Almacen
                                <span>
                                </span>
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Nombre
                                        <span class="column-sorter">
                                        </span>
                                    </th>
                                    <th scope="col">
                                        Categoria
                                        <span class="column-sorter">
                                        </span>
                                    </th>
                                    <th scope="col">
                                        Acciones
                                        <span class="column-sorter">
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($insumos as $i): ?>
                                    <?php $id = $i['Insumo']['id']; ?>
                                    <tr>
                                        <td>
                                            <?php echo $i['Insumo']['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $i['Tipo']['nombre']; ?>
                                        </td>
                                        <td>
                                            <div id="dialog_<?php echo $id; ?>" style="float: left;">
                                                <div id="ajax-modal_<?php echo $id; ?>" class="modal hide fade" tabindex="-1"></div>
                                                <?php
                                                echo $this->Html->image("menu.png", array("title" => "Colocar en Menu"));
                                                ?>
                                            </div>
                                            <script type="text/javascript">
                                                /*var dialogOpts = {
                                                    modal: true
                                                };
                                                jQuery("#dialog_<?php echo $id; ?>").click(function(){
                                                    jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("ajaxprodmenu/<?php echo $id; ?>");                //alert("click");
                                                });*/ 
                                                
                                                var $modal = $('#ajax-modal_<?php echo $id; ?>');
                                                $('#dialog_<?php echo $id; ?>').on('click', function () {
                                                    // create the backdrop and wait for next modal to be triggered
                                                    GlobalModalManager.loading();
                                                	
                                                    setTimeout(function () {
                                                        $modal.load("<?php echo $this->Html->url(array('action'=>'ajaxprodmenu', $id)); ?>", '', function () {
                                                            $modal.modal();
                                                        });
                                                    }, 500);
                                                });                                            
                                            </script> 
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!--fin contenedor de la tabla-->
                </div>
                <!-- widget identificacion de los iconos-->

                <!--fin widget footer-->
            </div>
        </section>
    </div>
    <!--fin contenido-->
</div>