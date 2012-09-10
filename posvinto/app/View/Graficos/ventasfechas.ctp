<!-- Container -->
<div id="container">
	<div class="shell">
    <?php if(empty($ventas)): ?>
    <div id="main">
    <div class="cl">&nbsp;</div>
    <div id="content">
    <div class="message"><h3>No exiten datos con esos par&aacute;metros de filtro</h3></div>
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
     
						<h2 class="left">REPORTE DE LAS VENTAS )</h2>                        
						<div class="right">                                                
						</div>    
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
                    <?php //debug($ventas); ?>
					<div class="table">   
                    <div class="tituloh1">Producto Vendidos en fecha (<?php echo $this->Utilidades->fechahoraes($fecha1); ?>) hasta  (<?php echo $this->Utilidades->fechahoraes($fecha2); ?></div>                    
                     <?php
                            $nombres = array();
                            $valores = array();
                            $datos = $ventas;
                            $i=0;
                            $max = 0;
                            foreach($datos as $d){
                                $nombres[$i]=$d['Producto']['nombre'];
                                $valores[$i]=$d['0']['total'];
                                
                                if($d['0']['total'] >= $max){
                                    $max = $d['0']['total'];
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
                        <th>Producto</th>                                                 
                        <th>Cantidad</th>        
                        <th>Precio</th>                     
                    </tr>
                    <?php //echo $this->Utilidades->fec ?>    
<?php 
    $total=0;
    //$preciou=0; 
?>                    
<?php foreach ($ventas as $v): ?>
    <tr>
        <td>                   
            <?php echo $v['Producto']['nombre']; ?>
        </td>         
        <td>
            <?php echo $v['0']['total']; ?>
        </td>
        <td>
            <?php echo $v['0']['precio']; ?> Bs.
            <?php 
                $preciou=$v['0']['precio'];
                $total+=$preciou; 
            ?>
        </td>              
    </tr>
<?php endforeach; ?>
<tr>
                        <th></th>                                                 
                        <th>TOTAL</th>        
                        <th><?php echo $total; ?> Bs.</th>                     
                    </tr>
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