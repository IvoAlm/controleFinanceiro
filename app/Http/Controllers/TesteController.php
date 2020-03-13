<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Subcategory;

class TesteController
{
    public function oneToOne()
    {
        $subCategoria = new Subcategory;

        echo $subCategoria->find(1);
        echo $subCategoria->find(1)->category;
        die('foi');

    }
}
