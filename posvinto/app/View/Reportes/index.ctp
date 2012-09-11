<script language="javascript" type="text/javascript">
function popitup(url) {
	newwindow=window.open(url,'name','height=300,width=400');
	if (window.focus) {newwindow.focus()}
	return false;
}
</script>
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
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Pedidos de hoy</h2>
						<div class="right">
							<label>buscar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="filtrar" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
								<th>Ped.#</th>
								<th><?php echo $this->Paginator->sort('mesa', 'MESA');?></th>
								<th><?php echo $this->Paginator->sort('usuario_id', 'MOZO')?></th>
                                <th>Fecha hora</th>
                                <th>Cuenta</th>
                                <th>Acciones</th>
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
							   	    <td>
                                       <?php //echo $this->Html->link('ver detalle', array('action'=>'detallepedido', $data['Pedido']['id'], $data['Usuario']['nombre']), array('class'=>"ico edit"))?>
                                       <a href="http://localhost/sistemaVintoCV/posvinto/reportes/detallepedido/<?php echo $data['Pedido']['id']?>/<?php echo $data['Usuario']['nombre']?>" class="ico edit" onclick="return popitup('http://localhost/sistemaVintoCV/posvinto/reportes/detallepedido/'+'<?php echo $data['Pedido']['id']?>'+'/'+'<?php echo $data['Usuario']['nombre']?>')">ver cuenta</a>
                                    </td>   
    							</tr>
							<?php endforeach;?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"><?php 
                        echo $this->Paginator->counter(
                                    'Mostrando {:current} - {:end}  de {:pages}, total
                                     {:count}'
                                );
                        ?></div>
							<div class="right">
                            
                            <?php echo $this->Paginator->prev('<< Anterior', array(), null, array('class'=>'disabled'));?>  
                            <?php echo $this->Paginator->numbers( ); ?>  
                            <?php echo $this->Paginator->next('Siguiente >>', array(), null, array('class'=>'disabled'));?>
								
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
			
			</div><!-- End Content -->
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="boxa">
					
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


