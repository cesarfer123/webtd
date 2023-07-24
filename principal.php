<?php

class Producto{
    public $nombre;
    public $nombreFabricante;
    public $apeidoabricante;
    protected $precio;
    public $descuento;
    public function __construct(string $nombre, string $nombreFabricante, string $apeidoabricante, float $precio)
    {
        $this->nombre=$nombre;
        $this->nombreFabricante=$nombreFabricante;
        $this->apeidoabricante=$apeidoabricante;
        $this->precio=$precio;
        $this->descuento=0;
    }

    public function getProductor() : string{
        return $this->nombreFabricante . " " . $this->apeidoabricante;
    }

    public function getLineaFactura() : string {
        $linea="{$this->nombre} - {$this->nombreFabricante}, {$this->apeidoabricante}";
        return $linea;
    }

    public function setDescuento($descuento) : void{
        $this->descuento=$descuento;
    }
    
    public function getPrice() : float{
        $precioDescuento=$this->precio-$this->descuento;
        return $precioDescuento; 
    }

}

/* override - overrides - sobreescritura */
class Libro extends Producto{

    public $numeroPaginas;

    public function __construct(string $nombre, string $nombreFabricante, string $apeidoabricante, float $precio, int $numeroPaginas)
    {
        parent::__construct($nombre,$nombreFabricante,$apeidoabricante,$precio);
        $this->numeroPaginas=$numeroPaginas;
    }

    public function getNumeroPaginas(): int{
        return $this->numeroPaginas;
    }
    /**@verrides */
    public function getLineaFactura(): string
    {
        $padre=parent::getLineaFactura(); //traeme lo que retorne el metodo getlineafactura() de la clase padre.
        $linea= $padre . " : numero paginas - {$this->numeroPaginas}";
        return $linea;
    }
    // overrides
    public function getPrice(): float
    {
        return $this->precio;
    }
}

class Electronica extends Producto{

    public $voltaje;

    public function __construct(string $nombre, string $nombreFabricante, string $apeidoabricante, float $precio, float $voltaje)
    {
        parent::__construct($nombre,$nombreFabricante,$apeidoabricante,$precio);
        $this->voltaje=$voltaje;
    }

    public function getVoltaje() : float
    {
        return $this->voltaje;
    }

    public function getLineaFactura(): string
    {
        $linea=parent::getLineaFactura() . " : voltaje -{$this->voltaje}";
        return $linea;
    }
}

class ProductoPrinter{

    public function imprimirProducto(Producto $producto){
        /*
         * instanceof da true si el objeto en el operando de la izquierda es del
         * tipo representado por el operando de la derecha 
         */

        //  if(!$producto instanceof Electronica && !$producto instanceof Libro){
        //     die("$producto debe ser tipo Electronica o Libro");
        //  }

        //  $mensaje=$producto->nombre . ": " . $producto->nombreFabricante . " " . $producto->precio;
        //  return $mensaje;
    }   
}

// $producto1=new Producto("Mouse", "cesar","chero",20.00);
// echo $producto1->getLineaFactura();



$laptop=new Electronica("laptop gris", "juan", "Perez", 1000, 3.5);
$laptop->setDescuento(10);
echo "<pre>";
print_r($laptop->getPrice());
echo "</pre>";
// $printer=new ProductoPrinter();
// $variable= $printer->imprimirProducto($laptop);
$libro=new Libro("la vida estresada", "juan", "revilla", 23.6, 250);
// var_dump($variable);
echo "<pre>";
print_r($libro->getPrice());
echo "</pre>";