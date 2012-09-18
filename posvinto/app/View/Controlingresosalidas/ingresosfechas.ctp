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
               <td>Pago correspondiente</td>
               <td>
               <?php echo $pagar ?>
               </td>
            </tr>
            <tr>
            <td colspan="3">Total descuentos</td>
               <td>
               <?php echo $descuento ?>
               </td>
            </tr>
            <tr>
            <?php if($pago <=0): ?>
               <td colspan="3" style="background-color: red;">Deuda</td>
               <td style="background-color: red;">
               <?php 
               $name=substr($pago,1);
                echo $name;
               ?>
               </td>
            <?php else: ?>
            <td colspan="3">Total a cancelar</td>
               <td>
               <?php echo $pago ?>
               </td>
            <?php endif; ?>
            </tr>
         </tbody>
         </table>
         </div>
         <div class="cl">&nbsp;</div>
         <div class="ayuda">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $this->Html->link($this->Html->image("menu.png", array("title" =>
                    "ver detalle asistencias")), array(
                'action' => 'verdetalle',$mozo, $fecha1, $fecha2
                ), array('escape' => false));?>
                Ver detalle asistencias
         </div>
         <div class="cl">&nbsp;</div>
      </div> 
   </div>
   <?php echo $this->element('menuusuarios') ?>
   <div class="cl">&nbsp;</div>
</div>
</div>
</div>
