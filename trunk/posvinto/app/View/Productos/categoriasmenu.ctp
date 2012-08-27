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
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">LISTADO DE CATEGORIAS DEL MENU</h2>                        
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
                        <th style="width: 300px;">Nombre</th>                                                 
                        <th style="width: 250px;">Tipo</th>
                        <th>Acciones</th>     
                    </tr>    
                    </table>
<?php //comienzo de mostrar los datos ?>    
<div id="muestra">                
<div style="width:740px; height:300px; overflow:auto;">
<table>
<?php $i=1; ?>
<?php foreach ($cat as $c): ?>
    <tr <?php echo fmod($i,2)?"class='mifila'":""; ?>>
        <td style="width: 300px;">
            <?php $id = $c['Categoria']['id']; ?>            
            <?php echo $c['Categoria']['nombre']; ?>
        </td>         
        <td style="width: 250px;">
            <?php echo $c['Categoria']['tipo']; ?>
        </td>             
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'editarcategoria', $id)
                ));
            ?>
       <?php if($c['Categoria']['estado'] == 1): ?>                                                            
            <?php 
                echo $this->Html->image("show.png", array(
                    "title" => "Ocultar",
                    'url' => array('action' => 'descatmenu', $id)
                ));
            ?>                 
       <?php else: ?>
            <?php 
                echo $this->Html->image("hide.png", array(
                    "title" => "Mostrar",
                    'url' => array('action' => 'habcatmenu', $id)
                ));
            ?>
       <?php endif; ?>
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
				<div class="boxa">					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->					
					<div class="box-content">                    																		
						<?php echo $this->element("menucarta"); ?>
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
