<?php 
class ManejofechasComponent extends Component{
   // Calcula el numero de dias entre dos fechas.
   // Da igual el formato de las fechas (dd-mm-aaaa o aaaa-mm-dd), 
   // pero el caracter separador debe ser un gui�n.
   function diasEntreFechas($fechainicio, $fechafin){
    return ((strtotime($fechafin)-strtotime($fechainicio))/86400);
   }
}
 ?>