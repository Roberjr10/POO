<?php
namespace App\helper;

class VistasHelper
{
    public function vista($vista,$datos){
        //Para ../ para que entre en la carpeta view
        $archivo = "../view/$vista.php";
        require($archivo);

    }
}