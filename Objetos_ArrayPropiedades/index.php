<?php

require 'Objetos_ArrayConPropiedades.php';

$claseObjetos = new misVariables("Juan", "Gomez", 19, 1.85, "75kg");

$obtenerResultados = [
    $claseObjetos -> retornarSuma(5, 4),
    $claseObjetos -> retornarResta(10, 20),
    $claseObjetos -> retornarDivision(10, 5),
    $claseObjetos -> retornarMultiplicacion(4, 10),
    $claseObjetos -> numeroParImpar(8),
    $claseObjetos -> informacionPersona(),
    $claseObjetos -> arrayPropiedades()
];

print_r($obtenerResultados);


?>