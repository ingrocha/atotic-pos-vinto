<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php //echo $this->element('sidebar/pedidos'); ?>               
    <!-- // fin sidebar -->

    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">  
        <section>
            <div class="row-fluid">
                <div class="span6 grider">
                    <h3><i class="aweso-icon-table"></i> Mesa: <?php echo $pedido['0']['Pedido']['mesa']; ?> <small>Mozo: <?php echo $moso['Usuario']['nombre']; ?></small></h3>                   
                    <table class="table boo-table table-striped table-content table-hover">
                        <colgroup>
                            <col class="col20">
                            <col class="col50">
                            <col class="col15">
                            <col class="col15">
                            <col class="col15">
                        </colgroup>
                        <caption>
                            Descripcion del Pedido
                        </caption>
                        <thead>
                            <tr id="HeadersRow0">
                                <th scope="col">No.</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">P/U</th>
                                <th scope="col">Costo</th>                                       
                            </tr>                        
                        </thead>                       
                        <tbody>
                            <?php $totalCancelar = 0; ?>
                            <?php $i = 1; ?>
                            <?php foreach ($pedido as $p): ?>
                                <?php
                                $precio = $p['Producto']['precio'];
                                $totalCancelar += $precio;
                                ?>
                                <tr id="DataRow0">
                                    <td><?php echo $i; ?></td>
                                    <td class="bold" style="width: 250px;"><b><?php echo $p['Producto']['nombre']; ?></b></td>
                                    <td><b><?php echo round($p['Item']['cantidad']); ?></b></td>
                                    <td><b><?php echo round($p['Producto']['precio']); ?></b></td>
                                    <td><b><?php echo round($p['Item']['precio']); ?></b></td>                                                                 
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr class="total" id="HeadersRow0">
                                <th>Total</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="text-right"><b><?php echo $totalCancelar; ?></b></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- //tabla -->       

                <div class="span4 grider">
                    <h3><i class="aweso-icon-table"></i> Acciones</h3>                                        
                    <a class="btn btn-large btn-orange" href="#"><i class="fontello-icon-publish"></i> IMPRIMIR CUENTA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <div style="height: 10px;">&nbsp;</div>                    
                    <a class="btn btn-large btn-red" href="#" id="btMuestraFacturar"><i class="fontello-icon-publish"></i> FACTURAR PEDIDO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
                    
                    <div style="height: 10px;">&nbsp;</div>  
                    <div id="muestraFacturar" style="display: none;">
                        <?php echo $this->Form->create('Controlpedidos', array('action'=>'facturar')); ?>                        
                        <fieldset>                            
                            <label for="formA05">Nit: </label>
                            <?php echo $this->Form->text('nit', array('id'=>'nit', 'class'=>'input-block-level', 'placeholder'=>'Ingrese el nit')); ?>
                            <!--<input id="formA05" class="span6" type="text" placeholder="placeholder">-->                           
                            <!-- // form item -->

                            <legend>Detalles para facturar</legend>
                            <label for="formA04">Nombre: </label>
                            <div id="nombre">
                            <?php echo $this->Form->text('nombre', array('class'=>'input-block-level', 'placeholder'=>'Ingrese el nombre')); ?>
                            </div>
                            
                            <?php echo $this->Form->hidden('monto', array('value'=>$totalCancelar)); ?>
                            <?php echo $this->Form->hidden('id_pedido', array('value'=>$id_pedido)); ?>
                            <!--<input id="formA04" class="input-block-level" type="text" placeholder="placeholder">-->
                            <!-- // form item -->                           
                            <label for="formA04">Efectivo: </label>
                            <?php echo $this->Form->text('efectivo', array('class'=>'input-block-level', 'id'=>'efectivo','placeholder'=>'Monto efectivo')); ?>
                            <label for="formA04">Cambio: </label>
                            <?php echo $this->Form->text('cambio', array('class'=>'input-block-level', 'id'=>'cambio','placeholder'=>'Monto efectivo','')); ?>
                            
                            <input type="submit" value="Facturar"/> 
                            </form>
                        </fieldset>
                        <hr/>
                    </div>                 
                    <a class="btn btn-large btn-green" href="#" id="bt_pagar"><i class="fontello-icon-publish"></i> PAGAR CUENTA</a>
                    <div style="height: 10px;">&nbsp;</div>
                    <div id="MuestraPagar" style="display: none;">
                    <?php echo $this->Form->create('Controlpedidos', array('action'=>'pagarcuenta')); ?>
                       <fieldset>
                           <?php echo $this->Form->hidden('Recibo.pedido_id', array('value'=>$id_pedido)) ?>
                           <?php echo $this->Form->hidden('Recibo.total', array('value'=>$totalCancelar)) ?>
                           <label for="formA04">
                               Recibo a:
                           </label>
                           <input id="nombreRecibo" name="data[Recibo][nombre]" class="input-block-level" type="text" placeholder="Nombre"/>
                           
                            
                            <label for="formA04">
                               Efectivo
                           </label>
                           <input id="montoPago" name="data[Recibo][efectivo]" class="input-block-level" type="text" placeholder="monto efectivo"/>
                            <div class="selectpicker-block" style="width:275px">
                              <label>
                               Aplicar descuento
                            </label>
                           
                                <select id="descuento" class="selectpicker-info" name="data[Recibo][descuento]">
                                    <option selected="selected" value="0">Sin descuento</option>
                                        <?php foreach($descuentos as $descuento): ?>
                                    <option value="<?php echo $descuento['Descuento']['porcentaje'] ?>">
                                        <?php echo $descuento['Descuento']['observacion'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div id="muestraTotaldescuento" style="display: none;">
                            <label>Nuevo total con el descuento:</label>
                              <input id="nuevoTotal" name="data[Recibo][totaldescuento]" value="0" class="input-block-level" type="text" readonly="readonly"/>
                            </div>
                            <label>
                               Cambio
                            </label>
                            <input id="montoCambio" name="data[Recibo][cambio]" class="input-block-level" type="text" placeholder="cambio" readonly="readonly"/>
                          
                            
                            
                       </fieldset>
                      <div style="padding: 5px 0 0 0;"></div>
                       <?php 
                       $opt = array(
                       'class'=>'btn',
                       'Value'=>'Pagar'
                       );
                       
                       echo $this->Form->end($opt); ?>
                    </div>                  
                    <a class="btn btn-large btn-turgu" href="<?php echo $this->Html->url(array('action' => 'facturar1', $id_pedido)) ?>"><i class="fontello-icon-publish"></i> DIVIDIR LA CUENTA</a>
                  
                    <script>
                    $("#btMuestraFacturar").click(function() {
                            //console.log('click');
                            $("#muestraFacturar").toggle("slow");
                        });
                        $("#nit").change(function(){
                            var nit = $("#nit").val();
                            console.log(nit);
                            $("#nombre").load('<?php echo $this->Html->url(array('controller'=>'Controlpedidos', 'action'=>'ajaxnombre')) ?>/'+nit);
                        });  
                        $("#efectivo").change(function(){
                            var efectivo = $("#efectivo").val();
                            var total = <?php echo $totalCancelar ?>;
                            var cambio = efectivo - total;
                            console.log(cambio);
                            $("#cambio").val(cambio);
                            
                        }
                        );
                    </script>
                    <script>
                       
                        $("#bt_pagar").click(function(){
                            $("#MuestraPagar").toggle("slow");
                        });
                        $("#montoPago").change(function(){
                             var cambio;
                            if($("#nuevoTotal").val() == "0"){
                               cambio =  $("#montoPago").val() - <?php echo $totalCancelar ?>;    
                            }else{
                                cambio = $("#montoPago").val() - $("#nuevoTotal").val();
                            }
                            console.log(cambio);
                            $("#montoCambio").val(cambio);
                        });
                        $("#descuento").change(function(){
                            var cambio;
                            var valor = this.value;
                            console.log(valor);
                            //var valor = this.value;
                            if(valor > 0){
                                console.log("entro a otro ");
                               var totalcondescuento = <?php echo $totalCancelar ?> - (valor * <?php echo $totalCancelar ?>); 
                                $("#nuevoTotal").val(totalcondescuento); 
                                $("#muestraTotaldescuento").toggle('slow');
                                
                                cambio = $("#montoPago").val() - $("#nuevoTotal").val();
                                 
                            }else{
                                
                                console.log("entro a cero");
                               $("#muestraTotaldescuento").hide();
                               cambio =  $("#montoPago").val() - <?php echo $totalCancelar ?>;
                            
                            }
                            console.log(cambio);
                            $("#montoCambio").val(cambio);
                            
                        });
                        
                        
                    </script>
                </div>
                <!-- //tabla --> 
            </div>
        </section>
    </div>	
    <!-- // fin contenido principal --> 
</div>		
<!-- Sidebar -->
<?php //echo $this->element('menualmacenes') ?>
<!-- End Sidebar -->
<?php //echo $this->element('menupedidos') ?>


<!-- Container -->
<?php echo $this->Html->css('imprimir', 'stylesheet', array('media' => 'print')); ?>
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <!--<div class="small-nav">
            
        <?php //echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
            <span>&gt;</span>
            Lista de Usuarios
        </div>-->
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
                        <h2 class="left">PEDIDO</h2>
                        <div class="right">
                        </div>
                    </div>
                    <!-- End Box Head -->	
                    <!-- Table -->
                    <div class="table">  
                        <div>
                            <?php //echo $this->Html->link('Cuenta', array('action' => 'imprimecuenta')); ?>
                            <?php echo $this->Html->image('btcuenta.jpg', array('id' => "bt_imprimir", 'style' => '"float: left;"')); ?>                                                        
                            <div id="dialog" style="float: left;">
                                <?php
                                echo $this->Html->image("btpagar.jpg", array(
                                    "title" => "Pagar"
                                ));
                                ?>            
                            </div> 
                            <div id="fac" style="float: left;">
                                <?php
                                echo $this->Html->image("btfactura.jpg", array(
                                    "title" => "Facturar"
                                ));
                                ?>            
                            </div> 
                            <div id="des" style="float: left;">
                                <?php
                                echo $this->Html->image("des.jpg", array(
                                    "title" => "Facturar"
                                ));
                                ?>            
                            </div> 
                            <?php
                            echo $this->Html->image("divcuenta.jpg", array(
                                "title" => "Dividir la Cuenta",
                                'url' => array('action' => 'facturar1', $pedido['0']['Pedido']['id'])
                            ));
                            ?> 
                            <script type="text/javascript">
                                var dialogOpts = {
                                    modal: true
                                };
                                jQuery("#dialog").click(function(){
                                    jQuery("#cuadro").dialog(dialogOpts).load("../ajaxpago/<?php echo $pedido['0']['Pedido']['id']; ?>");
                           
                                });
                                
                                var dialogOpts = {
                                    modal: true
                                };
                                jQuery("#fac").click(function(){
                                    jQuery("#facturar").dialog(dialogOpts).load("../ajaxfactura/<?php echo $pedido['0']['Pedido']['id']; ?>");
                           
                                });  
                                
                                var dialogOpts = {
                                    modal: true
                                };
                                jQuery("#des").click(function(){
                                    jQuery("#descuentos").dialog(dialogOpts).load("../ajaxfactura/<?php echo $pedido['0']['Pedido']['id']; ?>");
                           
                                });                                                            
                            </script>                                                
                        </div> 
                        <div id="aImprimir"><?php //comienza impresion          ?>
                            <div style="float: left; background-color: #fff;">
                                ESTADO: 
                                <?php
                                $estado = $pedido['0']['Pedido']['estado'];
                                if ($estado < 3)
                                {
                                    echo 'Por pagar';
                                } else
                                {
                                    echo 'Pagado';
                                }
                                ?>
                                <h1 class="tituloh1">Mesa: <?php echo $pedido['0']['Pedido']['mesa']; ?></h1>
                                <h1 class="tituloh1">Mozo: <?php echo $moso['Usuario']['nombre']; ?></h1>
                                <table style="width: 744px;" class="tablafactura">
                                    <tr>
                                        <td>                                    
                                            <?php //debug($pedido);  ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td><h3>Producto</h3></td>
                                        <td><h3>Cant</h3></td>
                                        <td><h3>P/U</h3></td>
                                        <td><h3>Costo</h3></td>                                       
                                    </tr>
                                    <?php foreach ($pedido as $p): ?>
                                        <tr>
                                            <td><?php echo $p['Producto']['nombre']; ?></td>
                                            <td><?php echo round($p['Item']['cantidad']); ?></td>
                                            <td><?php echo round($p['Producto']['precio']); ?></td>
                                            <td><?php echo round($p['Item']['precio']); ?></td>                                                                                                                                     
                                        </tr>                                                         
                                    <?php endforeach; ?>
                                    <div id="cuadro" title="Pagar la Cuenta">
                                    </div>    
                                    <div id="facturar" title="Facturar Cuenta">
                                    </div> 
                                    <div id="descuentos" title="Facturar Cuenta">
                                    </div>
                                </table>
                                <table style="width: 744px;" class="tablafactura">
                                    <tr>
                                        <td colspan="4" style="background-color: #CAFEA0;">
                                            <h4 style="float: right; padding-right: 125px;">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $totalpagado; ?></h4>                                                                 
                                        </td>                                               
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="background-color: #FEF286;">
                                            <h4 style="float: right; padding-right: 125px;">Monto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo round($pedido['0']['Pedido']['monto']); ?></h4>
                                        </td>                                               
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="background-color: #FFC9C9;">
                                            <h4 style="float: right; padding-right: 125px; color: '#f00'">Cambio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                <?php
                                                $montop = $pedido['0']['Pedido']['monto'];
                                                $cambio = $montop - $totalpagado;
                                                if ($cambio <= 0)
                                                    echo '0';
                                                else
                                                    echo round($cambio);
                                                ?>
                                            </h4>
                                        </td>                                               
                                    </tr>
                                </table><?php //debug($pedido);         ?>                                                                                                                               
                                </h4>
                            </div>  
                        </div><?php //fin de la impresion         ?>                                                                                              
                    </div>
                    <!-- Table -->
                </div>
                <!-- End Box -->
            </div>
            <!-- End Content -->
            <!-- Sidebar -->
            <!-- Sidebar -->
            <?php echo $this->element('menupedidos') ?>
            <!-- End Sidebar -->
            <!-- End Sidebar -->
            <div class="cl">&nbsp;</div>			
        </div>
        <!-- Main -->
        <script type="text/javascript">           
            jQuery("#bt_imprimir").click(function() {
                //alert('imprimir');
                // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
                printElem({ leaveOpen: true, printMode: 'popup' });             
                // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
                //printElem({ overrideElementCSS: ['http://localhost/posvinto/posvinto/app/webroot/css/imprimir.css'] });
            });
            function printElem(options){
                jQuery('#aImprimir').printElement(options);
            }
        </script>
    </div>