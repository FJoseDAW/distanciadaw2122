<?php
/**
  *  @author FJose
  *  @version 1.0
*/

  /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }

$suma = suma (24,42);
echo $suma;

$suma2 = suma (245,42);
echo $suma2;

$suma3 = suma (245,425);
echo $suma3;

?>