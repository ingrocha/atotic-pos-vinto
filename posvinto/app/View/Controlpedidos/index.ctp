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
                                    <th>Pagar</th>                               
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
                                <div id="cuadro_<?php echo $id ?>" title="Recibo">
                                </div>                         
                                <tr id="DataRow<?php echo $i; ?>">							   	 	
                                    <td><input type="checkbox" class="checkbox check-row" value="0" name="checkRow"></td>
                                    <td><h4 class="statistic-values"><?php echo $d['Pedido']['mesa']; ?></h4></td>
                                    <td><h4 class="statistic-values"><?php echo $d['User']['nombre']; ?></h4></td>                                    
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
                                    <?php endif; ?> 
                                    <td><?php echo $d['Pedido']['total']; ?></td>    
                                    <td>                                       
                                        <div id="dialog_<?php echo $id; ?>" style="float: left;">
                                            <?php
                                            /* echo $this->Html->image("print.png", array(
                                              "title" => "Ver Recibo"
                                              )); */
                                            ?>            
                                        </div>  
                                        &nbsp;
                                        <script type="text/javascript">
                                            var dialogOpts = {
                                                modal: true
                                            };
                                            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                                                jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("controlpedidos/ajaxverecibo/<?php echo $id; ?>");
                                    
                                            });                                                                        
                                        </script> 
                                        <?php
                                        echo $this->Html->image("facturar.png", array(
                                            "title" => "Ver Pedido",
                                            'url' => array('action' => 'verpedido', $id)
                                        ));
                                        ?>
                                        <?php
                                        /* echo $this->Html->image("facturar.png", array(
                                          "title" => "Facturar Pedido",
                                          'url' => array('action' => 'facturar1', $id)
                                          )); */
                                        ?>
                                        <?php
                                        /* echo $this->Html->image("recibo.png", array(
                                          "title" => "Imprimir recibo",
                                          'url' => array('action' => 'imprecibo', $id)
                                          )); */
                                        ?>                                        
                                        <?php //echo $this->Html->link('',array('controller' => 'controlpedidos', 'action' => 'facturar1', $d['Pedido']['id']), array('class' => 'ico edit')); ?>
                                        <?php //echo $this->Html->link('',array('controller' => 'controlpedidos', 'action' => 'Recibo', $d['Pedido']['id']), array('class' => 'ico edit')); ?>
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