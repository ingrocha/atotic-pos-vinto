<?php //debug($bodega);exit;  ?>
<div id="main-content" class="main-content container-fluid">
    <?php echo $this->element('sidebar/bodega'); ?>
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3>
                    <i class="aweso-icon-table opaci35">
                    </i>
                    Insumos en bodega
                    <small>
                        listado
                    </small>
                </h3>
                <p>
                    Despliega la lista de todos los insumos y sus existencias en bodega
                </p>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!--contenedor de la tabla-->
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
                            <caption>
                                Insumos
                                <span>
                                </span>
                            </caption>
                            <thead>
                            <th scope="col">
                                ID
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Nombre insumo
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Sotck bodega
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Area
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                               Tipo
                               <span class="column-sorter">
                                </span>
                            </th>
                            

                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                <?php foreach ($bodega as $b): ?>
                                    <?php $id = $b['Insumo']['id']; ?>
                                    <tr>
                                        <td>                                             
                                            <?php echo $i=1;$i++; ?>
                                        </td> 
                                        <td>           
                                            <?php echo $b['Insumo']['nombre']; ?>
                                        </td>
                                       
                                        <td>
                                            <?php echo $b['Bodega']['total']; ?>
                                        </td>    
                                         <td>
                                            <?php 
                                            if($b['Bodega']['lugare_id'] == null){
                                                echo 'PARA LA VENTA';
                                            }else{
                                                echo strtoupper($b['Lugare']['nombre']);    
                                            }
                                            
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $b['Insumo']['tipo']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
