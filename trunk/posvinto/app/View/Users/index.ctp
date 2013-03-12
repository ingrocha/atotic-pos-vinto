<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/usuarios'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3><i class="aweso-icon-table opaci35"></i> Usuarios</h3>
                <p>Despliega la lista de todas las categorias</p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Categorias<span></span>
                            </caption>
                            <thead>
                                <tr>                                  
                                    <th scope="col">Nombre <span class="column-sorter"></span></th>
                                    <th scope="col">Usuario <span class="column-sorter"></span></th>                               
                                    <th scope="col">ID Moso <span class="column-sorter"></span></th>                               
                                    <th scope="col">Perfil <span class="column-sorter"></span></th>                               
                                    <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                                </tr>
                            </thead>
                            <?php $i = 1; ?>
                            <tbody>
                                <?php foreach ($users as $user): ?>                        
                                    <tr>                                         
                                        <td><?php echo $user['User']['nombre']; ?></td>
                                        <td><?php echo $user['User']['username']; ?></td>
                                        <td><?php echo $user['User']['codigo']; ?></td>                                   
                                        <td><?php echo $user['User']['role']; ?></td>
                                        <td>
                                            <?php echo $this->Html->image("iconos/edit.png", array("title" => "Editar", 'url' => array('action' => 'edit', $user['User']['id']))); ?>
                                            <?php echo $this->Html->image("iconos/pass.png", array("title" => "Cambiar password", 'url' => array('action' => 'cambiopass', $user['User']['id']))); ?>
                                            <?php echo $this->Html->image("iconos/elim.png", array("title" => "Eliminar", 'url' => array('action' => 'delete', $user['User']['id']))); ?>
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