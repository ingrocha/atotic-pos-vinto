<?php

class FechasconvertComponent extends Component
{

    function Fechasconverter()
    {
        
    }
    
    public function doFechaInvertida($fecha){
        
        $arreglo_cadena = explode("-", $fecha);
        $arreglo = $arreglo_cadena[2] .'-'. $arreglo_cadena[0] . '-' . $arreglo_cadena[1];        
        return($arreglo);
    }
    
    public function doFechaPago($fecha){
        $arreglo_cadena = explode("/", $fecha);

        $arreglo = date('Y'). '-' . $arreglo_cadena[1] . '-' . $arreglo_cadena[0];
        
        return($arreglo);
    }
    
    public function doRevertFechaPago($fecha){
        $arreglo_cadena = explode("-", $fecha);

        $arreglo = $arreglo_cadena[2] . '/' . $arreglo_cadena[1];
        //debug($arreglo);
        return($arreglo);
    }
     public function doInvertir($fecha){
        $arreglo_cadena = explode("-", $fecha);

        $arreglo = $arreglo_cadena[2] . '-' . $arreglo_cadena[1].'-'.$arreglo_cadena[0];
        //debug($arreglo);
        return($arreglo);
    }
    public function doFormatfecha($fecha)
    {
        //debug($fecha);exit;
        $arreglo_cadena = explode("/", $fecha);

        $arreglo = $arreglo_cadena[2] . '-' . $arreglo_cadena[1] . '-' . $arreglo_cadena[0];

        return($arreglo);
    }
    
    
    public function doRevert($fecha)
    {

        $arreglo_cadena = explode("-", $fecha);
        
        $arreglo = $arreglo_cadena[2] . '/' . $arreglo_cadena[1] . '/' . $arreglo_cadena[0];
        //debug($arreglo);
        return($arreglo);
    }

    public function showDate($fecha)
    {
        $arreglo_cadena = explode("-", $fecha);
        $arreglo = $arreglo_cadena[2] . '/' . $arreglo_cadena[1] . '/' . $arreglo_cadena[0];
        return($arreglo);
    }

    /**
     * Funcion que formatea la fecha 23/03/1995 a 1995-03-23
     *
     * @param date $fecha fecha 23/03/1995
     * @return fecha en formato 1995-03-23
     */
    public function doCambiaFormato($fecha)
    {

        $arregloCadena = explode("/", $fecha);
        //debug($arregloCadena);
        $arreglo = $arregloCadena[2] . '-' . $arregloCadena[1] . '-' . $arregloCadena[0];

        return($arreglo);
    }

     /**
     * Funcion que formatea la fecha 23/03/1995 a 19950323
     *
     * @param date $fecha fecha 23/03/1995
     * @return fecha en formato 1995-03-23
     */
    public function doFechaPass($fecha)
    {

        $arregloCadena = explode("/", $fecha);
        //debug($arregloCadena);
        $arreglo = $arregloCadena[2].$arregloCadena[1].$arregloCadena[0];

        return($arreglo);
    }
    public function doUsuarioPass($usuario){
        $arregloCadena = explode(" ", $usuario);
        //debug($arregloCadena);
        foreach($arregloCadena as $cadena){
            $arreglo .= $cadena; 
        }
        return($arreglo);
    }
    public function doNumeroFactura($numero){
        $cantidad = strlen($numero);
        switch($cantidad){
            case 1: $arreglo = '0000000'.$numero;
            break;
            case 2: $arreglo = '000000'.$numero;
            break;
            case 3: $arreglo = '00000'.$numero;
            break;
            case 4: $arreglo = '0000'.$numero;
            break;
            case 5: $arreglo = '000'.$numero;
            break;
            case 6: $arreglo = '00'.$numero;
            break;
            case 7: $arreglo = '0'.$numero;
            break;
            case 8: $arreglo = $numero;
            break;
            default:$arreglo = $numero;
            break; 
        }
        return($arreglo);
    }
}

?>
