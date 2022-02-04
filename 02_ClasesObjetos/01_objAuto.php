<?php

require_once ("01_ClaseAuto.php");


$objVehiculo=new Vehiculo("MCN-930","mazda",2020,45500, 70,30);
$objVehiculo->getVehiculo();



/*print_r('<pre>');
print_r($objVehiculo);
print_r('</pre>');*/

echo "<br>";
echo $objVehiculo->marca;
echo "<br>";
echo "$la distancia recorrida es: ".$objVehiculo->distancia();


?>
