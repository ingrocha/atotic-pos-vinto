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
						<h2 class="left">LISTADO DE INSUMOS EN ALMACEN</h2>                        
						<div class="right">                        
                                            						</div>    
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
					<div class="table">  
                    <?php echo $this->element('tablagrid'); ?>                                    
                	<table id="grid"> 
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>P.Compra</th>
                        <th>P.Venta</th>  
                        <th >Almacen</th> 
                        <!--<th>Observaciones</th>-->
                        <th style="width: 105px;">Acciones</th>     
                    </tr>    
                    </thead>
                    <tbody>
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
            <?php echo $i['Tipo']['nombre']; ?>
        </td>
        <td>
            <?php echo $i['Insumo']['preciocompra']; ?>
        </td>
        <td>
            <?php echo $i['Insumo']['precioventa']; ?>
        </td>
        <td>
            <?php echo $i['Insumo']['total']; ?>
        </td>        
        <!--<td>
            <?php //echo $i['Insumo']['observaciones']; ?>
        </td>-->       
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
                    "title" => "Eliminar Insumo",
                    'url' => array('action' => 'deshabilitar', $id)
                ));
            ?>            
            <?php //echo $this->Html->link('Modificar', array('action' => 'modificar', $id)); ?>
            <?php //echo $this->Html->link('Dara baja', array('action' => 'baja', $id)); ?>
            <?php //echo $this->Html->link('', array('action' => 'baja', $id)); ?>
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id)); ?>    
            <?php //echo $this->Html->link('Eliminar', array('action' => 'eliminar', $id), null, ('Desea aliminar a este insumo?')); ?>
            
            <script type="text/javascript">
            var dialogOpts = {
                modal: true
            };
            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("insumos/ingresoalmacen/<?php echo $id; ?>");
                //alert("click");
            });   
            
            jQuery("#dialog2_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro2_<?php echo $id; ?>").dialog(dialogOpts).load("insumos/salidalmacen/<?php echo $id; ?>");
                //alert("click");
            });  
            </script>       
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
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
                    
                    <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php //echo $this->Html->link("<span>Registrar Salida</span>", array('action'=>'salidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <div class="cl">&nbsp;</div>
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Categorias Almacen</span>", array('action'=>'categoriasalmacen'), array('class'=>"add-button", 'escape' => FALSE)); ?>
                    <div class="cl">&nbsp;</div>
                    <?php echo $this->Html->link("<span>Nueva Categoria</span>", array('action'=>'nuevacategoria'), array('class'=>"add-button", 'escape' => FALSE)); ?>
					<div class="cl">&nbsp;</div>																		
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->