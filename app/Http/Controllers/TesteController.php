<?php


namespace App\Http\Controllers;


use App\Category;
use App\Subcategory;

class TesteController
{
    public function oneToOne()
    {
        $subCategoria = new Category;
        echo $subCategoria->subcategory()->find(1);
        echo $subCategoria;
    }
}
