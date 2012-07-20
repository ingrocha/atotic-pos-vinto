<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Pedidos', array('controller'=>'controlpedidos', 'action'=>'index'))?>
			<span>&gt;</span>
			Detalle del pedido
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
                
                      <?php  echo $this->Form->create('Reporte', array('action' => 'buscar'));?>  
						<div class="right">
							<label>filtrar</label>
                            <input type="text" class="field small-field" name="dato"/>
							<input type="submit" class="button" value="search" /> 
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
                                <th><?php echo $this->Paginator->sort('id', 'ID');?></th>
								<th><?php echo $this->Paginator->sort('mesa', 'MESA');?></th>
                                <th>Mozo</th>
                                <th>total</th>
                                <th>Hora</th>								
							</tr>
                            <?php $i=0;?>
                            
                            <?php foreach($data as $data):?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
    							<tr class="<?php echo $clase;?>">
							   	 	<td><?php echo $data['Pedido']['id'];?></td>
                                    <td><h3><?php echo $data['Pedido']['mesa'];?></h3></td>
    								<td><?php echo $data['Usuario']['nombre'];?></td>
    								<td><?php echo $data['Pedido']['total'];?></td>
                                    <?php
                                    $hora = split(' ', $data['Pedido']['fecha']);
                                    ?>
                                    <td><?php echo $hora[1];?></td>
    								<td>
                                       <a href="#" class="ico del">Eliminar</a>
                                       <?php echo $this->Html->link('Facturar',array('controller' => 'controlpedidos', 'action' => 'facturar1', $data['Pedido']['id']), array('class' => 'ico edit')); ?>
                                       <?php echo $this->Html->link('Recibo',array('controller' => 'controlpedidos', 'action' => 'Recibo', $data['Pedido']['id']), array('class' => 'ico edit')); ?>
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
						<a href="http://localhost/sistemaVintoCV/posvinto/reportes/pedidos" class="add-button"><span>Mostrar todo</span></a>
						<div class="cl">&nbsp;</div>
						<a href="javascript:history.go(-1)" class="add-button"><span>Retornar atr&aacute;s</span></a>
                        <div class="cl">&nbsp;</div>
					
						<!-- Sort -->
                        <?php echo $this->Form->create('Reporte');?>
						<div class="sort">
							<label>Filtrar por</label>
							<!--<select class="field">
								<option value="">Fecha</option>
							</select>-->
                            <?php echo $this->Form->text('dato', array('class'=>'field', 'id'=>'fecha', 'placeholder'=>"dato"));?>
                            <?php echo $this->Form->text('fecha', array('class'=>'field', 'id'=>'fecha', 'placeholder'=>"fecha"));?>
                            <label>Mozo</label>
                            <?php echo $this->Form->select('mozo', $mozos,array('class'=>'field', 'id'=>"mozo"))?>
			                 <?php echo $this->Form->end('Buscar');?>
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

