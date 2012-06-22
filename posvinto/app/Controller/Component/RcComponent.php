<?php
class RcComponent extends Component
{
    function allegedRC4($mensaje, $key)
    {
        //inicializacion de valores
        $x = 0;
        $y = 0;
        $index1 = 0;
        $index2 = 0;
        $MensajeCifrado = "";
        for ($i = 0; $i <= 255; $i++) {
            $state[$i] = $i;
        }

        for ($i = 0; $i <= 256; $i++) {
            $index2 = bcmod((ord($key[$index1]) + $state[$i] + $index2), 256);
            $aux = $state[$i];
            $state[$i] = $state[$index2];
            $state[$index2] = $aux;
            $index1 = bcmod(($index1 + 1), strlen($key));
        }

        for ($i = 0; $i <= (strlen($mensaje) - 1); $i++) {
            $x = bcmod(($x + 1), 256);
            $y = bcmod(($state[$x] + $y), 256);
            $aux = $state[$x];
            $state[$x] = $state[$y];
            $state[$y] = $aux;
            $NMen = (ord($mensaje[$i]) ^ $state[bcmod($state[$x] + $state[$y], 256)]);

            $MensajeCifrado = $MensajeCifrado . "-" . dechex($NMen);
        }

        return $MensajeCifrado;
    }
}