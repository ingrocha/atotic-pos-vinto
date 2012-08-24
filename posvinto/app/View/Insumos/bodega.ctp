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
        <th style="width: 90px;">$.Compra</th>
        <th style="width: 90px;">$.Venta</th>  
        <th style="width: 90px;">Bodega</th> 
        <th style="width: 90px;">Almacen</th>
        <th>Salidas</th>
        <th style="width: 92px;">Total</th>
        <!--<th>Observaciones</th>
        <th>Acciones</th>-->     
    </tr>
    </table>
    <div id="muestrabodega">
    <div style="width:740px; height:300px; overflow:auto;">
    <table cellspacing="0" cellpadding="1" width="740">
    <?php $c=1; ?>
    <?php foreach ($bodega as $i): ?>
    <tr <?php echo fmod($c,2)?"class='mifila'":""; ?>>
        <td style="width: 280px;">
            <?php $id = $i['Insumo']['id']; ?>            
            <?php echo $i['Insumo']['nombre']; ?>
        </td>
        <div id="cuadro_<?php echo $id; ?>" title="Ingreso de  insumos">
        </div> 
        <div id="cuadro2_<?php echo $id; ?>" title="Salida de insumos">
        </div> 
        <td style="width: 92px;">
            <?php echo $i['Insumo']['preciocompra']; ?>
        </td>
        <td style="width: 92px;">
            <?php echo $i['Insumo']['precioventa']; ?>
        </td>
        <td style="width: 92px;">
            <?php echo $i['Bodega']['total']; ?>
        </td> 
        <td style="width: 92px;">
            <?php echo $i['Insumo']['total']; ?>
        </td>
        <td>
            <?php echo $i['Bodega']['salida']; ?>
        </td>
        <td style="width: 92px;">
            <?php 
                $almacen = $i['Insumo']['total']; 
                $bodega = $i['Bodega']['total'];
                echo $almacen+$bodega;
            ?>
        </td>       
        <!--<td>
            <?php //echo $i['Insumo']['observaciones']; ?>
        </td>       
        <td>
            <?php 
                /*echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'modificar', $id)
                ));*/
            ?>
            <div id="dialog_<?php echo $id; ?>" style="float: left;">
            <?php 
                //echo $this->Html->image("in.png", array("title" => "Ingreso Almacen"));
            ?>
            </div>            
            <div id="dialog2_<?php echo $id; ?>" style="float: left;">
            <?php 
                /*echo $this->Html->image("out.png", array(
                    "title" => "Salida Almacen"                    
                ));*+
            ?>
            </div>            
            <?php 
                /*echo $this->Html->image("elim.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'modificar', $id)
                ));*/
            ?>        
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
        </td>-->
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
                    <?php echo $this->Html->link("<span>Nuevo Insumo</span>", array('action'=>'nuevo'), array('class'=>"add-button", 'escape' => FALSE)); ?>      						
                    <?php echo $this->Html->link("<span>Registrar Salida</span>", array('action'=>'salidas'), array('class'=>"add-button", 'escape' => FALSE)); ?>
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