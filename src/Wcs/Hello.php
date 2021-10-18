<?php
namespace App\Wcs;

class Hello
{
    // Si je met un : string sur la méthode, j'obtiens l'erreur "Return value must be of the type string, none returned". Une idée ?
    public function talk(): string
    {
        return "Hello World!";
    }
}