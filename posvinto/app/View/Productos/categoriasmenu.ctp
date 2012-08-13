<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller' =>'usuarios', 'action' => 'index')) ?>
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
						<h2 class="left">LISTADO DE PRODUCTOS EN ALMACEN</h2>                        
						<div class="right">                        
                        <?php echo $this->Form->create(null, array('action'=>'buscar')); ?>
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
                            'url'=> array('controller'=>'insumos', 'action'=>'buscar'), 
                            'update' => 'muestra'
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
                        <th style="width: 200px;">Nombre</th>                                                 
                        <th style="width: 350px;">Observaciones</th>
                        <th>Acciones</th>     
                    </tr>    
                    </table>
<?php //comienzo de mostrar los datos ?>    
<div id="muestra">                
<div style="width:740px; height:300px; overflow:auto;">
<table class="mitabla">
<?php $i=1; ?>
<?php foreach ($cat as $c): ?>
    <tr <?php echo fmod($i,2)?"class='mifila'":""; ?>>
        <td style="width: 200px;">
            <?php $id = $c['Categoria']['id']; ?>            
            <?php echo $c['Categoria']['nombre']; ?>
        </td>         
        <td style="width: 350px;">
            <?php echo $c['Categoria']['descripcion']; ?>
        </td>             
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'editarcategoria', $id)
                ));
            ?>                                                            
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Eliminar Insumo",
                    'url' => array('action' => 'descat', $id)
                ));
            ?>                 
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
</div>
<?php //fin de mostrar los datos ?>
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
                    <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php //echo $this->Html->link("<span>Registrar Salida</span>", array('action'=>'salidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <div class="cl">&nbsp;</div>
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Categorias Almacen</span>", array('action'=>'categoriasalmacen'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <?php echo $this->Html->link("<span>Registrar Categoria</span>", array('action'=>'nuevacategoria'), array('class'=>"add-button", 'escape' => FALSE)); ?>
						<div class="cl">&nbsp;</div>																		
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
