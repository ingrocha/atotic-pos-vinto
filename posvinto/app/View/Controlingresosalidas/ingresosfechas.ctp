<div id="container">
   <div class="shell">
   <!-- Small Nav -->
		<div class="small-nav">
			detalle de pago
		</div>
		<!-- End Small Nav -->
		
		<br />
      <div id="main">
      
         	<div id="content">
				<!-- Box -->
                    <div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Pago del mes</h2>
					</div>
         <div class="table">
         <table>
         <thead>
         <tr>
            <th colspan="4" style="text-align: center;">detalle de pago</th>
         </tr>
            <tr>
               <th>Nombre empleado:</th>
               <th>
               <?php echo $sueldoempleado['Usuario']['nombre'] ?>
               </th>
               <th>Sueldo</th>
               <th>
               <?php echo $sueldoempleado['Contrato']['sueldo'] ?>
               </th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>Total d&iacute;as trabajados</td>
               <td>
               <?php echo $diastrabajados ?>
               </td>
            </tr>
            <tr>
               <td>Total descuentos</td>
               <td>
               <?php echo $descuento ?>
               </td>
            </tr>
            <tr>
               <td>Total pago</td>
               <td>
               <?php echo $pago ?>
               </td>
            </tr>
         </tbody>
         </table>
         </div>
         <?php echo $this->Ajax->link(
'Ver detalle',
array( 'action' => 'verdetalle', $mozo, $fecha1, $fecha2),
array( 'update' => 'carga')
);
?>
         <div class="table" id="carga">
         
         </div>
      </div> 
   </div>
   <?php echo $this->element('menuusuarios') ?>
			
			<div class="cl">&nbsp;</div>
</div>
</div>
</div>
