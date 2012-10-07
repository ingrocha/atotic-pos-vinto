<?php //debug($insumos);   ?>
<!-- Container -->
<div id="container">
    <div class="shell">
        <!-- Small Nav -->             
        <!-- End Small Nav -->
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>
            <!-- Content -->
            <div id="content">
                <!-- Box -->
                <div class="boxa">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">Insumos</h2>
                        <div class="right">
                        </div>
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">
                        <?php echo $this->element('tablagrid'); ?>
                        <?php echo $this->Form->create('Insumos'); ?>
                        <table id="grid" style="width: 740px;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>                                    
                                    <th>Cantidad</th>
                                    <th>Almacen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($insumos as $i): ?>
                                    <tr>
                                        <td>
                                            <?php $id = $i['Insumo']['id']; ?>
                                            <?php echo $i['Insumo']['nombre']; ?>
                                        </td>
                                        <td>                                            
                                            <?php echo $this->Form->text('cantidad', array('size' => 5)); ?>
                                            <?php echo $this->Form->hidden('id', array('value' => $id)); ?>
                                        </td>  
                                        <td>
                                            <?php //$id = $i['Insumo']['id']; ?>
                                            <?php echo $i['Insumo']['total']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>                       
                        <?php echo $this->Form->end('Registrar Salidas'); ?>                                                  
                    </div>
                    <!-- Table -->
                </div>
                <!-- End Box -->
            </div>
            <!-- End Content -->
            <!-- Sidebar -->
            <!-- Sidebar -->
            <?php echo $this->element('menuusuarios') ?>
            <!-- End Sidebar -->
            <!-- End Sidebar -->
            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
    </div>
