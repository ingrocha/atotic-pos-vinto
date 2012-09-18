<div class="boxa">

<div class="table">
         <table>
            <thead>
               <tr>
                  <th colspan="3" style="text-align: center;">Detalle de asistencias</th>
               </tr>
               <tr>
                  <th>D&iacute;a</th>
                  <th>Hora ingreso</th>
                  <th>Hora salida</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach($ingresos as $asistencia): ?>
                  <tr>
                     <td>
                     <?php echo $asistencia['Asistencia']['fecha'] ?>
                     </td>
                     <td>
                     <?php echo $asistencia['Asistencia']['horaingreso'] ?>
                     </td>
                     <td>
                     <?php echo $asistencia['Asistencia']['horasalida'] ?>
                     </td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
         </div>
         <div class="table">
         <table>
            <thead>
               <tr>
                  <th colspan="3" style="text-align: center;">Detalle de retrasos</th>
               </tr>
               <tr>
                  <th>D&iacute;a</th>
                  <th>Hora ingreso</th>
                  <th>Total descuento</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach($retrasos as $retraso): ?>
                  <tr>
                     <td>
                     <?php echo $retraso['Retraso']['fecha'] ?>
                     </td>
                     <td>
                     <?php echo $retraso['Retraso']['horas']?>:<?php echo $retraso['Retraso']['minutos'] ?>
                     </td>
                     <td>
                     <?php echo $retraso['Retraso']['descuento'] ?>
                     </td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
         </div>
</div>