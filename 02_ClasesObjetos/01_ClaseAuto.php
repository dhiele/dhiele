<?php

class Vehiculo{
//atributos
public $placa=0;
public $marca="Chevrolet";
public $modelo;
public $kilometraje;
//public $fecha_registro=date("Y-m-d");
public $v=70;
public $t=30;
public $d;



//constructor
public function __construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje,$vrv,$vrt){

    $this ->placa=$vrplaca;
    $this ->marca=$vrmarca;
    $this ->modelo=$vrmodelo;
    $this ->kilometraje=$vrkilometraje;

    $this->v=$vrv;
    $this->t=$vrt;
    //$this->d=$vrd;
    
}

public function getVehiculo(){
    $arrayVehiculo=Array(
        'Placa: ' => $this->placa,
        'Marca: ' => $this->marca,
        'Modelo: ' => $this->modelo,
        'Kilometraje: ' => $this->kilometraje,

    );
    return $arrayVehiculo;
}
public function distancia(){
    $vrd=$this->v * $this->t;
    return $vrd;
}

//metodos

}
?>
