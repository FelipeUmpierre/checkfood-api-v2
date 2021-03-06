<?php

namespace App\Repositories;

use App\Models\Opinion;
use Housekeeper\Repository;
use Housekeeper\Action;

class OpinionRepository extends Repository
{
    /**
     * Return the name of model that this repository used.
     *
     * @return string
     */
    protected function model()
    {
        return Opinion::class;
    }

    /**
     * This is just like the constructor.
     */
    public function boot()
    {
        //
    }
}
