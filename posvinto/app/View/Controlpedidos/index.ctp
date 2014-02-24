<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/pedidos'); ?>                
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h4><i class="aweso-icon-table opaci35"></i> Insumos <small>listado</small></h4>
                <p>Despliega la lista de todos los insumos</p>
            </div>
            <div class="row-fluid">

                <div class="span12">
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTCF" class="table table-striped table-content table-condensed boo-table table-hover bg-blue-light">
                            <caption>
                                Listado de pedidos de hoy  <span>fecha <?php echo date('d/m/Y')?></span>
                            </caption>
                            <thead>
                                <tr id="HeadersRow0">
                                    <th scope="col"><input type="checkbox" class="checkbox check-all" data-tableid="exampleDTCF" value="ON" name="check-all"></th>
                                    <th scope="col">Mesa <span class="column-sorter"></span></th>                          
                                    <th scope="col">Mozo <span class="column-sorter"></span></th>
                                    <th scope="col">Hora <span class="column-sorter"></span></th>
                                    <th scope="col">Estado <span class="column-sorter"></span></th>                                    
                                    <th scope="col">Total <span class="column-sorter"></span></th>                                                                     
                                    <th scope="col"><span class="column-sorter"></span></th>                                                                        
                                </tr>

                                <tr id="filter-row" class="filter">
                                    <th></th> 
                                    <th>Mesa</th>                          
                                    <th>Mozo</th>
                                    <th>Total</th> 
                                    <th>Hora</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>                               
                                </tr>                                                               
                            </thead>
                            <tfoot>
                                <tr id="FootersRow0" class="total">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Suma Total</th>
                                    <th></th>
                                    <th class="text-right"></th>
                                </tr>
                            </tfoot>
                            <tbody>                                                                
                                <?php $i = 0; ?>
                                <?php foreach ($data as $d): ?>                                    
                                <?php $id = $d['Pedido']['id']; ?>
                                                        
                                <tr id="DataRow<?php echo $i; ?>">							   	 	
                                    <td><input type="checkbox" class="checkbox check-row" value="0" name="checkRow"/></td>
                                    <td><h4 class="statistic-values"><?php echo $d['Pedido']['mesa']; ?></h4></td>
                                    <td>
                                    <?php if($d['Pedido']['estado'] != 4 || $d['Pedido']['estado'] != 3): ?>
                                    <div id="modal_<?php echo $id; ?>" class="modal hide fade" tabindex="-1" data-width="760"></div>
                                   
                                    <div id="mesero_<?php echo $id; ?>" style="float: left;">
                                    <h4 class="statistic-values">
                                    <?php
                                            echo $d['User']['nombre'];
                                            ?> 
                                            </h4>           
                                    </div>  
                                    <script type="text/javascript">
                                            $(document).ready(function() {
                                                var $modal1 = $('#modal_<?php echo $id; ?>');
                                                
                                                $('#mesero_<?php echo $id; ?>').on('click', function() {
                                                        // create the backdrop and wait for next modal to be triggered
                                                        GlobalModalManager.loading();

                                                        setTimeout(function() {
                                                            $modal1.load("<?php echo $this->Html->url(array('action' => 'ajaxmeseros', $id)) ?>", '', function() {
                                                                $modal1.modal();
                                                            });
                                                        }, 100);
                                                    });
                                                
                                                    
                                            });
                                            </script>
                                        <?php else: ?>
                                        <h4 class="statistic-values"><?php echo $d['User']['nombre'] ?></h4>
                                        <?php endif; ?>
                                    </td>                                    
                                    <?php
                                    $hora = split(' ', $d['Pedido']['fecha']);
                                    ?>
                                    <td><h4 class="statistic-values"><?php echo $hora[1]; ?></h4></td>                                    
                                    <?php if ($d['Pedido']['estado'] == 0): ?>
                                        <td style="background-color: #FFC9C9;">
                                            <h4 class="statistic-values">CREADO</h4>
                                        </td>
                                         <?php elseif ($d['Pedido']['estado'] == 1): ?>
                                        <td style="background-color: #FFC9C9;">
                                            <h4 class="statistic-values">COCINA</h4>
                                        </td>
                                        <?php elseif ($d['Pedido']['estado'] == 2): ?>
                                        <td style="background-color: #FFC9C9;">
                                            <h4 class="statistic-values">SERVIDO</h4>
                                        </td>
                                        
                                    <?php elseif ($d['Pedido']['estado'] == 3): ?>
                                        <td style="background-color: #CAFEA0;;">
                                            <h4 class="statistic-values">PAGADO</h4>
                                        </td>
                                    <?php elseif ($d['Pedido']['estado'] == 4): ?>
                                        <td style="background-color: #CAFEA0;;">
                                            <h4 class="statistic-values">FACTURADO</h4>
                                        </td>
                                    <?php elseif ($d['Pedido']['estado'] == 5): ?>
                                        <td style="background-color: #CAFEA0;;">
                                            <h4 class="statistic-values">Producto a&ntilde;adidos</h4>
                                        </td>
                                    <?php elseif ($d['Pedido']['estado'] == 6): ?>
                                        <td style="background-color: #CAFEA0;;">
                                            <h4 class="statistic-values">CANCELADO</h4>
                                        </td>
                                    <?php endif; ?> 
                                    <td><?php echo $d['Pedido']['total']; ?></td>    
                                    <td>                                       
                                         
                                        <?php
                                        echo $this->Html->image("facturar.png", array(
                                            "title" => "Ver Pedido",
                                            'url' => array('action' => 'verpedido', $id)
                                        ));
                                        ?>
                                        <?php echo $this->Html->link('Eliminar',array('action' => 'eliminapedido',$id),array('escape' => false,'confirm' => 'Esta seguro de eliminar??','class' => 'label label-important'));?>
                                     </td>
                                </tr>    
                            <?php endforeach; ?>                                                                                                                                                                                             
                            </tbody>
                        </table>
                        <!-- // DATATABLE - DTCF --> 

                    </div>
                    <!-- // Widget -->

                </div>
                <!-- comenzamod demo -->
               
            </div>
            <!-- // Example row -->

        </section>
    </div>	
    <!-- // fin contenido principal --> 
</div>		
<!-- Sidebar -->
<?php //echo $this->element('menualmacenes') ?>
<!-- End Sidebar -->
<?php //echo $this->element('menupedidos') ?>