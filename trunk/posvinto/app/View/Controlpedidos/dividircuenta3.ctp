<div id="main-content" class="main-content container-fluid">
<div id="page-content" class="page-content">
<section>
<br />
<div class="row-fluid">

<div class="span4 grider">
                            <div class="widget widget-simple widget-notes">
                            <?php echo $this->
						Form->create(null, array( 'url' => array('controller' => 'controlpedidos', 'action' => 'dividircuenta2') )); ?>                            
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-edit"></i> DIVIDIR CUENTA</h4>
                                    <div class="widget-tool">
                                    <b>FACTURAR</b>
                                    <?php echo $this->Form->checkbox("1.Pedido.factura");?>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                    
                                        <form id="formNotes" class="form-dark">
                                            <fieldset>
                                            <?php echo $this->
											Form->hidden("1.Pedido.idpedido", array('value' => $idpedido)); ?>
                                                <label for="accountTaxVat" class="control-label"> Nombre</label>
                                                <?php echo $this->
														Form->text("1.Pedido.nombre", array('size' => 20)); ?>
                                                <label for="accountNotes">Nit:</label>
                                                <?php echo $this->
														Form->text("1.Pedido.nit", array('size' => 20)); ?>
                                                
                                                <label for="accountNotes">Efectivo:</label>
                                                <?php echo $this->
														Form->text("1.Pedido.efectivo", array('size' => 20)); ?>
                                                
                                                
                                            </fieldset>
                                            <!-- // fieldset Input -->
                                            <?php echo $this->Form->submit('Continuar',array('class' => 'btn btn-yellow btn-block'));?>
                                       
                                    </div>
                                </div>
                                
                            </div>
                            <!-- // Widget -->
                            
                            
                        </div>
<div class="span6 grider">
                            
                            <!-- // Table wrapper -->
                            
                          
                            <!-- // Table wrapper -->
                            
                            <div class="table-wrapper">
                                <table class="table boo-table table-striped table-condensed table-content bg-blue-light">
                                    <colgroup>
                                    <col class="col20">
                                    <col class="col20">
                                    <col class="col45">
                                    <col class="col15">
                                    </colgroup>
                                    <caption>
                                    DETALLE DEL PEDIDO <span>tabla de productos</span>
                                    </caption>
                                    <tbody>
                                        <tr id="DataRow0">
                                            <td class="bold" width="40%"><a href="#">Item</a></td>
                                            <td>cantidad</td>
                                            <td>precio</td>
                                            <td class="text-right">subtotal</td>
                                            <td width="10%"></td>
                                        </tr>
                                        <?php $i =0;?>
                                        <?php foreach($detalle as $p):?>
                                        
                                        <?php if($p['Detalle']['cantidad'] > 0):?>
                                        <?php $i++;?>
                                        <tr>
                                            <td>
                                            <?php echo $p['Detalle']['producto']?>
                                            <?php echo $this->Form->hidden("$i.Pedido.producto_id", array('value' => $p['Detalle']['producto_id'])); ?>
                                            <?php echo $this->Form->hidden("$i.Pedido.producto", array('value' => $p['Detalle']['producto'])); ?>
                                            <?php echo $this->Form->hidden("$i.Pedido.totalc", array('value' => $p['Detalle']['cantidad'])); ?>
                                            </td>
                                            <td><?php echo $p['Detalle']['cantidad']?></td>
                                            <td>
                                            <?php echo $this->Form->hidden("$i.Pedido.preciou", array('value' => ($p['Detalle']['preciou']), "id" => "price_item_$i")); ?>
                                            <?php echo $p['Detalle']['preciou']?>
                                            </td>
                                            <td><?php echo $p['Detalle']['preciou']*$p['Detalle']['cantidad']?></td>
                                            <td>
                                            <?php 
                                            $selec = null;
                                                    for($z = 1;$z<=$p['Detalle']['cantidad'];$z++)
                                                    {
                                                        $selec[$z] = $z;
                                                        
                                                    }
                                                    //debug($selec);exit;
                                                    echo $this->Form->select("$i.Pedido.cantidad",$selec);
                                            ?>
                                            </td>
                                        </tr>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                                <!-- // Table --> 
                            </div>
                            <?php //echo $this->Form->submit('Continuar',array('class' => 'btn btn-yellow btn-block'));?>
                            <!-- // Table wrapper --> 
                        </div>
</div>
</section>
</div>
    
</div>

