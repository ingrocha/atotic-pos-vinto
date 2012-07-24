<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller' =>
'usuarios', 'action' => 'index')) ?>
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
						<h2 class="left">Listado de usuarios Registrados</h2>
						<div class="right">
							<label>filtrar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
					<table>
    <tr>
        <th>Nombre</th>
        <th>Precio Compra</th>
        <th>Precio Venta</th>   
        <th>Observaciones</th>
        <th>Acciones</th>     
    </tr>
<?php foreach ($insumos as $i): ?>
    <tr>
        <td>
            <?php $id = $i['Insumo']['id']; ?>            
            <?php echo $i['Insumo']['nombre']; ?>
        </td>
        <div id="cuadro_<?php echo $id; ?>" title="Ingreso de  insumos">
        </div> 
        <div id="cuadro2_<?php echo $id; ?>" title="Salida de insumos">
        </div> 
        <td>
            <?php echo $i['Insumo']['preciocompra']; ?>
        </td>
        <td>
            <?php echo $i['Insumo']['precioventa']; ?>
        </td>        
        <td>
            <?php echo $i['Insumo']['observaciones']; ?>
        </td>       
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'modificar', $id)
                ));
            ?>
            <div id="dialog_<?php echo $id; ?>" style="float: left;">
            <?php 
                echo $this->Html->image("in.png", array("title" => "Ingreso Almacen"));
            ?>
            </div>
            <div id="dialog2_<?php echo $id; ?>" style="float: left;">
            <?php 
                echo $this->Html->image("out.png", array(
                    "title" => "Salida Almacen"                    
                ));
            ?>
            </div>
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'modificar', $id)
                ));
            ?>
            <?php //echo $this->Html->link('Modificar', array('action' => 'modificar', $id)); ?>
            <?php //echo $this->Html->link('Dara baja', array('action' => 'baja', $id)); ?>
            <?php //echo $this->Html->link('', array('action' => 'baja', $id)); ?>
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id)); ?>    
            <?php //echo $this->Html->link('Eliminar', array('action' => 'eliminar', $id), null, ('Desea aliminar a este insumo?')); ?>
            <script type="text/javascript">
            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro_<?php echo $id; ?>").dialog().load("insumos/ingresoalmacen/<?php echo $id; ?>");
                //alert("click");
            });   
            
            jQuery("#dialog2_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro2_<?php echo $id; ?>").dialog().load("insumos/salidalmacen/<?php echo $id; ?>");
                //alert("click");
            });  
            </script>       
        </td>
    </tr>
<?php endforeach; ?>
</table>
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"><?php
echo $this->Paginator->counter('Mostrando {:current} - {:end}  de {:pages}, total
                                     {:count}');
?></div>
							<div class="right">
                            
                            <?php echo $this->Paginator->prev('<< Anterior',
array(), null, array('class' => 'disabled')); ?>  
                            <?php echo $this->Paginator->numbers(); ?>  
                            <?php echo $this->Paginator->next('Siguiente >>',
array(), null, array('class' => 'disabled')); ?>
								
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
						<h2>Administracion</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
                    <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
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