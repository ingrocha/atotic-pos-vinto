<script language="javascript" type="text/javascript">
function popitup(url) {
	newwindow=window.open(url,'name','height=300,width=400');
	if (window.focus) {newwindow.focus()}
	return false;
}
</script>
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
				
<?php if(!empty($mozos)):?>
<!-- Container -->

					<!-- Box -->
                    <div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Buscar pedido</h2>
					</div>
					<!-- End Box Head -->
                    <!-- Form -->
                    <?php echo $this->Form->create(null, array(
                            'url' => array('controller' => 'reportes', 'action' => 'mozos')
                            ));
                    ?>
             					
						
						<div class="form">
							    <p class="inline-field">
                                   <label>Fecha</label>
                                   <?php echo $this->Form->text('fecha', array('size'=>10, 'class'=>'field size2'));?>
                                </p>	
							
								<p class="inline-field">
									<label>Mozo</label>
									<?php echo $this->Form->select('mozos', $mozos);?>
								</p>
								<!--<p>
									<span class="req">max 100 symbols</span>
									<label>Content <span>(Required Field)</span></label>
									<textarea class="field size1" rows="10" cols="30"></textarea>
								</p>	-->
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<!--<input type="button" class="button" value="preview" />-->
							<?php 
                            $options = array(
                            'label' => 'Enviar!',
                            'name' => 'Enviar',
                            'class' => 'button',
      
                            );
                            echo $this->Form->end($options);?>
						</div>
						<!-- End Form Buttons -->
					
                     
				</div>
				<!-- End Box -->
               


<?php else:?>

                <div class="boxa" id="aImprimir">
                <div class="box-head">
					<h2>Listado pedidos del mozo <?php echo $mozo?></h2>
				</div>
                <!-- listado de pedidos -->
                <!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="reportea">
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
								<th>Ped.#</th>
								<th>Mesa</th>
								<th>Mozo</th>
                                <th>Fecha hora</th>
                                <th>Cuenta</th>
                                <th class="oculto">Acciones</th>
							</tr>
                            <?php $i=0;?>
                            <?php foreach($pedidos as $data):?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
    							<tr class="<?php echo $clase;?>">
							   	 	<td><h3><?php echo $data['Pedido']['id'];?></h3></td>
    								<td><?php echo $data['Pedido']['mesa'];?></td>
    								<td><?php echo $data['Usuario']['nombre'];?></td></td>
                                    <td><?php echo $data['Pedido']['fecha'];?></td></td>
                                    <td><?php echo $data['Pedido']['total'];?></td></td>
    								<td class="oculto">
                                       <!--<a href="#" class="ico del">Borrar</a>-->
                                       <a href="http://localhost/sistemaVintoCV/posvinto/reportes/detallepedido/<?php echo $data['Pedido']['id']?>/<?php echo $data['Usuario']['nombre']?>" class="ico edit" onclick="return popitup('http://localhost/sistemaVintoCV/posvinto/reportes/detallepedido/'+'<?php echo $data['Pedido']['id']?>'+'/'+'<?php echo $data['Usuario']['nombre']?>')">ver cuenta</a>
                                    </td>
    							</tr>
							<?php endforeach;?>
						</table>
               
		              </div>
                </div>
             <?php endif;?>
			<!-- End Content -->
			</div>
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="#" class="add-button"><span>Ingresar nuevo item</span></a>
						<div class="cl">&nbsp;</div>
						<?php echo $this->Form->button('Imprimir reporte', array('id'=>"imprimir")); ?>
                        <p></p>
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
