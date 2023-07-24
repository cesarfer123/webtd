<?php
// paso por referencia (&) - no hace una copia de la variable
function funcion($string){

    $string="hola mundo " . $string  ."<br>";
    return $string;
} 

$string="muñeco";
echo funcion($string);
echo $string . "<br>";


function funcion2($objeto){
     $objeto->propiedad++ ."<br>";
    // return $objeto;
}

$x=new stdClass();
$x->propiedad=1;
funcion2($x);
echo $x->propiedad;;

echo "<pre>";
print_r($x);

