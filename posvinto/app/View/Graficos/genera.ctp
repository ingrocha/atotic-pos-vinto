<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<!--<a href="controlingresos">Pedidos</a>-->
            <?php echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
			<span>&gt;</span>
			Registro de usuarios
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
						<h2 class="left">REPORTES GRAFICOS</h2>						
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
					<div class="table">
                    <p>&nbsp;</p>
                    REPORTE GRAFICO
                    <p>&nbsp;</p>
 <?php
        srand((double)microtime()*1000000);
        $data = array();
        for( $i=0; $i<9; $i++ )
        $data[] = rand(2,9);
        //debug($data);
        
        echo $this->FlashChart->begin();
        //$this->FlashChart->setTitle('REPORTE GRAFICO');                
        //echo $javascript->link('prototype');                
        $this->FlashChart->axis('y',array('range' => array(0, 10, 10)));    
        //$this->FlashChart->setStackColours(array('#0000ff','#ff0000','#00FF00'));         
        //$this->FlashChart->setStackColours(array('#BA4C32'));
        //$this->FlashChart->setColour('#BA4C32');
        //$this->FlashChart->chart('line',array('colour'=>'green'),'Apples');
        $this->FlashChart->setData($data);
        echo $this->FlashChart->chart('bar_3d', array('colour'=>'#BA4C32'));                  
        echo $this->FlashChart->render(720,360);         
        echo $this->FlashChart->setData(array(1,3,2,4),'{n}',false,'stuff','chart2');
        echo $this->FlashChart->chart('line',array(),'stuff','chart2');      
        echo $this->FlashChart->render(400,400,'chart2','chartDomId');
?>
<div style="clear: both;"></div>												
						<!-- Pagging -->					
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
                    <?php //echo $this->Html->link('Nuevo Usuario', 'nuevo'); ?> 
						<a href="http://localhost/posvinto/posvinto/clientes/nuevo" class="add-button"><span>Nuevo Usuario</span></a>
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
		</div>
		<!-- Main -->
	</div>