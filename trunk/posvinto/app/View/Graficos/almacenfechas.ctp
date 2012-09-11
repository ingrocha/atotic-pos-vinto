<!-- Container -->
<div id="container">
	<div class="shell">
    <?php if(empty($insumos)): ?>
    <div id="main">
    <div class="cl">&nbsp;</div>
    <div id="content">
    <div class="message"><h3>No exiten datos el dia de hoy</h3></div>
    </div>
       
    </div>
    
    <?php else: ?>		
		<!-- Small Nav -->
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
                        <?php $hoy=date('Y-m-d'); ?>
						<h2 class="left">REPORTE DE INSUMOS (<?php echo $this->Utilidades->fechaes($hoy); ?>) </h2>                        
						<div class="right">                                                
						</div>    
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
                    <?php //debug($ventas); ?>
					<div class="table">   
                    <div class="tituloh1">Movimientos de insumos</div>                    
                     <?php
                            $nombres = array();
                            $valores = array();
                            $datos = $insumos;
                            $i=0;
                            $max = 0;
                            foreach($datos as $d){
                                $nombres[$i]=$d['Insumo']['nombre'];
                                $valores[$i]=$d['0']['salidas'];
                                
                                if($d['0']['salidas'] >= $max){
                                    $max = $d['0']['salidas'];
                                }
                                $i++;        
                            }
                            //echo 'El maximo es '.$max;
                            //debug($nombres);                                                 
                            echo $this->FlashChart->begin();
                                          
                            $this->FlashChart->axis('y',array('range' => array(0, $max, 10)));  
                            $this->FlashChart->axis('x',array('labels'=>$nombres),array('colour'=>'#aaFF33', 'vertical'=>true));
                            $this->FlashChart->setData($valores);
                            
                            echo $this->FlashChart->chart('bar_3d', array('colour'=>'#BA4C32'));                  
                            echo $this->FlashChart->render(720,360);         
                            //echo $this->FlashChart->setData(array(1,3,2,4),'{n}',false,'stuff','chart2');
                            echo $this->FlashChart->chart('line',array(),'stuff','chart2');      
                            echo $this->FlashChart->render(400,400,'chart2','chartDomId');
                    ?>                 
                	<table style="width: 100%;"> 
                    <tr>                                                
                        <th>Insumo</th>        
                        <th>Ingresos</th>
                        <th>salidas</th> 
                        <th>Total en almacen</th>                    
                    </tr>
                    <?php //echo $this->Utilidades->fec ?>    
<?php 
    $total=0;
    //$preciou=0; 
?>                    
<?php foreach ($insumos as $v): ?>
    <tr>
        <td>                   
            <?php echo $v['Insumo']['nombre']; ?>
        </td>         
        <td>
            <?php echo $v['0']['ingresos']; ?>
        </td>
        <td>
            <?php echo $v['0']['salidas']; ?>
        </td>              
        <td>
        <?php 
                $total=$v['0']['ingresos'] - $v['0']['salidas'];
                echo $total; 
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>

</div>
<?php //fin de mostrar los datos ?>
</div>
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
                <?php endif; ?>								
			</div>
			<!-- End Content -->			
			<?php echo $this->element('menureportes') ?>
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->