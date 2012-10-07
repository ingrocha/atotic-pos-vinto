<?php //comienza aqui    ?>
<!-- Container -->
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            <span></span>
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
                        <h2 class="left">PRODUCTOS EN ALMACEN PARA COLOCAR EN MENU</h2>						
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">
                        <?php echo $this->element('tablagrid'); ?>  
                        <table id="grid" style="width: 740px;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>    
                                    <th>Acciones</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($insumos as $i): ?>
                                    <?php $id = $i['Insumo']['id']; ?> 
                                <div id="cuadro_<?php echo $id; ?>" title="Insumo al Menu">
                                </div> 
                                <tr>
                                    <td>
                                        <?php //$id = $c['Cliente']['id']; ?>
                                        <?php echo $i['Insumo']['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $i['Tipo']['nombre']; ?>
                                    </td>                                                                                 
                                    <td>
                                        <div id="dialog_<?php echo $id; ?>" style="float: left;">
                                            <?php
                                            echo $this->Html->image("menu.png", array("title" => "Colocar en Menu"));
                                            ?>
                                        </div>
                                        <script type="text/javascript">
                                            var dialogOpts = {
                                                modal: true
                                            };
                                            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                                                jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("ajaxprodmenu/<?php echo $id; ?>");                //alert("click");
                                            }); 
                                        </script> 
                                        <?php //echo $this->Html->link('Modificar', array('action' => 'modificar', $id)); ?>
                                        <?php //echo $this->Html->link('Dar de Baja', array('action' => 'baja', $id)); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>												
                        <!-- Pagging -->

                        <!-- End Pagging -->						
                    </div>
                    <!-- Table -->					
                </div>
                <!-- End Box -->								
            </div>
            <!-- End Content -->
            <div id="sidebar">				
                <!-- Box -->
                <div class="boxa">					
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Administracion</h2>
                    </div>
                    <!-- End Box Head-->

                    <div class="box-content">                    																		
                        <?php echo $this->element("menucarta"); ?>
                    </div>
                </div>
                <!-- End Box -->
            </div>
            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
    </div>        