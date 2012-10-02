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
                        <h2 class="left">LISTADO DE PRODUCTOS</h2>                        
                        <div class="right">                        
                            <?php echo $this->Form->create(null, array('action' =>
                                'buscar'));
                            ?>
                            <label>Filtrar</label>
                            <!--<input type="text" class="field small-field" />
                            <input type="submit" class="button" value="buscar" />-->
                            <?php echo $this->Form->text('nombre'); ?>
                            <?php
                            $options = array('label' => 'Buscar', 'class' => 'button');
                            ?>
                            <?php
                            echo $this->Ajax->submit('Buscar', array('url' => array('controller' =>
                                    'insumos', 'action' => 'buscar'), 'update' => 'muestra'
                            /* 'condition' => '$("#PostEmail1").val() == $("#PostName1").val()' */ ));
                            //echo $this->Form->end($options);
                            ?>
                        </div>    
                    </div>
                    <!-- End Box Head -->
                    <div class="table">
                        <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Productos Id</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($productos as $c): ?>
                                <tr>
                                    <td>
                                        <?php $id = $c['Producto']['id']; ?>

                                        <?php echo $c['Producto']['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $c['Categoria']['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $c['Producto']['precio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $c['Producto']['descripcion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link('MODIFICAR', array('action' => 'modificar', $id)); ?>
                                        <?php echo $this->Html->link('ANADIR MODIFICAR PORCIONES', array('action' => 'modificarporciones', $id)); ?>
                                        <?php echo $this->Html->link('ELIMINAR', array('action' => 'eliminar', $id), array('class' => 'inner_a'), ('Desea eliminar realmente?')); ?>           
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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
                    <?php echo $this->Html->link('<span>Nuevo Producto</span>', array('controller' => 'productos', 'action' => 'nuevo'), array('class' => 'add-button', 'escape' => false)); ?>
                    <div class="cl">&nbsp;</div>
                </div>
            </div>
            <!-- End Box -->
        </div>
        <!-- End Sidebar -->
        <div class="cl">&nbsp;</div>
    </div>
</div>