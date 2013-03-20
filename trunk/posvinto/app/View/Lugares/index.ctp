
<div id="main-content" class="main-content container-fluid">
<!-- // sidebar --> 
    <?php echo $this->element('sidebar/lugares'); ?>               
<!-- // fin sidebar -->
<!-- // contenido pricipal -->                                 
<div id="page-content" class="page-content">
    <section>
        <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i> Lugares</h3>
            <p>Despliega la lista de todos los lugares</p>
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
                                <th scope="col">Nro <span class="column-sorter"></span></th>                          
                                <th scope="col">Nombre <span class="column-sorter"></span></th>
                                <th scope="col">Descripcion <span class="column-sorter"></span></th>                                
                                <th scope="col">Acciones <span class="column-sorter"></span></th>                                
                            </tr>
                        </thead>
                        <?php $i=1;?>
                        <tbody>
                        <?php foreach ($lugares as $luga): ?>                        
                            <tr> 
                                <td><?php echo $i; $i++;?></td>                                   
                                <td><?php echo $luga['Lugare']['nombre']; ?></td>
                                <td> <?php echo $luga['Lugare']['descripcion']; ?></td>
                                <td>
                                <?php echo $this->Html->image("edit.png", array("title" => "Editar la Categoria",'url' => array('action' => 'editar', $luga['Lugare']['id'])));?>
                                <?php echo $this->Html->link($this->Html->image("elim.png"),array('controller'=>'lugares','action' => 'eliminar', $luga['Lugare']['id']),array('escape' => false),"Esta seguro de eliminar este Lugar?");?>
                                <?php //echo $this->Html->image("elim.png", array("title" => "Elimina la Categoria",'url' => array('action' => 'eliminar', $luga['Lugare']['id']),array('escape' => false),("Desea eliminar realmente??")));?>
                                <?php //echo $this->Html->link('EDITAR',array('action'=>'editar',$luga['Lugare']['id'])); ?>
                                <?php //echo $this->Html->link('ELIMINAR', array('action' => 'eliminar', $luga['Lugare']['id']), array('confirm'=>'seguro de eliminar...')); ?>
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
 	
<!-- Sidebar -->
<?php //echo $this->element('menualmacenes') ?>
<!-- End Sidebar -->