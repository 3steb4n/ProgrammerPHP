<?php
class misVariables{

    var $arreglo1;

    public function __construct($nombrePersona, $apellidoPersona, $edad, $estatura, $peso){
        $this->nombrePersona1 = $nombrePersona;
        $this->apellidoPersona1 = $apellidoPersona; 
        $this->edad = $edad;
        $this->estatura = $estatura; 
        $this->peso = $peso;
        $this->arreglo1 = [ //Array con propiedades
                "informacionFisica" =>[
                    "edad" => $this->edad, 
                    "estatura" => $this->estatura, 
                    "peso" => $this->peso
                ],
        ];
    }

    public function retornarSuma($sumUno, $sumDos){
        return $sumUno + $sumDos;
    }

    public function retornarResta($restUno, $restDos){
        return $restDos - $restDos;
    }

    public function retornarMultiplicacion($mulUno, $mulDos){
        return $mulUno * $mulDos;
    }

    public function retornarDivision($divUno, $divDos){
        return $divUno / $divDos;
    }

    public function numeroParImpar($numero){
        $extraerResiduo = $numero % 2;

        if($extraerResiduo == 0){
            return "Numero par";
        }else{
            return "Numero impar";
        }
    }

    public function informacionPersona(){
        return "Bienvenido, {$this->nombrePersona1}" . " " .  "{$this->apellidoPersona1}. Como se encuetra el dia de hoy?";
    }

    public function arrayPropiedades(){
        $raa = $this->arreglo1;
        return $raa;
    }
}
?>