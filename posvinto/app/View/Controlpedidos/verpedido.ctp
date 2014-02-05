<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/pedidos'); ?>               
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
                            <?php foreach ($productos_vector as $p): ?>
                                <?php
                                $precio = $p['Producto']['precio'];
                                
                                ?>
                                <tr id="DataRow0">
                                    <td><?php echo $i; ?></td>
                                    <td class="bold" style="width: 250px;"><b><?php echo $p['Producto']['nombre']; ?></b></td>
                                    <td><b><?php echo round($p['Producto']['cantidad']); ?></b></td>
                                    <td><b><?php echo round($p['Producto']['precio']); ?></b></td>
                                    <td><b>
                                    <?php 
                                    echo round($p['Item']['precio']*$p['Producto']['cantidad']);
                                    $totalCancelar += $p['Item']['precio']*$p['Producto']['cantidad']; 
                                    ?></b></td>                                                                 
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
                <?php if($moso['Pedido']['estado'] != 3 && $moso['Pedido']['estado'] != 4): ?>
                    <h3><i class="aweso-icon-table"></i> Impresi&oacute;n cuenta</h3>                                        
                    <a class="btn btn-large btn-orange" href="<?php echo $this->Html->url(array('action'=>'imprimircuenta', $id_pedido)) ?>"><i class="fontello-icon-publish"></i> IMPRIMIR CUENTA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <div style="height: 10px;">&nbsp;</div> 
                    <a class="btn btn-large btn-turgu" href="<?php echo $this->Html->url(array('action' => 'dividircuenta', $id_pedido)) ?>"><i class="fontello-icon-publish"></i> DIVIDIR CUENTA</a>
                    <div style="height: 10px;">&nbsp;</div> 
                    <h3><i class="aweso-icon-table"></i> Formas de pago</h3>                    
                    <a class="btn btn-large btn-red" href="#" id="btMuestraFacturar"><i class="fontello-icon-publish"></i> CON FACTURA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
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
                    <div style="height: 10px;">&nbsp;</div>
                    <!--<a class="btn btn-large btn-turgu" href="<?php //echo $this->Html->url(array('action' => 'facturar1', $id_pedido)) ?>"><i class="fontello-icon-publish"></i> DIVIDIR FACTURA</a>-->
                    <?php 
                    if($usuario != 6): ?>
                    <div style="height: 10px;">&nbsp;</div>                
                    <a class="btn btn-large btn-green" href="#" id="bt_pagar"><i class="fontello-icon-publish"></i> CON RECIBO</a>
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
                                <select id="descuento" name="data[Recibo][descuento]">
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
                            <input id="montoCambio" name="data[Recibo][cambio]" class="input-block-level" value="0" type="text" placeholder="cambio" readonly="readonly"/>
                          
                            
                            
                       </fieldset>
                      <div style="padding: 5px 0 0 0;"></div>
                       <?php 
                       $opt = array(
                       'class'=>'btn',
                       'Value'=>'Pagar'
                       );
                       
                       echo $this->Form->end($opt); ?>
                    </div>
                    <?php endif; ?>                  
                    
                  
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
                            var cambio = 0;
                            var valor = this.value;
                            console.log(valor);
                            //var valor = this.value;
                            if(valor > 0){
                                console.log("entro a otro ");
                               var totalcondescuento = <?php echo $totalCancelar ?> - (valor * <?php echo $totalCancelar ?>); 
                                $("#nuevoTotal").val(totalcondescuento); 
                                $("#muestraTotaldescuento").show('slow');
                                
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
                    <?php endif; ?>
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

        
      
    </div>