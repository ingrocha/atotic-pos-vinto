<!-- Container -->
<div id="container">
    <div class="shell">	 
        <!-- Small Nav -->
        <div class="small-nav">
            Lista de Insumos en almacen
        </div>
        <!-- End Small Nav -->		
        <br />
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>			
            <!-- Content -->
            <div id="content">				
                <!-- Box -->
                <div class="boxa">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">LISTADO DE INSUMOS ALMACEN</h2>                        
                        <div class="right">                        
                        </div>    
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <?php //debug($insumos); ?>
                    <div class="table">  
                        <?php echo $this->element('tablagrid'); ?>                                    
                        <table id="grid" style="width: 100%"> 
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>  
                                    <th>Existencias</th> 
                                    <!--<th>Observaciones</th>-->
                                    <th style="width: 105px;">Acciones</th>     
                                </tr>    
                            </thead>
                            <tbody>
                                <?php foreach ($insumos as $i): ?>
                                    <?php $id = $i['Almacen']['insumo_id'] ?>
                                <div id="cuadro_<?php echo $id ?>" title="Almacen">
                                </div>
                                <div id="cuadro2_<?php echo $id ?>" title="Almacen">
                                </div>
                                <tr>
                                    <td>
                                        <?php echo $i['Insumo']['nombre'] ?>
                                    </td>                                    
                                    <td>
                                        <?php echo $i['Insumo']['Tipo']['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $i['Almacen']['total']; ?>
                                    </td>        

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
                    </div>
                </div>
                <?php //fin de mostrar los datos ?>
            </div>

        </div>
        <!-- Table -->

    </div>
    <!-- End Box -->								
</div>
<!-- End Content -->			
<!-- Sidebar -->
<?php echo $this->element('menualmacenes') ?>
<!-- End Sidebar -->

<div class="cl">&nbsp;</div>			
</div>
<!-- Main -->