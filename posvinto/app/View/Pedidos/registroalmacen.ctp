
   
<!-- Content -->
			<div id="content">				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						 <h2>registre lo que est&aacute; sacando de almacen</h2>                       
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
                        <th style="color: green;">Nombre</th>
                        <th style="color: green;">Categoria</th>  
                        <th style="color: green;">Almacen</th> 
                        <!--<th>Observaciones</th>-->
                        <th style="width: 105px; color: green;">Sacar</th>     
                    </tr>    
                    </thead>
                    <tbody>
<?php foreach ($insumos as $i): ?>
    <tr>
        <td style="color: black;">
            <?php $id = $i['Insumo']['id']; ?>            
            <?php echo $i['Insumo']['nombre']; ?>
        </td>
        <div id="cuadro_<?php echo $id; ?>" title="Ingreso de  insumos">
        </div> 
        <div id="cuadro2_<?php echo $id; ?>" title="Salida de insumos">
        </div> 
        <td style="color: black;">
            <?php echo $i['Tipo']['nombre']; ?>
        </td>
        <td style="color: black;">
            <?php echo $i['Insumo']['total']; ?>
        </td>        
        <!--<td>
            <?php //echo $i['Insumo']['observaciones']; ?>
        </td>-->       
        <td>
                        
            <div id="dialog2_<?php echo $id; ?>" style="float: left;">
            <?php 
                echo $this->Html->image("out.png", array(
                    "title" => "Salida Almacen"                    
                ));
            ?>            
            </div>                        
            <?php //echo $this->Html->link('Modificar', array('action' => 'modificar', $id)); ?>
            <?php //echo $this->Html->link('Dara baja', array('action' => 'baja', $id)); ?>
            <?php //echo $this->Html->link('', array('action' => 'baja', $id)); ?>
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id)); ?>    
            <?php //echo $this->Html->link('Eliminar', array('action' => 'eliminar', $id), null, ('Desea aliminar a este insumo?')); ?>
            
            <script type="text/javascript">
            var dialogOpts = {
                modal: true
            };
            
            
            jQuery("#dialog2_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro2_<?php echo $id; ?>").dialog(dialogOpts).load("http://localhost/posvinto/posvinto/Pedidos/salidalmacen/<?php echo $id; ?>/<?php echo $mozo;?>");
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