<!-- Container -->
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            <span>Lista de Clientes</span>
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
                        <h2 class="left">LISTADO DE CLIENTES</h2>						
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">
                        <?php echo $this->element('tablagrid'); ?>  
                        <table id="grid" style="width: 740px;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clientes as $c): ?>
                                    <tr>
                                        <td>
                                            <?php $id = $c['Cliente']['id']; ?>

                                            <?php echo $c['Cliente']['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $c['Cliente']['direccion']; ?>
                                        </td>
                                        <td>
                                            <?php echo $c['Cliente']['telefono']; ?>
                                        </td>
                                        <td>
                                            <?php if ($c['Cliente']['estado'] == 1): ?>
                                                Alta
                                            <?php else: ?>
                                                Baja
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $this->Html->image("edit.png", array(
                                                "title" => "Editar Cliente",
                                                'url' => array('action' => 'modificar', $id)
                                            ));
                                            ?> 
                                            <?php
                                            echo $this->Html->image("elim.png", array(
                                                "title" => "Dar de baja",
                                                'url' => array('action' => 'baja', $id)
                                            ));
                                            ?> 
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

            <?php echo $this->element('menuclientes') ?>

            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
    </div>

