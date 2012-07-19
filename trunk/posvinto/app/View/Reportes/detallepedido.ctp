<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Pedidos</a>
			<span>&gt;</span>
			Filtro para ver pedidos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
            <!-- Box -->
            <div id="aImprimir">
				<div class="box">
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
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Sub menu reportes</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<?php $url= "http://localhost/sistemaVintoCV/posvinto/reportes/"?>
                        <a href="<?php echo $url?>mozos" class="add-button"><span>Reporte mozos</span></a>
						<div class="cl"></div>
						<a href="<?php echo $url?>insumos" class="add-button"><span>Reporte insumos</span></a>
                        <div class="cl">&nbsp;</div>
                        <a href="<?php echo $url?>pedidos" class="add-button"><span>Reporte pedidos</span></a>
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
		
		<!-- Main -->
	</div>
 <script type="text/javascript">
   jQuery(document).ready(function() {

         jQuery("#imprimir").click(function() {
            alert("imprimir");
            // windows.location("http://localhost/posvinto/posvinto/facturas/facturar3");
             printElem({ leaveOpen: true, printMode: 'popup' });
             
            // printElem({ overrideElementCSS: ['http://localhost/unibol/app/webroot/css/printable.css'] });
         });


     });
 function printElem(options){
     jQuery('#aImprimir').printElement(options);
 }

    </script>
