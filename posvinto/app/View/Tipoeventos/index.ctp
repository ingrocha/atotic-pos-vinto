<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller' => 'usuarios', 'action' => 'index')) ?>
			<span>&gt;</span>
			Lista de Insumos
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
						<h2 class="left">LISTADO DE PRODUCTOS EN LA BODEGA</h2>
						<div class="right">
							<?php echo $this->Form->create(null, array('action'=>'buscarbodega')); ?>
							<label>Filtrar</label>
							<!--<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />-->
                            <?php echo $this->Form->text('nombre'); ?>
                            <?php
                                $options = array(
                                    'label' => 'Buscar',
                                    'class' => 'button'
                                );
                            ?>
                        <?php
                            echo $this->Ajax->submit('Buscar', array(
                            'url'=> array('controller'=>'insumos', 'action'=>'buscarbodega'), 
                            'update' => 'muestrabodega'
                            /*'condition' => '$("#PostEmail1").val() == $("#PostName1").val()'*/
                            )); 
                            //echo $this->Form->end($options); 
                        ?>
						</div>
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
	<div class="table">
	<table cellspacing="0" cellpadding="1" width="740">
    <tr>
        <th style="width: 280px;">Nombre</th>
        <th style="width: 90px;">Descripcion</th>        
        <th>Acciones</th>     
    </tr>
    </table>
    <div id="muestrabodega">
    <div style="width:740px; height:300px; overflow:auto;">
    <table cellspacing="0" cellpadding="1" width="740">
    <?php $c=1; ?>
    <?php foreach ($tipoeventos as $t): ?>
    <tr <?php echo fmod($c,2)?"class='mifila'":""; ?>>
        <td style="width: 280px;">
            <?php $id = $t['Tipoevento']['id']; ?>            
            <?php echo $t['Tipoevento']['nombre']; ?>
        </td>
        <td style="width: 92px;">
            <?php echo $t['Tipoevento']['descripcion']; ?>
        </td>     
        <td>  
         <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'edit', $id)
                ));
            ?>      
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'delete', $id)
                ));
            ?>                           
        </td>
    </tr>
<?php $c++; ?>
<?php endforeach; ?>
</table>
</div>
</div>											
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
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">
                    <?php echo $this->Html->link("<span>Nuevo Tipo de Evento</span>", array('action'=>'add'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php echo $this->Html->link("<span>Lista de tipos de Evento</span>", array('action'=>'index'), array('class'=>"add-button", 'escape' => FALSE)); ?>
						<div class="cl">&nbsp;</div>																		
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div> 