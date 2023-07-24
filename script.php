<?php
// debe ir como primera linea
// en el modo escricto solo va a permitir la conversion de int-float, esta es la excepcion
declare(strict_types=1);

// constructor property promotion
class Producto{

    public function __construct(public $nombre, public $nombreFabricante, public $apeidoFabricante ="", public $precio="")
    {

    }

    public function getInformacionProducto(): string{
        return $this->nombre . "-" . $this->precio . "<br>";
    }

}

// named arguments/ argumentos nombrados
$producto1=new Producto(precio:23.1, nombre:"camisa" ,nombreFabricante:"cesar");
echo $producto1->getInformacionProducto();
// echo "<pre>";
// print_r($producto1);
// echo "</pre>";
// var_dump($producto1);


// function unaFuncion($argumento){
//     if(is_bool($argumento)){
//         echo "soy un booleano";
//     }else{
//         echo "no soy un booleano";
//     }
// }

// $var1="false";
// $var=false;
// unaFuncion($var1);



class Person{
    public $nombre;
    public $edad;
    public $administrador;

    // mixed : acepta cualquier tipo de variable
    // union : int|bool solo acepta enteros o booleanos
    public function __construct(string $nombre, mixed $edad, int|bool $administrador)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->administrador=$administrador;
    }
}

/*falsy valores "",'',"0"=false */

$persona=new Person("daniel",25,5);
var_dump($persona);