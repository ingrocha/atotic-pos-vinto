<?php //debug($prod); ?>
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
                        <th style="width: 300px;">Nombre</th>
                        <th style="width: 120px;">Categoria</th>                         
                        <th style="width: 60px;">Visible</th>                       
                        <th>Acciones</th>     
                    </tr>    
                    </table>
<?php //comienzo de mostrar los datos ?>    
<div id="muestra">                
<div style="width:740px; height:300px; overflow:auto;">
<table>
<?php foreach ($prod as $p): ?>
<?php $id = $p['Producto']['id']; ?> 
    <div id="cuadro_<?php echo $id; ?>" title="Insumo al Menu">
        </div> 
    <tr>
        <td style="width: 300px;">
                       
            <?php echo $p['Producto']['nombre']; ?>
        </td>
        <td style="width: 120px;">
            <?php echo $p['Categoria']['nombre']; ?>
        </td>       
        <td style="width: 60px;">
        <?php if($p['Producto']['estado']): ?>        
            <?php echo $this->Html->image('muestra.png'); ?>
        <?php else: ?>
            <?php echo $this->Html->image('elim.png'); ?>
        <?php endif; ?>    
        </td>                    
        <td>                       
           <div id="dialog_<?php echo $id; ?>" style="float: left;">
            <?php 
                echo $this->Html->image("menu.png", array("title" => "Ingreso Almacen"));
            ?>
            </div>
            <script type="text/javascript">
            var dialogOpts = {
                modal: true
            };
            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro_<?php echo $id; ?>").dialog(dialogOpts).load("ajaxprodmenu/<?php echo $id; ?>");                //alert("click");
            }); 
            </script>    
        </td>
    </tr>
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
						<?php echo $this->element("menucarta"); ?>
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->