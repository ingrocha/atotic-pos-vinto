<?php //debug($platoreceta);      ?>
<!-- Container -->
<div id="container">
    <div class="shell">		
        <!-- Small Nav -->
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
                        <h2 class="left">Receta</h2>
                        <div class="right">
                        </div>
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <?php if ($rec): ?>
                        <div class="table">
                            <h1  class="titulos">Receta del Plato: <?php echo $platoreceta['Producto']['nombre']; ?></h1>                    
                            <table>
                                <tr>
                                    <th>Insumo</th>
                                    <th>Cantidad</th>
                                    <th>Acciones</th>                 
                                </tr>
                                <?php foreach ($rec as $r): ?>
                                    <tr>
                                        <td>
                                            <?php $id_porcione = $r['Porcione']['id']; ?> 
                                            <?php $id_producto = $r['Porcione']['producto_id']; ?>           
                                            <?php echo $r['Insumo']['nombre']; ?>
                                        </td>
                                    <div id="cuadro_<?php echo $id_porcione; ?>" title="Almacen">
                                    </div>
                                    <td>
                                        <?php echo $r['Porcione']['cantidad']; ?>
                                    </td>                              
                                    <td>
                                        <div id="dialog_<?php echo $id_porcione; ?>" style="float: left;">
                                            <?php
                                            echo $this->Html->image("edit.png", array("title" => "Receta"));
                                            ?>
                                        </div>
                                        &nbsp;
                                        <?php
                                        echo $this->Html->image("elim.png", array("title" =>
                                            "Eliminar", 'url' => array(
                                                'action' => 'elimporcionplato',
                                                $id_porcione,
                                                $id_producto)));
                                        ?> 
                                        <script type="text/javascript">
                                            var dialogOpts = {
                                                modal: true
                                            };
                                            jQuery("#dialog_<?php echo $id_porcione; ?>").click(function(){
                                                jQuery("#cuadro_<?php echo $id_porcione; ?>").dialog(dialogOpts).load("../ajaxmodificareceta/<?php echo $id_porcione; ?>");
                                           
                                            });                                                                 
                                        </script> 
                                    </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else: ?>
                            <h1 class="titulos">Receta del Plato: <?php echo $platoreceta['Producto']['nombre']; ?></h1>  
                            <h3>No se haregistrado insumos</h3>
                        <?php endif; ?>
                    </div>
                    <!-- Table -->					
                </div>
                <!-- End Box -->								
            </div>
            <!-- End Content -->			
            <!-- Sidebar -->
            <div id="sidebar">				
                <!-- Box -->
                <div class="boxa">					
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Administracion</h2>
                    </div>
                    <!-- End Box Head-->					
                    <div class="box-content">                    
                        <?php
                        echo $this->Html->link("<span>Nuevo Insumo a Receta</span>", array('action' => 'nuevaporcion', $id_plato), array('class' => "add-button",
                            'escape' => false));
                        ?>
                        <div class="cl">&nbsp;</div> 
                        <?php echo $this->element("menucarta"); ?>
                    </div>
                </div>
                <!-- End Box -->
            </div>
            <!-- End Sidebar -->

            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
    </div>