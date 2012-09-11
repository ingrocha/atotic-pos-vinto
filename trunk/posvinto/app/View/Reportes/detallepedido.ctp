<!-- Container -->

            <div id="aImprimir">
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Cuenta pedido mesa <?php echo $items[0]['Pedido']['mesa']?></h2>
                        <div class="right">
                           <span>Mozo <?php echo $mozo?></span>
                        </div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
							
								<th>CONSUMO</th>
								<th>CANTIDAD</th>
                                <th>PRECIO</th>
							</tr>
                            <?php $i=0;?>
                            
                            <?php foreach($items as $data):?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
    							<tr class="<?php echo $clase;?>">
							   	 	<td><h3><?php echo $data['Producto']['nombre'];?></h3></td>
    								<td><?php echo $data['Item']['cantidad'];?></td>
    								<td><?php echo $data['Item']['precio'];?></td></td>  
    							</tr>
							<?php endforeach;?>
						</table>
						
						
					
						
					</div>
					<!-- Table -->
					
				</div>
          </div><!--Div area impresion-->
				<!-- End Box -->
			<?php echo $this->Form->button('Imprimir', array('id'=>"imprimir")); ?>
			</div><!-- End Content -->

 <script type="text/javascript">
   jQuery(document).ready(function() {

         jQuery("#imprimir").click(function() {
            //alert("imprimir");
            // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
            // printElem({ leaveOpen: true, printMode: 'popup' });
            printElem({ overrideElementCSS: ['http://localhost/posvinto/posvinto/app/webroot/css/imprimir.css'] });
         });


     });
 function printElem(options){
     jQuery('#aImprimir').printElement(options);
 }

    </script>
