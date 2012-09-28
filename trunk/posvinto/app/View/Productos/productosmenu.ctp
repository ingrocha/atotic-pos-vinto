<?php //debug($prod);   ?>
<!-- Container -->
<div id="container">
    <div class="shell">		
        <!-- Small Nav -->
        <div class="small-nav">
            Listado de productos
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
                        <h2 class="left">PRODUCTOS EN MENU</h2>                        
                        <div class="right">                        
                        </div>    
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">   
                        <?php echo $this->element('tablagrid'); ?>                 
                        <table id="grid" style="width: 100%;"> 
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>                         
                                    <th>Acciones</th>                                               
                                </tr>   
                            </thead>
                            <tbody> 
                                <?php //$i=1; ?>
                                <?php foreach ($prod as $p): ?>
                                    <?php $id = $p['Producto']['id']; ?> 
                                <div id="cuadro_<?php echo $id; ?>" title="Insumo al Menu">
                                </div> 
                                <tr>
                                    <td>                       
                                        <?php echo $p['Producto']['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $p['Categoria']['nombre']; ?>
                                    </td>       
                                    <td>
                                        <?php if ($p['Producto']['estado']): ?>        
                                            <?php //echo $this->Html->image('muestra.png'); ?>
                                            <?php
                                            /* echo $this->Ajax->link(
                                              $this->Html->image('muestra.png'),
                                              array( 'controller' => 'ajax', 'action' => 'view', $id),
                                              array( 'update' => 'post',  'escape' => false)
                                              ); */
                                            //echo $this->Html->link()
                                            ?>
                                            <?php
                                            echo $this->Html->image("show.png", array("title" => "Ocultar",
                                                'url' => array('action' => 'desprodmenu', $id)));
                                            ?>
                                        <?php else: ?>
                                            <?php
                                            echo $this->Html->image("hide.png", array("title" => "Mostrar",
                                                'url' => array('action' => 'habprodmenu', $id)));
                                            ?>            
                                            <?php //echo $this->Html->image('elim.png'); ?>
                                        <?php endif; ?>   
                                        <?php
                                        echo $this->Html->image("receta.png", array("title" =>
                                            "Receta", 'url' => array('action' => 'receta', $id)));
                                        ?> 
    <?php
    echo $this->Html->image("edit.png", array("title" => "Editar",
        'url' => array('action' => 'editaprodmenu', $id)));
    ?> 
                                    </td>                    
                                </tr>
    <?php //$i++;   ?>
                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
<?php //fin de mostrar los datos   ?>
            </div>						
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
<?php echo $this->element("menucarta"); ?>
        </div>
    </div>
    <!-- End Box -->
</div>
<!-- End Sidebar -->

<div class="cl">&nbsp;</div>			
</div>
<!-- Main -->