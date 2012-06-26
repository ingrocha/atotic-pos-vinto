
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Ingresos</a>
			<span>&gt;</span>
			Listado &uacute;ltimos ingresos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">&Uacute;ltimos 20 ingresos</h2>
						<div class="right">
							<label>filtrar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
                    <?php //debug($pedido);?>
					<div class="table">
                      <?php echo $this->Form->create(null, array(
                            'url' => array('controller' => 'controlpedidos', 'action' => 'facturar2')
                            ));
                    ?>
                     
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
                                <th width="13"><input type="checkbox" class="checkbox" /></th>
                                <th>Item</th>
								<th>cantidad</th>
                                <th>precio</th>
                                <th>subtotal</th>								
							</tr>
                           
                            <?php $i=0; ?>
                             <?php $total =0;?>
                            
                            <?php foreach($pedido as $data):?>
                            <?php $precio =0;?>
                            <?php $total = $total + $data['Item']['precio'];
                            $precio = $data['Item']['precio']/$data['Item']['cantidad'];
                            ?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
                                <?php $i++;?>
    							<tr class="<?php echo $clase;?>">
                                    <td>
                                       <input type="checkbox" class="checkbox"/>
                                       
                                       <?php //echo $this->Form->checkbox("Pedido.$i.chk", array('class'=>'checkbox', 'id'=>"chk$i", 'value'=>$data['Item']['id']));?>
                                       <!--<input type="checkbox" name="checkbox_<?php //echo $i;?>" id="chk<?php //echo $i;?>" value="<?php //echo $data['Item']['id'];?>" />-->
                                    </td>
                                    <?php echo $this->Form->hidden("Pedido.$i.itemId", array('value'=>$data['Item']['id']));?>
                                   	<td><?php echo $this->Form->text("Pedido.$i.producto", array('value'=>$data['Producto']['nombre'],'size'=>20,  'disabled'=>'disabled'));?></td>
                                    <td><h3><?php echo $this->Form->text("Pedido.$i.cantidad", array('value'=>$data['Item']['cantidad'],'size'=>5, 'disabled'=>'disabled'));?></h3></td>
                                    <td><?php echo $this->Form->text("Pedido.$i.preciou", array('value'=>$precio,'size'=>5, 'disabled'=>'disabled'));?></td>
    								<td>
                                       <?php //echo $this->Form->text("Pedido.$i.importep", array('value'=>$data['Item']['precio'],'size'=>5, 'id'=>"canti_$i", 'onkeypress'=>"return permite(event, 'num')",  'disabled'=>'disabled'));?>
                                   <div id="qty_item_<?php echo $i;?>">
                                        <input type="text"  id="canti_<?php echo $i;?>" name="data[Pedido][<?php echo $i;?>][importep]" value="<?php echo $data['Item']['precio'];?>"  size="5" onKeyPress="return permite(event, 'num')"/> Bs.
                                   </div>
                                    </td>
    								
    								<!--<td><a href="#" class="ico del">Eliminar</a><a href="#" class="ico edit">Detalle</a></td>-->
    							</tr>
							<?php endforeach;?>
                            <tr>
                                 <td colspan="4"><b style="margin-left: 27px;">Total</b></td>
                                 <td>
                                    <input type="text" name="total" id="totalSum" size="4" value="0" disabled="disable" /> (Bs.)     
                                 </td>
                            </tr>
                            <!--<tr>
                               <td colspan="5" style="float: left;">
                               	
                               </td>
                            </tr>-->
						</table>
						<div class="buttons">
						
							<?php 
                            $options = array(
                            'label' => 'Facturar!',
                            'name' => 'Enviar',
                            'class' => 'button',
      
                            );
                            echo $this->Form->end($options);?>
						</div>
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"><?php 
                        //echo $this->Paginator->counter(
                        //            'Mostrando {:current} - {:end}  de {:pages}, total
                        //             {:count}'
                        //        );
                        ?></div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Add New Article</h2>
					</div>
					<!-- End Box Head -->
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="controlingresos/ingresar" class="add-button"><span>Ingresar nuevo item</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>seleccionar todos</label></p>
						<p><a href="#">Deseleccionar todos</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Ordenar por</label>
							<select class="field">
								<option value="">T&iacute;tulo</option>
							</select>
							<select class="field">
								<option value="">Fecha</option>
							</select>
							<select class="field">
								<option value="">Persona</option>
							</select>
						</div>
						<!-- End Sort -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>

