<?php

namespace App\Repositories;

use App\Models\ProductIngredient;
use Housekeeper\Repository;
use Housekeeper\Action;

class ProductIngredientRepository extends Repository
{
    /**
     * Return the name of model that this repository used.
     *
     * @return string
     */
    protected function model()
    {
        return ProductIngredient::class;
    }

    /**
     * This is just like the constructor.
     */
    public function boot()
    {
        //
    }
}
