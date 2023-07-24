<?php

class ejemploStatic{
    
    public const DISPONIBLE=10;
    public static int $aNum=0;
    public static function hola() : void{
        echo "hola mundo comunidad <br>";
    }



}

echo ejemploStatic::$aNum . "<br>";
echo ejemploStatic::DISPONIBLE. "<br>";
ejemploStatic::hola();


class static2{
    public static int $numero=5;
    public static function hola() : void{
        echo "hola numero " . self::$numero;

    }
}

static2::hola();