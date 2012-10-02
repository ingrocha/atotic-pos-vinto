<?php //comienza aqui  ?>
<div id="container">
    <div class="shell">
        <!-- Small Nav -->
        <div class="small-nav">
            Listado de productos
        </div>
        <!-- End Small Nav -->		
        <br />
        <div id="main">
            <div class="cl">&nbsp;</div>
            <div id="content">
                <div class="boxa">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">LISTADO DE CATRGORIAS EN ALMACEN</h2>                        
                        <div class="right">                                               
                        </div>    
                    </div>
                    <!-- End Box Head -->
                    <div class="table">
                        <?php echo $this->element('tablagrid'); ?> 
                        <table id="grid" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>     
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cat as $c): ?>
                                    <tr>
                                        <td>
                                            <?php $id = $c['Categoria']['id']; ?>

                                            <?php echo $c['Categoria']['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $c['Categoria']['tipo']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $this->Html->image("edit.png", array(
                                                "title" => "Editar",
                                                'url' => array('action' => 'editarcategoria', $id)
                                            ));
                                            ?>
                                            <?php if ($c['Categoria']['estado'] == 1): ?>                                                            
                                                <?php
                                                echo $this->Html->image("show.png", array(
                                                    "title" => "Ocultar",
                                                    'url' => array('action' => 'descatmenu', $id)
                                                ));
                                                ?>                 
                                            <?php else: ?>
                                                <?php
                                                echo $this->Html->image("hide.png", array(
                                                    "title" => "Mostrar",
                                                    'url' => array('action' => 'habcatmenu', $id)
                                                ));
                                                ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
                    <?php echo $this->element("menucarta"); ?>
                    <div class="cl">&nbsp;</div>
                </div>
            </div>
            <!-- End Box -->
        </div>
        <!-- End Sidebar -->
        <div class="cl">&nbsp;</div>
    </div>
</div>
<?php
//fin ?>